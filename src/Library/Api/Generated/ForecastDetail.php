<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ForecastDetail
{

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var int $OpportunityId
     */
    protected $OpportunityId = null;

    /**
     * @var string $ForecastType
     */
    protected $ForecastType = null;

    /**
     * @var float $Cost
     */
    protected $Cost = null;

    /**
     * @var float $Revenue
     */
    protected $Revenue = null;

    /**
     * @var boolean $Included
     */
    protected $Included = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var string $CycleBasis
     */
    protected $CycleBasis = null;

    /**
     * @var string $BillCycle
     */
    protected $BillCycle = null;

    /**
     * @var \DateTime $RecurringEndDate
     */
    protected $RecurringEndDate = null;

    /**
     * @var \DateTime $RecurringStartDate
     */
    protected $RecurringStartDate = null;

    /**
     * @var float $RecurringCost
     */
    protected $RecurringCost = null;

    /**
     * @var float $RecurringRevenue
     */
    protected $RecurringRevenue = null;

    /**
     * @var boolean $Linked
     */
    protected $Linked = null;

    /**
     * @var string $QuoteNumber
     */
    protected $QuoteNumber = null;

    /**
     * @var string $QuoteName
     */
    protected $QuoteName = null;

    /**
     * @var string $Status
     */
    protected $Status = null;

    /**
     * @var float $TotalRecurringRevenue
     */
    protected $TotalRecurringRevenue = null;

    /**
     * @var float $TotalRecurringCost
     */
    protected $TotalRecurringCost = null;

    /**
     * @param int $Id
     * @param int $OpportunityId
     * @param string $ForecastType
     * @param float $Cost
     * @param float $Revenue
     * @param boolean $Included
     * @param string $Description
     * @param string $CycleBasis
     * @param string $BillCycle
     * @param float $RecurringCost
     * @param float $RecurringRevenue
     * @param boolean $Linked
     * @param string $QuoteNumber
     * @param string $QuoteName
     * @param string $Status
     * @param float $TotalRecurringRevenue
     * @param float $TotalRecurringCost
     */
    public function __construct($Id = null, $OpportunityId = null, $ForecastType = null, $Cost = null, $Revenue = null, $Included = null, $Description = null, $CycleBasis = null, $BillCycle = null, $RecurringCost = null, $RecurringRevenue = null, $Linked = null, $QuoteNumber = null, $QuoteName = null, $Status = null, $TotalRecurringRevenue = null, $TotalRecurringCost = null)
    {
        $this->Id                    = $Id;
        $this->OpportunityId         = $OpportunityId;
        $this->ForecastType          = $ForecastType;
        $this->Cost                  = $Cost;
        $this->Revenue               = $Revenue;
        $this->Included              = $Included;
        $this->Description           = $Description;
        $this->CycleBasis            = $CycleBasis;
        $this->BillCycle             = $BillCycle;
        $this->RecurringCost         = $RecurringCost;
        $this->RecurringRevenue      = $RecurringRevenue;
        $this->Linked                = $Linked;
        $this->QuoteNumber           = $QuoteNumber;
        $this->QuoteName             = $QuoteName;
        $this->Status                = $Status;
        $this->TotalRecurringRevenue = $TotalRecurringRevenue;
        $this->TotalRecurringCost    = $TotalRecurringCost;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ForecastDetail
     */
    public function setId($Id)
    {
        $this->Id = $Id;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ForecastDetail
     */
    public function setOpportunityId($OpportunityId)
    {
        $this->OpportunityId = $OpportunityId;
        return $this;
    }

    /**
     * @return string
     */
    public function getForecastType()
    {
        return $this->ForecastType;
    }

    /**
     * @param string $ForecastType
     * @return \Spinen\ConnectWise\Library\Api\Generated\ForecastDetail
     */
    public function setForecastType($ForecastType)
    {
        $this->ForecastType = $ForecastType;
        return $this;
    }

    /**
     * @return float
     */
    public function getCost()
    {
        return $this->Cost;
    }

    /**
     * @param float $Cost
     * @return \Spinen\ConnectWise\Library\Api\Generated\ForecastDetail
     */
    public function setCost($Cost)
    {
        $this->Cost = $Cost;
        return $this;
    }

    /**
     * @return float
     */
    public function getRevenue()
    {
        return $this->Revenue;
    }

    /**
     * @param float $Revenue
     * @return \Spinen\ConnectWise\Library\Api\Generated\ForecastDetail
     */
    public function setRevenue($Revenue)
    {
        $this->Revenue = $Revenue;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIncluded()
    {
        return $this->Included;
    }

    /**
     * @param boolean $Included
     * @return \Spinen\ConnectWise\Library\Api\Generated\ForecastDetail
     */
    public function setIncluded($Included)
    {
        $this->Included = $Included;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ForecastDetail
     */
    public function setDescription($Description)
    {
        $this->Description = $Description;
        return $this;
    }

    /**
     * @return string
     */
    public function getCycleBasis()
    {
        return $this->CycleBasis;
    }

    /**
     * @param string $CycleBasis
     * @return \Spinen\ConnectWise\Library\Api\Generated\ForecastDetail
     */
    public function setCycleBasis($CycleBasis)
    {
        $this->CycleBasis = $CycleBasis;
        return $this;
    }

    /**
     * @return string
     */
    public function getBillCycle()
    {
        return $this->BillCycle;
    }

    /**
     * @param string $BillCycle
     * @return \Spinen\ConnectWise\Library\Api\Generated\ForecastDetail
     */
    public function setBillCycle($BillCycle)
    {
        $this->BillCycle = $BillCycle;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getRecurringEndDate()
    {
        if ($this->RecurringEndDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->RecurringEndDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $RecurringEndDate
     * @return \Spinen\ConnectWise\Library\Api\Generated\ForecastDetail
     */
    public function setRecurringEndDate(\DateTime $RecurringEndDate)
    {
        $this->RecurringEndDate = $RecurringEndDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getRecurringStartDate()
    {
        if ($this->RecurringStartDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->RecurringStartDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $RecurringStartDate
     * @return \Spinen\ConnectWise\Library\Api\Generated\ForecastDetail
     */
    public function setRecurringStartDate(\DateTime $RecurringStartDate)
    {
        $this->RecurringStartDate = $RecurringStartDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return float
     */
    public function getRecurringCost()
    {
        return $this->RecurringCost;
    }

    /**
     * @param float $RecurringCost
     * @return \Spinen\ConnectWise\Library\Api\Generated\ForecastDetail
     */
    public function setRecurringCost($RecurringCost)
    {
        $this->RecurringCost = $RecurringCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getRecurringRevenue()
    {
        return $this->RecurringRevenue;
    }

    /**
     * @param float $RecurringRevenue
     * @return \Spinen\ConnectWise\Library\Api\Generated\ForecastDetail
     */
    public function setRecurringRevenue($RecurringRevenue)
    {
        $this->RecurringRevenue = $RecurringRevenue;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getLinked()
    {
        return $this->Linked;
    }

    /**
     * @param boolean $Linked
     * @return \Spinen\ConnectWise\Library\Api\Generated\ForecastDetail
     */
    public function setLinked($Linked)
    {
        $this->Linked = $Linked;
        return $this;
    }

    /**
     * @return string
     */
    public function getQuoteNumber()
    {
        return $this->QuoteNumber;
    }

    /**
     * @param string $QuoteNumber
     * @return \Spinen\ConnectWise\Library\Api\Generated\ForecastDetail
     */
    public function setQuoteNumber($QuoteNumber)
    {
        $this->QuoteNumber = $QuoteNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getQuoteName()
    {
        return $this->QuoteName;
    }

    /**
     * @param string $QuoteName
     * @return \Spinen\ConnectWise\Library\Api\Generated\ForecastDetail
     */
    public function setQuoteName($QuoteName)
    {
        $this->QuoteName = $QuoteName;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ForecastDetail
     */
    public function setStatus($Status)
    {
        $this->Status = $Status;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalRecurringRevenue()
    {
        return $this->TotalRecurringRevenue;
    }

    /**
     * @param float $TotalRecurringRevenue
     * @return \Spinen\ConnectWise\Library\Api\Generated\ForecastDetail
     */
    public function setTotalRecurringRevenue($TotalRecurringRevenue)
    {
        $this->TotalRecurringRevenue = $TotalRecurringRevenue;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalRecurringCost()
    {
        return $this->TotalRecurringCost;
    }

    /**
     * @param float $TotalRecurringCost
     * @return \Spinen\ConnectWise\Library\Api\Generated\ForecastDetail
     */
    public function setTotalRecurringCost($TotalRecurringCost)
    {
        $this->TotalRecurringCost = $TotalRecurringCost;
        return $this;
    }

}
