<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddOrUpdateCompanyNote
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
     * @var Note $note
     */
    protected $note = null;

    /**
     * @param ApiCredentials $credentials
     * @param int $companyId
     * @param Note $note
     */
    public function __construct(ApiCredentials $credentials = null, $companyId = null, Note $note = null)
    {
        $this->credentials = $credentials;
        $this->companyId   = $companyId;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdateCompanyNote
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdateCompanyNote
     */
    public function setCompanyId($companyId)
    {
        $this->companyId = $companyId;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdateCompanyNote
     */
    public function setNote(Note $note)
    {
        $this->note = $note;
        return $this;
    }

}
