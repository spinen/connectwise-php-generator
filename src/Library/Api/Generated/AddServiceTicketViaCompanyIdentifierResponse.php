<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddServiceTicketViaCompanyIdentifierResponse
{

    /**
     * @var ServiceTicket $AddServiceTicketViaCompanyIdentifierResult
     */
    protected $AddServiceTicketViaCompanyIdentifierResult = null;

    /**
     * @param ServiceTicket $AddServiceTicketViaCompanyIdentifierResult
     */
    public function __construct(ServiceTicket $AddServiceTicketViaCompanyIdentifierResult = null)
    {
        $this->AddServiceTicketViaCompanyIdentifierResult = $AddServiceTicketViaCompanyIdentifierResult;
    }

    /**
     * @return ServiceTicket
     */
    public function getAddServiceTicketViaCompanyIdentifierResult()
    {
        return $this->AddServiceTicketViaCompanyIdentifierResult;
    }

    /**
     * @param ServiceTicket $AddServiceTicketViaCompanyIdentifierResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddServiceTicketViaCompanyIdentifierResponse
     */
    public function setAddServiceTicketViaCompanyIdentifierResult(ServiceTicket $AddServiceTicketViaCompanyIdentifierResult)
    {
        $this->AddServiceTicketViaCompanyIdentifierResult = $AddServiceTicketViaCompanyIdentifierResult;
        return $this;
    }

}
