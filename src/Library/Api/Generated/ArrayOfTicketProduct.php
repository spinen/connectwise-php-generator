<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ArrayOfTicketProduct
{

    /**
     * @var TicketProduct[] $TicketProduct
     */
    protected $TicketProduct = null;

    public function __construct()
    {

    }

    /**
     * @return TicketProduct[]
     */
    public function getTicketProduct()
    {
        return $this->TicketProduct;
    }

    /**
     * @param TicketProduct[] $TicketProduct
     * @return \Spinen\ConnectWise\Library\Api\Generated\ArrayOfTicketProduct
     */
    public function setTicketProduct(array $TicketProduct)
    {
        $this->TicketProduct = $TicketProduct;
        return $this;
    }

}
