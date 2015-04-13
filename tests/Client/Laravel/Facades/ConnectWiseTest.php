<?php

namespace Tests\Spinen\ConnectWise\Client\Laravel\Facades;

use Spinen\ConnectWise\Client\Laravel\Facades\ConnectWise;
use Tests\Spinen\ConnectWise\BaseTest;

/**
 * Class ConnectWiseTest
 *
 * @package Tests\Spinen\ConnectWise\Client\Laravel\Facades
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
