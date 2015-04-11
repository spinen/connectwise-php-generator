<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class GetInvoiceByInvoiceNumberResponse
{

    /**
     * @var Invoice $GetInvoiceByInvoiceNumberResult
     */
    protected $GetInvoiceByInvoiceNumberResult = null;

    /**
     * @param Invoice $GetInvoiceByInvoiceNumberResult
     */
    public function __construct(Invoice $GetInvoiceByInvoiceNumberResult = null)
    {
        $this->GetInvoiceByInvoiceNumberResult = $GetInvoiceByInvoiceNumberResult;
    }

    /**
     * @return Invoice
     */
    public function getGetInvoiceByInvoiceNumberResult()
    {
        return $this->GetInvoiceByInvoiceNumberResult;
    }

    /**
     * @param Invoice $GetInvoiceByInvoiceNumberResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetInvoiceByInvoiceNumberResponse
     */
    public function setGetInvoiceByInvoiceNumberResult(Invoice $GetInvoiceByInvoiceNumberResult)
    {
        $this->GetInvoiceByInvoiceNumberResult = $GetInvoiceByInvoiceNumberResult;
        return $this;
    }

}
