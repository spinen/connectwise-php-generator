<?php

namespace Spinen\ConnectWise\Library\Results;

use Spinen\ConnectWise\BaseTest;
use Spinen\ConnectWise\Library\Results\ServiceTicketCollection as Collection;

class ServiceTicketCollectionTest extends BaseTest
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
        $this->assertInstanceOf('Spinen\\ConnectWise\\Library\\Results\\ServiceTicketCollection', $this->collection);
    }

    /**
     * @test
     */
    public function it_calculates_mttr_from_resolve_mins()
    {
        $this->collection->push(new ValueObject(['ResolveMins' => 10]));
        $this->collection->push(new ValueObject(['ResolveMins' => 20]));

        $expected = [
            "total_minutes" => 30,
            "total_tickets" => 2,
            "minutes"       => 15,
            "hours"         => .25,
        ];

        $this->assertEquals($expected, $this->collection->mttr());
    }

    /**
     * @test
     */
    public function it_does_not_try_to_divide_by_zero_when_calculating_mttr_with_no_tickets()
    {
        $expected = [
            "total_minutes" => 0,
            "total_tickets" => 0,
        ];

        $this->assertEquals($expected, $this->collection->mttr());
    }
}
