<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddOrUpdateSpecialInvoice
{

    /**
     * @var ApiCredentials $credentials
     */
    protected $credentials = null;

    /**
     * @var SpecialInvoice $specialInvoice
     */
    protected $specialInvoice = null;

    /**
     * @param ApiCredentials $credentials
     * @param SpecialInvoice $specialInvoice
     */
    public function __construct(ApiCredentials $credentials = null, SpecialInvoice $specialInvoice = null)
    {
        $this->credentials    = $credentials;
        $this->specialInvoice = $specialInvoice;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdateSpecialInvoice
     */
    public function setCredentials(ApiCredentials $credentials)
    {
        $this->credentials = $credentials;
        return $this;
    }

    /**
     * @return SpecialInvoice
     */
    public function getSpecialInvoice()
    {
        return $this->specialInvoice;
    }

    /**
     * @param SpecialInvoice $specialInvoice
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdateSpecialInvoice
     */
    public function setSpecialInvoice(SpecialInvoice $specialInvoice)
    {
        $this->specialInvoice = $specialInvoice;
        return $this;
    }

}
