<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddOrUpdateCompanyCustomField
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
     * @var ArrayOfUserDefinedCustomField $companyCustomFields
     */
    protected $companyCustomFields = null;

    /**
     * @param ApiCredentials $credentials
     * @param int $companyId
     * @param ArrayOfUserDefinedCustomField $companyCustomFields
     */
    public function __construct(ApiCredentials $credentials = null, $companyId = null, $companyCustomFields = null)
    {
        $this->credentials         = $credentials;
        $this->companyId           = $companyId;
        $this->companyCustomFields = $companyCustomFields;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdateCompanyCustomField
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdateCompanyCustomField
     */
    public function setCompanyId($companyId)
    {
        $this->companyId = $companyId;
        return $this;
    }

    /**
     * @return ArrayOfUserDefinedCustomField
     */
    public function getCompanyCustomFields()
    {
        return $this->companyCustomFields;
    }

    /**
     * @param ArrayOfUserDefinedCustomField $companyCustomFields
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdateCompanyCustomField
     */
    public function setCompanyCustomFields($companyCustomFields)
    {
        $this->companyCustomFields = $companyCustomFields;
        return $this;
    }

}
