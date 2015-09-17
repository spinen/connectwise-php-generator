<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ArrayOfOppDocumentInfo
{

    /**
     * @var OppDocumentInfo[] $OppDocumentInfo
     */
    protected $OppDocumentInfo = null;

    public function __construct()
    {

    }

    /**
     * @return OppDocumentInfo[]
     */
    public function getOppDocumentInfo()
    {
        return $this->OppDocumentInfo;
    }

    /**
     * @param OppDocumentInfo[] $OppDocumentInfo
     * @return \Spinen\ConnectWise\Library\Api\Generated\ArrayOfOppDocumentInfo
     */
    public function setOppDocumentInfo(array $OppDocumentInfo = null)
    {
        $this->OppDocumentInfo = $OppDocumentInfo;
        return $this;
    }

}
