<?php

namespace Spinen\ConnectWise\Generator\Processors;

use InvalidArgumentException;
use Mockery;
use Spinen\ConnectWise\TestFactory;

/**
 * Class AddTypeHintsTest
 *
 * @package Spinen\ConnectWise\Generator\Processors
 * @group   generator
 * @group   processors
 */
class AddTypeHintsTest extends BaseTest
{
    /**
     * @var Mockery\Mock
     */
    protected $class_name_getter_mock;

    /**
     * @var Mockery\Mock
     */
    protected $files_mock;

    /**
     * @var Mockery\Mock
     */
    protected $reflection_class_mock;

    /**
     * @var Mockery\Mock
     */
    protected $reflection_method_mock;

    /**
     * @var Mockery\Mock
     */
    protected $reflector_mock;

    protected function setUp()
    {
        parent::setUp();

        $this->setUpMocks();

        $this->processor = new AddTypeHints($this->reflector_mock, $this->files_mock, $this->class_name_getter_mock);
    }

    protected function setUpMocks()
    {
        $this->reflector_mock = TestFactory::mockClassReflector();

        $this->files_mock = TestFactory::mockFilesystem();

        $this->class_name_getter_mock = TestFactory::mockGetClassName();

        $this->reflection_class_mock = TestFactory::mockReflectionClass();

        $this->reflection_method_mock = TestFactory::mockReflectionMethod();
    }

    private function buildClass($parameters)
    {
        return <<< EOD
<?php

namespace Mocked\Namespace;

class SomeClass
{

{$this->buildDocComment($parameters)}
    public function method({$parameters})
    {
        return true;
    }

}

EOD;
    }

    private function buildDocComment($parameters)
    {
        // Convert the string of parameters to an array without any types
        $parameters = array_map(function ($parameter) {
            return preg_replace("/.*[^\\$](\\$.*)/u", "$1", $parameter);
        }, explode(', ', $parameters));

        $block = <<< EOD
    /**
     * This is the title
     *

EOD;
        $types = [
            '$array'        => 'array',
            '$array_of'     => 'ArrayOfSomething',
            '$bool'         => 'bool',
            '$bool'         => 'boolean',
            '$class'        => 'Class',
            '$float'        => 'float',
            '$int'          => 'int',
            '$integer'      => 'integer',
            '$nested_class' => '\Nested\Class',
            '$root_class'   => '\RootClass',
            '$root_class_b' => '\RootClass',
            '$string'       => 'string',
        ];

        foreach ($parameters as $parameter) {
            // make sure that we are only looking at the variable
            $parameter = preg_replace("/[^\\$]*(\\$[^\\s]+).*/u", "$1", $parameter);

            if (array_key_exists($parameter, $types)) {
                $block .= '     * @param ' . $types[$parameter] . ' ' . $parameter . PHP_EOL;
            }
        }

        return <<< EOD
{$block}     *
     * @return SomeOtherClass
     */
EOD;
    }

    private function runProcess($raw_parameters, $hinted_parameters, $return = true)
    {
        // process()
        $this->files_mock->shouldReceive('get')
                         ->with('/path/to/class.php')
                         ->andReturn($this->buildClass($raw_parameters))
                         ->once();

        // reflectClass()
        $this->class_name_getter_mock->shouldReceive('process')
                                     ->with(explode("\n", $this->buildClass($raw_parameters)))
                                     ->andReturn('\\Mocked\\Namespace\\SomeClass')
                                     ->once();

        $this->reflector_mock->shouldReceive('reflect')
                             ->with('\\Mocked\\Namespace\\SomeClass')
                             ->andReturn($this->reflection_class_mock)
                             ->once();

        // extractTypeHints()
        $this->reflection_class_mock->shouldReceive('getMethods')
                                    ->withNoArgs()
                                    ->andReturn([$this->reflection_method_mock])
                                    ->once();

        // pullNonScalarPropertiesFromDocBlock()
        $this->reflection_method_mock->shouldReceive('getDocComment')
                                     ->withNoArgs()
                                     ->andReturn($this->buildDocComment($raw_parameters))
                                     ->once();

        $this->reflection_method_mock->shouldReceive('getName')
                                     ->withNoArgs()
                                     ->andReturn('method');

        // back in process()
        if (!is_null($return)) {
            $this->files_mock->shouldReceive('put')
                             ->with('/path/to/class.php', $this->buildClass($hinted_parameters))
                             ->andReturn($return)
                             ->once();
        } else {
            $this->files_mock->shouldReceive('put')
                             ->with('/path/to/class.php', $this->buildClass($hinted_parameters))
                             ->never();
        }

        // This assert is not really doing too much as it is the return of the put mock above
        $this->assertEquals($return, $this->processor->process('/path/to/class.php'));
    }

    /**
     * @test
     */
    public function it_can_be_constructed()
    {
        $this->assertInstanceOf('Spinen\\ConnectWise\\Generator\\Processors\\AddTypeHints', $this->processor);
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
        $this->runProcess('$class', 'Class $class');
    }

    /**
     * @test
     */
    public function it_returns_the_expected_results_when_there_is_a_default_value()
    {
        $this->runProcess('$class = null', 'Class $class = null');
    }

    /**
     * @test
     */
    public function it_returns_the_expected_results_for_root_classes()
    {
        $this->runProcess('$root_class', '\RootClass $root_class');
    }

    /**
     * @test
     */
    public function it_returns_the_expected_results_for_root_double_classes()
    {
        $this->runProcess('$root_class, $root_class_b', '\RootClass $root_class, \RootClass $root_class_b');
    }

    /**
     * @test
     */
    public function it_returns_the_expected_results_for_nested_classes()
    {
        $this->runProcess('\Nested\Class $nested_class', '\Nested\Class $nested_class');
    }

    /**
     * @test
     */
    public function it_ignores_scalars()
    {
        $this->runProcess('$bool, $boolean, $float, $int, $integer, $string, $class',
            '$bool, $boolean, $float, $int, $integer, $string, Class $class');
    }

    /**
     * @test
     */
    public function it_adds_array_type_hints()
    {
        $this->runProcess('$array', 'array $array');
    }

    /**
     * @test
     */
    public function it_ignores_preexisting_array_type_hints()
    {
        $this->runProcess('array $array', 'array $array');
    }

    /**
     * @test
     */
    public function it_does_not_retype_hint_when_already_hinted()
    {
        $this->runProcess('Class $class', 'Class $class');
    }

    /**
     * @test
     */
    public function it_does_not_retype_hint_when_already_hinted_root_class()
    {
        $this->runProcess('\RootClass $root_class', '\RootClass $root_class');
    }

    /**
     * @test
     */
    public function it_does_not_retype_hint_when_already_hinted_double_root_class()
    {
        $this->runProcess('\RootClass $root_class, \RootClass $root_class_b',
            '\RootClass $root_class, \RootClass $root_class_b');
    }

    /**
     * @test
     */
    public function it_does_not_retype_hint_when_already_hinted_double_root_class_with_defaults()
    {
        $this->runProcess('\RootClass $root_class = null, \RootClass $root_class_b = null',
            '\RootClass $root_class = null, \RootClass $root_class_b = null');
    }

    /**
     * @test
     */
    public function it_does_not_type_hint_the_array_of_items()
    {
        $this->runProcess('$array_of', '$array_of', null);
    }

    /**
     * @test
     */
    public function it_does_not_write_a_file_that_had_no_updates()
    {
        $this->runProcess('$no_type_hints', '$no_type_$hints', null);
    }
}
