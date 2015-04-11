<?php

namespace Tests\Spinen\ConnectWise\Generator\Commands;

use Spinen\ConnectWise\Generator\Commands\CommandInterface;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class CommandStub
 *
 * @package Tests\Spinen\ConnectWise\Generator\Commands
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

        $this->assertInstanceOf('Tests\Spinen\ConnectWise\Generator\Commands\CommandStub', $processor);
    }

}
