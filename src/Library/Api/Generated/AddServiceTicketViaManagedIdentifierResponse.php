<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddServiceTicketViaManagedIdentifierResponse
{

    /**
     * @var ServiceTicket $AddServiceTicketViaManagedIdentifierResult
     */
    protected $AddServiceTicketViaManagedIdentifierResult = null;

    /**
     * @param ServiceTicket $AddServiceTicketViaManagedIdentifierResult
     */
    public function __construct(ServiceTicket $AddServiceTicketViaManagedIdentifierResult = null)
    {
        $this->AddServiceTicketViaManagedIdentifierResult = $AddServiceTicketViaManagedIdentifierResult;
    }

    /**
     * @return ServiceTicket
     */
    public function getAddServiceTicketViaManagedIdentifierResult()
    {
        return $this->AddServiceTicketViaManagedIdentifierResult;
    }

    /**
     * @param ServiceTicket $AddServiceTicketViaManagedIdentifierResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddServiceTicketViaManagedIdentifierResponse
     */
    public function setAddServiceTicketViaManagedIdentifierResult(ServiceTicket $AddServiceTicketViaManagedIdentifierResult)
    {
        $this->AddServiceTicketViaManagedIdentifierResult = $AddServiceTicketViaManagedIdentifierResult;
        return $this;
    }

}
