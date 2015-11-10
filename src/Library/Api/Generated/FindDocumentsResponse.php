<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class FindDocumentsResponse
{

    /**
     * @var ArrayOfDocumentFindResult $FindDocumentsResult
     */
    protected $FindDocumentsResult = null;

    /**
     * @param ArrayOfDocumentFindResult $FindDocumentsResult
     */
    public function __construct($FindDocumentsResult = null)
    {
        $this->FindDocumentsResult = $FindDocumentsResult;
    }

    /**
     * @return ArrayOfDocumentFindResult
     */
    public function getFindDocumentsResult()
    {
        return $this->FindDocumentsResult;
    }

    /**
     * @param ArrayOfDocumentFindResult $FindDocumentsResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\FindDocumentsResponse
     */
    public function setFindDocumentsResult($FindDocumentsResult)
    {
        $this->FindDocumentsResult = $FindDocumentsResult;
        return $this;
    }

}
