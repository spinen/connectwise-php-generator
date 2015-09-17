<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ArrayOfDocumentFindResult
{

    /**
     * @var DocumentFindResult[] $DocumentFindResult
     */
    protected $DocumentFindResult = null;

    public function __construct()
    {

    }

    /**
     * @return DocumentFindResult[]
     */
    public function getDocumentFindResult()
    {
        return $this->DocumentFindResult;
    }

    /**
     * @param DocumentFindResult[] $DocumentFindResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\ArrayOfDocumentFindResult
     */
    public function setDocumentFindResult(array $DocumentFindResult = null)
    {
        $this->DocumentFindResult = $DocumentFindResult;
        return $this;
    }

}
