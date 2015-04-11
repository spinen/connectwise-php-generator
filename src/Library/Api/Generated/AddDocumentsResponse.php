<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddDocumentsResponse
{

    /**
     * @var ArrayOfDocumentInfo $AddDocumentsResult
     */
    protected $AddDocumentsResult = null;

    /**
     * @param ArrayOfDocumentInfo $AddDocumentsResult
     */
    public function __construct($AddDocumentsResult = null)
    {
        $this->AddDocumentsResult = $AddDocumentsResult;
    }

    /**
     * @return ArrayOfDocumentInfo
     */
    public function getAddDocumentsResult()
    {
        return $this->AddDocumentsResult;
    }

    /**
     * @param ArrayOfDocumentInfo $AddDocumentsResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddDocumentsResponse
     */
    public function setAddDocumentsResult($AddDocumentsResult)
    {
        $this->AddDocumentsResult = $AddDocumentsResult;
        return $this;
    }

}
