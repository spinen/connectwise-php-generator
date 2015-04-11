<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class GetDocument
{

    /**
     * @var ApiCredentials $credentials
     */
    protected $credentials = null;

    /**
     * @var int $documentId
     */
    protected $documentId = null;

    /**
     * @param ApiCredentials $credentials
     * @param int $documentId
     */
    public function __construct(ApiCredentials $credentials = null, $documentId = null)
    {
        $this->credentials = $credentials;
        $this->documentId  = $documentId;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetDocument
     */
    public function setCredentials(ApiCredentials $credentials)
    {
        $this->credentials = $credentials;
        return $this;
    }

    /**
     * @return int
     */
    public function getDocumentId()
    {
        return $this->documentId;
    }

    /**
     * @param int $documentId
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetDocument
     */
    public function setDocumentId($documentId)
    {
        $this->documentId = $documentId;
        return $this;
    }

}
