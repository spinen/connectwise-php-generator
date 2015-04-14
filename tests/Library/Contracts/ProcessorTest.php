<?php

namespace Tests\Spinen\ConnectWise\Library\Contracts;

use Spinen\ConnectWise\Library\Contracts\Processor;
use Tests\Spinen\ConnectWise\BaseTest;

/**
 * Class ProcessorStub
 *
 * @package Tests\Spinen\ConnectWise\Library\Contracts
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

        $this->assertInstanceOf('Tests\Spinen\ConnectWise\Library\Contracts\ProcessorStub', $processor);
    }

}
