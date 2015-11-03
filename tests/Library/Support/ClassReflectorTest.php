<?php

namespace Spinen\ConnectWise\Library\Support;

use Spinen\ConnectWise\BaseTest;
use stdClass;

/**
 * Class ClassReflectorTest
 *
 * @package Spinen\ConnectWise\Library\Support
 * @group   library
 * @group   support
 * @group   reflectors
 */
class ClassReflectorTest extends BaseTest
{
    /**
     * @var ClassReflector
     */
    protected $reflector;

    protected function setUp()
    {
        parent::setUp();

        $this->reflector = new ClassReflector();
    }

    /**
     * @test
     */
    public function it_can_be_constructed()
    {
        $this->assertInstanceOf('Spinen\\ConnectWise\\Library\\Support\\ClassReflector', $this->reflector);
    }

    /**
     * @test
     * @expectedException InvalidArgumentException
     */
    public function it_raises_exception_when_constructed_without_a_string()
    {
        $this->reflector->reflect(null);
    }

    /**
     * @test
     * @expectedException InvalidArgumentException
     */
    public function it_raises_exception_when_constructed_with_something_other_than_a_string()
    {
        $this->reflector->reflect([]);
    }

    /**
     * @test
     */
    public function it_returns_the_expected_results()
    {
        $this->assertInstanceOf('ReflectionClass', $this->reflector->reflect('stdClass'));

        $class = new stdClass();

        $this->assertInstanceOf('ReflectionClass', $this->reflector->reflect($class));
    }
}
