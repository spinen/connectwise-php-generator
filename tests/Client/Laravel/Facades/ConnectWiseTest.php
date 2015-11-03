<?php

namespace Spinen\ConnectWise\Client\Laravel\Facades;

use Spinen\ConnectWise\BaseTest;

/**
 * Class ConnectWiseTest
 *
 * @package Spinen\ConnectWise\Client\Laravel\Facades
 * @group   client
 * @group   laravel
 */
class ConnectWiseTest extends BaseTest
{
    /**
     * @test
     */
    public function it_returns_the_registered_name()
    {
        $facade = new ConnectWise();

        // Set the "app" to an array to trick Facade into asking for the conenctwise index
        ConnectWise::setFacadeApplication(['connectwise' => $facade]);

        $this->assertEquals('connectwise', ConnectWise::getFacadeAccessor());
    }
}
