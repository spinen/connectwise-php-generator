<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ProjectFindResult
{

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var string $ProjectName
     */
    protected $ProjectName = null;

    /**
     * @var string $BillingMethod
     */
    protected $BillingMethod = null;

    /**
     * @var string $ProjectType
     */
    protected $ProjectType = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var string $Status
     */
    protected $Status = null;

    /**
     * @var string $ProjectManager
     */
    protected $ProjectManager = null;

    /**
     * @var string $Contact
     */
    protected $Contact = null;

    /**
     * @var string $CompanyIdentifier
     */
    protected $CompanyIdentifier = null;

    /**
     * @var boolean $ClosedFlag
     */
    protected $ClosedFlag = null;

    /**
     * @var \DateTime $EstimatedStartDate
     */
    protected $EstimatedStartDate = null;

    /**
     * @var \DateTime $EstimatedEndDate
     */
    protected $EstimatedEndDate = null;

    /**
     * @var \DateTime $ClosedDate
     */
    protected $ClosedDate = null;

    /**
     * @var int $CompanyId
     */
    protected $CompanyId = null;

    /**
     * @var string $UpdatedBy
     */
    protected $UpdatedBy = null;

    /**
     * @var \DateTime $LastUpdated
     */
    protected $LastUpdated = null;

    /**
     * @var string $TimeZoneName
     */
    protected $TimeZoneName = null;

    /**
     * @param int $Id
     * @param string $ProjectName
     * @param string $BillingMethod
     * @param string $ProjectType
     * @param string $Description
     * @param string $Status
     * @param string $ProjectManager
     * @param string $Contact
     * @param string $CompanyIdentifier
     * @param string $UpdatedBy
     * @param string $TimeZoneName
     */
    public function __construct($Id = null, $ProjectName = null, $BillingMethod = null, $ProjectType = null, $Description = null, $Status = null, $ProjectManager = null, $Contact = null, $CompanyIdentifier = null, $UpdatedBy = null, $TimeZoneName = null)
    {
        $this->Id                = $Id;
        $this->ProjectName       = $ProjectName;
        $this->BillingMethod     = $BillingMethod;
        $this->ProjectType       = $ProjectType;
        $this->Description       = $Description;
        $this->Status            = $Status;
        $this->ProjectManager    = $ProjectManager;
        $this->Contact           = $Contact;
        $this->CompanyIdentifier = $CompanyIdentifier;
        $this->UpdatedBy         = $UpdatedBy;
        $this->TimeZoneName      = $TimeZoneName;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProjectFindResult
     */
    public function setId($Id)
    {
        $this->Id = $Id;
        return $this;
    }

    /**
     * @return string
     */
    public function getProjectName()
    {
        return $this->ProjectName;
    }

    /**
     * @param string $ProjectName
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProjectFindResult
     */
    public function setProjectName($ProjectName)
    {
        $this->ProjectName = $ProjectName;
        return $this;
    }

    /**
     * @return string
     */
    public function getBillingMethod()
    {
        return $this->BillingMethod;
    }

    /**
     * @param string $BillingMethod
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProjectFindResult
     */
    public function setBillingMethod($BillingMethod)
    {
        $this->BillingMethod = $BillingMethod;
        return $this;
    }

    /**
     * @return string
     */
    public function getProjectType()
    {
        return $this->ProjectType;
    }

    /**
     * @param string $ProjectType
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProjectFindResult
     */
    public function setProjectType($ProjectType)
    {
        $this->ProjectType = $ProjectType;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProjectFindResult
     */
    public function setDescription($Description)
    {
        $this->Description = $Description;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * @param string $Status
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProjectFindResult
     */
    public function setStatus($Status)
    {
        $this->Status = $Status;
        return $this;
    }

    /**
     * @return string
     */
    public function getProjectManager()
    {
        return $this->ProjectManager;
    }

    /**
     * @param string $ProjectManager
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProjectFindResult
     */
    public function setProjectManager($ProjectManager)
    {
        $this->ProjectManager = $ProjectManager;
        return $this;
    }

    /**
     * @return string
     */
    public function getContact()
    {
        return $this->Contact;
    }

    /**
     * @param string $Contact
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProjectFindResult
     */
    public function setContact($Contact)
    {
        $this->Contact = $Contact;
        return $this;
    }

    /**
     * @return string
     */
    public function getCompanyIdentifier()
    {
        return $this->CompanyIdentifier;
    }

    /**
     * @param string $CompanyIdentifier
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProjectFindResult
     */
    public function setCompanyIdentifier($CompanyIdentifier)
    {
        $this->CompanyIdentifier = $CompanyIdentifier;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getClosedFlag()
    {
        return $this->ClosedFlag;
    }

    /**
     * @param boolean $ClosedFlag
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProjectFindResult
     */
    public function setClosedFlag($ClosedFlag)
    {
        $this->ClosedFlag = $ClosedFlag;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEstimatedStartDate()
    {
        if ($this->EstimatedStartDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->EstimatedStartDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $EstimatedStartDate
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProjectFindResult
     */
    public function setEstimatedStartDate(\DateTime $EstimatedStartDate)
    {
        $this->EstimatedStartDate = $EstimatedStartDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEstimatedEndDate()
    {
        if ($this->EstimatedEndDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->EstimatedEndDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $EstimatedEndDate
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProjectFindResult
     */
    public function setEstimatedEndDate(\DateTime $EstimatedEndDate)
    {
        $this->EstimatedEndDate = $EstimatedEndDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getClosedDate()
    {
        if ($this->ClosedDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->ClosedDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $ClosedDate
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProjectFindResult
     */
    public function setClosedDate(\DateTime $ClosedDate)
    {
        $this->ClosedDate = $ClosedDate->format(\DateTime::ATOM);
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProjectFindResult
     */
    public function setCompanyId($CompanyId)
    {
        $this->CompanyId = $CompanyId;
        return $this;
    }

    /**
     * @return string
     */
    public function getUpdatedBy()
    {
        return $this->UpdatedBy;
    }

    /**
     * @param string $UpdatedBy
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProjectFindResult
     */
    public function setUpdatedBy($UpdatedBy)
    {
        $this->UpdatedBy = $UpdatedBy;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastUpdated()
    {
        if ($this->LastUpdated == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->LastUpdated);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $LastUpdated
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProjectFindResult
     */
    public function setLastUpdated(\DateTime $LastUpdated)
    {
        $this->LastUpdated = $LastUpdated->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return string
     */
    public function getTimeZoneName()
    {
        return $this->TimeZoneName;
    }

    /**
     * @param string $TimeZoneName
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProjectFindResult
     */
    public function setTimeZoneName($TimeZoneName)
    {
        $this->TimeZoneName = $TimeZoneName;
        return $this;
    }

}
