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
     * @param ArrayOfString $StreetLines
     * @param string $City
     * @param string $State
     * @param string $Zip
     * @param string $Country
     * @param int $Id
     * @param boolean $DefaultFlag
     * @param int $CompanyId
     * @param string $SiteName
     */
    public function __construct($StreetLines = null, $City = null, $State = null, $Zip = null, $Country = null, $Id = null, $DefaultFlag = null, $CompanyId = null, $SiteName = null)
    {
        parent::__construct($StreetLines, $City, $State, $Zip, $Country);
        $this->Id          = $Id;
        $this->DefaultFlag = $DefaultFlag;
        $this->CompanyId   = $CompanyId;
        $this->SiteName    = $SiteName;
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

}
