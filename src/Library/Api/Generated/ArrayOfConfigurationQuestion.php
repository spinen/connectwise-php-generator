<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ArrayOfConfigurationQuestion
{

    /**
     * @var ConfigurationQuestion[] $ConfigurationQuestion
     */
    protected $ConfigurationQuestion = null;

    public function __construct()
    {

    }

    /**
     * @return ConfigurationQuestion[]
     */
    public function getConfigurationQuestion()
    {
        return $this->ConfigurationQuestion;
    }

    /**
     * @param ConfigurationQuestion[] $ConfigurationQuestion
     * @return \Spinen\ConnectWise\Library\Api\Generated\ArrayOfConfigurationQuestion
     */
    public function setConfigurationQuestion(array $ConfigurationQuestion = null)
    {
        $this->ConfigurationQuestion = $ConfigurationQuestion;
        return $this;
    }

}
