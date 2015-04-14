<?php

namespace Spinen\ConnectWise\Generator\Processors;

use Illuminate\Filesystem\Filesystem;
use InvalidArgumentException;
use ReflectionClass;
use ReflectionMethod;
use Spinen\ConnectWise\Library\Support\ClassReflector;
use Spinen\ConnectWise\Library\Contracts\Processor;

/**
 * Class AddTypeHints
 *
 * @package Spinen\ConnectWise\Generator\Processors
 */
class AddTypeHints implements Processor
{

    /**
     * @var GetClassName
     */
    private $class_name_getter;

    /**
     * @var string
     */
    private $current_function = null;

    /**
     * @var string
     */
    private $existing_type_hint = null;

    /**
     * @var Filesystem
     */
    private $files;

    /**
     * @var bool
     */
    private $found_function = false;

    /**
     * @var ClassReflector
     */
    private $reflector;

    /**
     * @param ClassReflector $reflector
     * @param Filesystem     $files
     * @param GetClassName   $class_name_getter
     */
    function __construct(
        ClassReflector $reflector,
        Filesystem $files,
        GetClassName $class_name_getter
    ) {
        $this->class_name_getter = $class_name_getter;
        $this->files = $files;
        $this->reflector = $reflector;
    }

    /**
     * Appends the type hint if on a variable
     *
     * @param array  $method_type_hints
     * @param string $token_name
     * @param string $token
     *
     * @return string
     */
    private function appendTypeHintIfOnVariable(array $method_type_hints, $token_name, $token)
    {
        if (($this->haveFunctionName()) &&
            ('T_VARIABLE' === $token_name) &&
            (array_key_exists($this->current_function, $method_type_hints)) &&
            (array_key_exists($token, $method_type_hints[$this->current_function])) &&
            ($this->existing_type_hint !== $method_type_hints[$this->current_function][$token])
        ) {
            $token = $method_type_hints[$this->current_function][$token] . ' ' . $token;
        }

        return $token;
    }

    /**
     * Loop through the methods on a class & get the properties from the doc blocks
     *
     * @param ReflectionClass $class
     *
     * @return array
     */
    private function extractTypeHints(ReflectionClass $class)
    {
        $method_type_hints = [];

        foreach ($class->getMethods() as $method) {
            $method_type_hints = array_merge($method_type_hints, $this->pullNonScalarPropertiesFromDocBlock($method));
        }

        // Filter out any empty values
        return array_filter($method_type_hints);
    }

    /**
     * Finds the current function name
     *
     * @param string $token_name
     * @param string $token
     *
     * @return string|null
     */
    private function foundCurrentFunctionName($token_name, $token)
    {
        if ($this->haveFunctionName()) {
            return $this->current_function;
        }

        if (($this->found_function) && ('T_STRING' === $token_name)) {
            return $token;
        }

        return null;
    }

    /**
     * Checks to see if we are at the end of the method
     *
     * @param string $token
     *
     * @return bool
     */
    private function foundEndOfMethod($token)
    {
        return (($this->haveFunctionName()) && (')' === $token));
    }

    /**
     * Finds the next type hint part
     *
     * @param string $token_name
     * @param string $token
     *
     * @return string|null
     */
    private function foundExistingTypeHintPart($token_name, $token)
    {
        $type_hint_tokens = [
            'T_ARRAY',
            'T_CLASS',
            'T_NS_SEPARATOR',
            'T_STRING',
        ];

        if (!$this->haveFunctionName()) {
            return $this->existing_type_hint;
        }

        if (in_array($token_name, $type_hint_tokens)) {
            return $this->existing_type_hint . $token;
        }

        return $this->existing_type_hint;
    }

    /**
     * Check to see if we found a function
     *
     * @param string $token_name
     *
     * @return bool
     */
    private function foundFunction($token_name)
    {
        return (($this->found_function) || ('T_FUNCTION' === $token_name));
    }

    /**
     * Look for markers that mean that we have no need to keep up with a found type hint
     *
     * @param string $token_name
     * @param string $token
     *
     * @return bool
     */
    private function foundTypHintReseter($token_name, $token)
    {
        $token_reseters = [
            ')',
            ',',
        ];

        return (('T_VARIABLE' === $token_name) || (in_array($token, $token_reseters)));
    }

    /**
     * Check to see if we have found a function
     *
     * @return string
     */
    private function haveFunctionName()
    {
        return ($this->current_function);
    }

    /**
     * Run through the properties with types from the doc block & add them to the methods as type hints
     *
     * @param string $contents
     * @param array  $method_type_hints
     *
     * @return string
     */
    private function mergeInTypeHints($contents, array $method_type_hints)
    {
        $tokens = token_get_all($contents);

        $contents = null;

        foreach ($tokens as $token) {
            if (is_array($token)) {
                list($token_index, $token, $line_number) = array_pad($token, 3, null);

                $token_name = token_name($token_index);

                $this->found_function = $this->foundFunction($token_name);

                $this->existing_type_hint = $this->foundExistingTypeHintPart($token_name, $token);

                $this->current_function = $this->foundCurrentFunctionName($token_name, $token);

                $token = $this->appendTypeHintIfOnVariable($method_type_hints, $token_name, $token);
            }

            if ($this->foundTypHintReseter($token_name, $token)) {
                // No need to keep tracking the type hint as we have hit something that resets it
                $this->existing_type_hint = null;
            }

            if ($this->foundEndOfMethod($token)) {
                // Reset the statuses since we have finished that method
                $this->found_function = false;
                $this->current_function = null;
            }

            // Keep building the code
            $contents .= $token;

            // Reset for next pass in case token is not an array
            $token_index = $line_number = $token_name = null;
        }

        return $contents;
    }

    /**
     * Pull the param's out to an array with the property as the index
     *
     * @param ReflectionMethod $method
     *
     * @return array
     *
     */
    private function pullNonScalarPropertiesFromDocBlock(ReflectionMethod $method)
    {
        // They seem to use a few different was to doc the types
        $scalars = [
            'bool',
            'boolean',
            'float',
            'int',
            'integer',
            'string',
        ];

        $comment = (array)explode("\n", $method->getDocComment());

        // Get lines that have a @param
        $comment = array_filter($comment, function ($line) {
            return preg_match("/^\\s*\\*\\s+@param\\s+[^\\s]+\\s+\\$[^\\s]+/u", $line);
        });

        // Pull out the parameter,type
        $comment = array_map(function ($line) {
            return preg_replace("/^\\s*\\*\\s+@param\\s+([^\\s]+)\\s+(\\$[^\\s]+).*/u", "$2,$1", $line);
        }, $comment);

        // Filter off the ArrayOf<Somethings>
        $comment = array_filter($comment, function ($line) {
            return !preg_match("/^[^,]+,ArrayOf[A-Z].*/u", $line);
        });

        // Replace the <Object>[] with array, so that the type hint will be array
        $comment = array_map(function ($line) {
            return preg_replace("/^(\\$[^,]+,)[^\\[]+\\[\\]/u", "$1array", $line);
        }, $comment);

        $properties = [];

        // Build associative array of parameter=>type
        foreach ($comment as $param) {
            list($parameter, $type) = explode(",", $param);

            if (!in_array($type, $scalars)) {
                $properties[$method->getName()][$parameter] = $type;
            }
        }

        return $properties;
    }

    /**
     * @param string $file
     *
     * @return int|void
     * @throws InvalidArgumentException
     * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
     */
    public function process($file)
    {
        if (!is_string($file)) {
            throw new InvalidArgumentException("process expects a string to work with.");
        }

        $contents = $this->files->get($file);

        $class = $this->reflectClass(explode("\n", $contents));

        $method_type_hints = $this->extractTypeHints($class);

        if (count($method_type_hints)) {
            return $this->files->put($file, $this->mergeInTypeHints($contents, $method_type_hints));
        }

        return;
    }

    /**
     * Reflect on the class from it's contents
     *
     * @param array $contents
     *
     * @return ReflectionClass
     * @throws InvalidArgumentException
     *
     */
    private function reflectClass(array $contents)
    {
        return $this->reflector->reflect($this->class_name_getter->process($contents));
    }

}
