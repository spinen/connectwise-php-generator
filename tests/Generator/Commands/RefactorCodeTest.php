<?php

namespace Tests\Spinen\ConnectWise\Generator\Commands;

use Mockery;
use Spinen\ConnectWise\Generator\Commands\RefactorCode;
use Tests\Spinen\ConnectWise\TestFactory;

/**
 * Class RefactorCodeTest
 *
 * @package Tests\Spinen\ConnectWise\Generator\Commands
 * @group   generator
 * @group   commands
 */
class RefactorCodeTest extends BaseTest
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

        $this->command = new RefactorCode($this->generator_mock, null, $this->files_mock, $this->request_mock);
    }

    private function setUpMocks()
    {
        $this->files_mock = TestFactory::mockFilesystem();

        $this->request_mock = TestFactory::mockRequest();

        $this->response_mock = TestFactory::mockResponse();

        $this->response_mock->shouldReceive('getSuccessful')
                            ->withNoArgs()
                            ->andReturn(true);

        $this->response_mock->shouldReceive('getResponse')
                            ->withNoArgs()
                            ->andReturn("Response");

        $this->output_mock->shouldReceive('writeln')
                          ->with("<comment>Response</comment>");

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
        $this->assertInstanceOf('Spinen\ConnectWise\Generator\Commands\RefactorCode', $this->command);
    }

    /**
     * @test
     */
    public function it_processes_the_changes_to_the_default_directory_with_no_flags()
    {
        // execute()
        $this->generator_mock->shouldReceive('generatedDirectory')
                             ->withNoArgs()
                             ->andReturn('/path/to/api/folder/Generated/')
                             ->once();

        $this->output_mock->shouldReceive('writeln')
                          ->with("<info>Refactoring code in /path/to/api/folder/Generated/</info>")
                          ->once();

        $this->input_mock->shouldReceive('getOption')
                         ->with('directory')
                         ->andReturn('api/folder');

        $this->generator_mock->shouldReceive('setAndMakeApiDirectory')
                             ->with('api/folder', false, $this->output_mock)
                             ->andReturnSelf()
                             ->once();

        // removeHostName()
        $this->output_mock->shouldReceive('writeln')
                          ->with("<info>Removing hardcoded hostname...</info>")
                          ->once();

        $this->generator_mock->shouldReceive('hostPath')
                             ->withNoArgs()
                             ->andReturn("https://cw.tld")
                             ->once();

        $this->generator_mock->shouldReceive('generatedDirectory')
                             ->with('*.php', false)
                             ->andReturn('/path/to/api/folder/Generated/*.php')
                             ->once();

        $this->request_mock->shouldReceive('setCommand')
                           ->with('sed -i "" "s|https\\://cw\\.tld||g" /path/to/api/folder/Generated/*.php')
                           ->andReturn($this->request_mock)
                           ->once();

        $this->request_mock->shouldReceive('run')
                           ->withNoArgs()
                           ->andReturn($this->response_mock)
                           ->once();

        // addHostParameter()
        $this->output_mock->shouldReceive('writeln')
                          ->with("<info>Adding host parameter to constructor...</info>")
                          ->once();

        $this->generator_mock->shouldReceive('generatedDirectory')
                             ->with('*Api.php', false)
                             ->andReturn('/path/to/api/folder/Generated/*Api.php')
                             ->twice();

        $this->request_mock->shouldReceive('setCommand')
                           ->with('sed -i "" "s|__construct(array \\$options|__construct(\\$host, array \\$options|g" /path/to/api/folder/Generated/*Api.php')
                           ->andReturn($this->request_mock)
                           ->once();

        $this->request_mock->shouldReceive('run')
                           ->withNoArgs()
                           ->andReturn($this->response_mock)
                           ->once();

        // addHostParameterParentConstruct()
        $this->output_mock->shouldReceive('writeln')
                          ->with("<info>Adding host parameter to parent constructor...</info>")
                          ->once();

        $this->request_mock->shouldReceive('setCommand')
                           ->with('sed -i "" "s|__construct(\\$wsdl, \\$options)|__construct(\\$host \\. \\$wsdl, \\$options)|g" /path/to/api/folder/Generated/*Api.php')
                           ->andReturn($this->request_mock)
                           ->once();

        $this->request_mock->shouldReceive('run')
                           ->withNoArgs()
                           ->andReturn($this->response_mock)
                           ->once();

        $this->command->execute($this->input_mock, $this->output_mock);
    }

}
