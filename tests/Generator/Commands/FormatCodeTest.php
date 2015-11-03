<?php

namespace Spinen\ConnectWise\Generator\Commands;

use Mockery;
use Spinen\ConnectWise\TestFactory;

/**
 * Class FormatCodeTest
 *
 * @package Spinen\ConnectWise\Generator\Commands
 * @group   generator
 * @group   commands
 */
class FormatCodeTest extends BaseTest
{
    /**
     * @var Mockery\Mock
     */
    protected $files_mock;

    /**
     * @var Mockery\Mock
     */
    protected $request_mock;

    /**
     * @var Mockery\Mock
     */
    protected $response_mock;

    protected function setUp()
    {
        parent::setUp();

        $this->setUpMocks();

        $this->command = new FormatCode($this->generator_mock, null, $this->files_mock, $this->request_mock);
    }

    private function setUpMocks()
    {
        $this->files_mock = TestFactory::mockFilesystem();

        $this->request_mock = TestFactory::mockRequest();

        $this->response_mock = TestFactory::mockResponse();

        $this->generator_mock->shouldReceive('apiDirectory')
                             ->with(null, false, true)
                             ->andReturn('mocked/directory')
                             ->once();
    }

    /**
     * @test
     */
    public function it_can_be_constructed()
    {
        $this->assertInstanceOf('Spinen\\ConnectWise\\Generator\\Commands\\FormatCode', $this->command);
    }

    /**
     * @test
     */
    public function it_processes_default_directory_when_no_flags_are_passed()
    {
        $this->beginExecute();

        // determineFiles()
        $this->input_mock->shouldReceive('hasOption')
                         ->with('file')
                         ->andReturn(false)
                         ->once();

        $this->input_mock->shouldReceive('getOption')
                         ->with('file')
                         ->never();

        $this->generator_mock->shouldReceive('generatedDirectory')
                             ->withArgs(['*.php', false])
                             ->andReturn('Mocked/Directory/*.php')
                             ->twice();

        $this->output_mock->shouldReceive('writeln')
                          ->with("<info>Formatting code in Mocked/Directory/*.php</info>")
                          ->once();

        $this->files_mock->shouldReceive('glob')
                         ->with('Mocked/Directory/*.php')
                         ->andReturn(['Mocked/Directory/One.php'])
                         ->once();

        $this->request_mock->shouldReceive('setCommand')
                           ->with('vendor/bin/fmt.php --constructor=camel --enable_auto_align --no-backup --psr --setters_and_getters=camel --smart_linebreak_after_curly --visibility_order Mocked/Directory/One.php')
                           ->andReturn($this->request_mock)
                           ->once();

        $this->endExecute();

        $this->command->execute($this->input_mock, $this->output_mock);
    }

    /**
     * @test
     */
    public function it_processes_a_passed_in_file()
    {
        $this->beginExecute();

        // determineFiles()
        $this->input_mock->shouldReceive('hasOption')
                         ->with('file')
                         ->andReturn(true)
                         ->once();

        $this->input_mock->shouldReceive('getOption')
                         ->with('file')
                         ->andReturn('Mocked/Directory/File.php')
                         ->times(3);

        $this->output_mock->shouldReceive('writeln')
                          ->with("<info>Formatting Mocked/Directory/File.php</info>")
                          ->once();

        $this->generator_mock->shouldReceive('generatedDirectory')
                             ->withAnyArgs()
                             ->never();

        $this->output_mock->shouldReceive('writeln')
                          ->with("<info>Formatting code in Mocked/Directory/*.php</info>")
                          ->never();

        $this->files_mock->shouldReceive('glob')
                         ->withAnyArgs()
                         ->never();

        $this->request_mock->shouldReceive('setCommand')
                           ->with('vendor/bin/fmt.php --constructor=camel --enable_auto_align --no-backup --psr --setters_and_getters=camel --smart_linebreak_after_curly --visibility_order Mocked/Directory/File.php')
                           ->andReturn($this->request_mock)
                           ->once();

        $this->endExecute();

        $this->command->execute($this->input_mock, $this->output_mock);
    }

    private function beginExecute()
    {
        // execute()
        $this->output_mock->shouldReceive('writeln')
                          ->with("<info>Formatting generated code...</info>")
                          ->once();

        $this->generator_mock->shouldReceive('vendorDirectory')
                             ->with("bin/fmt.php")
                             ->andReturn("vendor/bin/fmt.php")
                             ->once();

        $this->input_mock->shouldReceive('getOption')
                         ->with('directory')
                         ->andReturn('api/folder');

        $this->generator_mock->shouldReceive('setAndMakeApiDirectory')
                             ->with('api/folder', false, $this->output_mock)
                             ->andReturnSelf()
                             ->once();
    }

    private function endExecute()
    {
        $this->request_mock->shouldReceive('run')
                           ->with(500, 500)
                           ->andReturn($this->response_mock)
                           ->once();

        $this->response_mock->shouldReceive('getSuccessful')
                            ->withNoArgs()
                            ->andReturn(true)
                            ->once();

        $this->response_mock->shouldReceive('getResponse')
                            ->withNoArgs()
                            ->andReturn("Response")
                            ->once();

        $this->output_mock->shouldReceive('writeln')
                          ->with("<comment>Response</comment>")
                          ->once();
    }
}
