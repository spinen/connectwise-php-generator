<?php

namespace Spinen\ConnectWise\Generator;

use Composer\Autoload\ClassLoader;
use Illuminate\Contracts\Filesystem\FileNotFoundException;
use Illuminate\Filesystem\Filesystem;
use RuntimeException;
use Spinen\ConnectWise\Library\Container;
use Symfony\Component\Console\Application;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class Generator
 *
 * @package Spinen\ConnectWise\Generator
 */
class Generator extends Container
{

    /**
     * Cache of command classes
     *
     * @var array
     */
    protected $commands = [];

    /**
     * Describe the purpose of the application
     *
     * @var string
     */
    protected $description = 'Generate PHP Library for the ConnectWise API.';

    /**
     * @var Filesystem
     */
    protected $files;

    /**
     * Required properties when initializing
     *
     * @var array
     */
    protected $rules = [
        'connectwise'         => [
            'host'     => 'required|url',
            'company'  => 'required',
            'username' => 'required',
            'password' => 'required',
        ],
        'di'                  => 'array',
        'generated_name'      => 'required',
        'paths'               => [
            'directory'      => [
                'api'        => 'required',
                'client'     => 'required',
                'commands'   => 'required',
                'config'     => 'required',
                'generated'  => 'required',
                'generator'  => 'required',
                'library'    => 'required',
                'processors' => 'required',
                'source'     => 'required',
                'vendor'     => 'required',
            ],
            'namespace'      => [
                'api'        => 'required',
                'client'     => 'required',
                'commands'   => 'required',
                'generated'  => 'required',
                'generator'  => 'required',
                'library'    => 'required',
                'processors' => 'required',
            ],
            'namespace_root' => 'required',
            'project_root'   => 'required',
        ],
        'signature_file_name' => 'required',
        'wsdls'               => 'required|array',
    ];

    /**
     * Magic method to make some methods cleaner
     *
     * @param string $name
     * @param array  $arguments
     *
     * @return string
     *
     * @throws RuntimeException
     */
    public function __call($name, $arguments)
    {
        if (preg_match("/^([a-z][A-z]+)(Directory|Namespace)$/u", $name)) {
            return $this->lookUpPath($name, $arguments);
        }

        throw new RuntimeException(sprintf("Method [%s] not found.", $name));
    }

    /**
     * @param array|null      $options
     * @param Filesystem|null $files
     */
    public function __construct(array $options = [], Filesystem $files = null)
    {
        parent::__construct($options);

        // Allow for Filesystem to be injected for testing or if null, then auto create it.
        $this->files = ($files) ?: $this->get('Illuminate\Filesystem\Filesystem');
    }

    /**
     * If a string is provided, then add the separator to it & return it, otherwise, return null
     *
     * @param array|string $path
     * @param string|null  $base
     * @param string|null  $separator
     *
     * @return string
     */
    protected function appendPath($path, $base = null, $separator = DIRECTORY_SEPARATOR)
    {
        if (!is_array($path)) {
            $path = [$path];
        }

        // Add base to the front
        $path = array_merge([$base], $path);

        // Filter out the empty values
        $path = array_filter($path);

        return implode($separator, $path);
    }

    /**
     * Description of the application
     *
     * @return string
     */
    public function description()
    {
        return $this->description;
    }

    /**
     * Build the full directory path to a file for a given path
     *
     * @param array|string|null $file
     * @param bool|null         $realpath
     * @param bool|null         $relative
     *
     * @return string
     */
    public function directoryPath($file = null, $realpath = true, $relative = false)
    {
        $project_root = (($relative) ? null : $this->get('config')['paths']['project_root']);

        $path = $this->appendPath($file, $project_root);

        return ((($realpath) && (!$relative)) ? realpath($path) : $path);
    }

    /**
     * Get full namespace to commands in the commands directory
     *
     * This is opinionated that the class matches the file name.
     *
     * @param string|null $type
     * @param string|null $pattern
     * @param string|null $exclude
     *
     * @return array
     */
    public function getRegisterCommands(
        $type = "commands",
        $pattern = "*.php",
        $exclude = "Base|Interface\\.php"
    ) {
        $hash = md5(serialize([
            $type,
            $pattern,
            $exclude,
        ]));

        if (!empty($this->commands[$hash])) {
            return $this->commands[$hash];
        }

        $path = $this->{$type . "Directory"}($pattern, false);

        $command_files = $this->files->glob($path);

        // They all extend Base, so it is not a command
        if ($exclude) {
            $command_files = array_filter($command_files, function ($file) use ($exclude) {
                return !preg_match("/" . $exclude . "/u", $file);
            });
        }

        // Convert full path file names to full path namespace
        foreach ($command_files as $file) {
            $class = basename($file, ".php");

            $alias = snake_case($class);

            $class = $this->{$type . "Namespace"}($class);

            $this->commands[$hash][$alias] = $class;
        }

        return $this->commands[$hash];
    }

    /**
     * Get the FQDN to the ConnectWise server with optional URI.
     *
     * @param null $path
     *
     * @return string
     */
    public function hostPath($path = null, $relative = false)
    {
        $host = (($relative) ? null : $this->get('config')['connectwise']['host']);

        return $this->appendPath($path, $host, '/');
    }

    /**
     * Translates some magic method calls for paths
     *
     * Allows for <somePath>Directory or <somePath>Namespace to return the full path.  You can pass a path into call
     * to allow for it to get added to the end.  For Directory, there is a 2nd parameter that toggles realpath to be
     * ran (or not ran) on the path.
     *
     * @param string $name
     * @param array  $arguments
     *
     * @return string
     *
     * @throws RuntimeException
     */
    private function lookUpPath($name, array $arguments)
    {
        list($name, $type) = explode(",", preg_replace("/^([a-z][A-z]+)(Directory|Namespace)$/u", "$1,$2", $name));

        $name = strtolower($name);
        $type = strtolower($type);

        // Make sure that there are configs for the location
        if (!array_key_exists($type, (array)$this->get('config')['paths']) ||
            (!array_key_exists($name, (array)$this->get('config')['paths'][$type]))
        ) {
            throw new RuntimeException(sprintf("There is no configured path [%s] for type [%s].", $name, $type));
        }

        // Look up relative path from config
        $name = $this->get('config')['paths'][$type][snake_case($name)];

        if (empty($arguments)) {
            $arguments[0] = [];
        }

        // Since the path that we are sending in need the name merged in, make is that we are working with an array
        if (!is_array($arguments[0])) {
            // NOTE: NULL gets filtered out in the appendPath, so don't worry about having null
            $arguments[0] = [$arguments[0]];
        }

        // Merge the name as the first item
        $arguments[0] = array_merge([$name], $arguments[0]);

        return call_user_func_array([$this, $type . "Path"], $arguments);
    }

    /**
     * Makes the directory for the Api files, and will clean out existing
     *
     * @param bool|null            $clean
     * @param OutputInterface|null $output
     *
     * @return $this
     */
    public function makeApiDirectory($clean = false, OutputInterface $output = null)
    {
        $this->verifyMakeDirectory($this->apiDirectory(null, false), $output);

        if ($clean) {
            $this->outputLine("Cleaning out the old files.", $output, "comment");
            $this->files->deleteDirectory($this->apiDirectory(null, false), true);
        }

        $this->verifyMakeDirectory($this->generatedDirectory(null, false), $output);

        // Allow chaining
        return $this;
    }

    /**
     * Build the full namespace path to a class for a given path
     *
     * @param array|string|null $class
     * @param bool              $relative
     *
     * @return string
     */
    public function namespacePath($class = null, $relative = false)
    {
        $namespace_root = (($relative) ? null : $this->get('config')['paths']['namespace_root']);

        return $this->appendPath($class, $namespace_root, '\\');
    }

    /**
     * If output is set, write the message to it.
     *
     * @param string               $message
     * @param OutputInterface|null $output
     * @param string|null          $type
     */
    private function outputLine($message, OutputInterface $output = null, $type = "info")
    {
        if (!is_null($output)) {
            $output->writeln("<${type}>${message}</${type}>");
        }
    }

    /**
     * Register the commands with the application
     *
     * @param Application $app
     * @param array       $commands
     *
     * @return Application
     */
    public function registerCommandsWithApplication(Application $app, $commands = [])
    {
        if (empty($commands)) {
            $commands = $this->getRegisterCommands();
        }

        foreach ($commands as $command) {
            $app->add($this->get($command));
        }

        return $app;
    }

    /**
     * If the passed in directory is different than the one in the config, update the config
     *
     * @param string $directory
     *
     * @return $this
     */
    public function setApiDirectory($directory)
    {
        // If the passed in directory is not the same as what is in the config, update the config
        if ($directory !== $this->apiDirectory(null, false, true)) {
            // NOTE: Since config is not really an array, we have to copy the path, and replace all
            $paths = $this->get('config')['paths'];

            $paths['directory']['api'] = $directory;

            $paths['directory']['generated'] = $this->appendPath($this->get('config')['generated_name'], $directory);

            $this->get('config')['paths'] = $paths;
        }

        // Allow chaining
        return $this;
    }

    /**
     * Sets the directory config and makes it
     *
     * @param string               $directory
     * @param bool|null            $clean
     * @param OutputInterface|null $output
     *
     * @return $this
     */
    public function setAndMakeApiDirectory($directory, $clean = false, OutputInterface $output = null)
    {
        $this->setApiDirectory($directory);

        $this->makeApiDirectory($clean, $output);

        // Allow chaining
        return $this;
    }

    /**
     * Save the loader, so that we can add Generated directory at runtime
     *
     * @param ClassLoader $loader
     *
     * @return $this
     */
    public function setLoader(ClassLoader $loader)
    {
        $this->add('loader', $loader);

        // Allow chaining
        return $this;
    }

    /**
     * Make the directory if it does not exist
     *
     * @param string               $directory
     * @param OutputInterface|null $output
     */
    private function verifyMakeDirectory($directory, OutputInterface $output = null)
    {
        $this->outputLine("Verifying that " . $directory . " exist.", $output);

        if (!$this->files->isDirectory($directory)) {
            $this->outputLine("Built " . $directory . ".", $output, "comment");
            $this->files->makeDirectory($directory);
        }
    }

    /**
     * Return the version of the generator
     *
     * @return string
     */
    public function version()
    {
        try {
            return trim($this->files->get($this->directoryPath('VERSION', false)));
        } catch (FileNotFoundException $e) {
            return "UNDEFINED";
        }
    }

}
