<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class SetCompanyDefaultContact
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
     * @var int $contactId
     */
    protected $contactId = null;

    /**
     * @param ApiCredentials $credentials
     * @param int $companyId
     * @param int $contactId
     */
    public function __construct(ApiCredentials $credentials = null, $companyId = null, $contactId = null)
    {
        $this->credentials = $credentials;
        $this->companyId   = $companyId;
        $this->contactId   = $contactId;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\SetCompanyDefaultContact
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\SetCompanyDefaultContact
     */
    public function setCompanyId($companyId)
    {
        $this->companyId = $companyId;
        return $this;
    }

    /**
     * @return int
     */
    public function getContactId()
    {
        return $this->contactId;
    }

    /**
     * @param int $contactId
     * @return \Spinen\ConnectWise\Library\Api\Generated\SetCompanyDefaultContact
     */
    public function setContactId($contactId)
    {
        $this->contactId = $contactId;
        return $this;
    }

}
