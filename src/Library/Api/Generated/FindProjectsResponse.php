<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class FindProjectsResponse
{

    /**
     * @var ArrayOfProjectFindResult $FindProjectsResult
     */
    protected $FindProjectsResult = null;

    /**
     * @param ArrayOfProjectFindResult $FindProjectsResult
     */
    public function __construct($FindProjectsResult = null)
    {
        $this->FindProjectsResult = $FindProjectsResult;
    }

    /**
     * @return ArrayOfProjectFindResult
     */
    public function getFindProjectsResult()
    {
        return $this->FindProjectsResult;
    }

    /**
     * @param ArrayOfProjectFindResult $FindProjectsResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\FindProjectsResponse
     */
    public function setFindProjectsResult($FindProjectsResult)
    {
        $this->FindProjectsResult = $FindProjectsResult;
        return $this;
    }

}
