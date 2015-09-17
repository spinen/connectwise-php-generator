<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ApiCredentials
{

    /**
     * @var string $CompanyId
     */
    protected $CompanyId = null;

    /**
     * @var string $IntegratorLoginId
     */
    protected $IntegratorLoginId = null;

    /**
     * @var string $IntegratorPassword
     */
    protected $IntegratorPassword = null;

    public function __construct()
    {

    }

    /**
     * @return string
     */
    public function getCompanyId()
    {
        return $this->CompanyId;
    }

    /**
     * @param string $CompanyId
     * @return \Spinen\ConnectWise\Library\Api\Generated\ApiCredentials
     */
    public function setCompanyId($CompanyId)
    {
        $this->CompanyId = $CompanyId;
        return $this;
    }

    /**
     * @return string
     */
    public function getIntegratorLoginId()
    {
        return $this->IntegratorLoginId;
    }

    /**
     * @param string $IntegratorLoginId
     * @return \Spinen\ConnectWise\Library\Api\Generated\ApiCredentials
     */
    public function setIntegratorLoginId($IntegratorLoginId)
    {
        $this->IntegratorLoginId = $IntegratorLoginId;
        return $this;
    }

    /**
     * @return string
     */
    public function getIntegratorPassword()
    {
        return $this->IntegratorPassword;
    }

    /**
     * @param string $IntegratorPassword
     * @return \Spinen\ConnectWise\Library\Api\Generated\ApiCredentials
     */
    public function setIntegratorPassword($IntegratorPassword)
    {
        $this->IntegratorPassword = $IntegratorPassword;
        return $this;
    }

}
