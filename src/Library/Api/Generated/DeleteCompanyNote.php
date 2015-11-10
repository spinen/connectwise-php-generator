<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class DeleteCompanyNote
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
     * @var int $noteId
     */
    protected $noteId = null;

    /**
     * @param ApiCredentials $credentials
     * @param int $companyId
     * @param int $noteId
     */
    public function __construct(ApiCredentials $credentials = null, $companyId = null, $noteId = null)
    {
        $this->credentials = $credentials;
        $this->companyId   = $companyId;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\DeleteCompanyNote
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\DeleteCompanyNote
     */
    public function setCompanyId($companyId)
    {
        $this->companyId = $companyId;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\DeleteCompanyNote
     */
    public function setNoteId($noteId)
    {
        $this->noteId = $noteId;
        return $this;
    }

}
