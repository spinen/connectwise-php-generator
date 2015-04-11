<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class GetSpecialInvoiceResponse
{

    /**
     * @var SpecialInvoice $GetSpecialInvoiceResult
     */
    protected $GetSpecialInvoiceResult = null;

    /**
     * @param SpecialInvoice $GetSpecialInvoiceResult
     */
    public function __construct(SpecialInvoice $GetSpecialInvoiceResult = null)
    {
        $this->GetSpecialInvoiceResult = $GetSpecialInvoiceResult;
    }

    /**
     * @return SpecialInvoice
     */
    public function getGetSpecialInvoiceResult()
    {
        return $this->GetSpecialInvoiceResult;
    }

    /**
     * @param SpecialInvoice $GetSpecialInvoiceResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetSpecialInvoiceResponse
     */
    public function setGetSpecialInvoiceResult(SpecialInvoice $GetSpecialInvoiceResult)
    {
        $this->GetSpecialInvoiceResult = $GetSpecialInvoiceResult;
        return $this;
    }

}
