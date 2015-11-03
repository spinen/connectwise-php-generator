<?php

namespace Spinen\ConnectWise;

use Mockery;
use PHPUnit_Framework_TestCase;

/**
 * Class BaseTest
 *
 * @package Spinen\ConnectWise
 * @group   base
 */
class BaseTest extends PHPUnit_Framework_TestCase
{
    protected function tearDown()
    {
        Mockery::close();

        parent::tearDown();
    }

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
