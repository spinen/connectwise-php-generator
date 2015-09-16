<?php

namespace Spinen\ConnectWise\Generator\Commands;

use Illuminate\Filesystem\Filesystem;
use Spinen\ConnectWise\Generator\CommandLine\Request;
use Spinen\ConnectWise\Generator\Generator;
use Spinen\ConnectWise\Generator\Traits\ResponseParser;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class FormatCode
 *
 * @package Spinen\ConnectWise\Generator\Commands
 */
class FormatCode extends Base implements CommandInterface
{
    use ResponseParser;

    /**
     * @var Filesystem
     */
    protected $files;

    /**
     * @var Request
     */
    protected $request;

    /**
     * @param Generator   $generator
     * @param string|null $name
     * @param Filesystem  $files
     * @param Request     $request
     */
    public function __construct(Generator $generator, $name = null, Filesystem $files, Request $request)
    {
        $this->files = $files;
        $this->request = $request;

        parent::__construct($generator, $name);
    }

    /**
     * Relative path to fmt bin
     *
     * @var string
     */
    protected $relative_fmt_path = "bin/fmt.php";

    /**
     * Setup the configuration values for the command
     */
    public function configure()
    {
        $this->setName('formatCode')
             ->setDescription('Runs through the generated library to format the the code')
             ->addOption("directory", null, InputOption::VALUE_OPTIONAL, "Directory of the api files.",
                 $this->generator->apiDirectory(null, false, true))
             ->addOption("file", null, InputOption::VALUE_OPTIONAL, "File to be formatted.");
    }

    /**
     * Figure out what files are to be formatted
     *
     * @return string
     */
    private function determineFiles()
    {
        // NOTE: Since we are using file, then it exist, but may not be set
        if ($this->input->hasOption('file') && $this->input->getOption('file')) {
            $this->output->writeln("<info>Formatting " . $this->input->getOption('file') . "</info>");

            return $this->input->getOption('file');
        }

        $this->output->writeln("<info>Formatting code in " .
                               $this->generator->generatedDirectory('*.php', false) .
                               "</info>");

        // Has a default, so don't have to check for existence
        return implode(" ", $this->files->glob($this->generator->generatedDirectory('*.php', false)));
    }

    /**
     * Runs through the files int the API src dir, and pulls the public methods out
     *
     * @param InputInterface  $input
     * @param OutputInterface $output
     *
     * @return int|null|void
     */
    public function execute(InputInterface $input, OutputInterface $output)
    {
        $this->setInputOutput($input, $output);

        $this->output->writeln("<info>Formatting generated code...</info>");

        $this->generator->setAndMakeApiDirectory($this->input->getOption('directory'), false, $this->output);

        $script = $this->generator->vendorDirectory($this->relative_fmt_path);

        $commands = $this->getFormatterOptions();

        $files = $this->determineFiles();

        $response = $this->request->setCommand(implode(" ", [$script, $commands, $files]))
                                  ->run(500, 500);

        $this->outputResponse($response);
    }

    /**
     * All of the options that the formatter takes.
     *
     * Just toggle the comment on an option that you want to include
     *
     * @return array
     */
    private function getFormatterOptions()
    {
        return implode(" ", [
            // cache file. Default: .php.tools.cache
            //'--cache[=FILENAME]',
            // Apply CakePHP coding style
            //'--cakephp',
            // configuration file. Default: .php.tools.ini
            //'--config=FILENAME',
            // analyse classes for attributes and generate constructor - camel, snake, golang
            '--constructor=camel',
            // disable auto align of ST_EQUAL and T_DOUBLE_ARROW
            '--enable_auto_align',
            // disable specific passes
            //'--exclude=pass1,passN',
            // ignore file names whose names contain any PATTERN-N
            //'--ignore=PATTERN1,PATTERN2',
            // use spaces instead of tabs for indentation. Default 4
            //'--indent_with_space=SIZE',
            // Apply Laravel coding style
            //'--laravel',
            // lint files before pretty printing (PHP must be declared in %PATH%/$PATH)
            //'--lint-before',
            // list possible transformations
            //'--list',
            // no backup file (original.php~)
            '--no-backup',
            // call specific compiler pass
            //'--passes=pass1,passN',
            // call specific compiler pass, before the rest of stack (deprecated)
            //'--prepasses=pass1,passN',
            // use one of profiles present in configuration file
            //'--profile=NAME',
            // activate PSR1 and PSR2 styles
            '--psr',
            // activate PSR1 style
            //'--psr1',
            // activate PSR1 style - Section 3 and 4.3 - Class and method names case.
            //'--psr1-naming',
            // activate PSR2 style
            //'--psr2',
            // analyse classes for attributes and generate setters and getters - camel, snake, golang
            '--setters_and_getters=camel',
            // convert multistatement blocks into multiline blocks
            '--smart_linebreak_after_curly',
            // fixes visibiliy order for method in classes. PSR-2 4.2
            '--visibility_order',
            // yoda-style comparisons
            //'--yoda',
        ]);
    }
}
