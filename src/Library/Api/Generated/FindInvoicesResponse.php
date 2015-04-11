<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class FindInvoicesResponse
{

    /**
     * @var ArrayOfInvoiceFindResult $FindInvoicesResult
     */
    protected $FindInvoicesResult = null;

    /**
     * @param ArrayOfInvoiceFindResult $FindInvoicesResult
     */
    public function __construct($FindInvoicesResult = null)
    {
        $this->FindInvoicesResult = $FindInvoicesResult;
    }

    /**
     * @return ArrayOfInvoiceFindResult
     */
    public function getFindInvoicesResult()
    {
        return $this->FindInvoicesResult;
    }

    /**
     * @param ArrayOfInvoiceFindResult $FindInvoicesResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\FindInvoicesResponse
     */
    public function setFindInvoicesResult($FindInvoicesResult)
    {
        $this->FindInvoicesResult = $FindInvoicesResult;
        return $this;
    }

}
