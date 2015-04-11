<?php

namespace Tests\Spinen\ConnectWise\Library;

use Spinen\ConnectWise\Library\Container;
use Tests\Spinen\ConnectWise\BaseTest;

/**
 * Class ContainerTest
 *
 * @package Tests\Spinen\ConnectWise\Library
 * @group library
 */
class ContainerTest extends BaseTest
{

    /**
     * @var Container()
     */
    protected $container;

    protected function setUp()
    {
        $this->container = new Container($this->buildConfigs());
    }

    private function buildConfigs()
    {
        return [
            'key' => 'value',
        ];
    }

    /**
     * @test
     */
    public function it_can_be_constructed()
    {
        $this->assertInstanceOf('Spinen\\ConnectWise\\Library\\Container', $this->container);
    }

    /**
     * @test
     */
    public function it_will_return_the_instance_of_the_container()
    {
        $this->assertInstanceOf('Spinen\\ConnectWise\\Library\\Container', Container::getInstance());
    }

    /**
     * @test
     */
    public function it_has_a_magic_method_to_get_config_properties()
    {
        $this->assertEquals("value", $this->container->config['key']);
        $this->assertEquals("value", $this->container->config->key);
    }

}
