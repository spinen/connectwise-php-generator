<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddDocuments
{

    /**
     * @var ApiCredentials $credentials
     */
    protected $credentials = null;

    /**
     * @var int $objectId
     */
    protected $objectId = null;

    /**
     * @var DocumentTableReference $documentTableReference
     */
    protected $documentTableReference = null;

    /**
     * @var ArrayOfDocumentInfo $documentInfo
     */
    protected $documentInfo = null;

    /**
     * @param ApiCredentials $credentials
     * @param int $objectId
     * @param DocumentTableReference $documentTableReference
     * @param ArrayOfDocumentInfo $documentInfo
     */
    public function __construct(ApiCredentials $credentials = null, $objectId = null, DocumentTableReference $documentTableReference = null, $documentInfo = null)
    {
        $this->credentials            = $credentials;
        $this->objectId               = $objectId;
        $this->documentTableReference = $documentTableReference;
        $this->documentInfo           = $documentInfo;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddDocuments
     */
    public function setCredentials(ApiCredentials $credentials)
    {
        $this->credentials = $credentials;
        return $this;
    }

    /**
     * @return int
     */
    public function getObjectId()
    {
        return $this->objectId;
    }

    /**
     * @param int $objectId
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddDocuments
     */
    public function setObjectId($objectId)
    {
        $this->objectId = $objectId;
        return $this;
    }

    /**
     * @return DocumentTableReference
     */
    public function getDocumentTableReference()
    {
        return $this->documentTableReference;
    }

    /**
     * @param DocumentTableReference $documentTableReference
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddDocuments
     */
    public function setDocumentTableReference(DocumentTableReference $documentTableReference)
    {
        $this->documentTableReference = $documentTableReference;
        return $this;
    }

    /**
     * @return ArrayOfDocumentInfo
     */
    public function getDocumentInfo()
    {
        return $this->documentInfo;
    }

    /**
     * @param ArrayOfDocumentInfo $documentInfo
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddDocuments
     */
    public function setDocumentInfo($documentInfo)
    {
        $this->documentInfo = $documentInfo;
        return $this;
    }

}
