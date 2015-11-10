<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ConvertServiceTicketToProjectTicket
{

    /**
     * @var ApiCredentials $credentials
     */
    protected $credentials = null;

    /**
     * @var ConvertServiceTicketToProjectTicket $serviceTicketToProjectTicket
     */
    protected $serviceTicketToProjectTicket = null;

    /**
     * @param ApiCredentials $credentials
     * @param ConvertServiceTicketToProjectTicket $serviceTicketToProjectTicket
     */
    public function __construct(ApiCredentials $credentials = null, ConvertServiceTicketToProjectTicket $serviceTicketToProjectTicket = null)
    {
        $this->credentials                  = $credentials;
        $this->serviceTicketToProjectTicket = $serviceTicketToProjectTicket;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ConvertServiceTicketToProjectTicket
     */
    public function setCredentials(ApiCredentials $credentials)
    {
        $this->credentials = $credentials;
        return $this;
    }

    /**
     * @return ConvertServiceTicketToProjectTicket
     */
    public function getServiceTicketToProjectTicket()
    {
        return $this->serviceTicketToProjectTicket;
    }

    /**
     * @param ConvertServiceTicketToProjectTicket $serviceTicketToProjectTicket
     * @return \Spinen\ConnectWise\Library\Api\Generated\ConvertServiceTicketToProjectTicket
     */
    public function setServiceTicketToProjectTicket(ConvertServiceTicketToProjectTicket $serviceTicketToProjectTicket)
    {
        $this->serviceTicketToProjectTicket = $serviceTicketToProjectTicket;
        return $this;
    }

}
