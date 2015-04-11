<?php

namespace Tests\Spinen\ConnectWise\Generator\Processors;

use InvalidArgumentException;
use RuntimeException;
use Spinen\ConnectWise\Generator\Processors\GetClassName;

/**
 * Class GetClassNameTest
 *
 * @package Tests\Spinen\ConnectWise\Generator\Processors
 * @group   generator
 * @group   processors
 */
class GetClassNameTest extends BaseTest
{

    protected function setUp()
    {
        parent::setUp();

        $this->processor = new GetClassName();
    }

    private function buildContents()
    {
        $contents = [];

        $contents[] = '<?php';
        $contents[] .= 'namespace Some\Namespace';
        $contents[] .= null;
        $contents[] .= 'class SomeClass {';
        $contents[] .= null;
        $contents[] .= '    // Trying to trip up looking for class SomeOther';
        $contents[] .= '    public function class()';
        $contents[] .= '    {';
        $contents[] .= '        return';
        $contents[] .= '    }';
        $contents[] .= null;
        $contents[] .= '    //Trying to trip up looking for namespace SomeOther';
        $contents[] .= '    public function namespace()';
        $contents[] .= '    {';
        $contents[] .= '        return';
        $contents[] .= '    }';
        $contents[] .= null;
        $contents[] .= '}';

        return $contents;
    }

    /**
     * @test
     */
    public function it_can_be_constructed()
    {
        $this->assertInstanceOf('Spinen\ConnectWise\Generator\Processors\GetClassName', $this->processor);
    }

    /**
     * @test
     * @expectedException InvalidArgumentException
     */
    public function it_raises_exception_when_constructed_without_a_property()
    {
        $this->processor->process(null);
    }

    /**
     * @test
     * @expectedException InvalidArgumentException
     */
    public function it_raises_exception_when_constructed_with_something_other_than_an_array()
    {
        $this->processor->process("contents");
    }

    /**
     * @test
     */
    public function it_returns_the_expected_results()
    {
        $this->assertEquals('Some\\Namespace\\SomeClass', $this->processor->process($this->buildContents()));
    }

    /**
     * @test
     */
    public function it_returns_the_expected_results_when_no_namespace_set()
    {
        $contents = $this->buildContents();

        $contents = array_filter($contents, function ($line) {
            return (!preg_match("/^namespace/u", $line));
        });

        $this->assertEquals('SomeClass', $this->processor->process($contents));
    }

    /**
     * @test
     * @expectedException RuntimeException
     */
    public function it_raises_exception_when_no_class_set()
    {
        $contents = $this->buildContents();

        $contents = array_filter($contents, function ($line) {
            return (!preg_match("/^class/u", $line));
        });

        $this->assertEquals('SomeClass', $this->processor->process($contents));
    }

    /**
     * @test
     * @expectedException RuntimeException
     */
    public function it_raises_exception_when_there_are_more_than_one_classes()
    {
        $contents = $this->buildContents();

        $contents[] .= 'class SomeOtherClass { }';

        $this->processor->process($contents);
    }

    /**
     * @test
     * @expectedException RuntimeException
     */
    public function it_raises_exception_when_there_are_more_than_one_namespaces()
    {
        $contents = $this->buildContents();

        $contents[] .= 'namespace Some\Other\Namespace';

        $this->processor->process($contents);
    }

}
