<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddOrUpdatePriceBreak
{

    /**
     * @var ApiCredentials $credentials
     */
    protected $credentials = null;

    /**
     * @var PriceBreak $priceBreak
     */
    protected $priceBreak = null;

    /**
     * @param ApiCredentials $credentials
     * @param PriceBreak $priceBreak
     */
    public function __construct(ApiCredentials $credentials = null, PriceBreak $priceBreak = null)
    {
        $this->credentials = $credentials;
        $this->priceBreak  = $priceBreak;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdatePriceBreak
     */
    public function setCredentials(ApiCredentials $credentials)
    {
        $this->credentials = $credentials;
        return $this;
    }

    /**
     * @return PriceBreak
     */
    public function getPriceBreak()
    {
        return $this->priceBreak;
    }

    /**
     * @param PriceBreak $priceBreak
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdatePriceBreak
     */
    public function setPriceBreak(PriceBreak $priceBreak)
    {
        $this->priceBreak = $priceBreak;
        return $this;
    }

}
