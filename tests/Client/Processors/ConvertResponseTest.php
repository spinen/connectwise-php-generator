<?php

namespace Spinen\ConnectWise\Client\Processors;

use Carbon\Carbon;
use DateTime;
use DateTimeZone;
use Mockery;
use Spinen\ConnectWise\BaseTest;
use Spinen\ConnectWise\Library\Results\Collection;
use Spinen\ConnectWise\Library\Results\ValueObject;
use Spinen\ConnectWise\TestFactory;

/**
 * Class ConvertResponseTest
 *
 * @package Spinen\ConnectWise\Client\Processors
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

        $this->converter = new ConvertResponse($this->getter_mock);
    }

    /**
     *
     */
    private function setUpMocks()
    {
        $this->getter_mock = TestFactory::mockGetGetters();
    }

    /**
     * @param array $expected
     *
     * @return Collection
     */
    private function encaseExpectedInCollections(array $expected)
    {
        $expected = array_map(function ($item) { return new ValueObject($item); }, $expected);

        $expected = new Collection($expected);

        return $expected;
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

        $expected = $this->encaseExpectedInCollections($expected);

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

        $expected = $this->encaseExpectedInCollections($expected);

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
    public function it_converts_dates_from_utc_when_time_zone_is_set()
    {
        $time_zone = 'America/Kentucky/Louisville';

        $this->converter->setTimeZone($time_zone);

        $date_time = new DateTime(null, new DateTimeZone('UTC'));

        $expected = [
            [
                'Date' => Carbon::instance($date_time)
                                ->setTimezone($time_zone),
            ],
        ];

        $expected = $this->encaseExpectedInCollections($expected);

        $response_array = TestFactory::makeClass([
            //'property' => 'value'
        ], [
            'getDateUTC' => $date_time,
        ]);

        $this->getter_mock->shouldReceive('process')
                          ->with($response_array)
                          ->andReturn([
                              'getDateUTC',
                          ])
                          ->once();

        $converted = $this->converter->process([
            $response_array,
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
    public function it_sets_the_api()
    {
        $this->assertEquals($this->converter, $this->converter->setApi('someApi'));
    }

    /**
     * @test
     */
    public function it_sets_columns_to_only_return()
    {
        $this->assertEquals($this->converter, $this->converter->setColumns(['column']));
    }

    /**
     * @test
     */
    public function it_set_the_time_zone_to_convert_dates()
    {
        $this->assertEquals($this->converter, $this->converter->setTimeZone('America/Kentucky/Louisville'));
    }
}
