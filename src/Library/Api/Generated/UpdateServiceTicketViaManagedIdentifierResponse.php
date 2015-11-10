<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class UpdateServiceTicketViaManagedIdentifierResponse
{

    /**
     * @var ServiceTicket $UpdateServiceTicketViaManagedIdentifierResult
     */
    protected $UpdateServiceTicketViaManagedIdentifierResult = null;

    /**
     * @param ServiceTicket $UpdateServiceTicketViaManagedIdentifierResult
     */
    public function __construct(ServiceTicket $UpdateServiceTicketViaManagedIdentifierResult = null)
    {
        $this->UpdateServiceTicketViaManagedIdentifierResult = $UpdateServiceTicketViaManagedIdentifierResult;
    }

    /**
     * @return ServiceTicket
     */
    public function getUpdateServiceTicketViaManagedIdentifierResult()
    {
        return $this->UpdateServiceTicketViaManagedIdentifierResult;
    }

    /**
     * @param ServiceTicket $UpdateServiceTicketViaManagedIdentifierResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\UpdateServiceTicketViaManagedIdentifierResponse
     */
    public function setUpdateServiceTicketViaManagedIdentifierResult(ServiceTicket $UpdateServiceTicketViaManagedIdentifierResult)
    {
        $this->UpdateServiceTicketViaManagedIdentifierResult = $UpdateServiceTicketViaManagedIdentifierResult;
        return $this;
    }

}
