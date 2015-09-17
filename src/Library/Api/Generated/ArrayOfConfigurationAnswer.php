<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ArrayOfConfigurationAnswer
{

    /**
     * @var ConfigurationAnswer[] $ConfigurationAnswer
     */
    protected $ConfigurationAnswer = null;

    public function __construct()
    {

    }

    /**
     * @return ConfigurationAnswer[]
     */
    public function getConfigurationAnswer()
    {
        return $this->ConfigurationAnswer;
    }

    /**
     * @param ConfigurationAnswer[] $ConfigurationAnswer
     * @return \Spinen\ConnectWise\Library\Api\Generated\ArrayOfConfigurationAnswer
     */
    public function setConfigurationAnswer(array $ConfigurationAnswer = null)
    {
        $this->ConfigurationAnswer = $ConfigurationAnswer;
        return $this;
    }

}
