<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ArrayOfSpecialInvoiceFindResult
{

    /**
     * @var SpecialInvoiceFindResult[] $SpecialInvoiceFindResult
     */
    protected $SpecialInvoiceFindResult = null;

    public function __construct()
    {

    }

    /**
     * @return SpecialInvoiceFindResult[]
     */
    public function getSpecialInvoiceFindResult()
    {
        return $this->SpecialInvoiceFindResult;
    }

    /**
     * @param SpecialInvoiceFindResult[] $SpecialInvoiceFindResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\ArrayOfSpecialInvoiceFindResult
     */
    public function setSpecialInvoiceFindResult(array $SpecialInvoiceFindResult)
    {
        $this->SpecialInvoiceFindResult = $SpecialInvoiceFindResult;
        return $this;
    }

}
