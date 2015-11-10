<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddOrUpdateTicketProductResponse
{

    /**
     * @var TicketProduct $AddOrUpdateTicketProductResult
     */
    protected $AddOrUpdateTicketProductResult = null;

    /**
     * @param TicketProduct $AddOrUpdateTicketProductResult
     */
    public function __construct(TicketProduct $AddOrUpdateTicketProductResult = null)
    {
        $this->AddOrUpdateTicketProductResult = $AddOrUpdateTicketProductResult;
    }

    /**
     * @return TicketProduct
     */
    public function getAddOrUpdateTicketProductResult()
    {
        return $this->AddOrUpdateTicketProductResult;
    }

    /**
     * @param TicketProduct $AddOrUpdateTicketProductResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdateTicketProductResponse
     */
    public function setAddOrUpdateTicketProductResult(TicketProduct $AddOrUpdateTicketProductResult)
    {
        $this->AddOrUpdateTicketProductResult = $AddOrUpdateTicketProductResult;
        return $this;
    }

}
