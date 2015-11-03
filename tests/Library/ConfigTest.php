<?php

namespace Spinen\ConnectWise\Library;

use Spinen\ConnectWise\BaseTest;

/**
 * Class ConfigTest
 *
 * @package Spinen\ConnectWise\Library
 * @group   library
 */
class ConfigTest extends BaseTest
{
    /**
     * @var Config
     */
    protected $config;

    protected function setUp()
    {
        $this->config = new Config($this->buildConfig());
    }

    private function buildConfig()
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
        $this->assertInstanceOf('Spinen\ConnectWise\Library\Config', $this->config);
    }

    /**
     * @test
     */
    public function it_treats_the_configs_like_properties_to_an_array()
    {
        $this->assertTrue(isset($this->config['key']));

        $this->assertEquals('value', $this->config['key']);

        $this->config['key'] = 'new value';

        $this->assertEquals('new value', $this->config['key']);

        unset($this->config['key']);

        $this->assertFalse(isset($this->config['key']));
    }

    /**
     * @test
     */
    public function it_treats_the_configs_like_public_properties()
    {
        $this->assertTrue(isset($this->config->key));

        $this->assertEquals('value', $this->config->key);

        $this->config->key = 'new value';

        $this->assertEquals('new value', $this->config->key);

        unset($this->config->key);

        $this->assertFalse(isset($this->config->key));
    }

    /**
     * @test
     */
    public function it_test_to_see_if_there_is_a_config_key()
    {
        $this->assertTrue($this->config->has('key'));

        $this->assertFalse($this->config->has('invalid_key'));
    }
}
