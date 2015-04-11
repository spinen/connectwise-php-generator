<?php

namespace Tests\Spinen\ConnectWise\Generator\Processors;

use Spinen\ConnectWise\Generator\Processors\ClassReflector;

/**
 * Class ClassReflectorTest
 *
 * @package Tests\Spinen\ConnectWise\Generator\Processors
 * @group   generator
 * @group   processors
 */
class ClassReflectorTest extends BaseTest
{

    protected function setUp()
    {
        parent::setUp();

        $this->processor = new ClassReflector();
    }

    /**
     * @test
     */
    public function it_can_be_constructed()
    {
        $this->assertInstanceOf('Spinen\\ConnectWise\\Generator\\Processors\\ClassReflector', $this->processor);
    }

    /**
     * @test
     * @expectedException InvalidArgumentException
     */
    public function it_raises_exception_when_constructed_without_a_string()
    {
        $this->processor->process(null);
    }

    /**
     * @test
     * @expectedException InvalidArgumentException
     */
    public function it_raises_exception_when_constructed_with_something_other_than_a_string()
    {
        $this->processor->process([]);
    }

    /**
     * @test
     */
    public function it_returns_the_expected_results()
    {
        $this->assertInstanceOf('ReflectionClass', $this->processor->process('stdClass'));
    }

}
