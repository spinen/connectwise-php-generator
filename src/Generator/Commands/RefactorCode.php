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
 * Class RefactorCode
 *
 * @package Spinen\ConnectWise\Generator\Commands
 */
class RefactorCode extends Base implements CommandInterface
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
    public function __construct(
        Generator $generator,
        $name = null,
        Filesystem $files,
        Request $request
    ) {
        $this->files = $files;
        $this->request = $request;

        parent::__construct($generator, $name);
    }

    /**
     * Adds host to __construct for library
     */
    private function addHostParameter()
    {
        $this->output->writeln("<info>Adding host parameter to constructor...</info>");

        $command = 'sed -i"" -e "s|__construct(array \$options|__construct(\$host, array \$options|g" ' .
                   $this->generator->generatedDirectory('*Api.php', false);

        $response = $this->request->setCommand($command)
                                  ->run();

        $this->outputResponse($response);
    }

    /**
     * Adds host to __construct for library for parent class
     */
    private function addHostParameterParentConstruct()
    {
        $this->output->writeln("<info>Adding host parameter to parent constructor...</info>");

        $command = 'sed -i"" -e "s|__construct(\$wsdl, \$options)|__construct(\$host \. \$wsdl, \$options)|g" ' .
                   $this->generator->generatedDirectory('*Api.php', false);

        $response = $this->request->setCommand($command)
                                  ->run();

        $this->outputResponse($response);
    }

    /**
     * Setup the configuration values for the command
     */
    public function configure()
    {
        $this->setName('refactorCode')
             ->setDescription('Runs through the generated library to refactor some of the pieces that we want to change')
             ->addOption("directory", null, InputOption::VALUE_OPTIONAL, "Directory of the api files.",
                 $this->generator->apiDirectory(null, false, true));
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

        $this->output->writeln("<info>Refactoring code in " . $this->generator->generatedDirectory() . "</info>");

        $this->generator->setAndMakeApiDirectory($this->input->getOption('directory'), false, $this->output);

        $this->removeHostName();

        $this->addHostParameter();

        $this->addHostParameterParentConstruct();
    }

    /**
     * The generator hard codes the full wsdl into the code, so this removes it
     */
    private function removeHostName()
    {
        $this->output->writeln("<info>Removing hardcoded hostname...</info>");

        $command = 'sed -i"" -e "s|' .
                   preg_quote($this->generator->hostPath()) .
                   '||g" ' .
                   $this->generator->generatedDirectory('*.php', false);

        $response = $this->request->setCommand($command)
                                  ->run();

        $this->outputResponse($response);
    }
}
