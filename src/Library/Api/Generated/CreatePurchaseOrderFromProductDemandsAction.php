<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class CreatePurchaseOrderFromProductDemandsAction
{

    /**
     * @var ApiCredentials $credentials
     */
    protected $credentials = null;

    /**
     * @var ArrayOfProductDemandReference $demands
     */
    protected $demands = null;

    /**
     * @var string $vendorCompanyId
     */
    protected $vendorCompanyId = null;

    /**
     * @param ApiCredentials $credentials
     * @param ArrayOfProductDemandReference $demands
     * @param string $vendorCompanyId
     */
    public function __construct(ApiCredentials $credentials = null, $demands = null, $vendorCompanyId = null)
    {
        $this->credentials     = $credentials;
        $this->demands         = $demands;
        $this->vendorCompanyId = $vendorCompanyId;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\CreatePurchaseOrderFromProductDemandsAction
     */
    public function setCredentials(ApiCredentials $credentials)
    {
        $this->credentials = $credentials;
        return $this;
    }

    /**
     * @return ArrayOfProductDemandReference
     */
    public function getDemands()
    {
        return $this->demands;
    }

    /**
     * @param ArrayOfProductDemandReference $demands
     * @return \Spinen\ConnectWise\Library\Api\Generated\CreatePurchaseOrderFromProductDemandsAction
     */
    public function setDemands($demands)
    {
        $this->demands = $demands;
        return $this;
    }

    /**
     * @return string
     */
    public function getVendorCompanyId()
    {
        return $this->vendorCompanyId;
    }

    /**
     * @param string $vendorCompanyId
     * @return \Spinen\ConnectWise\Library\Api\Generated\CreatePurchaseOrderFromProductDemandsAction
     */
    public function setVendorCompanyId($vendorCompanyId)
    {
        $this->vendorCompanyId = $vendorCompanyId;
        return $this;
    }

}
