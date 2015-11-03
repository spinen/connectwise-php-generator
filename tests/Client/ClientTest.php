<?php

namespace Spinen\ConnectWise\Client;

use InvalidArgumentException;
use Spinen\ConnectWise\BaseTest;
use Spinen\ConnectWise\TestFactory;

/**
 * Class ClientTest
 *
 * @package Spinen\ConnectWise\Client
 * @group   client
 */
class ClientTest extends BaseTest
{
    private function buildConfig($options = [])
    {
        return array_replace_recursive([
            'connectwise' => [
                'company'  => env_value('CW_COMPANY', 'Company'),
                'host'     => env_value('CW_HOST', 'http://some.host'),
                'password' => env_value('CW_PASSWORD', 'Password'),
                'username' => env_value('CW_USERNAME', 'Username'),
            ],
        ], $options);
    }

    /**
     * @test
     */
    public function it_can_be_constructed_with_good_values()
    {
        $client = new Client($this->buildConfig());

        $this->assertInstanceOf('Spinen\\ConnectWise\\Client\\Client', $client);
    }

    /**
     * @test
     */
    public function it_can_be_constructed_with_a_converter_for_second_parameter()
    {
        $converter_mock = TestFactory::mockConverter();

        $client = new Client($this->buildConfig(), $converter_mock);

        $this->assertInstanceOf('Spinen\\ConnectWise\\Client\\Client', $client);
    }

    /**
     * @test
     */
    public function it_sets_time_zone_on_converter_if_timezone_is_not_utc()
    {
        $time_zone = 'America/Kentucky/Louisville';

        $converter_mock = TestFactory::mockConverter();
        $converter_mock->shouldReceive('setTimeZone')
                       ->with($time_zone)
                       ->once()
                       ->andReturnSelf();

        $config = $this->buildConfig();

        $config['timezone'] = $time_zone;

        $client = new Client($config, $converter_mock);

        $this->assertInstanceOf('Spinen\\ConnectWise\\Client\\Client', $client);
    }

    /**
     * @test
     * @expectedException InvalidArgumentException
     */
    public function it_raises_exception_when_constructed_without_a_company()
    {
        $config = $this->buildConfig();

        unset($config['connectwise']['company']);

        new Client($config);
    }

    /**
     * @test
     * @expectedException InvalidArgumentException
     */
    public function it_raises_exception_when_constructed_without_a_host()
    {
        $config = $this->buildConfig();

        unset($config['connectwise']['host']);

        new Client($config);
    }

    /**
     * @test
     * @expectedException InvalidArgumentException
     */
    public function it_raises_exception_when_constructed_with_a_bad_host()
    {
        new Client($this->buildConfig(['connectwise' => ['host' => 'some.host']]));
    }

    /**
     * @test
     * @expectedException InvalidArgumentException
     */
    public function it_raises_exception_when_constructed_without_a_password()
    {
        $config = $this->buildConfig();

        unset($config['connectwise']['password']);

        new Client($config);
    }

    /**
     * @test
     * @expectedException InvalidArgumentException
     */
    public function it_raises_exception_when_constructed_without_a_username()
    {
        $config = $this->buildConfig();

        unset($config['connectwise']['username']);

        new Client($config);
    }

    /**
     * @test
     */
    public function it_returns_the_expected_results_with_multiple_result()
    {
        $client = (new Client($this->buildConfig()))->setApiNamespace('Spinen\\ConnectWise\\Client\\Stubs')
                                                    ->setApi('SomeApi')
                                                    ->setMethod('FunctionCall');

        $this->assertInstanceOf('Spinen\\ConnectWise\\Library\\Support\\Collection',
            $client->execute(['key' => 'value']));
    }

    /**
     * @test
     */
    public function it_returns_the_expected_results_with_single_result()
    {
        $converter_mock = TestFactory::mockConverter();

        $converter_mock->shouldReceive('setApi')
                       ->withAnyArgs()
                       ->andReturnSelf()
                       ->once();

        $converter_mock->shouldReceive('setColumns')
                       ->withAnyArgs()
                       ->andReturnSelf()
                       ->once();

        $converter_mock->shouldReceive('process')
                       ->withAnyArgs()
                       ->andReturn(1)
                       ->once();

        $client = (new Client($this->buildConfig(),
            $converter_mock))->setApiNamespace('Spinen\\ConnectWise\\Client\\Stubs')
                             ->setApi('SomeApi')
                             ->setMethod('FunctionCall');

        $this->assertEquals(1, $client->execute(['key' => 'value']));
    }

    /**
     * @test
     */
    public function it_returns_the_default_api_namespace()
    {
        $client = new Client($this->buildConfig());

        $this->assertEquals('Spinen\\ConnectWise\\Library\\Api\\Generated', $client->getApiNamespace());
    }

    /**
     * @test
     */
    public function it_returns_the_api_namespace_with_a_class_prepended_if_passed_in()
    {
        $client = new Client($this->buildConfig());

        $this->assertEquals('Spinen\\ConnectWise\\Library\\Api\\Generated\\Class', $client->getApiNamespace('Class'));
    }

    /**
     * @test
     */
    public function it_returns_a_static_instance_of_itself()
    {
        $client = new Client($this->buildConfig());

        $this->assertInstanceOf('Spinen\\ConnectWise\\Client\\Client', Client::getClient());
        $this->assertEquals($client, Client::getClient());
    }

    /**
     * @test
     */
    public function it_returns_a_filter_builder()
    {
        $client = (new Client($this->buildConfig()))->setApi('SomeApi')
                                                    ->setMethod('SomeMethod');

        $this->assertInstanceOf('Spinen\\ConnectWise\\Client\\FilterBuilder', $client->makeFilterBuilder([]));
    }

    /**
     * @test
     * @expectedException InvalidArgumentException
     */
    public function it_raises_exception_when_no_api_is_set_for_making_a_filter_builder()
    {
        $client = (new Client($this->buildConfig()))->setMethod('SomeMethod');

        $client->makeFilterBuilder([]);
    }

    /**
     * @test
     * @expectedException InvalidArgumentException
     */
    public function it_raises_exception_when_no_method_is_set_for_making_a_filter_builder()
    {
        $client = (new Client($this->buildConfig()))->setApi('SomeApi');

        $client->makeFilterBuilder([]);
    }

    /**
     * @test
     */
    public function it_returns_the_host_name()
    {
        $expected = "http://someknown.host";

        $client = new Client($this->buildConfig(['connectwise' => ['host' => $expected]]));

        $this->assertEquals($expected, $client->getHost());
    }

    /**
     * @test
     */
    public function it_returns_the_host_name_with_passed_in_uri()
    {

        $expected = "http://someknown.host";

        $client = new Client($this->buildConfig(['connectwise' => ['host' => $expected]]));

        $this->assertEquals($expected, $client->getHost('/'));

        $expected .= '/some.uri';

        $this->assertEquals($expected, $client->getHost('some.uri'));

        $this->assertEquals($expected, $client->getHost('/some.uri'));
    }

    /**
     * @test
     */
    public function it_returns_an_empty_array_when_there_are_no_soap_options()
    {
        $config = $this->buildConfig();

        // Make 100% sure that we don't have any set soap options
        if (array_key_exists('soap_options', $config)) {
            unset($config['soap_options']);
        }

        $client = new Client($config);

        $this->assertEquals([], $client->getSoapOptions());
    }

    /**
     * @test
     */
    public function it_returns_the_soap_options()
    {
        $expected = [
            'key 1' => 'value',
        ];

        $client = new Client($this->buildConfig(['soap_options' => $expected]));

        $this->assertEquals($expected, $client->getSoapOptions());
    }
}
