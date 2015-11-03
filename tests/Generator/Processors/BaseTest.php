<?php

namespace Spinen\ConnectWise\Generator\Processors;

use Mockery;
use Spinen\ConnectWise\BaseTest as BaseBaseTest;

/**
 * Class BaseTest
 *
 * @package Spinen\ConnectWise\Generator\Processors
 * @group   base
 * @group   generator
 * @group   processors
 */
class BaseTest extends BaseBaseTest
{
    /**
     * The processor that we are testing
     *
     * @var
     */
    protected $processor;

    /**
     * Stub the constructed test
     *
     * @test
     */
    public function it_can_be_constructed()
    {
        $this->assertTrue(true);
    }
}
