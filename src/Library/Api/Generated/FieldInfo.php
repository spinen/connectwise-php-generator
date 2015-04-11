<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class FieldInfo
{

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var FindConditionsType $Type
     */
    protected $Type = null;

    /**
     * @var boolean $IsNullable
     */
    protected $IsNullable = null;

    /**
     * @param string $Name
     * @param FindConditionsType $Type
     * @param boolean $IsNullable
     */
    public function __construct($Name = null, FindConditionsType $Type = null, $IsNullable = null)
    {
        $this->Name       = $Name;
        $this->Type       = $Type;
        $this->IsNullable = $IsNullable;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\FieldInfo
     */
    public function setName($Name)
    {
        $this->Name = $Name;
        return $this;
    }

    /**
     * @return FindConditionsType
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * @param FindConditionsType $Type
     * @return \Spinen\ConnectWise\Library\Api\Generated\FieldInfo
     */
    public function setType(FindConditionsType $Type)
    {
        $this->Type = $Type;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsNullable()
    {
        return $this->IsNullable;
    }

    /**
     * @param boolean $IsNullable
     * @return \Spinen\ConnectWise\Library\Api\Generated\FieldInfo
     */
    public function setIsNullable($IsNullable)
    {
        $this->IsNullable = $IsNullable;
        return $this;
    }

}
