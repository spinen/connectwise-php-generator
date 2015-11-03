<?php

namespace Spinen\ConnectWise\Generator\Stubs\Traits;

use Spinen\ConnectWise\Generator\CommandLine\Request;
use Spinen\ConnectWise\Generator\Traits\Composer;
use Spinen\ConnectWise\Generator\Traits\ResponseParser;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ComposerStub
{
    use Composer;

    use ResponseParser;

    /**
     * @var InputInterface
     */
    protected $input;

    /**
     * @var OutputInterface
     */
    protected $output;

    /**
     * @var Request
     */
    protected $request;

    public function __construct(InputInterface $input, OutputInterface $output, Request $request)
    {
        $this->input = $input;
        $this->output = $output;
        $this->request = $request;
    }

    public function exposeComposerDumpauto()
    {
        return $this->composerDumpauto();
    }
}
