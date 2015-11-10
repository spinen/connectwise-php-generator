<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ArrayOfDocumentInfo
{

    /**
     * @var DocumentInfo[] $DocumentInfo
     */
    protected $DocumentInfo = null;

    public function __construct()
    {

    }

    /**
     * @return DocumentInfo[]
     */
    public function getDocumentInfo()
    {
        return $this->DocumentInfo;
    }

    /**
     * @param DocumentInfo[] $DocumentInfo
     * @return \Spinen\ConnectWise\Library\Api\Generated\ArrayOfDocumentInfo
     */
    public function setDocumentInfo(array $DocumentInfo)
    {
        $this->DocumentInfo = $DocumentInfo;
        return $this;
    }

}
