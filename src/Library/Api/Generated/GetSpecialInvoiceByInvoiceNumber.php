<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class GetSpecialInvoiceByInvoiceNumber
{

    /**
     * @var ApiCredentials $credentials
     */
    protected $credentials = null;

    /**
     * @var string $invoiceNumber
     */
    protected $invoiceNumber = null;

    /**
     * @param ApiCredentials $credentials
     * @param string $invoiceNumber
     */
    public function __construct(ApiCredentials $credentials = null, $invoiceNumber = null)
    {
        $this->credentials   = $credentials;
        $this->invoiceNumber = $invoiceNumber;
    }

    /**
     * @return ApiCredentials
     */
    public function getCredentials()
    {
        return $this->credentials;
    }

    /**
     * @param ApiCredentials $credentials
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetSpecialInvoiceByInvoiceNumber
     */
    public function setCredentials(ApiCredentials $credentials)
    {
        $this->credentials = $credentials;
        return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceNumber()
    {
        return $this->invoiceNumber;
    }

    /**
     * @param string $invoiceNumber
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetSpecialInvoiceByInvoiceNumber
     */
    public function setInvoiceNumber($invoiceNumber)
    {
        $this->invoiceNumber = $invoiceNumber;
        return $this;
    }

}
