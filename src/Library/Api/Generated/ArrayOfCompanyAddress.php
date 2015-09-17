<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ArrayOfCompanyAddress
{

    /**
     * @var CompanyAddress[] $CompanyAddress
     */
    protected $CompanyAddress = null;

    public function __construct()
    {

    }

    /**
     * @return CompanyAddress[]
     */
    public function getCompanyAddress()
    {
        return $this->CompanyAddress;
    }

    /**
     * @param CompanyAddress[] $CompanyAddress
     * @return \Spinen\ConnectWise\Library\Api\Generated\ArrayOfCompanyAddress
     */
    public function setCompanyAddress(array $CompanyAddress = null)
    {
        $this->CompanyAddress = $CompanyAddress;
        return $this;
    }

}
