<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class FindServiceTicketCountResponse
{

    /**
     * @var int $FindServiceTicketCountResult
     */
    protected $FindServiceTicketCountResult = null;

    /**
     * @param int $FindServiceTicketCountResult
     */
    public function __construct($FindServiceTicketCountResult = null)
    {
        $this->FindServiceTicketCountResult = $FindServiceTicketCountResult;
    }

    /**
     * @return int
     */
    public function getFindServiceTicketCountResult()
    {
        return $this->FindServiceTicketCountResult;
    }

    /**
     * @param int $FindServiceTicketCountResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\FindServiceTicketCountResponse
     */
    public function setFindServiceTicketCountResult($FindServiceTicketCountResult)
    {
        $this->FindServiceTicketCountResult = $FindServiceTicketCountResult;
        return $this;
    }

}
