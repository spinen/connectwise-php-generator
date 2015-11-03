<?php

namespace Spinen\ConnectWise\Library\Results;

use Spinen\ConnectWise\BaseTest;

/**
 * Class CollectionTest
 *
 * @package Spinen\ConnectWise\Library\Support
 * @group   library
 * @group   results
 * @group   collections
 */
class CollectionTest extends BaseTest
{
    /**
     * @var Collection
     */
    protected $collection;

    protected function setUp()
    {
        parent::setUp();

        $this->collection = new Collection([
            'key' => 'value',
        ]);
    }

    /**
     * @test
     */
    public function it_can_be_constructed()
    {
        $this->assertInstanceOf('Spinen\\ConnectWise\\Library\\Results\\Collection', $this->collection);
    }

    /**
     * @test
     */
    public function it_gets_the_keys_as_a_property()
    {
        $this->assertEquals($this->collection['key'], $this->collection->key);
    }

    /**
     * @test
     * @expectedException InvalidArgumentException
     */
    public function it_raises_exception_when_asking_for_a_property_that_there_is_not_a_key()
    {
        $this->collection->does_not_exists;
    }
}
