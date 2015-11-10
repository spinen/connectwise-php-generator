<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ConfigurationType
{

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var boolean $InactiveFlag
     */
    protected $InactiveFlag = null;

    /**
     * @var string $UpdatedBy
     */
    protected $UpdatedBy = null;

    /**
     * @var boolean $SystemFlag
     */
    protected $SystemFlag = null;

    /**
     * @var ArrayOfConfigurationTypeQuestion $ConfigurationTypeQuestions
     */
    protected $ConfigurationTypeQuestions = null;

    /**
     * @param int $Id
     * @param string $Name
     * @param boolean $InactiveFlag
     * @param string $UpdatedBy
     * @param boolean $SystemFlag
     * @param ArrayOfConfigurationTypeQuestion $ConfigurationTypeQuestions
     */
    public function __construct($Id = null, $Name = null, $InactiveFlag = null, $UpdatedBy = null, $SystemFlag = null, $ConfigurationTypeQuestions = null)
    {
        $this->Id                         = $Id;
        $this->Name                       = $Name;
        $this->InactiveFlag               = $InactiveFlag;
        $this->UpdatedBy                  = $UpdatedBy;
        $this->SystemFlag                 = $SystemFlag;
        $this->ConfigurationTypeQuestions = $ConfigurationTypeQuestions;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param int $Id
     * @return \Spinen\ConnectWise\Library\Api\Generated\ConfigurationType
     */
    public function setId($Id)
    {
        $this->Id = $Id;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param string $Name
     * @return \Spinen\ConnectWise\Library\Api\Generated\ConfigurationType
     */
    public function setName($Name)
    {
        $this->Name = $Name;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getInactiveFlag()
    {
        return $this->InactiveFlag;
    }

    /**
     * @param boolean $InactiveFlag
     * @return \Spinen\ConnectWise\Library\Api\Generated\ConfigurationType
     */
    public function setInactiveFlag($InactiveFlag)
    {
        $this->InactiveFlag = $InactiveFlag;
        return $this;
    }

    /**
     * @return string
     */
    public function getUpdatedBy()
    {
        return $this->UpdatedBy;
    }

    /**
     * @param string $UpdatedBy
     * @return \Spinen\ConnectWise\Library\Api\Generated\ConfigurationType
     */
    public function setUpdatedBy($UpdatedBy)
    {
        $this->UpdatedBy = $UpdatedBy;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getSystemFlag()
    {
        return $this->SystemFlag;
    }

    /**
     * @param boolean $SystemFlag
     * @return \Spinen\ConnectWise\Library\Api\Generated\ConfigurationType
     */
    public function setSystemFlag($SystemFlag)
    {
        $this->SystemFlag = $SystemFlag;
        return $this;
    }

    /**
     * @return ArrayOfConfigurationTypeQuestion
     */
    public function getConfigurationTypeQuestions()
    {
        return $this->ConfigurationTypeQuestions;
    }

    /**
     * @param ArrayOfConfigurationTypeQuestion $ConfigurationTypeQuestions
     * @return \Spinen\ConnectWise\Library\Api\Generated\ConfigurationType
     */
    public function setConfigurationTypeQuestions($ConfigurationTypeQuestions)
    {
        $this->ConfigurationTypeQuestions = $ConfigurationTypeQuestions;
        return $this;
    }

}
