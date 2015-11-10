<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class RecurringRevenueItem
{

    /**
     * @var float $RecurringRevenue
     */
    protected $RecurringRevenue = null;

    /**
     * @var float $RecurringCost
     */
    protected $RecurringCost = null;

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
     * @param float $RecurringRevenue
     * @param float $RecurringCost
     * @param string $CycleBasis
     * @param string $BillCycle
     */
    public function __construct($RecurringRevenue = null, $RecurringCost = null, $CycleBasis = null, $BillCycle = null)
    {
        $this->RecurringRevenue = $RecurringRevenue;
        $this->RecurringCost    = $RecurringCost;
        $this->CycleBasis       = $CycleBasis;
        $this->BillCycle        = $BillCycle;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\RecurringRevenueItem
     */
    public function setRecurringRevenue($RecurringRevenue)
    {
        $this->RecurringRevenue = $RecurringRevenue;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\RecurringRevenueItem
     */
    public function setRecurringCost($RecurringCost)
    {
        $this->RecurringCost = $RecurringCost;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\RecurringRevenueItem
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\RecurringRevenueItem
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\RecurringRevenueItem
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\RecurringRevenueItem
     */
    public function setRecurringStartDate(\DateTime $RecurringStartDate)
    {
        $this->RecurringStartDate = $RecurringStartDate->format(\DateTime::ATOM);
        return $this;
    }

}
