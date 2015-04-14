<?php

namespace Spinen\ConnectWise\Generator\Processors;

use InvalidArgumentException;
use ReflectionMethod;
use Spinen\ConnectWise\Library\Support\ClassReflector;
use Spinen\ConnectWise\Library\Contracts\Processor;

/**
 * Class ExtractSignatures
 *
 * @package Spinen\ConnectWise\Generator\Processors
 */
class ExtractSignatures implements Processor
{

    /**
     * @var GetClassName
     */
    private $class_name_getter;

    /**
     * @var DecipherDocBlock
     */
    protected $decipher;

    /**
     * @var ClassReflector
     */
    protected $reflector;


    /**
     * @param ClassReflector   $reflector
     * @param DecipherDocBlock $decipher
     * @param GetClassName     $class_name_getter
     */
    public function __construct(
        ClassReflector $reflector,
        DecipherDocBlock $decipher,
        GetClassName $class_name_getter
    ) {
        $this->class_name_getter = $class_name_getter;
        $this->decipher = $decipher;
        $this->reflector = $reflector;
    }

    /**
     * Pull the public methods out of a class
     *
     * Optionally, don't get the inherited methods (default), and mask out the magic methods (default)
     *
     * @param string $fqcn
     *
     * @return array
     */
    private function extractPublicMethods($fqcn)
    {
        $class = $this->reflector->reflect($fqcn);

        $methods = $class->getMethods(ReflectionMethod::IS_PUBLIC);

        $class = $class->getShortName();

        // Filter out inherited methods && magic methods
        $methods = array_filter($methods, function ($method) use ($fqcn) {
            return ($method->class === $fqcn) && (substr($method->name, 0, 2) != '__');
        });

        $signature_methods = [];

        foreach ($methods as $method) {
            $signature_methods[lcfirst($class) . ucfirst($method->name)] = [
                'class'  => $class,
                'method' => $method->name,
                'doc'    => $this->decipher->process($method->getDocComment()),
            ];
        }

        return $signature_methods;
    }

    /**
     * @param string $contents
     *
     * @return array
     * @throws InvalidArgumentException
     */
    public function process($contents)
    {
        if (!is_string($contents)) {
            throw new InvalidArgumentException("process expects a string to work with.");
        }

        $contents = explode("\n", $contents);

        $fqcn = $this->class_name_getter->process($contents);

        return $this->extractPublicMethods($fqcn);
    }

}
