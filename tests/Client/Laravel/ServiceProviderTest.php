<?php

namespace Tests\Spinen\ConnectWise\Client\Laravel;

use Mockery;
use Spinen\ConnectWise\Client\Laravel\ServiceProvider;
use Tests\Spinen\ConnectWise\BaseTest;
use Tests\Spinen\ConnectWise\TestFactory;

/**
 * Class ServiceProviderTest
 *
 * @package Tests\Spinen\ConnectWise\Client\Laravel
 * @group   client
 * @group   laravel
 */
class ServiceProviderTest extends BaseTest
{

    /**
     * @var Mockery\Mock
     */
    protected $app_mock;

    /**
     * @var ServiceProvider
     */
    protected $service_provider;

    protected function setUp()
    {
        parent::setUp();

        $this->app_mock = TestFactory::mockLaravelApp();

        $this->service_provider = new ServiceProvider($this->app_mock);
    }

    /**
     * @test
     */
    public function it_can_be_constructed()
    {
        $this->assertInstanceOf('Spinen\\ConnectWise\\Client\\Laravel\\ServiceProvider', $this->service_provider);
    }

    /**
     * @test
     */
    public function it_is_set_as_deferred()
    {
        $this->assertTrue($this->service_provider->isDeferred());
    }

    /**
     * @test
     */
    public function it_returns_the_correct_array_of_what_it_provides()
    {
        $expected = [
            'connectwise',
        ];

        $this->assertEquals($expected, $this->service_provider->provides());
    }

    /**
     * @test
     */
    public function it_registers_the_client()
    {
        $this->markTestIncomplete();

        $this->app_mock->shouldReceive('offsetGet')
                       ->with('config')
                       ->andReturn(['services' => ['connectwise' => []]])
                       ->once();

        $this->service_provider->register();
    }

}
