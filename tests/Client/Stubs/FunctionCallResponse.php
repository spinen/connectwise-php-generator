<?php

namespace Spinen\ConnectWise\Client\Stubs;

class FunctionCallResponse
{
    protected $response;

    public function __construct($response)
    {
        $this->response = $response;
    }
}
