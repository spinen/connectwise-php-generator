<?php

namespace Spinen\ConnectWise\Library\Contracts;

use Spinen\ConnectWise\BaseTest;

/**
 * Class ProcessorStub
 *
 * @package Spinen\ConnectWise\Library\Contracts
 * @group   generator
 * @group   processors
 */
class ProcessorStub implements Processor
{
    public function process($item)
    {
        return $item;
    }
}

class ProcessorTest extends BaseTest
{
    /**
     * @var ProcessorStub
     */
    protected $processor;

    /**
     * @test
     */
    public function it_can_be_constructed()
    {
        $processor = new ProcessorStub();

        $this->assertInstanceOf('Spinen\ConnectWise\Library\Contracts\ProcessorStub', $processor);
    }
}
