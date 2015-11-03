<?php

namespace Spinen\ConnectWise\Generator\Stubs\Traits;

use Spinen\ConnectWise\Generator\CommandLine\Response;
use Spinen\ConnectWise\Generator\Traits\ResponseParser;
use Symfony\Component\Console\Output\OutputInterface;

class ResponseParserStub
{
    use ResponseParser;

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
