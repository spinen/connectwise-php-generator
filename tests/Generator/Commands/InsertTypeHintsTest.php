<?php

namespace Tests\Spinen\ConnectWise\Generator\Commands;

use Mockery;
use Spinen\ConnectWise\Generator\Commands\InsertTypeHints;
use Tests\Spinen\ConnectWise\TestFactory;

/**
 * Class InsertTypeHintsTest
 *
 * @package Tests\Spinen\ConnectWise\Generator\Commands
 * @group   generator
 * @group   commands
 */
class InsertTypeHintsTest extends BaseTest
{

    /**
     * @var Mockery\Mock
     */
    protected $files_mock;

    /**
     * @var Mockery\Mock
     */
    protected $type_hinter_mock;

    protected function setUp()
    {
        parent::setUp();

        $this->setUpMocks();

        $this->command = new InsertTypeHints($this->generator_mock, null, $this->type_hinter_mock, $this->files_mock);
    }

    private function setUpMocks()
    {
        $this->files_mock = TestFactory::mockFilesystem();

        $this->type_hinter_mock = TestFactory::mockAddTypeHints();

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
        $this->assertInstanceOf('Spinen\\ConnectWise\\Generator\\Commands\\InsertTypeHints', $this->command);
    }

    /**
     * @test
     */
    public function it_processes_the_api_files_correctly()
    {
        // execute()
        $this->output_mock->shouldReceive('writeln')
                          ->with("<info>Adding type hints to generated code...</info>")
                          ->once();

        $this->input_mock->shouldReceive('getOption')
                         ->with('directory')
                         ->andReturn('api/folder');

        $this->generator_mock->shouldReceive('setAndMakeApiDirectory')
                             ->with('api/folder', false, $this->output_mock)
                             ->andReturnSelf()
                             ->once();

        $this->generator_mock->shouldReceive('generatedDirectory')
                             ->with('*.php', false)
                             ->andReturn('/path/to/api/folder/Generated/*.php')
                             ->once();

        $this->files_mock->shouldReceive('glob')
                         ->with('/path/to/api/folder/Generated/*.php')
                         ->andReturn([
                             '/path/to/api/folder/Generated/File.php',
                         ])
                         ->once();

        $this->output_mock->shouldReceive('writeln')
                          ->with("<comment>Adding type hints to /path/to/api/folder/Generated/File.php</comment>")
                          ->once();

        $this->type_hinter_mock->shouldReceive('process')
                               ->with('/path/to/api/folder/Generated/File.php')
                               ->once();

        $this->command->execute($this->input_mock, $this->output_mock);
    }

    /**
     * @test
     */
    public function it_does_not_processes_the_api_files_when_there_are_not_any()
    {
        // execute()
        $this->output_mock->shouldReceive('writeln')
                          ->with("<info>Adding type hints to generated code...</info>")
                          ->once();

        $this->input_mock->shouldReceive('getOption')
                         ->with('directory')
                         ->andReturn('api/folder');

        $this->generator_mock->shouldReceive('setAndMakeApiDirectory')
                             ->with('api/folder', false, $this->output_mock)
                             ->andReturnSelf()
                             ->once();

        $this->generator_mock->shouldReceive('generatedDirectory')
                             ->with('*.php', false)
                             ->andReturn('/path/to/api/folder/Generated/*.php')
                             ->once();

        $this->files_mock->shouldReceive('glob')
                         ->with('/path/to/api/folder/Generated/*.php')
                         ->andReturn([])
                         ->once();

        $this->type_hinter_mock->shouldReceive('process')
                               ->withAnyArgs()
                               ->never();

        $this->command->execute($this->input_mock, $this->output_mock);
    }

}
