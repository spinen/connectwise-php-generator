<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddOrUpdateSpecialInvoiceResponse
{

    /**
     * @var SpecialInvoice $AddOrUpdateSpecialInvoiceResult
     */
    protected $AddOrUpdateSpecialInvoiceResult = null;

    /**
     * @param SpecialInvoice $AddOrUpdateSpecialInvoiceResult
     */
    public function __construct(SpecialInvoice $AddOrUpdateSpecialInvoiceResult = null)
    {
        $this->AddOrUpdateSpecialInvoiceResult = $AddOrUpdateSpecialInvoiceResult;
    }

    /**
     * @return SpecialInvoice
     */
    public function getAddOrUpdateSpecialInvoiceResult()
    {
        return $this->AddOrUpdateSpecialInvoiceResult;
    }

    /**
     * @param SpecialInvoice $AddOrUpdateSpecialInvoiceResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdateSpecialInvoiceResponse
     */
    public function setAddOrUpdateSpecialInvoiceResult(SpecialInvoice $AddOrUpdateSpecialInvoiceResult)
    {
        $this->AddOrUpdateSpecialInvoiceResult = $AddOrUpdateSpecialInvoiceResult;
        return $this;
    }

}
