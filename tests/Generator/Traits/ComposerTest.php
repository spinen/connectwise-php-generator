<?php

namespace Spinen\ConnectWise\Generator\Traits;

use Mockery;
use Spinen\ConnectWise\BaseTest;
use Spinen\ConnectWise\Generator\Stubs\Traits\ComposerStub;
use Spinen\ConnectWise\TestFactory;

/**
 * Class ComposerTest
 *
 * @package Spinen\ConnectWise\Generator\Traits
 * @group   generator
 * @group   traits
 * @uses    Spinen\ConnectWise\Generator\CommandLine\Request
 * @uses    Spinen\ConnectWise\Generator\CommandLine\Response
 */
class ComposerTest extends BaseTest
{

    /**
     * @var Mockery\Mock
     */
    protected $input_mock;

    /**
     * @var Mockery\Mock
     */
    protected $output_mock;

    /**
     * @var Mockery\Mock
     */
    protected $request_mock;

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

        $this->stub = new ComposerStub($this->input_mock, $this->output_mock, $this->request_mock);
    }

    protected function setUpMocks()
    {
        $this->input_mock = TestFactory::mockInputArray();

        $this->output_mock = TestFactory::mockOutputConsole();

        $this->request_mock = TestFactory::mockRequest();

        $this->response_mock = TestFactory::mockResponse();
    }

    /**
     * @test
     */
    public function it_adds_the_expected_trait()
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

        $this->stub->exposeComposerDumpauto();
    }

}
