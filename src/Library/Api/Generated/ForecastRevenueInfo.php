<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ForecastRevenueInfo
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
     * @var ForecastItem $ForecastItem
     */
    protected $ForecastItem = null;

    /**
     * @var RecurringRevenueItem $RecurringRevenueItem
     */
    protected $RecurringRevenueItem = null;

    /**
     * @param int $Id
     * @param int $OpportunityId
     * @param ForecastItem $ForecastItem
     * @param RecurringRevenueItem $RecurringRevenueItem
     */
    public function __construct($Id = null, $OpportunityId = null, ForecastItem $ForecastItem = null, RecurringRevenueItem $RecurringRevenueItem = null)
    {
        $this->Id                   = $Id;
        $this->OpportunityId        = $OpportunityId;
        $this->ForecastItem         = $ForecastItem;
        $this->RecurringRevenueItem = $RecurringRevenueItem;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ForecastRevenueInfo
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ForecastRevenueInfo
     */
    public function setOpportunityId($OpportunityId)
    {
        $this->OpportunityId = $OpportunityId;
        return $this;
    }

    /**
     * @return ForecastItem
     */
    public function getForecastItem()
    {
        return $this->ForecastItem;
    }

    /**
     * @param ForecastItem $ForecastItem
     * @return \Spinen\ConnectWise\Library\Api\Generated\ForecastRevenueInfo
     */
    public function setForecastItem(ForecastItem $ForecastItem)
    {
        $this->ForecastItem = $ForecastItem;
        return $this;
    }

    /**
     * @return RecurringRevenueItem
     */
    public function getRecurringRevenueItem()
    {
        return $this->RecurringRevenueItem;
    }

    /**
     * @param RecurringRevenueItem $RecurringRevenueItem
     * @return \Spinen\ConnectWise\Library\Api\Generated\ForecastRevenueInfo
     */
    public function setRecurringRevenueItem(RecurringRevenueItem $RecurringRevenueItem)
    {
        $this->RecurringRevenueItem = $RecurringRevenueItem;
        return $this;
    }

}
