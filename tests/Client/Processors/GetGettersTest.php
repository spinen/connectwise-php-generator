<?php

namespace Spinen\ConnectWise\Client\Processors;

use Mockery;
use ReflectionMethod;
use Spinen\ConnectWise\BaseTest;
use Spinen\ConnectWise\TestFactory;

/**
 * Class GetGettersTest
 *
 * @package Spinen\ConnectWise\Client\Processors
 * @group   client
 * @group   processors
 */
class GetGettersTest extends BaseTest
{
    /**
     * @var ConvertResponse
     */
    protected $getter;

    /**
     * @var Mockery\Mock
     */
    protected $reflecter_mock;

    /**
     *
     */
    protected function setUp()
    {
        parent::setUp();

        $this->setUpMocks();

        $this->getter = new GetGetters($this->reflecter_mock);
    }

    /**
     *
     */
    private function setUpMocks()
    {
        $this->reflecter_mock = TestFactory::mockClassReflector();
    }

    /**
     * @test
     */
    public function it_can_be_constructed()
    {
        $this->assertInstanceOf('Spinen\\ConnectWise\\Client\\Processors\\GetGetters', $this->getter);
    }

    /**
     * @test
     */
    public function it_returns_the_expected_results()
    {
        $expected = [
            'getArray',
            'getObject',
            'getString',
        ];

        // Just does not have "get" in it
        $methodThatIsNotAGetter = TestFactory::mockReflectionMethod();
        $methodThatIsNotAGetter->shouldReceive('getName')
                               ->withNoArgs()
                               ->andReturn('methodThatIsNotAGetter')
                               ->once();

        // Has "get" in the middle of the method name
        $forgetMethod = TestFactory::mockReflectionMethod();
        $forgetMethod->shouldReceive('getName')
                     ->withNoArgs()
                     ->andReturn('forgetMethod')
                     ->once();

        // Letter after "get" is not caps
        $getter = TestFactory::mockReflectionMethod();
        $getter->shouldReceive('getName')
               ->withNoArgs()
               ->andReturn('getter')
               ->once();

        $getArray = TestFactory::mockReflectionMethod();
        $getArray->shouldReceive('getName')
                 ->withNoArgs()
                 ->andReturn('getArray')
                 ->once();

        $getObject = TestFactory::mockReflectionMethod();
        $getObject->shouldReceive('getName')
                  ->withNoArgs()
                  ->andReturn('getObject')
                  ->once();

        $getString = TestFactory::mockReflectionMethod();
        $getString->shouldReceive('getName')
                  ->withNoArgs()
                  ->andReturn('getString')
                  ->once();

        $reflection_mock = TestFactory::mockReflectionClass();
        $reflection_mock->shouldReceive('getMethods')
                        ->with(ReflectionMethod::IS_PUBLIC)
                        ->andReturn([
                            $methodThatIsNotAGetter,
                            $forgetMethod,
                            $getter,
                            $getArray,
                            $getObject,
                            $getString,
                        ])
                        ->once();

        $this->reflecter_mock->shouldReceive('reflect')
                             ->with('SomeResultClass')
                             ->andReturn($reflection_mock)
                             ->once();

        $response = $this->getter->process('SomeResultClass');

        $this->assertEquals($expected, $response);
    }
}
