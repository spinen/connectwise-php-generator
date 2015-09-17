<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ConfigurationTypeQuestion
{

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var FieldTypes $FieldType
     */
    protected $FieldType = null;

    /**
     * @var EntryTypes $EntryType
     */
    protected $EntryType = null;

    /**
     * @var int $ConfigurationTypeId
     */
    protected $ConfigurationTypeId = null;

    /**
     * @var float $SequenceNumber
     */
    protected $SequenceNumber = null;

    /**
     * @var string $Question
     */
    protected $Question = null;

    /**
     * @var int $NumberOfDecimals
     */
    protected $NumberOfDecimals = null;

    /**
     * @var boolean $RequiredFlag
     */
    protected $RequiredFlag = null;

    /**
     * @var boolean $InactiveFlag
     */
    protected $InactiveFlag = null;

    /**
     * @var ArrayOfPossibleResponse $PossibleResponses
     */
    protected $PossibleResponses = null;

    /**
     * @param int $Id
     * @param FieldTypes $FieldType
     * @param EntryTypes $EntryType
     * @param int $ConfigurationTypeId
     * @param float $SequenceNumber
     * @param boolean $RequiredFlag
     * @param boolean $InactiveFlag
     */
    public function __construct($Id = null, FieldTypes $FieldType = null, EntryTypes $EntryType = null, $ConfigurationTypeId = null, $SequenceNumber = null, $RequiredFlag = null, $InactiveFlag = null)
    {
        $this->Id                  = $Id;
        $this->FieldType           = $FieldType;
        $this->EntryType           = $EntryType;
        $this->ConfigurationTypeId = $ConfigurationTypeId;
        $this->SequenceNumber      = $SequenceNumber;
        $this->RequiredFlag        = $RequiredFlag;
        $this->InactiveFlag        = $InactiveFlag;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ConfigurationTypeQuestion
     */
    public function setId($Id)
    {
        $this->Id = $Id;
        return $this;
    }

    /**
     * @return FieldTypes
     */
    public function getFieldType()
    {
        return $this->FieldType;
    }

    /**
     * @param FieldTypes $FieldType
     * @return \Spinen\ConnectWise\Library\Api\Generated\ConfigurationTypeQuestion
     */
    public function setFieldType(FieldTypes $FieldType)
    {
        $this->FieldType = $FieldType;
        return $this;
    }

    /**
     * @return EntryTypes
     */
    public function getEntryType()
    {
        return $this->EntryType;
    }

    /**
     * @param EntryTypes $EntryType
     * @return \Spinen\ConnectWise\Library\Api\Generated\ConfigurationTypeQuestion
     */
    public function setEntryType(EntryTypes $EntryType)
    {
        $this->EntryType = $EntryType;
        return $this;
    }

    /**
     * @return int
     */
    public function getConfigurationTypeId()
    {
        return $this->ConfigurationTypeId;
    }

    /**
     * @param int $ConfigurationTypeId
     * @return \Spinen\ConnectWise\Library\Api\Generated\ConfigurationTypeQuestion
     */
    public function setConfigurationTypeId($ConfigurationTypeId)
    {
        $this->ConfigurationTypeId = $ConfigurationTypeId;
        return $this;
    }

    /**
     * @return float
     */
    public function getSequenceNumber()
    {
        return $this->SequenceNumber;
    }

    /**
     * @param float $SequenceNumber
     * @return \Spinen\ConnectWise\Library\Api\Generated\ConfigurationTypeQuestion
     */
    public function setSequenceNumber($SequenceNumber)
    {
        $this->SequenceNumber = $SequenceNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getQuestion()
    {
        return $this->Question;
    }

    /**
     * @param string $Question
     * @return \Spinen\ConnectWise\Library\Api\Generated\ConfigurationTypeQuestion
     */
    public function setQuestion($Question)
    {
        $this->Question = $Question;
        return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfDecimals()
    {
        return $this->NumberOfDecimals;
    }

    /**
     * @param int $NumberOfDecimals
     * @return \Spinen\ConnectWise\Library\Api\Generated\ConfigurationTypeQuestion
     */
    public function setNumberOfDecimals($NumberOfDecimals)
    {
        $this->NumberOfDecimals = $NumberOfDecimals;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getRequiredFlag()
    {
        return $this->RequiredFlag;
    }

    /**
     * @param boolean $RequiredFlag
     * @return \Spinen\ConnectWise\Library\Api\Generated\ConfigurationTypeQuestion
     */
    public function setRequiredFlag($RequiredFlag)
    {
        $this->RequiredFlag = $RequiredFlag;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ConfigurationTypeQuestion
     */
    public function setInactiveFlag($InactiveFlag)
    {
        $this->InactiveFlag = $InactiveFlag;
        return $this;
    }

    /**
     * @return ArrayOfPossibleResponse
     */
    public function getPossibleResponses()
    {
        return $this->PossibleResponses;
    }

    /**
     * @param ArrayOfPossibleResponse $PossibleResponses
     * @return \Spinen\ConnectWise\Library\Api\Generated\ConfigurationTypeQuestion
     */
    public function setPossibleResponses($PossibleResponses)
    {
        $this->PossibleResponses = $PossibleResponses;
        return $this;
    }

}
