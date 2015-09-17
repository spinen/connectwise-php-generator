<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class Report
{

    /**
     * @var FieldInfo[] $Field
     */
    protected $Field = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var string $Url
     */
    protected $Url = null;

    /**
     * @var boolean $IsCustom
     */
    protected $IsCustom = null;

    /**
     * @var boolean $VisibleFlag
     */
    protected $VisibleFlag = null;

    /**
     * @var boolean $OpenNewWindowFlag
     */
    protected $OpenNewWindowFlag = null;

    /**
     * @param string $Name
     * @param int $Id
     * @param string $Url
     * @param boolean $IsCustom
     * @param boolean $VisibleFlag
     * @param boolean $OpenNewWindowFlag
     */
    public function __construct($Name = null, $Id = null, $Url = null, $IsCustom = null, $VisibleFlag = null, $OpenNewWindowFlag = null)
    {
        $this->Name              = $Name;
        $this->Id                = $Id;
        $this->Url               = $Url;
        $this->IsCustom          = $IsCustom;
        $this->VisibleFlag       = $VisibleFlag;
        $this->OpenNewWindowFlag = $OpenNewWindowFlag;
    }

    /**
     * @return FieldInfo[]
     */
    public function getField()
    {
        return $this->Field;
    }

    /**
     * @param FieldInfo[] $Field
     * @return \Spinen\ConnectWise\Library\Api\Generated\Report
     */
    public function setField(array $Field = null)
    {
        $this->Field = $Field;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Report
     */
    public function setName($Name)
    {
        $this->Name = $Name;
        return $this;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Report
     */
    public function setId($Id)
    {
        $this->Id = $Id;
        return $this;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->Url;
    }

    /**
     * @param string $Url
     * @return \Spinen\ConnectWise\Library\Api\Generated\Report
     */
    public function setUrl($Url)
    {
        $this->Url = $Url;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsCustom()
    {
        return $this->IsCustom;
    }

    /**
     * @param boolean $IsCustom
     * @return \Spinen\ConnectWise\Library\Api\Generated\Report
     */
    public function setIsCustom($IsCustom)
    {
        $this->IsCustom = $IsCustom;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getVisibleFlag()
    {
        return $this->VisibleFlag;
    }

    /**
     * @param boolean $VisibleFlag
     * @return \Spinen\ConnectWise\Library\Api\Generated\Report
     */
    public function setVisibleFlag($VisibleFlag)
    {
        $this->VisibleFlag = $VisibleFlag;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getOpenNewWindowFlag()
    {
        return $this->OpenNewWindowFlag;
    }

    /**
     * @param boolean $OpenNewWindowFlag
     * @return \Spinen\ConnectWise\Library\Api\Generated\Report
     */
    public function setOpenNewWindowFlag($OpenNewWindowFlag)
    {
        $this->OpenNewWindowFlag = $OpenNewWindowFlag;
        return $this;
    }

}
