<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class PossibleResponse
{

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var int $ConfigurationTypeQuestionId
     */
    protected $ConfigurationTypeQuestionId = null;

    /**
     * @var string $Value
     */
    protected $Value = null;

    /**
     * @var boolean $DefaultFlag
     */
    protected $DefaultFlag = null;

    /**
     * @param int $Id
     * @param int $ConfigurationTypeQuestionId
     * @param string $Value
     * @param boolean $DefaultFlag
     */
    public function __construct($Id = null, $ConfigurationTypeQuestionId = null, $Value = null, $DefaultFlag = null)
    {
        $this->Id                          = $Id;
        $this->ConfigurationTypeQuestionId = $ConfigurationTypeQuestionId;
        $this->Value                       = $Value;
        $this->DefaultFlag                 = $DefaultFlag;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\PossibleResponse
     */
    public function setId($Id)
    {
        $this->Id = $Id;
        return $this;
    }

    /**
     * @return int
     */
    public function getConfigurationTypeQuestionId()
    {
        return $this->ConfigurationTypeQuestionId;
    }

    /**
     * @param int $ConfigurationTypeQuestionId
     * @return \Spinen\ConnectWise\Library\Api\Generated\PossibleResponse
     */
    public function setConfigurationTypeQuestionId($ConfigurationTypeQuestionId)
    {
        $this->ConfigurationTypeQuestionId = $ConfigurationTypeQuestionId;
        return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->Value;
    }

    /**
     * @param string $Value
     * @return \Spinen\ConnectWise\Library\Api\Generated\PossibleResponse
     */
    public function setValue($Value)
    {
        $this->Value = $Value;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getDefaultFlag()
    {
        return $this->DefaultFlag;
    }

    /**
     * @param boolean $DefaultFlag
     * @return \Spinen\ConnectWise\Library\Api\Generated\PossibleResponse
     */
    public function setDefaultFlag($DefaultFlag)
    {
        $this->DefaultFlag = $DefaultFlag;
        return $this;
    }

}
