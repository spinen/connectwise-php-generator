<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class GetReports
{

    /**
     * @var ApiCredentials $credentials
     */
    protected $credentials = null;

    /**
     * @var boolean $includeFields
     */
    protected $includeFields = null;

    /**
     * @param ApiCredentials $credentials
     * @param boolean $includeFields
     */
    public function __construct(ApiCredentials $credentials = null, $includeFields = null)
    {
        $this->credentials   = $credentials;
        $this->includeFields = $includeFields;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetReports
     */
    public function setCredentials(ApiCredentials $credentials)
    {
        $this->credentials = $credentials;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeFields()
    {
        return $this->includeFields;
    }

    /**
     * @param boolean $includeFields
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetReports
     */
    public function setIncludeFields($includeFields)
    {
        $this->includeFields = $includeFields;
        return $this;
    }

}
