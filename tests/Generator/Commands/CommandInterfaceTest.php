<?php

namespace Spinen\ConnectWise\Generator\Commands;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class CommandStub
 *
 * @package Spinen\ConnectWise\Generator\Commands
 * @group   generator
 * @group   commands
 */
class CommandStub implements CommandInterface
{
    public function configure()
    {
        return null;
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {
        return null;
    }
}

class CommandInterfaceTest extends BaseTest
{
    /**
     * @test
     */
    public function it_can_be_constructed()
    {
        $processor = new CommandStub();

        $this->assertInstanceOf('Spinen\ConnectWise\Generator\Commands\CommandStub', $processor);
    }
}
