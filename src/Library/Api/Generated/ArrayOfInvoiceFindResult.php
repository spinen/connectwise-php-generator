<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ArrayOfInvoiceFindResult
{

    /**
     * @var InvoiceFindResult[] $InvoiceFindResult
     */
    protected $InvoiceFindResult = null;

    public function __construct()
    {

    }

    /**
     * @return InvoiceFindResult[]
     */
    public function getInvoiceFindResult()
    {
        return $this->InvoiceFindResult;
    }

    /**
     * @param InvoiceFindResult[] $InvoiceFindResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\ArrayOfInvoiceFindResult
     */
    public function setInvoiceFindResult(array $InvoiceFindResult = null)
    {
        $this->InvoiceFindResult = $InvoiceFindResult;
        return $this;
    }

}
