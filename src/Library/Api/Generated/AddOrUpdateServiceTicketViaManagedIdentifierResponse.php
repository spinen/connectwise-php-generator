<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddOrUpdateServiceTicketViaManagedIdentifierResponse
{

    /**
     * @var ServiceTicket $AddOrUpdateServiceTicketViaManagedIdentifierResult
     */
    protected $AddOrUpdateServiceTicketViaManagedIdentifierResult = null;

    /**
     * @param ServiceTicket $AddOrUpdateServiceTicketViaManagedIdentifierResult
     */
    public function __construct(ServiceTicket $AddOrUpdateServiceTicketViaManagedIdentifierResult = null)
    {
        $this->AddOrUpdateServiceTicketViaManagedIdentifierResult = $AddOrUpdateServiceTicketViaManagedIdentifierResult;
    }

    /**
     * @return ServiceTicket
     */
    public function getAddOrUpdateServiceTicketViaManagedIdentifierResult()
    {
        return $this->AddOrUpdateServiceTicketViaManagedIdentifierResult;
    }

    /**
     * @param ServiceTicket $AddOrUpdateServiceTicketViaManagedIdentifierResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdateServiceTicketViaManagedIdentifierResponse
     */
    public function setAddOrUpdateServiceTicketViaManagedIdentifierResult(ServiceTicket $AddOrUpdateServiceTicketViaManagedIdentifierResult)
    {
        $this->AddOrUpdateServiceTicketViaManagedIdentifierResult = $AddOrUpdateServiceTicketViaManagedIdentifierResult;
        return $this;
    }

}
