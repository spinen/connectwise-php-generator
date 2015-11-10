<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class UserDefinedCustomField
{

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var string $CustomField
     */
    protected $CustomField = null;

    /**
     * @var string $FieldType
     */
    protected $FieldType = null;

    /**
     * @var int $NumberOfDecimals
     */
    protected $NumberOfDecimals = null;

    /**
     * @var string $CustomValue
     */
    protected $CustomValue = null;

    /**
     * @param int $Id
     * @param string $CustomField
     * @param string $FieldType
     * @param int $NumberOfDecimals
     * @param string $CustomValue
     */
    public function __construct($Id = null, $CustomField = null, $FieldType = null, $NumberOfDecimals = null, $CustomValue = null)
    {
        $this->Id               = $Id;
        $this->CustomField      = $CustomField;
        $this->FieldType        = $FieldType;
        $this->NumberOfDecimals = $NumberOfDecimals;
        $this->CustomValue      = $CustomValue;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\UserDefinedCustomField
     */
    public function setId($Id)
    {
        $this->Id = $Id;
        return $this;
    }

    /**
     * @return string
     */
    public function getCustomField()
    {
        return $this->CustomField;
    }

    /**
     * @param string $CustomField
     * @return \Spinen\ConnectWise\Library\Api\Generated\UserDefinedCustomField
     */
    public function setCustomField($CustomField)
    {
        $this->CustomField = $CustomField;
        return $this;
    }

    /**
     * @return string
     */
    public function getFieldType()
    {
        return $this->FieldType;
    }

    /**
     * @param string $FieldType
     * @return \Spinen\ConnectWise\Library\Api\Generated\UserDefinedCustomField
     */
    public function setFieldType($FieldType)
    {
        $this->FieldType = $FieldType;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\UserDefinedCustomField
     */
    public function setNumberOfDecimals($NumberOfDecimals)
    {
        $this->NumberOfDecimals = $NumberOfDecimals;
        return $this;
    }

    /**
     * @return string
     */
    public function getCustomValue()
    {
        return $this->CustomValue;
    }

    /**
     * @param string $CustomValue
     * @return \Spinen\ConnectWise\Library\Api\Generated\UserDefinedCustomField
     */
    public function setCustomValue($CustomValue)
    {
        $this->CustomValue = $CustomValue;
        return $this;
    }

}
