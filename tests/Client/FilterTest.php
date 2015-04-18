<?php

namespace Tests\Spinen\ConnectWise\Client;

use Carbon\Carbon;
use InvalidArgumentException;
use Mockery;
use Spinen\ConnectWise\Client\Filter;
use Tests\Spinen\ConnectWise\BaseTest;

/**
 * Class FilterTest
 *
 * @package Tests\Spinen\ConnectWise\Client
 * @group   client
 * @group   filter
 */
class FilterTest extends BaseTest
{

    /**
     * @var Filter
     */
    protected $filter;

    /**
     *
     */
    protected function setUp()
    {
        parent::setUp();

        $this->filter = new Filter();
    }

    /**
     * @test
     */
    public function it_can_be_constructed_with_good_values()
    {
        $this->assertInstanceOf('Spinen\\ConnectWise\\Client\\Filter', $this->filter);
    }

    /**
     * @test
     */
    public function it_returns_the_number_of_filters()
    {
        $this->assertEquals(0, $this->filter->count());
        $this->assertEquals(0, count($this->filter));

        $this->filter->set('test', 'value');

        $this->assertEquals(1, $this->filter->count());
        $this->assertEquals(1, count($this->filter));
    }

    /**
     * @test
     */
    public function it_deletes_a_filter()
    {
        $this->filter->set('test', 'value');

        $this->assertArrayHasKey('Test', $this->filter->getFilter());

        $this->filter->delete('test');

        $this->assertArrayNotHasKey('Test', $this->filter->getFilter());
    }

    /**
     * @test
     */
    public function it_returns_the_filter()
    {
        $this->assertEquals([], $this->filter->getFilter());
    }

    /**
     * @test
     */
    public function it_returns_a_filter_when_passed()
    {
        $this->filter->set('test', 1);

        $this->assertEquals(1, $this->filter->getFilter('test'));
    }

    /**
     * @test
     * @expectedException InvalidArgumentException
     */
    public function it_returns_raises_an_exception_when_passed_in_filter_does_not_exist()
    {
        $this->filter->getFilter('test');
    }

    /**
     * @test
     */
    public function it_returns_the_array_of_operators()
    {
        $operators = [
            '!='       => 'NotEquals',
            '<='       => 'LessThanEquals',
            '>='       => 'GreaterThanEquals',
            '='        => 'Equals',
            '<'        => 'LessThan',
            '>'        => 'GreaterThan',
            'contains' => 'Contains',
            'like'     => 'Like',
        ];

        foreach ($operators as $operator => $description) {
            $this->assertArraySubset([$operator => $description], $this->filter->getOperators());
        }

        $this->assertEquals(count($operators), count($this->filter->getOperators()));
    }

    /**
     * @test
     */
    public function it_knows_if_filter_is_set()
    {
        $this->assertFalse($this->filter->hasFilter('test'));

        $this->filter->set('test', 'value');

        $this->assertTrue($this->filter->hasFilter('test'));
    }

    /**
     * @test
     */
    public function it_knows_the_core_methods()
    {
        $core_methods = ['set', 'orderBy', 'where', 'whereRaw'];

        array_map(function ($method) {
            $this->assertTrue($this->filter->isCoreMethod($method));
        }, $core_methods);

        $this->assertFalse($this->filter->isCoreMethod('noneCore'));
    }

    /**
     * @test
     */
    public function it_acts_like_an_array()
    {
        // NOTE: You cannot use array_key_exists as it will not call offsetExists
        $this->assertFalse(isset($this->filter['test']));

        $this->filter['test'] = 1;

        $this->assertTrue(isset($this->filter['test']));

        $this->assertEquals(1, $this->filter['test']);

        unset($this->filter['test']);

        $this->assertFalse(array_key_exists('test', $this->filter));
    }

    /**
     * @test
     */
    public function it_builds_order_by_filter()
    {
        $this->assertEquals($this->filter, $this->filter->orderBy('column'));

        $this->assertEquals(['OrderBy' => 'Column asc'], $this->filter->getFilter());
    }

    /**
     * @test
     */
    public function it_enforces_case_on_order_when_building_order_by()
    {
        $this->assertEquals($this->filter, $this->filter->orderBy('column', 'DESC'));

        $this->assertEquals(['OrderBy' => 'Column desc'], $this->filter->getFilter());
    }

    /**
     * @test
     */
    public function it_chains_order_by_calls()
    {
        $this->assertEquals($this->filter, $this->filter->orderBy('column1'));

        $this->assertEquals($this->filter, $this->filter->orderBy('column2', 'desc', 'and'));

        $this->assertEquals(['OrderBy' => 'Column1 asc, Column2 desc'], $this->filter->getFilter());
    }

    /**
     * @test
     */
    public function it_resets_the_chain_if_chained_does_not_pass_logical_order_by_calls()
    {
        $this->assertEquals($this->filter, $this->filter->orderBy('column1'));

        $this->assertEquals($this->filter, $this->filter->orderBy('column2', 'desc'));

        $this->assertEquals(['OrderBy' => 'Column2 desc'], $this->filter->getFilter());
    }

    /**
     * @test
     * @expectedException InvalidArgumentException
     */
    public function it_raises_an_exception_when_building_order_by_without_a_column()
    {
        $this->filter->orderBy(null);
    }

    /**
     * @test
     * @expectedException InvalidArgumentException
     */
    public function it_raises_an_exception_when_building_order_by_with_an_unknown_order()
    {
        $this->filter->orderBy('column', 'whatever');
    }

    /**
     * @test
     * @expectedException InvalidArgumentException
     */
    public function it_raises_an_exception_when_building_order_by_with_an_unknown_logical()
    {
        $this->filter->orderBy('column', 'value', 'xor');
    }

    /**
     * @test
     */
    public function it_properly_escapes_an_array_when_setting_it_and_returns_itself()
    {
        $this->assertEquals($this->filter, $this->filter->set('array', ['One', 'Two']));

        $this->assertEquals(['Array' => ['One', 'Two']], $this->filter->getFilter());
    }

    /**
     * @test
     */
    public function it_properly_escapes_a_true_bool_when_setting_it_and_returns_itself()
    {
        $this->assertEquals($this->filter, $this->filter->set('bool', true));

        $this->assertEquals(['Bool' => 'true'], $this->filter->getFilter());
    }

    /**
     * @test
     */
    public function it_properly_escapes_a_false_bool_when_setting_it_and_returns_itself()
    {
        $this->assertEquals($this->filter, $this->filter->set('bool', false));

        $this->assertEquals(['Bool' => 'false'], $this->filter->getFilter());
    }

    /**
     * @test
     */
    public function it_properly_escapes_a_date_when_setting_it_and_returns_itself()
    {
        $now = Carbon::now();

        $this->assertEquals($this->filter, $this->filter->set('date', $now));

        $this->assertEquals(['Date' => "[" . $now->toIso8601String() . "]"], $this->filter->getFilter());
    }

    /**
     * @test
     */
    public function it_properly_escapes_an_integer_when_setting_it_and_returns_itself()
    {
        $this->assertEquals($this->filter, $this->filter->set('integer', 1));

        $this->assertEquals(['Integer' => 1], $this->filter->getFilter());
    }

    /**
     * @test
     */
    public function it_properly_escapes_a_null_when_setting_it_and_returns_itself()
    {
        $this->assertEquals($this->filter, $this->filter->set('null', null));

        $this->assertEquals(['Null' => "null"], $this->filter->getFilter());
    }

    /**
     * @test
     */
    public function it_properly_escapes_a_string_when_setting_it_and_returns_itself()
    {
        $this->assertEquals($this->filter, $this->filter->set('string', "value's"));

        $this->assertEquals(['String' => "'value\\'s'"], $this->filter->getFilter());
    }

    /**
     * @test
     * @expectedException InvalidArgumentException
     */
    public function it_raises_exception_when_passing_an_invalid_filter_name()
    {
        $this->filter->set(null, 'value');
    }

    /**
     * @test
     */
    public function it_builds_where_filter()
    {
        $this->assertEquals($this->filter, $this->filter->where('column', 'value'));

        $this->assertEquals(['Conditions' => "Column = 'value'"], $this->filter->getFilter());
    }

    /**
     * @test
     */
    public function it_chains_where_calls()
    {
        $this->assertEquals($this->filter, $this->filter->where('column1', 'value1'));

        $this->assertEquals($this->filter, $this->filter->where('column2', 'value2', '>=', 'and'));

        $this->assertEquals(['Conditions' => "Column1 = 'value1' AND Column2 >= 'value2'"], $this->filter->getFilter());
    }

    /**
     * @test
     */
    public function it_resets_the_where_chain_if_chained_does_not_pass_logical_order_by_calls()
    {
        $this->assertEquals($this->filter, $this->filter->where('column1', 'value1'));

        $this->assertEquals($this->filter, $this->filter->where('column2', 'value2', '>='));

        $this->assertEquals(['Conditions' => "Column2 >= 'value2'"], $this->filter->getFilter());
    }

    /**
     * @test
     * @expectedException InvalidArgumentException
     */
    public function it_raises_an_exception_when_building_where_without_a_column()
    {
        $this->filter->where(null, 'value');
    }

    /**
     * @test
     * @expectedException InvalidArgumentException
     */
    public function it_raises_an_exception_when_building_where_with_an_unknown_operator()
    {
        $this->filter->where('column', 'value', '~');
    }

    /**
     * @test
     * @expectedException InvalidArgumentException
     */
    public function it_raises_an_exception_when_building_where_with_an_unknown_logical()
    {
        $this->filter->where('column', 'value', '=', 'xor');
    }

    /**
     * @test
     */
    public function it_builds_where_raw_filter()
    {
        $this->assertEquals($this->filter, $this->filter->whereRaw("condition = 'value'"));

        $this->assertEquals(['Conditions' => "condition = 'value'"], $this->filter->getFilter());
    }

    /**
     * @test
     */
    public function it_chains_where_raw_calls()
    {
        $this->assertEquals($this->filter, $this->filter->whereRaw("condition = 'value1'"));

        $this->assertEquals($this->filter, $this->filter->whereRaw("condition = 'value2'", 'and'));

        $this->assertEquals(['Conditions' => "condition = 'value1' AND condition = 'value2'"],
            $this->filter->getFilter());
    }

    /**
     * @test
     */
    public function it_resets_the_where_raw_chain_if_chained_does_not_pass_logical_order_by_calls()
    {
        $this->assertEquals($this->filter, $this->filter->whereRaw("condition = 'value1'"));

        $this->assertEquals($this->filter, $this->filter->whereRaw("condition = 'value2'"));

        $this->assertEquals(['Conditions' => "condition = 'value2'"], $this->filter->getFilter());
    }

    /**
     * @test
     * @expectedException InvalidArgumentException
     */
    public function it_raises_an_exception_when_building_where_raw_without_a_condition()
    {
        $this->filter->whereRaw(null, 'value');
    }

    /**
     * @test
     * @expectedException InvalidArgumentException
     */
    public function it_raises_an_exception_when_building_where_raw_with_an_unknown_operator()
    {
        $this->filter->whereRaw("condition = value'", 'value', '~');
    }

    /**
     * @test
     * @expectedException InvalidArgumentException
     */
    public function it_raises_an_exception_when_building_where_raw_with_an_unknown_logical()
    {
        $this->filter->whereRaw("condition = value'", 'xor');
    }

}
