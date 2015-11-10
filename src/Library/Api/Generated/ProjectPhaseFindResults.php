<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ProjectPhaseFindResults
{

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var int $ProjectId
     */
    protected $ProjectId = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var int $ParentPhaseId
     */
    protected $ParentPhaseId = null;

    /**
     * @var int $ProjectBoardId
     */
    protected $ProjectBoardId = null;

    /**
     * @var int $AgreementId
     */
    protected $AgreementId = null;

    /**
     * @var int $OpportunityId
     */
    protected $OpportunityId = null;

    /**
     * @var string $Notes
     */
    protected $Notes = null;

    /**
     * @var string $UpdatedBy
     */
    protected $UpdatedBy = null;

    /**
     * @var string $BillingMethod
     */
    protected $BillingMethod = null;

    /**
     * @var \DateTime $DateEntered
     */
    protected $DateEntered = null;

    /**
     * @var \DateTime $LastUpdated
     */
    protected $LastUpdated = null;

    /**
     * @var \DateTime $DateDeadline
     */
    protected $DateDeadline = null;

    /**
     * @var string $TimeZoneName
     */
    protected $TimeZoneName = null;

    /**
     * @param int $Id
     * @param string $Description
     * @param string $Notes
     * @param string $UpdatedBy
     * @param string $BillingMethod
     * @param string $TimeZoneName
     */
    public function __construct($Id = null, $Description = null, $Notes = null, $UpdatedBy = null, $BillingMethod = null, $TimeZoneName = null)
    {
        $this->Id            = $Id;
        $this->Description   = $Description;
        $this->Notes         = $Notes;
        $this->UpdatedBy     = $UpdatedBy;
        $this->BillingMethod = $BillingMethod;
        $this->TimeZoneName  = $TimeZoneName;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProjectPhaseFindResults
     */
    public function setId($Id)
    {
        $this->Id = $Id;
        return $this;
    }

    /**
     * @return int
     */
    public function getProjectId()
    {
        return $this->ProjectId;
    }

    /**
     * @param int $ProjectId
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProjectPhaseFindResults
     */
    public function setProjectId($ProjectId)
    {
        $this->ProjectId = $ProjectId;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProjectPhaseFindResults
     */
    public function setDescription($Description)
    {
        $this->Description = $Description;
        return $this;
    }

    /**
     * @return int
     */
    public function getParentPhaseId()
    {
        return $this->ParentPhaseId;
    }

    /**
     * @param int $ParentPhaseId
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProjectPhaseFindResults
     */
    public function setParentPhaseId($ParentPhaseId)
    {
        $this->ParentPhaseId = $ParentPhaseId;
        return $this;
    }

    /**
     * @return int
     */
    public function getProjectBoardId()
    {
        return $this->ProjectBoardId;
    }

    /**
     * @param int $ProjectBoardId
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProjectPhaseFindResults
     */
    public function setProjectBoardId($ProjectBoardId)
    {
        $this->ProjectBoardId = $ProjectBoardId;
        return $this;
    }

    /**
     * @return int
     */
    public function getAgreementId()
    {
        return $this->AgreementId;
    }

    /**
     * @param int $AgreementId
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProjectPhaseFindResults
     */
    public function setAgreementId($AgreementId)
    {
        $this->AgreementId = $AgreementId;
        return $this;
    }

    /**
     * @return int
     */
    public function getOpportunityId()
    {
        return $this->OpportunityId;
    }

    /**
     * @param int $OpportunityId
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProjectPhaseFindResults
     */
    public function setOpportunityId($OpportunityId)
    {
        $this->OpportunityId = $OpportunityId;
        return $this;
    }

    /**
     * @return string
     */
    public function getNotes()
    {
        return $this->Notes;
    }

    /**
     * @param string $Notes
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProjectPhaseFindResults
     */
    public function setNotes($Notes)
    {
        $this->Notes = $Notes;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProjectPhaseFindResults
     */
    public function setUpdatedBy($UpdatedBy)
    {
        $this->UpdatedBy = $UpdatedBy;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProjectPhaseFindResults
     */
    public function setBillingMethod($BillingMethod)
    {
        $this->BillingMethod = $BillingMethod;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateEntered()
    {
        if ($this->DateEntered == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->DateEntered);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $DateEntered
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProjectPhaseFindResults
     */
    public function setDateEntered(\DateTime $DateEntered)
    {
        $this->DateEntered = $DateEntered->format(\DateTime::ATOM);
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProjectPhaseFindResults
     */
    public function setLastUpdated(\DateTime $LastUpdated)
    {
        $this->LastUpdated = $LastUpdated->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateDeadline()
    {
        if ($this->DateDeadline == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->DateDeadline);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $DateDeadline
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProjectPhaseFindResults
     */
    public function setDateDeadline(\DateTime $DateDeadline)
    {
        $this->DateDeadline = $DateDeadline->format(\DateTime::ATOM);
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProjectPhaseFindResults
     */
    public function setTimeZoneName($TimeZoneName)
    {
        $this->TimeZoneName = $TimeZoneName;
        return $this;
    }

}
