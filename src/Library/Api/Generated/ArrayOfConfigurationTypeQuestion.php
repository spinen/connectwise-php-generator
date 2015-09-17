<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ArrayOfConfigurationTypeQuestion
{

    /**
     * @var ConfigurationTypeQuestion[] $ConfigurationTypeQuestion
     */
    protected $ConfigurationTypeQuestion = null;

    public function __construct()
    {

    }

    /**
     * @return ConfigurationTypeQuestion[]
     */
    public function getConfigurationTypeQuestion()
    {
        return $this->ConfigurationTypeQuestion;
    }

    /**
     * @param ConfigurationTypeQuestion[] $ConfigurationTypeQuestion
     * @return \Spinen\ConnectWise\Library\Api\Generated\ArrayOfConfigurationTypeQuestion
     */
    public function setConfigurationTypeQuestion(array $ConfigurationTypeQuestion = null)
    {
        $this->ConfigurationTypeQuestion = $ConfigurationTypeQuestion;
        return $this;
    }

}
