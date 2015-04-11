<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class FindProjectContactsResponse
{

    /**
     * @var ArrayOfProjectContactFindResult $FindProjectContactsResult
     */
    protected $FindProjectContactsResult = null;

    /**
     * @param ArrayOfProjectContactFindResult $FindProjectContactsResult
     */
    public function __construct($FindProjectContactsResult = null)
    {
        $this->FindProjectContactsResult = $FindProjectContactsResult;
    }

    /**
     * @return ArrayOfProjectContactFindResult
     */
    public function getFindProjectContactsResult()
    {
        return $this->FindProjectContactsResult;
    }

    /**
     * @param ArrayOfProjectContactFindResult $FindProjectContactsResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\FindProjectContactsResponse
     */
    public function setFindProjectContactsResult($FindProjectContactsResult)
    {
        $this->FindProjectContactsResult = $FindProjectContactsResult;
        return $this;
    }

}
