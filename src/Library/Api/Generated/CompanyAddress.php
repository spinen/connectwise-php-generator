<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class CompanyAddress extends Address
{

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var boolean $DefaultFlag
     */
    protected $DefaultFlag = null;

    /**
     * @var int $CompanyId
     */
    protected $CompanyId = null;

    /**
     * @var string $SiteName
     */
    protected $SiteName = null;

    /**
     * @var boolean $InactiveFlag
     */
    protected $InactiveFlag = null;

    /**
     * @var boolean $DefaultBillFlag
     */
    protected $DefaultBillFlag = null;

    /**
     * @var boolean $DefaultShipFlag
     */
    protected $DefaultShipFlag = null;

    /**
     * @param int $Id
     * @param boolean $DefaultFlag
     * @param int $CompanyId
     */
    public function __construct($Id = null, $DefaultFlag = null, $CompanyId = null)
    {
        parent::__construct();
        $this->Id          = $Id;
        $this->DefaultFlag = $DefaultFlag;
        $this->CompanyId   = $CompanyId;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\CompanyAddress
     */
    public function setId($Id)
    {
        $this->Id = $Id;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\CompanyAddress
     */
    public function setDefaultFlag($DefaultFlag)
    {
        $this->DefaultFlag = $DefaultFlag;
        return $this;
    }

    /**
     * @return int
     */
    public function getCompanyId()
    {
        return $this->CompanyId;
    }

    /**
     * @param int $CompanyId
     * @return \Spinen\ConnectWise\Library\Api\Generated\CompanyAddress
     */
    public function setCompanyId($CompanyId)
    {
        $this->CompanyId = $CompanyId;
        return $this;
    }

    /**
     * @return string
     */
    public function getSiteName()
    {
        return $this->SiteName;
    }

    /**
     * @param string $SiteName
     * @return \Spinen\ConnectWise\Library\Api\Generated\CompanyAddress
     */
    public function setSiteName($SiteName)
    {
        $this->SiteName = $SiteName;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\CompanyAddress
     */
    public function setInactiveFlag($InactiveFlag)
    {
        $this->InactiveFlag = $InactiveFlag;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getDefaultBillFlag()
    {
        return $this->DefaultBillFlag;
    }

    /**
     * @param boolean $DefaultBillFlag
     * @return \Spinen\ConnectWise\Library\Api\Generated\CompanyAddress
     */
    public function setDefaultBillFlag($DefaultBillFlag)
    {
        $this->DefaultBillFlag = $DefaultBillFlag;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getDefaultShipFlag()
    {
        return $this->DefaultShipFlag;
    }

    /**
     * @param boolean $DefaultShipFlag
     * @return \Spinen\ConnectWise\Library\Api\Generated\CompanyAddress
     */
    public function setDefaultShipFlag($DefaultShipFlag)
    {
        $this->DefaultShipFlag = $DefaultShipFlag;
        return $this;
    }

}
