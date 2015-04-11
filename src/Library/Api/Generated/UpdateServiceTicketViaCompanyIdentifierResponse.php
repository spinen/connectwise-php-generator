<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class UpdateServiceTicketViaCompanyIdentifierResponse
{

    /**
     * @var ServiceTicket $UpdateServiceTicketViaCompanyIdentifierResult
     */
    protected $UpdateServiceTicketViaCompanyIdentifierResult = null;

    /**
     * @param ServiceTicket $UpdateServiceTicketViaCompanyIdentifierResult
     */
    public function __construct(ServiceTicket $UpdateServiceTicketViaCompanyIdentifierResult = null)
    {
        $this->UpdateServiceTicketViaCompanyIdentifierResult = $UpdateServiceTicketViaCompanyIdentifierResult;
    }

    /**
     * @return ServiceTicket
     */
    public function getUpdateServiceTicketViaCompanyIdentifierResult()
    {
        return $this->UpdateServiceTicketViaCompanyIdentifierResult;
    }

    /**
     * @param ServiceTicket $UpdateServiceTicketViaCompanyIdentifierResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\UpdateServiceTicketViaCompanyIdentifierResponse
     */
    public function setUpdateServiceTicketViaCompanyIdentifierResult(ServiceTicket $UpdateServiceTicketViaCompanyIdentifierResult)
    {
        $this->UpdateServiceTicketViaCompanyIdentifierResult = $UpdateServiceTicketViaCompanyIdentifierResult;
        return $this;
    }

}
