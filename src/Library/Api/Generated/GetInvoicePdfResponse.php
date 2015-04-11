<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class GetInvoicePdfResponse
{

    /**
     * @var base64Binary $GetInvoicePdfResult
     */
    protected $GetInvoicePdfResult = null;

    /**
     * @param base64Binary $GetInvoicePdfResult
     */
    public function __construct(base64Binary $GetInvoicePdfResult = null)
    {
        $this->GetInvoicePdfResult = $GetInvoicePdfResult;
    }

    /**
     * @return base64Binary
     */
    public function getGetInvoicePdfResult()
    {
        return $this->GetInvoicePdfResult;
    }

    /**
     * @param base64Binary $GetInvoicePdfResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetInvoicePdfResponse
     */
    public function setGetInvoicePdfResult(base64Binary $GetInvoicePdfResult)
    {
        $this->GetInvoicePdfResult = $GetInvoicePdfResult;
        return $this;
    }

}
