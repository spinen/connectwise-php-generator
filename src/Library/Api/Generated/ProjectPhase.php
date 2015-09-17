<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ProjectPhase
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
     * @var int $ProjectBoardId
     */
    protected $ProjectBoardId = null;

    /**
     * @var int $AgreementId
     */
    protected $AgreementId = null;

    /**
     * @var int $ParentPhaseId
     */
    protected $ParentPhaseId = null;

    /**
     * @var string $WbsCode
     */
    protected $WbsCode = null;

    /**
     * @var BillingMethods $BillingMethodIdentifier
     */
    protected $BillingMethodIdentifier = null;

    /**
     * @var BillableOptions $PhaseBillTime
     */
    protected $PhaseBillTime = null;

    /**
     * @var BillableOptions $PhaseBillExpenses
     */
    protected $PhaseBillExpenses = null;

    /**
     * @var boolean $BillableTimeInvoice
     */
    protected $BillableTimeInvoice = null;

    /**
     * @var boolean $BillableExpenseInvoice
     */
    protected $BillableExpenseInvoice = null;

    /**
     * @var boolean $MarkAsMilestone
     */
    protected $MarkAsMilestone = null;

    /**
     * @var boolean $BillSeparately
     */
    protected $BillSeparately = null;

    /**
     * @var string $Notes
     */
    protected $Notes = null;

    /**
     * @var \DateTime $DateDeadline
     */
    protected $DateDeadline = null;

    /**
     * @var ArrayOfProjectPhase $ParentPhase
     */
    protected $ParentPhase = null;

    /**
     * @var ArrayOfProjectTicket $Tickets
     */
    protected $Tickets = null;

    /**
     * @var ProjectPhaseSummaryInfo $ProjectPhaseSummaryInfo
     */
    protected $ProjectPhaseSummaryInfo = null;

    /**
     * @param int $Id
     */
    public function __construct($Id = null)
    {
        $this->Id = $Id;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProjectPhase
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProjectPhase
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProjectPhase
     */
    public function setDescription($Description)
    {
        $this->Description = $Description;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProjectPhase
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProjectPhase
     */
    public function setAgreementId($AgreementId)
    {
        $this->AgreementId = $AgreementId;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProjectPhase
     */
    public function setParentPhaseId($ParentPhaseId)
    {
        $this->ParentPhaseId = $ParentPhaseId;
        return $this;
    }

    /**
     * @return string
     */
    public function getWbsCode()
    {
        return $this->WbsCode;
    }

    /**
     * @param string $WbsCode
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProjectPhase
     */
    public function setWbsCode($WbsCode)
    {
        $this->WbsCode = $WbsCode;
        return $this;
    }

    /**
     * @return BillingMethods
     */
    public function getBillingMethodIdentifier()
    {
        return $this->BillingMethodIdentifier;
    }

    /**
     * @param BillingMethods $BillingMethodIdentifier
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProjectPhase
     */
    public function setBillingMethodIdentifier(BillingMethods $BillingMethodIdentifier)
    {
        $this->BillingMethodIdentifier = $BillingMethodIdentifier;
        return $this;
    }

    /**
     * @return BillableOptions
     */
    public function getPhaseBillTime()
    {
        return $this->PhaseBillTime;
    }

    /**
     * @param BillableOptions $PhaseBillTime
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProjectPhase
     */
    public function setPhaseBillTime(BillableOptions $PhaseBillTime)
    {
        $this->PhaseBillTime = $PhaseBillTime;
        return $this;
    }

    /**
     * @return BillableOptions
     */
    public function getPhaseBillExpenses()
    {
        return $this->PhaseBillExpenses;
    }

    /**
     * @param BillableOptions $PhaseBillExpenses
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProjectPhase
     */
    public function setPhaseBillExpenses(BillableOptions $PhaseBillExpenses)
    {
        $this->PhaseBillExpenses = $PhaseBillExpenses;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getBillableTimeInvoice()
    {
        return $this->BillableTimeInvoice;
    }

    /**
     * @param boolean $BillableTimeInvoice
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProjectPhase
     */
    public function setBillableTimeInvoice($BillableTimeInvoice)
    {
        $this->BillableTimeInvoice = $BillableTimeInvoice;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getBillableExpenseInvoice()
    {
        return $this->BillableExpenseInvoice;
    }

    /**
     * @param boolean $BillableExpenseInvoice
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProjectPhase
     */
    public function setBillableExpenseInvoice($BillableExpenseInvoice)
    {
        $this->BillableExpenseInvoice = $BillableExpenseInvoice;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getMarkAsMilestone()
    {
        return $this->MarkAsMilestone;
    }

    /**
     * @param boolean $MarkAsMilestone
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProjectPhase
     */
    public function setMarkAsMilestone($MarkAsMilestone)
    {
        $this->MarkAsMilestone = $MarkAsMilestone;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getBillSeparately()
    {
        return $this->BillSeparately;
    }

    /**
     * @param boolean $BillSeparately
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProjectPhase
     */
    public function setBillSeparately($BillSeparately)
    {
        $this->BillSeparately = $BillSeparately;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProjectPhase
     */
    public function setNotes($Notes)
    {
        $this->Notes = $Notes;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProjectPhase
     */
    public function setDateDeadline(\DateTime $DateDeadline = null)
    {
        if ($DateDeadline == null) {
            $this->DateDeadline = null;
        } else {
            $this->DateDeadline = $DateDeadline->format(\DateTime::ATOM);
        }
        return $this;
    }

    /**
     * @return ArrayOfProjectPhase
     */
    public function getParentPhase()
    {
        return $this->ParentPhase;
    }

    /**
     * @param ArrayOfProjectPhase $ParentPhase
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProjectPhase
     */
    public function setParentPhase($ParentPhase)
    {
        $this->ParentPhase = $ParentPhase;
        return $this;
    }

    /**
     * @return ArrayOfProjectTicket
     */
    public function getTickets()
    {
        return $this->Tickets;
    }

    /**
     * @param ArrayOfProjectTicket $Tickets
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProjectPhase
     */
    public function setTickets($Tickets)
    {
        $this->Tickets = $Tickets;
        return $this;
    }

    /**
     * @return ProjectPhaseSummaryInfo
     */
    public function getProjectPhaseSummaryInfo()
    {
        return $this->ProjectPhaseSummaryInfo;
    }

    /**
     * @param ProjectPhaseSummaryInfo $ProjectPhaseSummaryInfo
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProjectPhase
     */
    public function setProjectPhaseSummaryInfo(ProjectPhaseSummaryInfo $ProjectPhaseSummaryInfo)
    {
        $this->ProjectPhaseSummaryInfo = $ProjectPhaseSummaryInfo;
        return $this;
    }

}
