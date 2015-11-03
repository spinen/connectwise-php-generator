<?php

namespace Spinen\ConnectWise\Client\Stubs;

class SomeApi
{
    public function FunctionCall($parameters)
    {
        return new FunctionCallResponse($parameters);
    }
}
