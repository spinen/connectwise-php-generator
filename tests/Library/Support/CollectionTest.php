<?php

namespace Tests\Spinen\ConnectWise\Library\Support;

use Spinen\ConnectWise\Library\Results\ValueObject;
use Spinen\ConnectWise\Library\Support\Collection;
use Tests\Spinen\ConnectWise\BaseTest;

/**
 * Class CollectionTest
 *
 * @package Tests\Spinen\ConnectWise\Library\Support
 * @group   library
 * @group   support
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

        $this->collection = new Collection();
    }

    /**
     * @test
     */
    public function it_can_be_constructed()
    {
        $this->assertInstanceOf('Spinen\\ConnectWise\\Library\\Support\\Collection', $this->collection);
    }

    /**
     * @test
     */
    public function it_calculates_average()
    {
        $this->collection->push(new ValueObject(['property' => 10]));
        $this->collection->push(new ValueObject(['property' => 20]));

        $expected = 15;

        $this->assertEquals($expected, $this->collection->average('property'));
    }

    /**
     * @test
     */
    public function it_does_not_try_to_divide_by_zero_when_calculating_average_with_properties()
    {
        $expected = null;

        $this->assertEquals($expected, $this->collection->average('property'));
    }

}
