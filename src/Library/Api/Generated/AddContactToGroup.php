<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddContactToGroup
{

    /**
     * @var ApiCredentials $credentials
     */
    protected $credentials = null;

    /**
     * @var int $contactID
     */
    protected $contactID = null;

    /**
     * @var int $groupID
     */
    protected $groupID = null;

    /**
     * @var string $transactionNote
     */
    protected $transactionNote = null;

    /**
     * @param ApiCredentials $credentials
     * @param int $contactID
     * @param int $groupID
     * @param string $transactionNote
     */
    public function __construct(ApiCredentials $credentials = null, $contactID = null, $groupID = null, $transactionNote = null)
    {
        $this->credentials     = $credentials;
        $this->contactID       = $contactID;
        $this->groupID         = $groupID;
        $this->transactionNote = $transactionNote;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddContactToGroup
     */
    public function setCredentials(ApiCredentials $credentials)
    {
        $this->credentials = $credentials;
        return $this;
    }

    /**
     * @return int
     */
    public function getContactID()
    {
        return $this->contactID;
    }

    /**
     * @param int $contactID
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddContactToGroup
     */
    public function setContactID($contactID)
    {
        $this->contactID = $contactID;
        return $this;
    }

    /**
     * @return int
     */
    public function getGroupID()
    {
        return $this->groupID;
    }

    /**
     * @param int $groupID
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddContactToGroup
     */
    public function setGroupID($groupID)
    {
        $this->groupID = $groupID;
        return $this;
    }

    /**
     * @return string
     */
    public function getTransactionNote()
    {
        return $this->transactionNote;
    }

    /**
     * @param string $transactionNote
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddContactToGroup
     */
    public function setTransactionNote($transactionNote)
    {
        $this->transactionNote = $transactionNote;
        return $this;
    }

}
