<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class LoadInvoiceResponse
{

    /**
     * @var Invoice $LoadInvoiceResult
     */
    protected $LoadInvoiceResult = null;

    /**
     * @param Invoice $LoadInvoiceResult
     */
    public function __construct(Invoice $LoadInvoiceResult = null)
    {
        $this->LoadInvoiceResult = $LoadInvoiceResult;
    }

    /**
     * @return Invoice
     */
    public function getLoadInvoiceResult()
    {
        return $this->LoadInvoiceResult;
    }

    /**
     * @param Invoice $LoadInvoiceResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\LoadInvoiceResponse
     */
    public function setLoadInvoiceResult(Invoice $LoadInvoiceResult)
    {
        $this->LoadInvoiceResult = $LoadInvoiceResult;
        return $this;
    }

}
