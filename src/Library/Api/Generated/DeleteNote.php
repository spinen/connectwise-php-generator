<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class DeleteNote
{

    /**
     * @var ApiCredentials $credentials
     */
    protected $credentials = null;

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var int $contactId
     */
    protected $contactId = null;

    /**
     * @param ApiCredentials $credentials
     * @param int $id
     * @param int $contactId
     */
    public function __construct(ApiCredentials $credentials = null, $id = null, $contactId = null)
    {
        $this->credentials = $credentials;
        $this->id          = $id;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\DeleteNote
     */
    public function setCredentials(ApiCredentials $credentials)
    {
        $this->credentials = $credentials;
        return $this;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return \Spinen\ConnectWise\Library\Api\Generated\DeleteNote
     */
    public function setId($id)
    {
        $this->id = $id;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\DeleteNote
     */
    public function setContactId($contactId)
    {
        $this->contactId = $contactId;
        return $this;
    }

}
