<?php

namespace Tests\Spinen\Generator\CommandLine;

use Spinen\ConnectWise\Generator\CommandLine\Response;
use Tests\Spinen\ConnectWise\BaseTest;

/**
 * Class ResponseTest
 *
 * @package Tests\Spinen\Generator\CommandLine
 * @group   generator
 * @group   command_line
 */
class ResponseTest extends BaseTest
{

    private function buildResponse($command = true, $exit_code = true, $response = true, $successful = true)
    {
        $return = [];

        if ($command) {
            $return['command'] = 'Command';
        }

        if ($exit_code) {
            $return['exit_code'] = 0;
        }

        if ($response) {
            $return['response'] = 'Response';
        }

        if ($successful) {
            $return['successful'] = true;
        }

        return $return;
    }

    /**
     * @test
     */
    public function it_can_be_constructed()
    {
        $response = new Response($this->buildResponse());

        $this->assertInstanceOf('Spinen\ConnectWise\Generator\CommandLine\Response', $response);
    }

    /**
     * @test
     * @expectedException \Spinen\ConnectWise\Generator\CommandLine\MissingPropertyException
     */
    public function it_squawk_when_constructed_without_a_command_property()
    {
        new Response($this->buildResponse(false));
    }

    /**
     * @test
     * @expectedException \Spinen\ConnectWise\Generator\CommandLine\MissingPropertyException
     */
    public function it_squawk_when_constructed_without_an_exit_code_property()
    {
        new Response($this->buildResponse(true, false));
    }

    /**
     * @test
     * @expectedException \Spinen\ConnectWise\Generator\CommandLine\MissingPropertyException
     */
    public function it_squawk_when_constructed_without_a_response_property()
    {
        new Response($this->buildResponse(true, true, false));
    }

    /**
     * @test
     * @expectedException \Spinen\ConnectWise\Generator\CommandLine\MissingPropertyException
     */
    public function it_squawk_when_constructed_without_a_successful_property()
    {
        new Response($this->buildResponse(true, true, true, false));
    }

    /**
     * @test
     */
    public function it_gets_the_expected_values_from_the_getters()
    {
        $response = new Response($this->buildResponse());

        $this->assertEquals('Command', $response->getCommand());

        $this->assertEquals(0, $response->getExitCode());

        $this->assertEquals('Response', $response->getResponse());

        $this->assertEquals(true, $response->getSuccessful());
    }

}
