<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class FindServiceTicketsResponse
{

    /**
     * @var ArrayOfTicketFindResult $FindServiceTicketsResult
     */
    protected $FindServiceTicketsResult = null;

    /**
     * @param ArrayOfTicketFindResult $FindServiceTicketsResult
     */
    public function __construct($FindServiceTicketsResult = null)
    {
        $this->FindServiceTicketsResult = $FindServiceTicketsResult;
    }

    /**
     * @return ArrayOfTicketFindResult
     */
    public function getFindServiceTicketsResult()
    {
        return $this->FindServiceTicketsResult;
    }

    /**
     * @param ArrayOfTicketFindResult $FindServiceTicketsResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\FindServiceTicketsResponse
     */
    public function setFindServiceTicketsResult($FindServiceTicketsResult)
    {
        $this->FindServiceTicketsResult = $FindServiceTicketsResult;
        return $this;
    }

}
