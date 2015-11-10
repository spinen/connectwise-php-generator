<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class FieldValue
{

    /**
     * @var string $_
     */
    protected $_ = null;

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
     * @param string $_
     * @param string $Name
     * @param FindConditionsType $Type
     * @param boolean $IsNullable
     */
    public function __construct($_ = null, $Name = null, FindConditionsType $Type = null, $IsNullable = null)
    {
        $this->_          = $_;
        $this->Name       = $Name;
        $this->Type       = $Type;
        $this->IsNullable = $IsNullable;
    }

    /**
     * @return string
     */
    public function get()
    {
        return $this->_;
    }

    /**
     * @param string $_
     * @return \Spinen\ConnectWise\Library\Api\Generated\FieldValue
     */
    public function set($_)
    {
        $this->_ = $_;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\FieldValue
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\FieldValue
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\FieldValue
     */
    public function setIsNullable($IsNullable)
    {
        $this->IsNullable = $IsNullable;
        return $this;
    }

}
