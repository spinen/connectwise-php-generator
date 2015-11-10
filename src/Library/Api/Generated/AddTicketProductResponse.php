<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddTicketProductResponse
{

    /**
     * @var TicketProduct $AddTicketProductResult
     */
    protected $AddTicketProductResult = null;

    /**
     * @param TicketProduct $AddTicketProductResult
     */
    public function __construct(TicketProduct $AddTicketProductResult = null)
    {
        $this->AddTicketProductResult = $AddTicketProductResult;
    }

    /**
     * @return TicketProduct
     */
    public function getAddTicketProductResult()
    {
        return $this->AddTicketProductResult;
    }

    /**
     * @param TicketProduct $AddTicketProductResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddTicketProductResponse
     */
    public function setAddTicketProductResult(TicketProduct $AddTicketProductResult)
    {
        $this->AddTicketProductResult = $AddTicketProductResult;
        return $this;
    }

}
