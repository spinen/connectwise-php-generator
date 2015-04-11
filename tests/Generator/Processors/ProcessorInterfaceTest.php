<?php

namespace Tests\Spinen\ConnectWise\Generator\Processors;

use Spinen\ConnectWise\Generator\Processors\ProcessorInterface;

/**
 * Class ProcessorStub
 *
 * @package Tests\Spinen\ConnectWise\Generator\Processors
 * @group   generator
 * @group   processors
 */
class ProcessorStub implements ProcessorInterface
{

    public function process($item)
    {
        return $item;
    }

}

class ProcessorInterfaceTest extends BaseTest
{

    /**
     * @test
     */
    public function it_can_be_constructed()
    {
        $processor = new ProcessorStub();

        $this->assertInstanceOf('Tests\Spinen\ConnectWise\Generator\Processors\ProcessorStub', $processor);
    }

}
