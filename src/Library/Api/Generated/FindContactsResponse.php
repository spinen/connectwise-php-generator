<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class FindContactsResponse
{

    /**
     * @var ArrayOfContactFindResult $FindContactsResult
     */
    protected $FindContactsResult = null;

    /**
     * @param ArrayOfContactFindResult $FindContactsResult
     */
    public function __construct($FindContactsResult = null)
    {
        $this->FindContactsResult = $FindContactsResult;
    }

    /**
     * @return ArrayOfContactFindResult
     */
    public function getFindContactsResult()
    {
        return $this->FindContactsResult;
    }

    /**
     * @param ArrayOfContactFindResult $FindContactsResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\FindContactsResponse
     */
    public function setFindContactsResult($FindContactsResult)
    {
        $this->FindContactsResult = $FindContactsResult;
        return $this;
    }

}
