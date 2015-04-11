<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class GetApplyToForCompanyByType
{

    /**
     * @var ApiCredentials $credentials
     */
    protected $credentials = null;

    /**
     * @var int $companyId
     */
    protected $companyId = null;

    /**
     * @var ApplyToType $type
     */
    protected $type = null;

    /**
     * @param ApiCredentials $credentials
     * @param int $companyId
     * @param ApplyToType $type
     */
    public function __construct(ApiCredentials $credentials = null, $companyId = null, ApplyToType $type = null)
    {
        $this->credentials = $credentials;
        $this->companyId   = $companyId;
        $this->type        = $type;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetApplyToForCompanyByType
     */
    public function setCredentials(ApiCredentials $credentials)
    {
        $this->credentials = $credentials;
        return $this;
    }

    /**
     * @return int
     */
    public function getCompanyId()
    {
        return $this->companyId;
    }

    /**
     * @param int $companyId
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetApplyToForCompanyByType
     */
    public function setCompanyId($companyId)
    {
        $this->companyId = $companyId;
        return $this;
    }

    /**
     * @return ApplyToType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param ApplyToType $type
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetApplyToForCompanyByType
     */
    public function setType(ApplyToType $type)
    {
        $this->type = $type;
        return $this;
    }

}
