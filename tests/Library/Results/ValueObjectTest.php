<?php

namespace Spinen\ConnectWise\Library\Results;

use Spinen\ConnectWise\BaseTest;
use Spinen\ConnectWise\Library\Stubs\ValueObjectStub;

/**
 * Class ValueObjectTest
 *
 * @package Spinen\ConnectWise\Library\Results
 * @group   library
 * @group   results
 * @group   value_objects
 */
class ValueObjectTest extends BaseTest
{
    /**
     * @var Collection
     */
    protected $value_object;

    protected function setUp()
    {
        parent::setUp();

        $this->value_object = new ValueObject([
            'key' => 'value',
        ]);
    }

    /**
     * @test
     */
    public function it_can_be_constructed()
    {
        $this->assertInstanceOf('Spinen\\ConnectWise\\Library\\Results\\ValueObject', $this->value_object);
    }

    /**
     * @test
     */
    public function it_returns_the_expected_results()
    {
        $this->assertEquals('value', $this->value_object->key);

        $this->assertEquals('value', $this->value_object['key']);
    }

    /**
     * @test
     */
    public function it_returns_the_results_of_a_get_attribute_method_if_it_exist()
    {

        $value_object = new ValueObjectStub([
            'key' => 'value',
        ]);

        $this->assertEquals('getter value', $value_object->key);

        $this->assertEquals('getter value', $value_object['key']);
    }
}
