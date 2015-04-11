<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class FindProjectTicketsResponse
{

    /**
     * @var ArrayOfProjectTicketFindResult $FindProjectTicketsResult
     */
    protected $FindProjectTicketsResult = null;

    /**
     * @param ArrayOfProjectTicketFindResult $FindProjectTicketsResult
     */
    public function __construct($FindProjectTicketsResult = null)
    {
        $this->FindProjectTicketsResult = $FindProjectTicketsResult;
    }

    /**
     * @return ArrayOfProjectTicketFindResult
     */
    public function getFindProjectTicketsResult()
    {
        return $this->FindProjectTicketsResult;
    }

    /**
     * @param ArrayOfProjectTicketFindResult $FindProjectTicketsResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\FindProjectTicketsResponse
     */
    public function setFindProjectTicketsResult($FindProjectTicketsResult)
    {
        $this->FindProjectTicketsResult = $FindProjectTicketsResult;
        return $this;
    }

}
