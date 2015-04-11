<?php
namespace Spinen\ConnectWise\Generator\Commands;

use Illuminate\Filesystem\Filesystem;
use Spinen\ConnectWise\Generator\CommandLine\Request;
use Spinen\ConnectWise\Generator\Generator;
use Spinen\ConnectWise\Generator\Traits\Composer;
use Spinen\ConnectWise\Generator\Traits\ResponseParser;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Wsdl2PhpGenerator\Config;
use Wsdl2PhpGenerator\Generator as WsdlGenerator;

/**
 * Class MakeLibrariesCommand
 *
 * @package Spinen\ConnectWise\Generator\Commands
 */
class MakeLibraries extends Base implements CommandInterface
{

    use Composer;

    use ResponseParser;

    /**
     * @var FormatCode
     */
    protected $code_formatter;

    /**
     * @var RefactorCode
     */
    protected $code_refactor;

    /**
     * @var Filesystem
     */
    protected $files;

    /**
     * @var Request
     */
    protected $request;

    /**
     * @var BuildSignatures
     */
    protected $signature_builder;

    /**
     * @var InsertTypeHints
     */
    protected $type_hinter;

    /**
     * @var WsdlGenerator
     */
    protected $wsdl_generator;


    /**
     * @param Generator       $generator
     * @param string|null     $name
     * @param BuildSignatures $signature_builder
     * @param Filesystem      $files
     * @param InsertTypeHints $type_hinter
     * @param FormatCode      $code_formatter
     * @param RefactorCode    $code_refactor
     * @param Request         $request
     * @param WsdlGenerator   $wsdl_generator
     */
    public function __construct(
        Generator $generator,
        $name = null,
        BuildSignatures $signature_builder,
        Filesystem $files,
        InsertTypeHints $type_hinter,
        FormatCode $code_formatter,
        RefactorCode $code_refactor,
        Request $request,
        WsdlGenerator $wsdl_generator
    ) {
        $this->code_formatter = $code_formatter;
        $this->code_refactor = $code_refactor;
        $this->files = $files;
        $this->request = $request;
        $this->signature_builder = $signature_builder;
        $this->type_hinter = $type_hinter;
        $this->wsdl_generator = $wsdl_generator;

        parent::__construct($generator, $name);
    }

    /**
     * Setup the configuration values for the command
     */
    public function configure()
    {
        $this->setName('makeLibraries')
             ->setDescription('Runs through the WSDL\'s to generate the libraries')
             ->addOption('clean', null, InputOption::VALUE_OPTIONAL,
                 "Remove an contents in the " .
                 $this->generator->apiDirectory(null, false, true) .
                 " directory before running", true)
             ->addOption('composer', null, InputOption::VALUE_OPTIONAL, 'Path to composer', 'composer.phar')
             ->addOption('dryRun', null, InputOption::VALUE_OPTIONAL,
                 'Just display the clients that we are going to wrap?', false)
             ->addOption('directory', null, InputOption::VALUE_OPTIONAL, "Directory of the api files.",
                 $this->generator->apiDirectory(null, false, true))
             ->addOption("file", null, InputOption::VALUE_NONE, "Signature file.")
             ->addOption('paramsDefaultNull', null, InputOption::VALUE_OPTIONAL,
                 'Sets the default value of all parameters in all constructors to null?', true)
             ->addOption('sharedTypes', null, InputOption::VALUE_OPTIONAL,
                 'Makes all types with the same identify use the same class and only generate it once?', true);
    }

    /**
     * Display the flags to the screen to know what is set.
     *
     */
    private function displayFlags()
    {
        $flags = [
            'dryRun'            => 'Dry run',
            'paramsDefaultNull' => 'Params default null',
            'sharedTypes'       => 'Shared types',
            'clean'             => 'Clean',
        ];

        foreach ($flags as $flag => $title) {
            $this->output->writeln("<comment>" .
                                   $title .
                                   ": " .
                                   (($this->input->getOption($flag)) ? "true" : "false") .
                                   "</comment>");
        }
    }

    /**
     * @param InputInterface  $input
     * @param OutputInterface $output
     *
     * @return int|null|void
     */
    public function execute(InputInterface $input, OutputInterface $output)
    {
        $this->setInputOutput($input, $output);

        $this->output->writeln("<info>Starting to generate libraries...</info>");

        if ($this->input->getOption('dryRun')) {
            $this->input->setOption('clean', false);
        }

        $this->displayFlags();

        $this->generator->setAndMakeApiDirectory($this->input->getOption('directory'), $this->input->getOption('clean'),
            $this->output);

        if ($this->input->getOption('clean')) {
            // Make sure that no future calls to setAndMakeApiDirectory tries to clean the directories.
            $this->input->setOption('clean', false);

            // Update composer now that the Api directory is empty
            $this->composerDumpauto();
        }

        foreach ((array)$this->generator->get('config')['wsdls'] as $api => $uri) {
            $this->generateClassFromWsdl($uri, $api);
        }

        if (!($this->input->getOption('dryRun'))) {
            $this->processGeneratedCode();
        }
    }

    /**
     * Call the WSDL generator to build class(es)
     *
     * @param string $uri
     * @param string $api
     */
    private function generateClassFromWsdl($uri, $api)
    {
        $path = $this->generator->hostPath($uri);

        $this->output->writeln("<comment>Generating ${api} from ${path}...</comment>");

        if (!($this->input->getOption('dryRun'))) {
            $this->wsdl_generator->generate(new Config([
                'constructorParamsDefaultToNull' => $this->input->getOption('paramsDefaultNull'),
                'inputFile'                      => $path,
                'namespaceName'                  => $this->generator->generatedNamespace(),
                'outputDir'                      => $this->generator->generatedDirectory(),
                'sharedTypes'                    => $this->input->getOption('sharedTypes'),
                // NOTE: Has to have the absolute path or fails
                'soapClientClass'                => '\\' . $this->generator->libraryNamespace('SoapClient'),
            ]));
        }
    }

    /**
     * Run post processing routines on the generated code
     */
    private function processGeneratedCode()
    {
        $this->files->delete($this->generator->generatedDirectory('autoload.php'));

        // Update the autoload with the generated classes
        $this->composerDumpauto();

        $jobs = [
            'code_refactor',
            'code_formatter',
            'type_hinter',
            'signature_builder'
        ];

        foreach ($jobs as $job) {
            $this->{$job}->execute($this->input, $this->output);
        }

        // Update autoload with the Signature file
        $this->composerDumpauto();
    }

}
