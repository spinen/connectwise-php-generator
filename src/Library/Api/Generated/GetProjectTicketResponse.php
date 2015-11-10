<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class GetProjectTicketResponse
{

    /**
     * @var ProjectTicket $GetProjectTicketResult
     */
    protected $GetProjectTicketResult = null;

    /**
     * @param ProjectTicket $GetProjectTicketResult
     */
    public function __construct(ProjectTicket $GetProjectTicketResult = null)
    {
        $this->GetProjectTicketResult = $GetProjectTicketResult;
    }

    /**
     * @return ProjectTicket
     */
    public function getGetProjectTicketResult()
    {
        return $this->GetProjectTicketResult;
    }

    /**
     * @param ProjectTicket $GetProjectTicketResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetProjectTicketResponse
     */
    public function setGetProjectTicketResult(ProjectTicket $GetProjectTicketResult)
    {
        $this->GetProjectTicketResult = $GetProjectTicketResult;
        return $this;
    }

}
