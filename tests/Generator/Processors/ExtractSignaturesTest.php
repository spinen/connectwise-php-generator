<?php

namespace Tests\Spinen\ConnectWise\Generator\Processors;

use Mockery;
use InvalidArgumentException;
use Spinen\ConnectWise\Generator\Processors\ExtractSignatures;
use Tests\Spinen\ConnectWise\TestFactory;

/**
 * Class ExtractSignaturesTest
 *
 * @package Tests\Spinen\ConnectWise\Generator\Processors
 * @group   generator
 * @group   processors
 */
class ExtractSignaturesTest extends BaseTest
{

    /**
     * @var Mockery\Mock
     */
    protected $class_name_getter_mock;

    /**
     * @var Mockery\Mock
     */
    protected $decipher_mock;

    /**
     * @var Mockery\Mock
     */
    protected $reflector_mock;

    /**
     * @var Mockery\Mock
     */
    protected $reflection_mock;

    protected function setUp()
    {
        parent::setUp();

        $this->setUpMocks();

        $this->processor = new ExtractSignatures($this->reflector_mock, $this->decipher_mock,
            $this->class_name_getter_mock);
    }

    protected function setUpMocks()
    {
        $this->decipher_mock = TestFactory::mockDecipherDocBlock();
        $this->decipher_mock->shouldReceive('process')
                            ->withAnyArgs()
                            ->andReturn('Results from DecipherDocBlock');

        $this->reflection_mock = TestFactory::mockReflectionClass();
        $this->reflection_mock->shouldReceive('getMethods')
                              ->withAnyArgs()
                              ->andReturn([
                                  TestFactory::makeClass([
                                      'class' => 'Some\Namespace\SomeClass',
                                      'name'  => '__constructor'
                                  ], [
                                      'getDocComment' => '/** Comment */'
                                  ]),
                                  TestFactory::makeClass([
                                      'class' => 'Some\Namespace\SomeClass',
                                      'name'  => 'MethodOne'
                                  ], [
                                      'getDocComment' => '/** Comment */'
                                  ]),
                                  TestFactory::makeClass([
                                      'class' => 'Some\Namespace\ParentClass',
                                      'name'  => 'BaseMethod'
                                  ], [
                                      'getDocComment' => '/** Comment */'
                                  ]),
                              ]);
        $this->reflection_mock->shouldReceive('getShortName')
                              ->withNoArgs()
                              ->andReturn('SomeClass');

        $this->reflector_mock = TestFactory::mockClassReflector();
        $this->reflector_mock->shouldReceive('process')
                             ->withAnyArgs()
                             ->andReturn($this->reflection_mock);

        $this->class_name_getter_mock = TestFactory::mockGetClassName();
    }

    private function buildContents()
    {
        $contents = '<?php' . PHP_EOL;
        $contents .= 'namespace Some\Namespace' . PHP_EOL;
        $contents .= PHP_EOL;
        $contents .= 'class SomeClass {' . PHP_EOL;
        $contents .= '}' . PHP_EOL;

        return $contents;
    }

    private function buildResponse()
    {
        return [
            // signature combination of class & file in camelCase
            'someClassMethodOne' => [
                'class'  => 'SomeClass',
                'method' => 'MethodOne',
                // This just needs to be here for the test, as it's output is already tested
                'doc'    => 'Results from DecipherDocBlock',
            ],
            // No magic methods or inherited methods
        ];
    }

    /**
     * @test
     */
    public function it_can_be_constructed()
    {
        $this->assertInstanceOf('Spinen\ConnectWise\Generator\Processors\ExtractSignatures', $this->processor);
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
        $this->class_name_getter_mock->shouldReceive('process')
                                     ->with(explode("\n", $this->buildContents()))
                                     ->andReturn('Some\\Namespace\\SomeClass')
                                     ->once();

        $this->assertEquals($this->buildResponse(), $this->processor->process($this->buildContents()));
    }

}
