<?php

namespace Spinen\ConnectWise\Generator\Commands;

use Spinen\ConnectWise\Generator\Generator;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class Generator
 *
 * @package Spinen\ConnectWise\Generator\Commands
 */
class Base extends Command
{
    /**
     * @var Generator
     */
    protected $generator;

    /**
     * @var InputInterface
     */
    protected $input;

    /**
     * @var OutputInterface
     */
    protected $output;

    /**
     * @param Generator   $generator
     * @param string|null $name
     */
    public function __construct(Generator $generator, $name = null)
    {
        $this->generator = $generator;

        parent::__construct($name);
    }

    /**
     * Set the input & output on the class
     *
     * @param InputInterface  $input
     * @param OutputInterface $output
     *
     * @return int|null|void
     */
    public function setInputOutput(InputInterface $input, OutputInterface $output)
    {
        $this->input = $input;
        $this->output = $output;
    }
}
