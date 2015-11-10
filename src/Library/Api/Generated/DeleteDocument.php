<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class DeleteDocument
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
     * @var DocumentTableReference $documentTableReference
     */
    protected $documentTableReference = null;

    /**
     * @param ApiCredentials $credentials
     * @param int $id
     * @param DocumentTableReference $documentTableReference
     */
    public function __construct(ApiCredentials $credentials = null, $id = null, DocumentTableReference $documentTableReference = null)
    {
        $this->credentials            = $credentials;
        $this->id                     = $id;
        $this->documentTableReference = $documentTableReference;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\DeleteDocument
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\DeleteDocument
     */
    public function setId($id)
    {
        $this->id = $id;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\DeleteDocument
     */
    public function setDocumentTableReference(DocumentTableReference $documentTableReference)
    {
        $this->documentTableReference = $documentTableReference;
        return $this;
    }

}
