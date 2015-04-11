<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class CompanyProfile
{

    /**
     * @var string $SicCode
     */
    protected $SicCode = null;

    /**
     * @var string $SicDescription
     */
    protected $SicDescription = null;

    /**
     * @var int $RevenueYear
     */
    protected $RevenueYear = null;

    /**
     * @var float $AnnualRevenue
     */
    protected $AnnualRevenue = null;

    /**
     * @var int $NumberOfEmployees
     */
    protected $NumberOfEmployees = null;

    /**
     * @var int $ParentCompanyId
     */
    protected $ParentCompanyId = null;

    /**
     * @var string $OwnershipType
     */
    protected $OwnershipType = null;

    /**
     * @var string $TimeZone
     */
    protected $TimeZone = null;

    /**
     * @var string $LeadSource
     */
    protected $LeadSource = null;

    /**
     * @var boolean $IsLead
     */
    protected $IsLead = null;

    /**
     * @var boolean $IsUnsubscribedFromEmail
     */
    protected $IsUnsubscribedFromEmail = null;

    /**
     * @var string $UserField1
     */
    protected $UserField1 = null;

    /**
     * @var string $UserField2
     */
    protected $UserField2 = null;

    /**
     * @var string $UserField3
     */
    protected $UserField3 = null;

    /**
     * @var string $UserField4
     */
    protected $UserField4 = null;

    /**
     * @var string $UserField5
     */
    protected $UserField5 = null;

    /**
     * @var string $UserField6
     */
    protected $UserField6 = null;

    /**
     * @var string $UserField7
     */
    protected $UserField7 = null;

    /**
     * @var string $UserField8
     */
    protected $UserField8 = null;

    /**
     * @var string $UserField9
     */
    protected $UserField9 = null;

    /**
     * @var string $UserField10
     */
    protected $UserField10 = null;

    /**
     * @var int $CalendarId
     */
    protected $CalendarId = null;

    /**
     * @param string $SicCode
     * @param string $SicDescription
     * @param string $OwnershipType
     * @param string $TimeZone
     * @param string $LeadSource
     * @param string $UserField1
     * @param string $UserField2
     * @param string $UserField3
     * @param string $UserField4
     * @param string $UserField5
     * @param string $UserField6
     * @param string $UserField7
     * @param string $UserField8
     * @param string $UserField9
     * @param string $UserField10
     */
    public function __construct($SicCode = null, $SicDescription = null, $OwnershipType = null, $TimeZone = null, $LeadSource = null, $UserField1 = null, $UserField2 = null, $UserField3 = null, $UserField4 = null, $UserField5 = null, $UserField6 = null, $UserField7 = null, $UserField8 = null, $UserField9 = null, $UserField10 = null)
    {
        $this->SicCode        = $SicCode;
        $this->SicDescription = $SicDescription;
        $this->OwnershipType  = $OwnershipType;
        $this->TimeZone       = $TimeZone;
        $this->LeadSource     = $LeadSource;
        $this->UserField1     = $UserField1;
        $this->UserField2     = $UserField2;
        $this->UserField3     = $UserField3;
        $this->UserField4     = $UserField4;
        $this->UserField5     = $UserField5;
        $this->UserField6     = $UserField6;
        $this->UserField7     = $UserField7;
        $this->UserField8     = $UserField8;
        $this->UserField9     = $UserField9;
        $this->UserField10    = $UserField10;
    }

    /**
     * @return string
     */
    public function getSicCode()
    {
        return $this->SicCode;
    }

    /**
     * @param string $SicCode
     * @return \Spinen\ConnectWise\Library\Api\Generated\CompanyProfile
     */
    public function setSicCode($SicCode)
    {
        $this->SicCode = $SicCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getSicDescription()
    {
        return $this->SicDescription;
    }

    /**
     * @param string $SicDescription
     * @return \Spinen\ConnectWise\Library\Api\Generated\CompanyProfile
     */
    public function setSicDescription($SicDescription)
    {
        $this->SicDescription = $SicDescription;
        return $this;
    }

    /**
     * @return int
     */
    public function getRevenueYear()
    {
        return $this->RevenueYear;
    }

    /**
     * @param int $RevenueYear
     * @return \Spinen\ConnectWise\Library\Api\Generated\CompanyProfile
     */
    public function setRevenueYear($RevenueYear)
    {
        $this->RevenueYear = $RevenueYear;
        return $this;
    }

    /**
     * @return float
     */
    public function getAnnualRevenue()
    {
        return $this->AnnualRevenue;
    }

    /**
     * @param float $AnnualRevenue
     * @return \Spinen\ConnectWise\Library\Api\Generated\CompanyProfile
     */
    public function setAnnualRevenue($AnnualRevenue)
    {
        $this->AnnualRevenue = $AnnualRevenue;
        return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfEmployees()
    {
        return $this->NumberOfEmployees;
    }

    /**
     * @param int $NumberOfEmployees
     * @return \Spinen\ConnectWise\Library\Api\Generated\CompanyProfile
     */
    public function setNumberOfEmployees($NumberOfEmployees)
    {
        $this->NumberOfEmployees = $NumberOfEmployees;
        return $this;
    }

    /**
     * @return int
     */
    public function getParentCompanyId()
    {
        return $this->ParentCompanyId;
    }

    /**
     * @param int $ParentCompanyId
     * @return \Spinen\ConnectWise\Library\Api\Generated\CompanyProfile
     */
    public function setParentCompanyId($ParentCompanyId)
    {
        $this->ParentCompanyId = $ParentCompanyId;
        return $this;
    }

    /**
     * @return string
     */
    public function getOwnershipType()
    {
        return $this->OwnershipType;
    }

    /**
     * @param string $OwnershipType
     * @return \Spinen\ConnectWise\Library\Api\Generated\CompanyProfile
     */
    public function setOwnershipType($OwnershipType)
    {
        $this->OwnershipType = $OwnershipType;
        return $this;
    }

    /**
     * @return string
     */
    public function getTimeZone()
    {
        return $this->TimeZone;
    }

    /**
     * @param string $TimeZone
     * @return \Spinen\ConnectWise\Library\Api\Generated\CompanyProfile
     */
    public function setTimeZone($TimeZone)
    {
        $this->TimeZone = $TimeZone;
        return $this;
    }

    /**
     * @return string
     */
    public function getLeadSource()
    {
        return $this->LeadSource;
    }

    /**
     * @param string $LeadSource
     * @return \Spinen\ConnectWise\Library\Api\Generated\CompanyProfile
     */
    public function setLeadSource($LeadSource)
    {
        $this->LeadSource = $LeadSource;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsLead()
    {
        return $this->IsLead;
    }

    /**
     * @param boolean $IsLead
     * @return \Spinen\ConnectWise\Library\Api\Generated\CompanyProfile
     */
    public function setIsLead($IsLead)
    {
        $this->IsLead = $IsLead;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsUnsubscribedFromEmail()
    {
        return $this->IsUnsubscribedFromEmail;
    }

    /**
     * @param boolean $IsUnsubscribedFromEmail
     * @return \Spinen\ConnectWise\Library\Api\Generated\CompanyProfile
     */
    public function setIsUnsubscribedFromEmail($IsUnsubscribedFromEmail)
    {
        $this->IsUnsubscribedFromEmail = $IsUnsubscribedFromEmail;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserField1()
    {
        return $this->UserField1;
    }

    /**
     * @param string $UserField1
     * @return \Spinen\ConnectWise\Library\Api\Generated\CompanyProfile
     */
    public function setUserField1($UserField1)
    {
        $this->UserField1 = $UserField1;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserField2()
    {
        return $this->UserField2;
    }

    /**
     * @param string $UserField2
     * @return \Spinen\ConnectWise\Library\Api\Generated\CompanyProfile
     */
    public function setUserField2($UserField2)
    {
        $this->UserField2 = $UserField2;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserField3()
    {
        return $this->UserField3;
    }

    /**
     * @param string $UserField3
     * @return \Spinen\ConnectWise\Library\Api\Generated\CompanyProfile
     */
    public function setUserField3($UserField3)
    {
        $this->UserField3 = $UserField3;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserField4()
    {
        return $this->UserField4;
    }

    /**
     * @param string $UserField4
     * @return \Spinen\ConnectWise\Library\Api\Generated\CompanyProfile
     */
    public function setUserField4($UserField4)
    {
        $this->UserField4 = $UserField4;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserField5()
    {
        return $this->UserField5;
    }

    /**
     * @param string $UserField5
     * @return \Spinen\ConnectWise\Library\Api\Generated\CompanyProfile
     */
    public function setUserField5($UserField5)
    {
        $this->UserField5 = $UserField5;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserField6()
    {
        return $this->UserField6;
    }

    /**
     * @param string $UserField6
     * @return \Spinen\ConnectWise\Library\Api\Generated\CompanyProfile
     */
    public function setUserField6($UserField6)
    {
        $this->UserField6 = $UserField6;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserField7()
    {
        return $this->UserField7;
    }

    /**
     * @param string $UserField7
     * @return \Spinen\ConnectWise\Library\Api\Generated\CompanyProfile
     */
    public function setUserField7($UserField7)
    {
        $this->UserField7 = $UserField7;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserField8()
    {
        return $this->UserField8;
    }

    /**
     * @param string $UserField8
     * @return \Spinen\ConnectWise\Library\Api\Generated\CompanyProfile
     */
    public function setUserField8($UserField8)
    {
        $this->UserField8 = $UserField8;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserField9()
    {
        return $this->UserField9;
    }

    /**
     * @param string $UserField9
     * @return \Spinen\ConnectWise\Library\Api\Generated\CompanyProfile
     */
    public function setUserField9($UserField9)
    {
        $this->UserField9 = $UserField9;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserField10()
    {
        return $this->UserField10;
    }

    /**
     * @param string $UserField10
     * @return \Spinen\ConnectWise\Library\Api\Generated\CompanyProfile
     */
    public function setUserField10($UserField10)
    {
        $this->UserField10 = $UserField10;
        return $this;
    }

    /**
     * @return int
     */
    public function getCalendarId()
    {
        return $this->CalendarId;
    }

    /**
     * @param int $CalendarId
     * @return \Spinen\ConnectWise\Library\Api\Generated\CompanyProfile
     */
    public function setCalendarId($CalendarId)
    {
        $this->CalendarId = $CalendarId;
        return $this;
    }

}
