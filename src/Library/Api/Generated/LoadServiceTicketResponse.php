<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class LoadServiceTicketResponse
{

    /**
     * @var ServiceTicket $LoadServiceTicketResult
     */
    protected $LoadServiceTicketResult = null;

    /**
     * @param ServiceTicket $LoadServiceTicketResult
     */
    public function __construct(ServiceTicket $LoadServiceTicketResult = null)
    {
        $this->LoadServiceTicketResult = $LoadServiceTicketResult;
    }

    /**
     * @return ServiceTicket
     */
    public function getLoadServiceTicketResult()
    {
        return $this->LoadServiceTicketResult;
    }

    /**
     * @param ServiceTicket $LoadServiceTicketResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\LoadServiceTicketResponse
     */
    public function setLoadServiceTicketResult(ServiceTicket $LoadServiceTicketResult)
    {
        $this->LoadServiceTicketResult = $LoadServiceTicketResult;
        return $this;
    }

}
