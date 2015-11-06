<?php

namespace Spinen\ConnectWise\Generator\Stubs\Traits;

use Spinen\ConnectWise\Generator\CommandLine\Response;
use Spinen\ConnectWise\Generator\Traits\ResponseParser as ResponseParserTrait;
use Symfony\Component\Console\Output\OutputInterface;

class ResponseParser
{
    use ResponseParserTrait;

    /**
     * @var OutputInterface
     */
    protected $output;

    public function __construct(OutputInterface $output)
    {
        $this->output = $output;
    }

    public function exposeOutputResponse(Response $response)
    {
        return $this->outputResponse($response);
    }
}
