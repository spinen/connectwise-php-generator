<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class GetContactNote
{

    /**
     * @var ApiCredentials $credentials
     */
    protected $credentials = null;

    /**
     * @var int $contactId
     */
    protected $contactId = null;

    /**
     * @var int $noteId
     */
    protected $noteId = null;

    /**
     * @param ApiCredentials $credentials
     * @param int $contactId
     * @param int $noteId
     */
    public function __construct(ApiCredentials $credentials = null, $contactId = null, $noteId = null)
    {
        $this->credentials = $credentials;
        $this->contactId   = $contactId;
        $this->noteId      = $noteId;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetContactNote
     */
    public function setCredentials(ApiCredentials $credentials)
    {
        $this->credentials = $credentials;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetContactNote
     */
    public function setContactId($contactId)
    {
        $this->contactId = $contactId;
        return $this;
    }

    /**
     * @return int
     */
    public function getNoteId()
    {
        return $this->noteId;
    }

    /**
     * @param int $noteId
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetContactNote
     */
    public function setNoteId($noteId)
    {
        $this->noteId = $noteId;
        return $this;
    }

}
