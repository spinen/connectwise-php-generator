<?php

namespace Tests\Spinen\ConnectWise\Library;

use Spinen\ConnectWise\Library\Container;
use Tests\Spinen\ConnectWise\BaseTest;

/**
 * Class ContainerTest
 *
 * @package Tests\Spinen\ConnectWise\Library
 * @group   library
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
    public function it_converts_the_options_array_to_a_config_object()
    {
        $this->assertInstanceOf('Spinen\\ConnectWise\\Library\\Config', $this->container->get('config'));
    }

    /**
     * @test
     */
    public function it_stores_the_passed_in_options_under_config_key()
    {
        $this->assertEquals("value", $this->container->get('config')['key']);
    }

    /**
     * @test
     */
    public function it_does_not_store_the_di_array_in_the_config()
    {
        $options = $this->buildConfigs();

        $options['di'] = ['alias' => ['class' => 'stdClass']];

        $container = new Container($options);

        $this->assertArrayNotHasKey('di', $container->get('config'));
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
