<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddTicketProduct
{

    /**
     * @var ApiCredentials $credentials
     */
    protected $credentials = null;

    /**
     * @var TicketProduct $ticketProduct
     */
    protected $ticketProduct = null;

    /**
     * @param ApiCredentials $credentials
     * @param TicketProduct $ticketProduct
     */
    public function __construct(ApiCredentials $credentials = null, TicketProduct $ticketProduct = null)
    {
        $this->credentials   = $credentials;
        $this->ticketProduct = $ticketProduct;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddTicketProduct
     */
    public function setCredentials(ApiCredentials $credentials)
    {
        $this->credentials = $credentials;
        return $this;
    }

    /**
     * @return TicketProduct
     */
    public function getTicketProduct()
    {
        return $this->ticketProduct;
    }

    /**
     * @param TicketProduct $ticketProduct
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddTicketProduct
     */
    public function setTicketProduct(TicketProduct $ticketProduct)
    {
        $this->ticketProduct = $ticketProduct;
        return $this;
    }

}
