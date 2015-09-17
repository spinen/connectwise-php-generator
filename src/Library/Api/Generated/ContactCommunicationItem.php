<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ContactCommunicationItem
{

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var CommunicationType $Type
     */
    protected $Type = null;

    /**
     * @var int $CommunicationTypeId
     */
    protected $CommunicationTypeId = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var string $Value
     */
    protected $Value = null;

    /**
     * @var string $ValueExtension
     */
    protected $ValueExtension = null;

    /**
     * @var boolean $IsDefaultForType
     */
    protected $IsDefaultForType = null;

    /**
     * @param int $Id
     * @param CommunicationType $Type
     * @param int $CommunicationTypeId
     */
    public function __construct($Id = null, CommunicationType $Type = null, $CommunicationTypeId = null)
    {
        $this->Id                  = $Id;
        $this->Type                = $Type;
        $this->CommunicationTypeId = $CommunicationTypeId;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ContactCommunicationItem
     */
    public function setId($Id)
    {
        $this->Id = $Id;
        return $this;
    }

    /**
     * @return CommunicationType
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * @param CommunicationType $Type
     * @return \Spinen\ConnectWise\Library\Api\Generated\ContactCommunicationItem
     */
    public function setType(CommunicationType $Type)
    {
        $this->Type = $Type;
        return $this;
    }

    /**
     * @return int
     */
    public function getCommunicationTypeId()
    {
        return $this->CommunicationTypeId;
    }

    /**
     * @param int $CommunicationTypeId
     * @return \Spinen\ConnectWise\Library\Api\Generated\ContactCommunicationItem
     */
    public function setCommunicationTypeId($CommunicationTypeId)
    {
        $this->CommunicationTypeId = $CommunicationTypeId;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param string $Description
     * @return \Spinen\ConnectWise\Library\Api\Generated\ContactCommunicationItem
     */
    public function setDescription($Description)
    {
        $this->Description = $Description;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ContactCommunicationItem
     */
    public function setValue($Value)
    {
        $this->Value = $Value;
        return $this;
    }

    /**
     * @return string
     */
    public function getValueExtension()
    {
        return $this->ValueExtension;
    }

    /**
     * @param string $ValueExtension
     * @return \Spinen\ConnectWise\Library\Api\Generated\ContactCommunicationItem
     */
    public function setValueExtension($ValueExtension)
    {
        $this->ValueExtension = $ValueExtension;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsDefaultForType()
    {
        return $this->IsDefaultForType;
    }

    /**
     * @param boolean $IsDefaultForType
     * @return \Spinen\ConnectWise\Library\Api\Generated\ContactCommunicationItem
     */
    public function setIsDefaultForType($IsDefaultForType)
    {
        $this->IsDefaultForType = $IsDefaultForType;
        return $this;
    }

}
