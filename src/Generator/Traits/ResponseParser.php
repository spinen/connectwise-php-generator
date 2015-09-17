<?php

namespace Spinen\ConnectWise\Generator\Traits;

use Spinen\ConnectWise\Generator\CommandLine\Response;

trait ResponseParser
{
    /**
     * Display the response as a comment or error
     *
     * @param Response $response
     */
    protected function outputResponse(Response $response)
    {
        $type = (($response->getSuccessful()) ? 'comment' : 'error');

        $this->output->writeln("<" . $type . ">" . $response->getResponse() . "</" . $type . ">");
    }
}
