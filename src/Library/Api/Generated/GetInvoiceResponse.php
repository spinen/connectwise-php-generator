<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class GetInvoiceResponse
{

    /**
     * @var Invoice $GetInvoiceResult
     */
    protected $GetInvoiceResult = null;

    /**
     * @param Invoice $GetInvoiceResult
     */
    public function __construct(Invoice $GetInvoiceResult = null)
    {
        $this->GetInvoiceResult = $GetInvoiceResult;
    }

    /**
     * @return Invoice
     */
    public function getGetInvoiceResult()
    {
        return $this->GetInvoiceResult;
    }

    /**
     * @param Invoice $GetInvoiceResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetInvoiceResponse
     */
    public function setGetInvoiceResult(Invoice $GetInvoiceResult)
    {
        $this->GetInvoiceResult = $GetInvoiceResult;
        return $this;
    }

}
