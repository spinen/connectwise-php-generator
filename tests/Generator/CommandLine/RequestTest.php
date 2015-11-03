<?php

namespace Spinen\Generator\CommandLine;

use Mockery;
use Spinen\ConnectWise\BaseTest;
use Spinen\ConnectWise\Generator\CommandLine\Request;
use Spinen\ConnectWise\TestFactory;

/**
 * Class RequestTest
 *
 * @package Spinen\Generator\CommandLine
 * @group   generator
 * @group   command_line
 */
class RequestTest extends BaseTest
{
    /**
     * Mock of the Generator
     *
     * @var Mockery\Mock
     */
    protected $generator_mock;

    /**
     * Mock of the Process
     *
     * @var Mockery\Mock
     */
    protected $process_mock;

    /**
     * The request object under test
     *
     * @var Request
     */
    protected $request;

    /**
     * Set up the mock to bootstrap the command tests
     */
    protected function setUp()
    {
        $this->generator_mock = TestFactory::mockGenerator();

        $this->process_mock = TestFactory::mockProcess();

        $this->request = new Request($this->generator_mock);

        parent::setUp();
    }

    private function setUpRequest()
    {
        $this->generator_mock->shouldReceive('add')
                             ->withAnyArgs()
                             ->once();

        $this->generator_mock->shouldReceive('get')
                             ->with('Symfony\\Component\\Process\\Process')
                             ->andReturn($this->process_mock)
                             ->once();

        $this->request = $this->request->setCommand('some_command');
    }

    private function setUpRun()
    {
        $this->process_mock->shouldReceive('setTimeout')
                           ->with(60)
                           ->andReturnSelf()
                           ->once();

        $this->process_mock->shouldReceive('setIdleTimeout')
                           ->with(60)
                           ->andReturnSelf()
                           ->once();

        $this->process_mock->shouldReceive('run')
                           ->withNoArgs()
                           ->andReturnSelf()
                           ->once();
    }

    /**
     * @test
     */
    public function it_can_be_constructed()
    {
        $this->assertInstanceOf('Spinen\\ConnectWise\\Generator\\CommandLine\\Request', $this->request);
    }

    /**
     * @test
     */
    public function it_returns_builds_a_process_and_returns_itself_on_setCommand()
    {
        $this->setUpRequest();

        $this->assertInstanceOf('Spinen\\ConnectWise\\Generator\\CommandLine\\Request', $this->request);
    }

    /**
     * @test
     */
    public function it_runs_the_command()
    {
        $this->setUpRequest();

        $this->setUpRun();

        $this->process_mock->shouldReceive('getCommandLine')
                           ->withNoArgs()
                           ->andReturn('Command')
                           ->once();

        $this->process_mock->shouldReceive('getExitCode')
                           ->withNoArgs()
                           ->andReturn(0)
                           ->once();

        $this->process_mock->shouldReceive('isSuccessful')
                           ->withNoArgs()
                           ->andReturn(true)
                           ->twice();

        $this->process_mock->shouldReceive('getOutput')
                           ->withNoArgs()
                           ->andReturn('Response')
                           ->once();

        $this->process_mock->shouldReceive('getErrorOutput')
                           ->never();

        $this->assertInstanceOf('Spinen\\ConnectWise\\Generator\\CommandLine\\Response', $this->request->run());
    }

    /**
     * @test
     */
    public function it_runs_the_command_and_tracks_error()
    {
        $this->setUpRequest();

        $this->setUpRun();

        $this->process_mock->shouldReceive('getCommandLine')
                           ->withNoArgs()
                           ->andReturn('Command')
                           ->once();

        $this->process_mock->shouldReceive('getExitCode')
                           ->withNoArgs()
                           ->andReturn(0)
                           ->once();

        $this->process_mock->shouldReceive('isSuccessful')
                           ->withNoArgs()
                           ->andReturn(false)
                           ->twice();

        $this->process_mock->shouldReceive('getOutput')
                           ->never();

        $this->process_mock->shouldReceive('getErrorOutput')
                           ->withNoArgs()
                           ->andReturn('Error')
                           ->once();

        $this->assertInstanceOf('Spinen\\ConnectWise\\Generator\\CommandLine\\Response', $this->request->run());
    }
}
