<?php

namespace Tests\Spinen\ConnectWise\Library\Results;

use Spinen\ConnectWise\Library\Results\ValueObject;
use Tests\Spinen\ConnectWise\BaseTest;

/**
 * Class ValueObjectTest
 *
 * @package Tests\Spinen\ConnectWise\Library\Results
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

        $this->value_object = new ValueObject();
    }

    /**
     * @test
     */
    public function it_can_be_constructed()
    {
        $this->assertInstanceOf('Spinen\\ConnectWise\\Library\\Results\\ValueObject', $this->value_object);
    }

}
