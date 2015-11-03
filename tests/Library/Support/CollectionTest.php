<?php

namespace Spinen\ConnectWise\Library\Support;

use Spinen\ConnectWise\BaseTest;

/**
 * Class CollectionTest
 *
 * @package Spinen\ConnectWise\Library\Support
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
}
