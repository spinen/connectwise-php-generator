<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class GetAllOpenProductDemands
{

    /**
     * @var ApiCredentials $credentials
     */
    protected $credentials = null;

    /**
     * @var boolean $includeDemandsFullySatisfiedByWarehouseStock
     */
    protected $includeDemandsFullySatisfiedByWarehouseStock = null;

    /**
     * @param ApiCredentials $credentials
     * @param boolean $includeDemandsFullySatisfiedByWarehouseStock
     */
    public function __construct(ApiCredentials $credentials = null, $includeDemandsFullySatisfiedByWarehouseStock = null)
    {
        $this->credentials                                  = $credentials;
        $this->includeDemandsFullySatisfiedByWarehouseStock = $includeDemandsFullySatisfiedByWarehouseStock;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetAllOpenProductDemands
     */
    public function setCredentials(ApiCredentials $credentials)
    {
        $this->credentials = $credentials;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeDemandsFullySatisfiedByWarehouseStock()
    {
        return $this->includeDemandsFullySatisfiedByWarehouseStock;
    }

    /**
     * @param boolean $includeDemandsFullySatisfiedByWarehouseStock
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetAllOpenProductDemands
     */
    public function setIncludeDemandsFullySatisfiedByWarehouseStock($includeDemandsFullySatisfiedByWarehouseStock)
    {
        $this->includeDemandsFullySatisfiedByWarehouseStock = $includeDemandsFullySatisfiedByWarehouseStock;
        return $this;
    }

}
