<?php

namespace Tests\Spinen\ConnectWise\Generator\Processors;

use InvalidArgumentException;
use Spinen\ConnectWise\Generator\Processors\DecipherDocBlock;

/**
 * Class DecipherDocBlockTest
 *
 * @package Tests\Spinen\ConnectWise\Generator\Processors
 * @group   generator
 * @group   processors
 */
class DecipherDocBlockTest extends BaseTest
{

    /**
     * @var \Spinen\ConnectWise\Generator\Processors\DecipherDocBlock
     */
    protected $processor;

    protected function setUp()
    {
        parent::setUp();

        $this->processor = new DecipherDocBlock();
    }

    protected function buildDoc($short = true, $long = true, $tags = true)
    {
        $doc = '/**' . PHP_EOL;

        if ($short) {
            $doc .= ' * This is the short description' . PHP_EOL;
        }

        // Cannot have a long without a short
        if ($short && $long) {
            $doc .= ' *' . PHP_EOL;
            $doc .= ' * This is the long description that' . PHP_EOL;
            $doc .= ' * spans some lines' . PHP_EOL;
        }

        if ($tags) {
            $doc .= ' *' . PHP_EOL;
            $doc .= ' * @param Parameters $parameters' . PHP_EOL;
            $doc .= ' * @param AnotherParameter|null $another_parameter' . PHP_EOL;
            $doc .= ' * @returns Response' . PHP_EOL;
        }

        $doc .= ' */' . PHP_EOL;

        return $doc;
    }

    protected function buildResponse($short = true, $long = true, $tags = true)
    {
        $response = [
            'short' => null,
            'long'  => [],
            'tags'  => [],
        ];

        if ($short) {
            $response['short'] = 'This is the short description';
        }

        // Cannot have a long without a short
        if ($short && $long) {
            $response['long'] = [
                0 => 'This is the long description that',
                1 => 'spans some lines',
            ];
        }

        if ($tags) {
            $response['tags'] = [
                '@param'   => [
                    '$parameters'        => 'Parameters',
                    '$another_parameter' => 'AnotherParameter|null'
                ],
                '@returns' => [
                    '' => 'Response',
                ]
            ];
        }

        return $response;
    }

    /**
     * @test
     */
    public function it_can_be_constructed()
    {
        $this->assertInstanceOf('Spinen\ConnectWise\Generator\Processors\DecipherDocBlock', $this->processor);
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
        $this->assertEquals($this->processor->process($this->buildDoc()), $this->buildResponse());
    }

    /**
     * @test
     */
    public function it_returns_null_for_short_if_it_is_not_provided()
    {
        $this->assertEquals($this->processor->process($this->buildDoc(false)), $this->buildResponse(false));
    }

    /**
     * @test
     */
    public function it_returns_null_for_long_if_it_is_not_provided()
    {
        $this->assertEquals($this->processor->process($this->buildDoc(true, false)), $this->buildResponse(true, false));
    }

    /**
     * @test
     */
    public function it_returns_null_for_tags_if_non_are_provided()
    {
        $this->assertEquals($this->processor->process($this->buildDoc(true, true, false)), $this->buildResponse(true, true, false));
    }

    /**
     * @test
     */
    public function it_returns_null_for_long_and_tags_if_neither_are_provided()
    {
        $this->assertEquals($this->processor->process($this->buildDoc(true, false, false)),
            $this->buildResponse(true, false, false));
    }

    /**
     * @test
     */
    public function it_returns_null_for_short_and_long_and_tags_if_none_are_provided()
    {
        $this->assertEquals($this->processor->process($this->buildDoc(false, false, false)),
            $this->buildResponse(false, false, false));
    }

}
