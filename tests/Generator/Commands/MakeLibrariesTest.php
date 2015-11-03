<?php

namespace Spinen\ConnectWise\Generator\Commands;

use Mockery;
use Spinen\ConnectWise\TestFactory;

/**
 * Class MakeLibrariesTest
 *
 * @package Spinen\ConnectWise\Generator\Commands
 * @group   generator
 * @group   commands
 */
class MakeLibrariesTest extends BaseTest
{
    /**
     * @var Mockery\Mock
     */
    protected $files_mock;

    /**
     * @var Mockery\Mock
     */
    protected $code_formatter_mock;

    /**
     * @var Mockery\Mock
     */
    protected $code_refactor_mock;

    /**
     * @var Mockery\Mock
     */
    protected $request_mock;

    /**
     * @var Mockery\Mock
     */
    protected $response_mock;

    /**
     * @var Mockery\Mock
     */
    protected $signature_builder_mock;

    /**
     * @var Mockery\Mock
     */
    protected $type_hinter_mock;

    /**
     * @var Mockery\Mock
     */
    protected $wsdl_generator_mock;

    protected function setUp()
    {
        parent::setUp();

        $this->setUpMocks();

        $this->command = new MakeLibraries($this->generator_mock, null, $this->signature_builder_mock,
            $this->files_mock, $this->type_hinter_mock, $this->code_formatter_mock, $this->code_refactor_mock,
            $this->request_mock, $this->wsdl_generator_mock);
    }

    private function setUpMocks()
    {
        $this->signature_builder_mock = TestFactory::mockBuildSignatures();

        $this->files_mock = TestFactory::mockFilesystem();

        $this->type_hinter_mock = TestFactory::mockInsertTypeHints();

        $this->code_formatter_mock = TestFactory::mockFormatCode();

        $this->code_refactor_mock = TestFactory::mockRefactorCode();

        $this->request_mock = TestFactory::mockRequest();

        $this->response_mock = TestFactory::mockResponse();

        $this->wsdl_generator_mock = TestFactory::mockWsdlGenerator();

        $this->generator_mock->shouldReceive('apiDirectory')
                             ->with(null, false, true)
                             ->andReturn('mocked/directory')
                             ->twice();
    }

    private function mockComposerDumpauto()
    {
        $this->output_mock->shouldReceive('writeln')
                          ->with('<info>Running "composer dumpauto -o"...</info>')
                          ->once();

        $this->input_mock->shouldReceive('getOption')
                         ->with('composer')
                         ->andReturn('composer_mock')
                         ->once();

        $this->request_mock->shouldReceive('setCommand')
                           ->with('composer_mock dumpauto -o')
                           ->andReturnSelf()
                           ->once();

        $this->request_mock->shouldReceive('run')
                           ->withNoArgs()
                           ->andReturn($this->response_mock)
                           ->once();

        $this->response_mock->shouldReceive('getSuccessful')
                            ->withNoArgs()
                            ->andReturn(true)
                            ->once();

        $this->response_mock->shouldReceive('getResponse')
                            ->withNoArgs()
                            ->andReturn('Response')
                            ->once();

        $this->output_mock->shouldReceive('writeln')
                          ->with('<comment>Response</comment>')
                          ->once();
    }

    /**
     * @test
     */
    public function it_can_be_constructed()
    {
        $this->assertInstanceOf('Spinen\ConnectWise\Generator\Commands\MakeLibraries', $this->command);
    }

    /**
     * @test
     */
    public function it_runs_all_of_the_commands_to_build_the_library_with_default_flags()
    {
        // execute()
        $this->output_mock->shouldReceive('writeln')
                          ->with("<info>Starting to generate libraries...</info>")
                          ->once();

        $this->input_mock->shouldReceive('setOption')
                         ->withArgs(['clean', false])
                         ->never();

        // displayFlags()
        $this->input_mock->shouldReceive('getOption')
                         ->with('dryRun')
                         ->andReturn(false);

        $this->output_mock->shouldReceive('writeln')
                          ->with("<comment>Dry run: false</comment>")
                          ->once();

        $this->input_mock->shouldReceive('getOption')
                         ->with('paramsDefaultNull')
                         ->andReturn(true);

        $this->output_mock->shouldReceive('writeln')
                          ->with("<comment>Params default null: true</comment>")
                          ->once();

        $this->input_mock->shouldReceive('getOption')
                         ->with('sharedTypes')
                         ->andReturn(true);

        $this->output_mock->shouldReceive('writeln')
                          ->with("<comment>Shared types: true</comment>")
                          ->once();

        $this->input_mock->shouldReceive('getOption')
                         ->with('clean')
                         ->andReturn(true)
                         ->times(3);

        $this->output_mock->shouldReceive('writeln')
                          ->with("<comment>Clean: true</comment>")
                          ->once();

        // back in execute()
        $this->input_mock->shouldReceive('getOption')
                         ->with('directory')
                         ->andReturn('api/folder');

        $this->generator_mock->shouldReceive('setAndMakeApiDirectory')
                             ->with('api/folder', true, $this->output_mock)
                             ->andReturnSelf()
                             ->once();

        $this->input_mock->shouldReceive('setOption')
                         ->withArgs(['clean', false])
                         ->once();

        $this->mockComposerDumpauto();

        $this->generator_mock->shouldReceive('get')
                             ->with('config')
                             ->andReturn([
                                 'wsdls' => [
                                     'Wsdl 1' => '1.wsdl',
                                 ],
                             ])
                             ->once();

        // generateClassFromWsdl()
        $this->generator_mock->shouldReceive('hostPath')
                             ->with('1.wsdl')
                             ->andReturn('https://cw.tld/1.wsdl')
                             ->once();

        $this->output_mock->shouldReceive('writeln')
                          ->with("<comment>Generating Wsdl 1 from https://cw.tld/1.wsdl...</comment>")
                          ->once();

        // get dryRun from above

        // get paramsDefaultNull from above

        $this->generator_mock->shouldReceive('generatedNamespace')
                             ->withNoArgs()
                             ->andReturn('Mocked\\Namespace\\Generated')
                             ->once();

        $this->generator_mock->shouldReceive('generatedDirectory')
                             ->withNoArgs()
                             ->andReturn('/path/to/generated')
                             ->once();

        // get sharedTypes from above

        $this->generator_mock->shouldReceive('libraryNamespace')
                             ->with('SoapClient')
                             ->andReturn('Mocked\\Namespace\\Library\\SoapClient')
                             ->once();

        $this->wsdl_generator_mock->shouldReceive('generate')
                                  ->withAnyArgs()
                                  ->once();

        // get dryRun from above

        // back in execute()

        // processGeneratedCode()
        $this->generator_mock->shouldReceive('generatedDirectory')
                             ->with('autoload.php')
                             ->andReturn('/path/to/generate/autoload.php')
                             ->once();

        $this->files_mock->shouldReceive('delete')
                         ->with('/path/to/generate/autoload.php')
                         ->andReturn()
                         ->once();

        $this->mockComposerDumpauto();

        $this->code_refactor_mock->shouldReceive('execute')
                                 ->with($this->input_mock, $this->output_mock)
                                 ->once();

        $this->code_formatter_mock->shouldReceive('execute')
                                  ->with($this->input_mock, $this->output_mock)
                                  ->once();

        $this->type_hinter_mock->shouldReceive('execute')
                               ->with($this->input_mock, $this->output_mock)
                               ->once();

        $this->signature_builder_mock->shouldReceive('execute')
                                     ->with($this->input_mock, $this->output_mock)
                                     ->once();

        $this->mockComposerDumpauto();

        $this->command->execute($this->input_mock, $this->output_mock);
    }

    /**
     * @test
     */
    public function it_skips_generating_the_library_when_dryRun_flag_set()
    {
        // execute()
        $this->output_mock->shouldReceive('writeln')
                          ->with("<info>Starting to generate libraries...</info>")
                          ->once();

        $this->input_mock->shouldReceive('setOption')
                         ->withArgs(['clean', false])
                         ->once();

        // displayFlags()
        $this->input_mock->shouldReceive('getOption')
                         ->with('dryRun')
                         ->andReturn(true);

        $this->output_mock->shouldReceive('writeln')
                          ->with("<comment>Dry run: true</comment>")
                          ->once();

        $this->input_mock->shouldReceive('getOption')
                         ->with('paramsDefaultNull')
                         ->andReturn(true);

        $this->output_mock->shouldReceive('writeln')
                          ->with("<comment>Params default null: true</comment>")
                          ->once();

        $this->input_mock->shouldReceive('getOption')
                         ->with('sharedTypes')
                         ->andReturn(true);

        $this->output_mock->shouldReceive('writeln')
                          ->with("<comment>Shared types: true</comment>")
                          ->once();

        // This will get flipped to false since dry run
        $this->input_mock->shouldReceive('getOption')
                         ->with('clean')
                         ->andReturn(false)
                         ->times(3);

        $this->output_mock->shouldReceive('writeln')
                          ->with("<comment>Clean: false</comment>")
                          ->once();

        // back in execute()
        $this->input_mock->shouldReceive('getOption')
                         ->with('directory')
                         ->andReturn('api/folder');

        $this->generator_mock->shouldReceive('setAndMakeApiDirectory')
                             ->with('api/folder', false, $this->output_mock)
                             ->andReturnSelf()
                             ->once();

        $this->input_mock->shouldReceive('setOption')
                         ->withArgs(['clean', false])
                         ->never();

        //$this->mockComposerDumpauto();

        $this->generator_mock->shouldReceive('get')
                             ->with('config')
                             ->andReturn([
                                 'wsdls' => [
                                     'Wsdl 1' => '1.wsdl',
                                 ],
                             ])
                             ->once();

        // generateClassFromWsdl()
        $this->generator_mock->shouldReceive('hostPath')
                             ->with('1.wsdl')
                             ->andReturn('https://cw.tld/1.wsdl')
                             ->once();

        $this->output_mock->shouldReceive('writeln')
                          ->with("<comment>Generating Wsdl 1 from https://cw.tld/1.wsdl...</comment>")
                          ->once();

        // get dryRun from above

        // get paramsDefaultNull from above

        $this->generator_mock->shouldReceive('generatedNamespace')
                             ->withNoArgs()
                             ->never();

        $this->generator_mock->shouldReceive('generatedDirectory')
                             ->withNoArgs()
                             ->never();

        // get sharedTypes from above

        $this->generator_mock->shouldReceive('libraryNamespace')
                             ->with('SoapClient')
                             ->never();

        $this->wsdl_generator_mock->shouldReceive('generate')
                                  ->withAnyArgs()
                                  ->never();

        // get dryRun from above

        // back in execute()

        // processGeneratedCode()
        $this->generator_mock->shouldReceive('generatedDirectory')
                             ->with('autoload.php')
                             ->never();

        $this->files_mock->shouldReceive('delete')
                         ->withAnyArgs()
                         ->never();

        //$this->mockComposerDumpauto();

        $this->code_refactor_mock->shouldReceive('execute')
                                 ->withAnyArgs()
                                 ->never();

        $this->code_formatter_mock->shouldReceive('execute')
                                  ->withAnyArgs()
                                  ->never();

        $this->type_hinter_mock->shouldReceive('execute')
                               ->withAnyArgs()
                               ->never();

        $this->signature_builder_mock->shouldReceive('execute')
                                     ->withAnyArgs()
                                     ->never();

        //$this->mockComposerDumpauto();

        $this->command->execute($this->input_mock, $this->output_mock);
    }
}
