<?php

namespace Tests\Spinen\ConnectWise\Library\Stubs;

use Spinen\ConnectWise\Library\Results\ValueObject;

class ValueObjectStub extends ValueObject
{

    public function getKeyAttribute()
    {
        return 'getter value';
    }

}
