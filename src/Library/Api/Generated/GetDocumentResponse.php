<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class GetDocumentResponse
{

    /**
     * @var DocumentInfo $GetDocumentResult
     */
    protected $GetDocumentResult = null;

    /**
     * @param DocumentInfo $GetDocumentResult
     */
    public function __construct(DocumentInfo $GetDocumentResult = null)
    {
        $this->GetDocumentResult = $GetDocumentResult;
    }

    /**
     * @return DocumentInfo
     */
    public function getGetDocumentResult()
    {
        return $this->GetDocumentResult;
    }

    /**
     * @param DocumentInfo $GetDocumentResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetDocumentResponse
     */
    public function setGetDocumentResult(DocumentInfo $GetDocumentResult)
    {
        $this->GetDocumentResult = $GetDocumentResult;
        return $this;
    }

}
