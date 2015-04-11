<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class UpdateTicketProductResponse
{

    /**
     * @var TicketProduct $UpdateTicketProductResult
     */
    protected $UpdateTicketProductResult = null;

    /**
     * @param TicketProduct $UpdateTicketProductResult
     */
    public function __construct(TicketProduct $UpdateTicketProductResult = null)
    {
        $this->UpdateTicketProductResult = $UpdateTicketProductResult;
    }

    /**
     * @return TicketProduct
     */
    public function getUpdateTicketProductResult()
    {
        return $this->UpdateTicketProductResult;
    }

    /**
     * @param TicketProduct $UpdateTicketProductResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\UpdateTicketProductResponse
     */
    public function setUpdateTicketProductResult(TicketProduct $UpdateTicketProductResult)
    {
        $this->UpdateTicketProductResult = $UpdateTicketProductResult;
        return $this;
    }

}
