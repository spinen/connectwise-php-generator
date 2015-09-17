<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class TicketTask
{

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var int $TicketId
     */
    protected $TicketId = null;

    /**
     * @var string $Notes
     */
    protected $Notes = null;

    /**
     * @var boolean $IsClosed
     */
    protected $IsClosed = null;

    /**
     * @var int $Priority
     */
    protected $Priority = null;

    /**
     * @var \DateTime $StartDate
     */
    protected $StartDate = null;

    /**
     * @var string $Resolution
     */
    protected $Resolution = null;

    /**
     * @var int $ChildId
     */
    protected $ChildId = null;

    /**
     * @var string $ChildDesc
     */
    protected $ChildDesc = null;

    /**
     * @var string $CustUpdateFlag
     */
    protected $CustUpdateFlag = null;

    /**
     * @param int $Id
     * @param int $TicketId
     * @param boolean $IsClosed
     * @param int $Priority
     */
    public function __construct($Id = null, $TicketId = null, $IsClosed = null, $Priority = null)
    {
        $this->Id       = $Id;
        $this->TicketId = $TicketId;
        $this->IsClosed = $IsClosed;
        $this->Priority = $Priority;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketTask
     */
    public function setId($Id)
    {
        $this->Id = $Id;
        return $this;
    }

    /**
     * @return int
     */
    public function getTicketId()
    {
        return $this->TicketId;
    }

    /**
     * @param int $TicketId
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketTask
     */
    public function setTicketId($TicketId)
    {
        $this->TicketId = $TicketId;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketTask
     */
    public function setNotes($Notes)
    {
        $this->Notes = $Notes;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsClosed()
    {
        return $this->IsClosed;
    }

    /**
     * @param boolean $IsClosed
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketTask
     */
    public function setIsClosed($IsClosed)
    {
        $this->IsClosed = $IsClosed;
        return $this;
    }

    /**
     * @return int
     */
    public function getPriority()
    {
        return $this->Priority;
    }

    /**
     * @param int $Priority
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketTask
     */
    public function setPriority($Priority)
    {
        $this->Priority = $Priority;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
        if ($this->StartDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->StartDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $StartDate
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketTask
     */
    public function setStartDate(\DateTime $StartDate = null)
    {
        if ($StartDate == null) {
            $this->StartDate = null;
        } else {
            $this->StartDate = $StartDate->format(\DateTime::ATOM);
        }
        return $this;
    }

    /**
     * @return string
     */
    public function getResolution()
    {
        return $this->Resolution;
    }

    /**
     * @param string $Resolution
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketTask
     */
    public function setResolution($Resolution)
    {
        $this->Resolution = $Resolution;
        return $this;
    }

    /**
     * @return int
     */
    public function getChildId()
    {
        return $this->ChildId;
    }

    /**
     * @param int $ChildId
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketTask
     */
    public function setChildId($ChildId)
    {
        $this->ChildId = $ChildId;
        return $this;
    }

    /**
     * @return string
     */
    public function getChildDesc()
    {
        return $this->ChildDesc;
    }

    /**
     * @param string $ChildDesc
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketTask
     */
    public function setChildDesc($ChildDesc)
    {
        $this->ChildDesc = $ChildDesc;
        return $this;
    }

    /**
     * @return string
     */
    public function getCustUpdateFlag()
    {
        return $this->CustUpdateFlag;
    }

    /**
     * @param string $CustUpdateFlag
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketTask
     */
    public function setCustUpdateFlag($CustUpdateFlag)
    {
        $this->CustUpdateFlag = $CustUpdateFlag;
        return $this;
    }

}
