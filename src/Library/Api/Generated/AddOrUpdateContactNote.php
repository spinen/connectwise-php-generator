<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddOrUpdateContactNote
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
     * @var Note $note
     */
    protected $note = null;

    /**
     * @param ApiCredentials $credentials
     * @param int $contactId
     * @param Note $note
     */
    public function __construct(ApiCredentials $credentials = null, $contactId = null, Note $note = null)
    {
        $this->credentials = $credentials;
        $this->contactId   = $contactId;
        $this->note        = $note;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdateContactNote
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdateContactNote
     */
    public function setContactId($contactId)
    {
        $this->contactId = $contactId;
        return $this;
    }

    /**
     * @return Note
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * @param Note $note
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdateContactNote
     */
    public function setNote(Note $note)
    {
        $this->note = $note;
        return $this;
    }

}
