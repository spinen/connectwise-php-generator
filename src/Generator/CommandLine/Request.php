<?php

namespace Spinen\ConnectWise\Generator\CommandLine;

use Spinen\ConnectWise\Generator\Generator;
use Symfony\Component\Process\Process;

/**
 * Class CommandLine
 *
 * @package Spinen\ConnectWise\Generator
 */
class Request
{

    /**
     * @var Generator
     */
    private $generator;

    /**
     * @var \Symfony\Component\Process\Process
     */
    protected $process;

    /**
     * @param Generator $generator
     */
    public function __construct(Generator $generator)
    {
        $this->generator = $generator;
    }

    /**
     * Pull the parts out of the response into a Response object
     */
    private function buildResponse()
    {
        return new Response([
            'command'    => $this->process->getCommandLine(),
            'exit_code'  => $this->process->getExitCode(),
            'successful' => $this->process->isSuccessful(),
            'response'   => (($this->process->isSuccessful()) ? $this->process->getOutput()
                : $this->process->getErrorOutput()),
        ]);
    }

    /**
     * Run a command on the command line
     *
     * @param int $timeout
     * @param int $idle
     *
     * @return Response
     */
    public function run($timeout = 60, $idle = 60)
    {
        $this->process->setTimeout($timeout)
                      ->setIdleTimeout($idle)
                      ->run();

        return $this->buildResponse();
    }

    /**
     * Build process with command
     *
     * @param $command
     *
     * @return $this
     */
    public function setCommand($command)
    {
        // NOTE: Seems odd to have to add & then get, but the get(<class>, [$command]) does not work
        $this->generator->add('Symfony\\Component\\Process\\Process', function () use ($command) {
            // @codeCoverageIgnoreStart
            return new Process($command);
            // @codeCoverageIgnoreEnd
        });

        $this->process = $this->generator->get('Symfony\\Component\\Process\\Process');

        // Allow chaining
        return $this;
    }

}
