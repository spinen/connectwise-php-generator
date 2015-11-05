<?php

namespace Spinen\ConnectWise\Generator\Stubs\Traits;

use Spinen\ConnectWise\Generator\CommandLine\Request;
use Spinen\ConnectWise\Generator\Traits\Composer as ComposerTrait;
use Spinen\ConnectWise\Generator\Traits\ResponseParser as ResponseParserTrait;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Composer
{
    use ComposerTrait;

    use ResponseParserTrait;

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
