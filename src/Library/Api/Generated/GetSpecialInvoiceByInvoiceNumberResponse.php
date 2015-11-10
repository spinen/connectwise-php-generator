<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class GetSpecialInvoiceByInvoiceNumberResponse
{

    /**
     * @var SpecialInvoice $GetSpecialInvoiceByInvoiceNumberResult
     */
    protected $GetSpecialInvoiceByInvoiceNumberResult = null;

    /**
     * @param SpecialInvoice $GetSpecialInvoiceByInvoiceNumberResult
     */
    public function __construct(SpecialInvoice $GetSpecialInvoiceByInvoiceNumberResult = null)
    {
        $this->GetSpecialInvoiceByInvoiceNumberResult = $GetSpecialInvoiceByInvoiceNumberResult;
    }

    /**
     * @return SpecialInvoice
     */
    public function getGetSpecialInvoiceByInvoiceNumberResult()
    {
        return $this->GetSpecialInvoiceByInvoiceNumberResult;
    }

    /**
     * @param SpecialInvoice $GetSpecialInvoiceByInvoiceNumberResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetSpecialInvoiceByInvoiceNumberResponse
     */
    public function setGetSpecialInvoiceByInvoiceNumberResult(SpecialInvoice $GetSpecialInvoiceByInvoiceNumberResult)
    {
        $this->GetSpecialInvoiceByInvoiceNumberResult = $GetSpecialInvoiceByInvoiceNumberResult;
        return $this;
    }

}
