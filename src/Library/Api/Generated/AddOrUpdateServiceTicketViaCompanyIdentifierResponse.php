<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddOrUpdateServiceTicketViaCompanyIdentifierResponse
{

    /**
     * @var ServiceTicket $AddOrUpdateServiceTicketViaCompanyIdentifierResult
     */
    protected $AddOrUpdateServiceTicketViaCompanyIdentifierResult = null;

    /**
     * @param ServiceTicket $AddOrUpdateServiceTicketViaCompanyIdentifierResult
     */
    public function __construct(ServiceTicket $AddOrUpdateServiceTicketViaCompanyIdentifierResult = null)
    {
        $this->AddOrUpdateServiceTicketViaCompanyIdentifierResult = $AddOrUpdateServiceTicketViaCompanyIdentifierResult;
    }

    /**
     * @return ServiceTicket
     */
    public function getAddOrUpdateServiceTicketViaCompanyIdentifierResult()
    {
        return $this->AddOrUpdateServiceTicketViaCompanyIdentifierResult;
    }

    /**
     * @param ServiceTicket $AddOrUpdateServiceTicketViaCompanyIdentifierResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdateServiceTicketViaCompanyIdentifierResponse
     */
    public function setAddOrUpdateServiceTicketViaCompanyIdentifierResult(ServiceTicket $AddOrUpdateServiceTicketViaCompanyIdentifierResult)
    {
        $this->AddOrUpdateServiceTicketViaCompanyIdentifierResult = $AddOrUpdateServiceTicketViaCompanyIdentifierResult;
        return $this;
    }

}
