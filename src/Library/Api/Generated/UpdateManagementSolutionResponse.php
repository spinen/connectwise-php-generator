<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class UpdateManagementSolutionResponse
{

    /**
     * @var int $UpdateManagementSolutionResult
     */
    protected $UpdateManagementSolutionResult = null;

    /**
     * @param int $UpdateManagementSolutionResult
     */
    public function __construct($UpdateManagementSolutionResult = null)
    {
        $this->UpdateManagementSolutionResult = $UpdateManagementSolutionResult;
    }

    /**
     * @return int
     */
    public function getUpdateManagementSolutionResult()
    {
        return $this->UpdateManagementSolutionResult;
    }

    /**
     * @param int $UpdateManagementSolutionResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\UpdateManagementSolutionResponse
     */
    public function setUpdateManagementSolutionResult($UpdateManagementSolutionResult)
    {
        $this->UpdateManagementSolutionResult = $UpdateManagementSolutionResult;
        return $this;
    }

}
