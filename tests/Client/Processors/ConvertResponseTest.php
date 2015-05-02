<?php

namespace Tests\Spinen\ConnectWise\Client\Processors;

use Carbon\Carbon;
use DateTime;
use Mockery;
use Spinen\ConnectWise\Client\Processors\ConvertResponse;
use Spinen\ConnectWise\Library\Results\Collection;
use Spinen\ConnectWise\Library\Results\ValueObject;
use Tests\Spinen\ConnectWise\BaseTest;
use Tests\Spinen\ConnectWise\TestFactory;

/**
 * Class ConvertResponseTest
 *
 * @package Tests\Spinen\ConnectWise\Client\Processors
 * @group   client
 * @group   processors
 */
class ConvertResponseTest extends BaseTest
{

    /**
     * @var Mockery\Mock
     */
    protected $client_mock;

    /**
     * @var Mockery\Mock
     */
    protected $config_mock;

    /**
     * @var ConvertResponse
     */
    protected $converter;

    /**
     * @var Mockery\Mock
     */
    protected $getter_mock;

    /**
     *
     */
    protected function setUp()
    {
        parent::setUp();

        $this->setUpMocks();

        $this->converter = new ConvertResponse($this->client_mock, $this->getter_mock);
    }

    /**
     *
     */
    private function setUpMocks()
    {
        // TODO: Right here needing to get the should receive on the client_mock
        $this->config_mock = TestFactory::mockConfig();
        $this->config_mock->shouldReceive('has')
                          ->andReturn(true);
        $this->config_mock->shouldReceive('offsetGet')
                          ->andReturn('UTC');

        $this->client_mock = TestFactory::mockClient();
        $this->client_mock->shouldReceive('get')
                          ->with('config')
                          ->andReturn($this->config_mock);

        $this->getter_mock = TestFactory::mockGetGetters();
    }

    /**
     * @test
     */
    public function it_can_be_constructed()
    {
        $this->assertInstanceOf('Spinen\\ConnectWise\\Client\\Processors\\ConvertResponse', $this->converter);
    }

    /**
     * @test
     */
    public function it_returns_the_expected_results()
    {
        $date_time = new DateTime();

        $expected = [
            [
                'Date'     => Carbon::instance($date_time),
                'Name'     => 'One',
                'Property' => 'value',
            ],
            [
                'Date'     => Carbon::instance($date_time),
                'Name'     => 'Two',
                'Property' => 'value',
            ],
        ];

        $expected = array_map(function ($item) { return new ValueObject($item); }, $expected);

        $expected = new Collection($expected);

        $response_array_one = TestFactory::makeClass([
            //'property' => 'value'
        ], [
            'getDate'     => $date_time,
            'getName'     => 'One',
            'getProperty' => 'value',
        ]);

        $response_array_two = TestFactory::makeClass([
            //'property' => 'value'
        ], [
            'getDate'     => $date_time,
            'getName'     => 'Two',
            'getProperty' => 'value',
        ]);

        $this->getter_mock->shouldReceive('process')
                          ->with($response_array_one)
                          ->andReturn([
                              'getDate',
                              'getName',
                              'getProperty',
                          ])
                          ->once();

        $this->getter_mock->shouldReceive('process')
                          ->with($response_array_two)
                          ->andReturn([
                              'getDate',
                              'getName',
                              'getProperty',
                          ])
                          ->once();

        $converted = $this->converter->process([
            $response_array_one,
            $response_array_two,
        ]);

        $this->assertEquals($expected, $converted);
    }

    /**
     * @test
     */
    public function it_returns_the_expected_results_when_setting_columns()
    {
        $date_time = new DateTime();

        $expected = [
            [
                'Name' => 'One',
            ],
            [
                'Name' => 'Two',
            ],
        ];

        $expected = array_map(function ($item) { return new ValueObject($item); }, $expected);

        $expected = new Collection($expected);

        $response_array_one = TestFactory::makeClass([
            //'property' => 'value'
        ], [
            'getDate'     => $date_time,
            'getName'     => 'One',
            'getProperty' => 'value',
        ]);

        $response_array_two = TestFactory::makeClass([
            //'property' => 'value'
        ], [
            'getDate'     => $date_time,
            'getName'     => 'Two',
            'getProperty' => 'value',
        ]);

        $this->getter_mock->shouldReceive('process')
                          ->with($response_array_one)
                          ->andReturn([
                              'getDate',
                              'getName',
                              'getProperty',
                          ])
                          ->once();

        $this->getter_mock->shouldReceive('process')
                          ->with($response_array_two)
                          ->andReturn([
                              'getDate',
                              'getName',
                              'getProperty',
                          ])
                          ->once();

        $converted = $this->converter->setColumns(['name'])
                                     ->process([
                                         $response_array_one,
                                         $response_array_two,
                                     ]);

        $this->assertEquals($expected, $converted);
    }

    /**
     * @test
     */
    public function it_returns_a_single_value_when_that_is_all_that_is_passed_in()
    {
        $this->getter_mock->shouldReceive('process')
                          ->never();

        $this->assertEquals('value', $this->converter->process('value'));
    }

    /**
     * @test
     */
    public function it_processes_classes_that_end_with_Result()
    {
        $response = TestFactory::makeClass([
            //'property' => 'value'
        ], [
            'getPropertyResult' => 'value',
        ]);

        $this->getter_mock->shouldReceive('process')
                          ->with($response)
                          ->andReturn([
                              'getPropertyResult',
                          ])
                          ->once();

        $this->assertEquals('value', $this->converter->process($response));
    }

    /**
     * @test
     */
    public function it_sets_columns_to_only_return()
    {
        $this->assertEquals($this->converter, $this->converter->setColumns(['column']));
    }

}
