<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class FindPhasesResponse
{

    /**
     * @var ArrayOfProjectPhaseFindResults $FindPhasesResult
     */
    protected $FindPhasesResult = null;

    /**
     * @param ArrayOfProjectPhaseFindResults $FindPhasesResult
     */
    public function __construct($FindPhasesResult = null)
    {
        $this->FindPhasesResult = $FindPhasesResult;
    }

    /**
     * @return ArrayOfProjectPhaseFindResults
     */
    public function getFindPhasesResult()
    {
        return $this->FindPhasesResult;
    }

    /**
     * @param ArrayOfProjectPhaseFindResults $FindPhasesResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\FindPhasesResponse
     */
    public function setFindPhasesResult($FindPhasesResult)
    {
        $this->FindPhasesResult = $FindPhasesResult;
        return $this;
    }

}
