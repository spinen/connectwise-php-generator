<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class RemoveCompanyPricingSchedule
{

    /**
     * @var ApiCredentials $credentials
     */
    protected $credentials = null;

    /**
     * @var int $pricingScheduleId
     */
    protected $pricingScheduleId = null;

    /**
     * @var ArrayOfInt $companyIds
     */
    protected $companyIds = null;

    /**
     * @param ApiCredentials $credentials
     * @param int $pricingScheduleId
     * @param ArrayOfInt $companyIds
     */
    public function __construct(ApiCredentials $credentials = null, $pricingScheduleId = null, $companyIds = null)
    {
        $this->credentials       = $credentials;
        $this->pricingScheduleId = $pricingScheduleId;
        $this->companyIds        = $companyIds;
    }

    /**
     * @return ApiCredentials
     */
    public function getCredentials()
    {
        return $this->credentials;
    }

    /**
     * @param ApiCredentials $credentials
     * @return \Spinen\ConnectWise\Library\Api\Generated\RemoveCompanyPricingSchedule
     */
    public function setCredentials(ApiCredentials $credentials)
    {
        $this->credentials = $credentials;
        return $this;
    }

    /**
     * @return int
     */
    public function getPricingScheduleId()
    {
        return $this->pricingScheduleId;
    }

    /**
     * @param int $pricingScheduleId
     * @return \Spinen\ConnectWise\Library\Api\Generated\RemoveCompanyPricingSchedule
     */
    public function setPricingScheduleId($pricingScheduleId)
    {
        $this->pricingScheduleId = $pricingScheduleId;
        return $this;
    }

    /**
     * @return ArrayOfInt
     */
    public function getCompanyIds()
    {
        return $this->companyIds;
    }

    /**
     * @param ArrayOfInt $companyIds
     * @return \Spinen\ConnectWise\Library\Api\Generated\RemoveCompanyPricingSchedule
     */
    public function setCompanyIds($companyIds)
    {
        $this->companyIds = $companyIds;
        return $this;
    }

}
