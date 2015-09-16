<?php

namespace Spinen\ConnectWise\Generator\Commands;

use Illuminate\Filesystem\Filesystem;
use Spinen\ConnectWise\Generator\Generator;
use Spinen\ConnectWise\Generator\Processors\AddTypeHints;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class InsertTypeHints extends Base implements CommandInterface
{
    /**
     * @var Filesystem
     */
    private $files;

    /**
     * @var AddTypeHints
     */
    private $type_hinter;

    public function __construct(Generator $generator, $name = null, AddTypeHints $type_hinter, Filesystem $files)
    {
        parent::__construct($generator, $name);

        $this->files = $files;
        $this->type_hinter = $type_hinter;
    }

    /**
     * Setup the configuration values for the command
     */
    public function configure()
    {
        $this->setName('addTypeHints')
             ->setDescription('Runs through the generated library to add type hints to properties')
             ->addOption("directory", null, InputOption::VALUE_OPTIONAL,
                 "Directory where the files are to build the signature.",
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

        $output->writeln("<info>Adding type hints to generated code...</info>");

        $this->generator->setAndMakeApiDirectory($this->input->getOption('directory'), false, $this->output);

        // Grab each file in the folder
        foreach ($this->files->glob($this->generator->generatedDirectory('*.php', false)) as $file) {
            $output->writeln("<comment>Adding type hints to " . $file . "</comment>");

            $this->type_hinter->process($file);
        }
    }
}
