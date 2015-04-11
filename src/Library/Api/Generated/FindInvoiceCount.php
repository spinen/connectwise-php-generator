<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class FindInvoiceCount
{

    /**
     * @var ApiCredentials $credentials
     */
    protected $credentials = null;

    /**
     * @var string $conditions
     */
    protected $conditions = null;

    /**
     * @var boolean $isOpen
     */
    protected $isOpen = null;

    /**
     * @param ApiCredentials $credentials
     * @param string $conditions
     * @param boolean $isOpen
     */
    public function __construct(ApiCredentials $credentials = null, $conditions = null, $isOpen = null)
    {
        $this->credentials = $credentials;
        $this->conditions  = $conditions;
        $this->isOpen      = $isOpen;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\FindInvoiceCount
     */
    public function setCredentials(ApiCredentials $credentials)
    {
        $this->credentials = $credentials;
        return $this;
    }

    /**
     * @return string
     */
    public function getConditions()
    {
        return $this->conditions;
    }

    /**
     * @param string $conditions
     * @return \Spinen\ConnectWise\Library\Api\Generated\FindInvoiceCount
     */
    public function setConditions($conditions)
    {
        $this->conditions = $conditions;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsOpen()
    {
        return $this->isOpen;
    }

    /**
     * @param boolean $isOpen
     * @return \Spinen\ConnectWise\Library\Api\Generated\FindInvoiceCount
     */
    public function setIsOpen($isOpen)
    {
        $this->isOpen = $isOpen;
        return $this;
    }

}
