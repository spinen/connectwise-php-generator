<?php

namespace Tests\Spinen\ConnectWise\Generator\Traits;

use Mockery;
use Tests\Spinen\ConnectWise\BaseTest;
use Tests\Spinen\ConnectWise\Generator\Stubs\Traits\ResponseParserStub;
use Tests\Spinen\ConnectWise\TestFactory;

/**
 * Class ResponseParserTest
 *
 * @package Tests\Spinen\ConnectWise\Generator\Traits
 * @group   generator
 * @group   traits
 * @uses    Spinen\ConnectWise\Generator\CommandLine\Response
 */
class ResponseParserTest extends BaseTest
{

    /**
     * @var Mockery\Mock
     */
    protected $output_mock;

    /**
     * @var Mockery\Mock
     */
    protected $response_mock;

    /**
     * @var ComposerTestStub
     */
    protected $stub;

    protected function setUp()
    {
        parent::setUp();

        $this->setUpMocks();

        $this->stub = new ResponseParserStub($this->output_mock);
    }

    protected function setUpMocks()
    {
        $this->output_mock = TestFactory::mockOutputConsole();

        $this->response_mock = TestFactory::mockResponse();
    }

    /**
     * @test
     */
    public function it_adds_writes_comment_to_output_on_success()
    {
        $this->response_mock->shouldReceive('getSuccessful')
                            ->andReturn(true)
                            ->once();

        $this->response_mock->shouldReceive('getResponse')
                            ->andReturn("Success")
                            ->once();

        $this->output_mock->shouldReceive('writeln')
                          ->with("<comment>Success</comment>")
                          ->once();

        $this->stub->exposeOutputResponse($this->response_mock);
    }

    /**
     * @test
     */
    public function it_adds_writes_error_to_output_on_fail()
    {
        $this->response_mock->shouldReceive('getSuccessful')
                            ->andReturn(false)
                            ->once();

        $this->response_mock->shouldReceive('getResponse')
                            ->andReturn("Error")
                            ->once();

        $this->output_mock->shouldReceive('writeln')
                          ->with("<error>Error</error>")
                          ->once();

        $this->stub->exposeOutputResponse($this->response_mock);
    }

}
