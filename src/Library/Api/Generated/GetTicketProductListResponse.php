<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class GetTicketProductListResponse
{

    /**
     * @var ArrayOfTicketProduct $GetTicketProductListResult
     */
    protected $GetTicketProductListResult = null;

    /**
     * @param ArrayOfTicketProduct $GetTicketProductListResult
     */
    public function __construct($GetTicketProductListResult = null)
    {
        $this->GetTicketProductListResult = $GetTicketProductListResult;
    }

    /**
     * @return ArrayOfTicketProduct
     */
    public function getGetTicketProductListResult()
    {
        return $this->GetTicketProductListResult;
    }

    /**
     * @param ArrayOfTicketProduct $GetTicketProductListResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetTicketProductListResponse
     */
    public function setGetTicketProductListResult($GetTicketProductListResult)
    {
        $this->GetTicketProductListResult = $GetTicketProductListResult;
        return $this;
    }

}
