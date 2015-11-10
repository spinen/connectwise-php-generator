<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class FindInvoiceCountResponse
{

    /**
     * @var int $FindInvoiceCountResult
     */
    protected $FindInvoiceCountResult = null;

    /**
     * @param int $FindInvoiceCountResult
     */
    public function __construct($FindInvoiceCountResult = null)
    {
        $this->FindInvoiceCountResult = $FindInvoiceCountResult;
    }

    /**
     * @return int
     */
    public function getFindInvoiceCountResult()
    {
        return $this->FindInvoiceCountResult;
    }

    /**
     * @param int $FindInvoiceCountResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\FindInvoiceCountResponse
     */
    public function setFindInvoiceCountResult($FindInvoiceCountResult)
    {
        $this->FindInvoiceCountResult = $FindInvoiceCountResult;
        return $this;
    }

}
