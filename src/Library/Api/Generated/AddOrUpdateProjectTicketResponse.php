<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddOrUpdateProjectTicketResponse
{

    /**
     * @var ProjectTicket $AddOrUpdateProjectTicketResult
     */
    protected $AddOrUpdateProjectTicketResult = null;

    /**
     * @param ProjectTicket $AddOrUpdateProjectTicketResult
     */
    public function __construct(ProjectTicket $AddOrUpdateProjectTicketResult = null)
    {
        $this->AddOrUpdateProjectTicketResult = $AddOrUpdateProjectTicketResult;
    }

    /**
     * @return ProjectTicket
     */
    public function getAddOrUpdateProjectTicketResult()
    {
        return $this->AddOrUpdateProjectTicketResult;
    }

    /**
     * @param ProjectTicket $AddOrUpdateProjectTicketResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdateProjectTicketResponse
     */
    public function setAddOrUpdateProjectTicketResult(ProjectTicket $AddOrUpdateProjectTicketResult)
    {
        $this->AddOrUpdateProjectTicketResult = $AddOrUpdateProjectTicketResult;
        return $this;
    }

}
