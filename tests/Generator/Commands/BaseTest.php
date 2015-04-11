<?php

namespace Tests\Spinen\ConnectWise\Generator\Commands;

use Mockery;
use Spinen\ConnectWise\Generator\Commands\Base;
use Tests\Spinen\ConnectWise\BaseTest as BaseBaseTest;
use Tests\Spinen\ConnectWise\TestFactory;

/**
 * Class BaseTest
 *
 * @package Tests\Spinen\ConnectWise\Generator\Commands
 * @group   base
 * @group   generator
 * @group   commands
 */
class BaseTest extends BaseBaseTest
{

    /**
     * The command that we are testing
     *
     * @var Base
     */
    protected $command;

    /**
     * Mock of the Generator
     *
     * @var Mockery\Mock
     */
    protected $generator_mock;

    /**
     * Mock of Input
     *
     * @var Mockery\Mock
     */
    protected $input_mock;

    /**
     * Mock of Output
     *
     * @var Mockery\Mock
     */
    protected $output_mock;

    /**
     * Set up the mock to bootstrap the command tests
     */
    protected function setUp()
    {
        $this->setupMocks();

        $this->setupDefaultMockedValues();

        parent::setUp();
    }

    /**
     * Mocks that are needed for all of the command tests
     */
    private function setupMocks()
    {
        $this->generator_mock = TestFactory::mockGenerator();

        $this->input_mock = TestFactory::mockInputArray();

        $this->output_mock = TestFactory::mockOutputConsole();
    }

    /**
     * Some default mocked values
     */
    private function setupDefaultMockedValues()
    {
        $this->generator_mock->shouldReceive('apiDirectory')
                             ->withNoArgs()
                             ->andReturn('Mocked' . DIRECTORY_SEPARATOR . 'Directory');

        $this->generator_mock->shouldReceive('apiNamespace')
                             ->withNoArgs()
                             ->andReturn('Mocked\\Namespace');
    }

    /**
     * @test
     */
    public function it_can_be_constructed()
    {
        $this->command = new Base($this->generator_mock, 'PHPUnit');

        $this->assertInstanceOf('Spinen\ConnectWise\Generator\Commands\Base', $this->command);
    }

}
