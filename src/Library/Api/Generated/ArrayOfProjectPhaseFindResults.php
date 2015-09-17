<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ArrayOfProjectPhaseFindResults
{

    /**
     * @var ProjectPhaseFindResults[] $ProjectPhaseFindResults
     */
    protected $ProjectPhaseFindResults = null;

    public function __construct()
    {

    }

    /**
     * @return ProjectPhaseFindResults[]
     */
    public function getProjectPhaseFindResults()
    {
        return $this->ProjectPhaseFindResults;
    }

    /**
     * @param ProjectPhaseFindResults[] $ProjectPhaseFindResults
     * @return \Spinen\ConnectWise\Library\Api\Generated\ArrayOfProjectPhaseFindResults
     */
    public function setProjectPhaseFindResults(array $ProjectPhaseFindResults = null)
    {
        $this->ProjectPhaseFindResults = $ProjectPhaseFindResults;
        return $this;
    }

}
