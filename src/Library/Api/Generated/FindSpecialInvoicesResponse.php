<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class FindSpecialInvoicesResponse
{

    /**
     * @var ArrayOfSpecialInvoiceFindResult $FindSpecialInvoicesResult
     */
    protected $FindSpecialInvoicesResult = null;

    /**
     * @param ArrayOfSpecialInvoiceFindResult $FindSpecialInvoicesResult
     */
    public function __construct($FindSpecialInvoicesResult = null)
    {
        $this->FindSpecialInvoicesResult = $FindSpecialInvoicesResult;
    }

    /**
     * @return ArrayOfSpecialInvoiceFindResult
     */
    public function getFindSpecialInvoicesResult()
    {
        return $this->FindSpecialInvoicesResult;
    }

    /**
     * @param ArrayOfSpecialInvoiceFindResult $FindSpecialInvoicesResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\FindSpecialInvoicesResponse
     */
    public function setFindSpecialInvoicesResult($FindSpecialInvoicesResult)
    {
        $this->FindSpecialInvoicesResult = $FindSpecialInvoicesResult;
        return $this;
    }

}
