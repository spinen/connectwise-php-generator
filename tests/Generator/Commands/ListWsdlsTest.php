<?php

namespace Spinen\ConnectWise\Generator\Commands;

/**
 * Class ListWsdlsTest
 *
 * @package Spinen\ConnectWise\Generator\Commands
 * @group   generator
 * @group   commands
 */
class ListWsdlsTest extends BaseTest
{
    protected function setUp()
    {
        parent::setUp();

        $this->command = new ListWsdls($this->generator_mock);
    }

    /**
     * @test
     */
    public function it_can_be_constructed()
    {
        $this->assertInstanceOf('Spinen\ConnectWise\Generator\Commands\ListWsdls', $this->command);
    }

    /**
     * @test
     */
    public function it_processes_the_wsld_property_correctly()
    {
        $this->output_mock->shouldReceive('writeln')
                          ->with("<info>Here are the defined WSDL's...</info>")
                          ->once();

        $this->generator_mock->shouldReceive('get')
                             ->with('config')
                             ->andReturn([
                                 'wsdls' => [
                                     'Wsdl 1' => 'some/location.wsdl',
                                 ],
                             ])
                             ->once();

        $this->output_mock->shouldReceive('writeln')
                          ->with("<comment>Wsdl 1 lives at some/location.wsdl</comment>")
                          ->once();

        $this->command->execute($this->input_mock, $this->output_mock);
    }

    /**
     * @test
     */
    public function it_does_not_list_any_wsdls_if_none_are_returned()
    {
        $this->output_mock->shouldReceive('writeln')
                          ->with("<info>Here are the defined WSDL's...</info>")
                          ->once();

        $this->generator_mock->shouldReceive('get')
                             ->with('config')
                             ->andReturn(['wsdls' => []])
                             ->once();

        $this->command->execute($this->input_mock, $this->output_mock);
    }
}
