<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class GetServiceTicketResponse
{

    /**
     * @var ServiceTicket $GetServiceTicketResult
     */
    protected $GetServiceTicketResult = null;

    /**
     * @param ServiceTicket $GetServiceTicketResult
     */
    public function __construct(ServiceTicket $GetServiceTicketResult = null)
    {
        $this->GetServiceTicketResult = $GetServiceTicketResult;
    }

    /**
     * @return ServiceTicket
     */
    public function getGetServiceTicketResult()
    {
        return $this->GetServiceTicketResult;
    }

    /**
     * @param ServiceTicket $GetServiceTicketResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetServiceTicketResponse
     */
    public function setGetServiceTicketResult(ServiceTicket $GetServiceTicketResult)
    {
        $this->GetServiceTicketResult = $GetServiceTicketResult;
        return $this;
    }

}
