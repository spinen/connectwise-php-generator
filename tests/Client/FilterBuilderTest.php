<?php

namespace Tests\Spinen\ConnectWise\Client;

use InvalidArgumentException;
use Mockery;
use Spinen\ConnectWise\Client\FilterBuilder;
use Tests\Spinen\ConnectWise\BaseTest;
use Tests\Spinen\ConnectWise\TestFactory;

/**
 * Class FilterBuilderTest
 *
 * @package Tests\Spinen\ConnectWise\Client
 * @group   client
 * @group   filter
 */
class FilterBuilderTest extends BaseTest
{

    /**
     * @var Mockery\Mock
     */
    protected $client_mock;

    /**
     * @var Mockery\Mock
     */
    protected $filter_mock;

    /**
     * @var FilterBuilder
     */
    protected $filter_builder;

    protected function setUp()
    {
        parent::setUp();

        $this->setUpMocks();

        $this->filter_builder = new FilterBuilder($this->client_mock, $this->filter_mock);
    }

    private function setUpMocks()
    {
        $this->client_mock = TestFactory::mockClient();

        $this->filter_mock = TestFactory::mockFilter();

        $this->filter_mock->shouldReceive('getOperators')
                          ->andReturn([
                              '!='       => 'NotEquals',
                              '<='       => 'LessThanEquals',
                              '>='       => 'GreaterThanEquals',
                              '='        => 'Equals',
                              '<'        => 'LessThan',
                              '>'        => 'GreaterThan',
                              'contains' => 'Contains',
                              'like'     => 'Like',
                          ]);

        foreach (['set', 'orderBy', 'where', 'whereRaw'] as $method) {
            $this->filter_mock->shouldReceive('isCoreMethod')
                              ->with($method)
                              ->andReturn(true);
        }

        // All others are false
        $this->filter_mock->shouldReceive('isCoreMethod')
                          ->withAnyArgs()
                          ->andReturn(false);

        //        $this->filter_mock->shouldReceive('orderBy')
        //                          ->andReturnSelf();

        //        $this->filter_mock->shouldReceive('where')
        //                          ->andReturnSelf();

        //        $this->filter_mock->shouldReceive('whereRaw')
        //                          ->andReturnSelf();
    }

    /**
     * @test
     */
    public function it_can_be_constructed_with_good_values()
    {
        $this->assertInstanceOf('Spinen\\ConnectWise\\Client\\FilterBuilder', $this->filter_builder);
    }

    /**
     * @test
     */
    public function it_can_be_constructed_with_a_filter_too()
    {
        $this->filter_mock->shouldReceive('set')
                          ->with('property', 'value')
                          ->once();

        $this->filter_builder = new FilterBuilder($this->client_mock, $this->filter_mock, ['property' => 'value']);

        //        $this->assertEquals(['property' => "'value'"], $this->filter_builder->getFilter());

        $this->assertInstanceOf('Spinen\\ConnectWise\\Client\\FilterBuilder', $this->filter_builder);
    }

    /**
     * @test
     */
    public function it_runs_execute_on_client_when_doing_a_get()
    {
        $this->filter_mock->shouldReceive('getFilter')
                          ->withNoArgs()
                          ->andReturn([])
                          ->once();

        $this->client_mock->shouldReceive('execute')
                          ->with([])
                          ->andReturn("Results")
                          ->once();

        $this->filter_builder->get();
    }

    /**
     * @test
     */
    public function it_runs_execute_with_return_fields_on_client_when_doing_a_get_with_values()
    {
        $this->filter_mock->shouldReceive('set')
                          ->with('ReturnFields', ['Column1, Column2'])
                          ->once();

        $this->filter_mock->shouldReceive('getFilter')
                          ->withNoArgs()
                          ->andReturn(['ReturnFields' => ['Column1, Column2']])
                          ->once();

        $this->client_mock->shouldReceive('execute')
                          ->with(['ReturnFields' => ['Column1, Column2']])
                          ->andReturn("Results")
                          ->once();

        $this->filter_builder->get(['Column1, Column2']);
    }

    /**
     * @test
     */
    public function it_returns_the_client()
    {
        $this->assertEquals($this->client_mock, $this->filter_builder->getClient());
    }

    /**
     * @test
     */
    public function it_returns_the_filter()
    {
        $this->assertInstanceOf('Spinen\\ConnectWise\\Client\\Filter', $this->filter_builder->getFilter());
    }

    //order by

    /**
     * @test
     */
    public function it_runs_order_by_methods()
    {
        $this->filter_mock->shouldReceive('where')
                          ->withAnyArgs()
                          ->never();

        $this->filter_mock->shouldReceive('orderBy')
                          ->with('column')
                          ->andReturnSelf()
                          ->once();

        $this->filter_mock->shouldReceive('set')
                          ->withAnyArgs()
                          ->never();

        $this->filter_mock->shouldReceive('whereRaw')
                          ->withAnyArgs()
                          ->never();

        $filter_builder = $this->filter_builder->orderBy('column');

        $this->assertEquals($this->filter_builder, $filter_builder);
    }

    /**
     * @test
     */
    public function it_runs_order_by_methods_with_property_in_method_name()
    {
        $this->filter_mock->shouldReceive('where')
                          ->withAnyArgs()
                          ->never();

        $this->filter_mock->shouldReceive('orderBy')
                          ->withArgs(['Column', null, ""])
                          ->andReturnSelf()
                          ->once();

        $this->filter_mock->shouldReceive('set')
                          ->withAnyArgs()
                          ->never();

        $this->filter_mock->shouldReceive('whereRaw')
                          ->withAnyArgs()
                          ->never();

        $filter_builder = $this->filter_builder->orderByColumn();

        $this->assertEquals($this->filter_builder, $filter_builder);
    }

    /**
     * @test
     */
    public function it_runs_and_order_by_methods()
    {
        $this->filter_mock->shouldReceive('where')
                          ->withAnyArgs()
                          ->never();

        $this->filter_mock->shouldReceive('orderBy')
                          ->with('column')
                          ->andReturnSelf()
                          ->once();

        $this->filter_mock->shouldReceive('orderBy')
                          ->withArgs(['column2', null, "and"])
                          ->andReturnSelf()
                          ->once();

        $this->filter_mock->shouldReceive('orderBy')
                          ->withArgs(['column3', "desc", "and"])
                          ->andReturnSelf()
                          ->once();

        $this->filter_mock->shouldReceive('set')
                          ->withAnyArgs()
                          ->never();

        $this->filter_mock->shouldReceive('whereRaw')
                          ->withAnyArgs()
                          ->never();

        $filter_builder = $this->filter_builder->orderBy('column')
                                               ->andOrderBy('column2')
                                               ->andOrderBy('column3', 'desc');
        $this->assertEquals($this->filter_builder, $filter_builder);
    }

    /**
     * @test
     */
    public function it_runs_and_order_by_methods_with_property_in_method_name()
    {
        $this->filter_mock->shouldReceive('where')
                          ->withAnyArgs()
                          ->never();

        $this->filter_mock->shouldReceive('orderBy')
                          ->withArgs(['Column', null, null])
                          ->andReturnSelf()
                          ->once();

        $this->filter_mock->shouldReceive('orderBy')
                          ->withArgs(['Column2', null, "and"])
                          ->andReturnSelf()
                          ->once();

        $this->filter_mock->shouldReceive('orderBy')
                          ->withArgs(['Column3', "Desc", "and"])
                          ->andReturnSelf()
                          ->once();

        $this->filter_mock->shouldReceive('set')
                          ->withAnyArgs()
                          ->never();

        $this->filter_mock->shouldReceive('whereRaw')
                          ->withAnyArgs()
                          ->never();

        $filter_builder = $this->filter_builder->orderByColumn()
                                               ->andOrderByColumn2()
                                               ->andOrderByColumn3Desc();
        $this->assertEquals($this->filter_builder, $filter_builder);
    }

    /**
     * @test
     * @expectedException InvalidArgumentException
     */
    public function it_raises_exception_running_order_by_without_a_value()
    {
        $this->filter_mock->shouldReceive('orderBy')
                          ->with('column')
                          ->andReturnSelf()
                          ->once();

        $this->filter_builder->orderBy('column')
                             ->andOrderBy();
    }

    // set

    /**
     * @test
     */
    public function it_sets_a_value()
    {
        $this->filter_mock->shouldReceive('set')
                          ->withArgs(['Property', 'value'])
                          ->andReturnSelf()
                          ->once();

        $this->assertEquals($this->filter_builder, $this->filter_builder->property('value'));
    }

    /**
     * @test
     * @expectedException InvalidArgumentException
     */
    public function it_raises_exception_when_setting_without_a_value()
    {
        $this->assertEquals($this->filter_builder, $this->filter_builder->property());
    }

    // where

    /**
     * @test
     */
    public function it_runs_where_methods()
    {
        $this->filter_mock->shouldReceive('where')
                          ->withArgs(['column', 'value'])
                          ->andReturnSelf()
                          ->once();

        $this->filter_mock->shouldReceive('orderBy')
                          ->withAnyArgs()
                          ->never();

        $this->filter_mock->shouldReceive('set')
                          ->withAnyArgs()
                          ->never();

        $this->filter_mock->shouldReceive('whereRaw')
                          ->withAnyArgs()
                          ->never();

        $filter_builder = $this->filter_builder->where('column', 'value');

        $this->assertEquals($this->filter_builder, $filter_builder);
    }

    /**
     * @test
     */
    public function it_runs_where_methods_with_property_in_method_name()
    {
        $this->filter_mock->shouldReceive('where')
                          ->withArgs(['Column', 'value', '=', ''])
                          ->andReturnSelf()
                          ->once();

        $this->filter_mock->shouldReceive('orderBy')
                          ->withAnyArgs()
                          ->never();

        $this->filter_mock->shouldReceive('set')
                          ->withAnyArgs()
                          ->never();

        $this->filter_mock->shouldReceive('whereRaw')
                          ->withAnyArgs()
                          ->never();

        $filter_builder = $this->filter_builder->whereColumn('value');

        $this->assertEquals($this->filter_builder, $filter_builder);
    }

    /**
     * @test
     */
    public function it_runs_where_methods_with_property_and_operator_in_method_name()
    {
        $this->filter_mock->shouldReceive('where')
                          ->withArgs(['Column', 'value', '<=', ''])
                          ->andReturnSelf()
                          ->once();

        $this->filter_mock->shouldReceive('orderBy')
                          ->withAnyArgs()
                          ->never();

        $this->filter_mock->shouldReceive('set')
                          ->withAnyArgs()
                          ->never();

        $this->filter_mock->shouldReceive('whereRaw')
                          ->withAnyArgs()
                          ->never();

        $filter_builder = $this->filter_builder->whereColumnLessThanEquals('value');

        $this->assertEquals($this->filter_builder, $filter_builder);
    }

    /**
     * @test
     */
    public function it_runs_and_where_methods()
    {
        $this->filter_mock->shouldReceive('where')
                          ->with('column', 'value')
                          ->andReturnSelf()
                          ->once();

        $this->filter_mock->shouldReceive('where')
                          ->with('column', 'value', null, 'and')
                          ->andReturnSelf()
                          ->once();

        $this->filter_mock->shouldReceive('where')
                          ->with('column', 'value', null, 'or')
                          ->andReturnSelf()
                          ->once();

        $this->filter_mock->shouldReceive('orderBy')
                          ->withAnyArgs()
                          ->never();

        $this->filter_mock->shouldReceive('set')
                          ->withAnyArgs()
                          ->never();

        $this->filter_mock->shouldReceive('whereRaw')
                          ->withAnyArgs()
                          ->never();

        $filter_builder = $this->filter_builder->where('column', 'value')
                                               ->andWhere('column', 'value')
                                               ->orWhere('column', 'value');
        $this->assertEquals($this->filter_builder, $filter_builder);
    }

    /**
     * @test
     * @expectedException InvalidArgumentException
     */
    public function it_raises_exception_running_where_without_a_column()
    {
        $this->filter_mock->shouldReceive('where')
                          ->with('column', 'value')
                          ->andReturnSelf()
                          ->once();

        $this->filter_builder->where('column', 'value')
                             ->andWhere();
    }

    /**
     * @test
     * @expectedException InvalidArgumentException
     */
    public function it_raises_exception_running_where_without_a_value()
    {
        $this->filter_mock->shouldReceive('where')
                          ->with('column', 'value')
                          ->andReturnSelf()
                          ->once();

        $this->filter_builder->where('column', 'value')
                             ->andWhere('column');
    }

    /**
     * @test
     * @expectedException InvalidArgumentException
     */
    public function it_raises_exception_running_where_property_in_method_name_without_a_value()
    {
        $this->filter_builder->whereColumn();
    }

    // whereRaw

    /**
     * @test
     */
    public function it_runs_where_raw_methods()
    {
        $this->filter_mock->shouldReceive('whereRaw')
                          ->with("condition = 'value'")
                          ->andReturnSelf()
                          ->once();

        $this->filter_mock->shouldReceive('orderBy')
                          ->withAnyArgs()
                          ->never();

        $this->filter_mock->shouldReceive('set')
                          ->withAnyArgs()
                          ->never();

        $this->filter_mock->shouldReceive('where')
                          ->withAnyArgs()
                          ->never();

        $filter_builder = $this->filter_builder->whereRaw("condition = 'value'");

        $this->assertEquals($this->filter_builder, $filter_builder);
    }

    /**
     * @test
     */
    public function it_runs_and_where_raw_methods()
    {
        $this->filter_mock->shouldReceive('whereRaw')
                          ->with("condition1 = 'value1'")
                          ->andReturnSelf()
                          ->once();

        $this->filter_mock->shouldReceive('whereRaw')
                          ->with("condition2 = 'value2'", "and")
                          ->andReturnSelf()
                          ->once();

        $this->filter_mock->shouldReceive('whereRaw')
                          ->with("condition3 = 'value3'", "or")
                          ->andReturnSelf()
                          ->once();

        $this->filter_mock->shouldReceive('orderBy')
                          ->withAnyArgs()
                          ->never();

        $this->filter_mock->shouldReceive('set')
                          ->withAnyArgs()
                          ->never();

        $this->filter_mock->shouldReceive('where')
                          ->withAnyArgs()
                          ->never();

        $filter_builder = $this->filter_builder->whereRaw("condition1 = 'value1'")
                                               ->andWhereRaw("condition2 = 'value2'")
                                               ->orWhereRaw("condition3 = 'value3'");
        $this->assertEquals($this->filter_builder, $filter_builder);
    }

    /**
     * @test
     * @expectedException InvalidArgumentException
     */
    public function it_raises_exception_running_where_raw_with_out_a_condition()
    {
        $this->filter_mock->shouldReceive('whereRaw')
                          ->with("condition1 = 'value1'")
                          ->andReturnSelf()
                          ->once();

        $this->filter_builder->whereRaw("condition1 = 'value1'")
                             ->andWhereRaw();
    }

}
