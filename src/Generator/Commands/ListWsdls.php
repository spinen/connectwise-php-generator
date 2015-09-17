<?php

namespace Spinen\ConnectWise\Generator\Commands;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class ListWsdls
 *
 * @package Spinen\ConnectWise\Generator\Commands
 */
class ListWsdls extends Base
{
    /**
     * Setup the configuration values for the command
     */
    public function configure()
    {
        $this->setName('listWsdls')
             ->setDescription("List the WSDL's");
    }

    /**
     * @param InputInterface  $input
     * @param OutputInterface $output
     */
    public function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln("<info>Here are the defined WSDL's...</info>");

        foreach ($this->generator->get('config')['wsdls'] as $api => $uri) {
            $output->writeln("<comment>$api lives at $uri</comment>");
        }
    }
}
