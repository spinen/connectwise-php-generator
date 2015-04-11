<?php

namespace Spinen\ConnectWise\Generator\Traits;

trait Composer
{

    /**
     * As code is getting generated/modified, the autoload needs updated
     *
     */
    protected function composerDumpauto()
    {
        $this->output->writeln('<info>Running "composer dumpauto -o"...</info>');

        $response = $this->request->setCommand($this->input->getOption('composer') . ' dumpauto -o')
                                  ->run();

        $this->outputResponse($response);

        // TODO: Look into getting the api directory to load at runtime
//        $this->generator->get('loader')
//                        ->setPsr4($this->generator->apiNamespace() . '\\', $this->generator->apiDirectory());

//        $this->generator->get('loader')
//                        ->addPsr4($this->generator->apiNamespace() . '\\', $this->generator->apiDirectory(), true);
    }

}
