<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class UpdateManagementSummaryReportsResponse
{

    /**
     * @var ArrayOfManagementSummaryReport $UpdateManagementSummaryReportsResult
     */
    protected $UpdateManagementSummaryReportsResult = null;

    /**
     * @param ArrayOfManagementSummaryReport $UpdateManagementSummaryReportsResult
     */
    public function __construct($UpdateManagementSummaryReportsResult = null)
    {
        $this->UpdateManagementSummaryReportsResult = $UpdateManagementSummaryReportsResult;
    }

    /**
     * @return ArrayOfManagementSummaryReport
     */
    public function getUpdateManagementSummaryReportsResult()
    {
        return $this->UpdateManagementSummaryReportsResult;
    }

    /**
     * @param ArrayOfManagementSummaryReport $UpdateManagementSummaryReportsResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\UpdateManagementSummaryReportsResponse
     */
    public function setUpdateManagementSummaryReportsResult($UpdateManagementSummaryReportsResult)
    {
        $this->UpdateManagementSummaryReportsResult = $UpdateManagementSummaryReportsResult;
        return $this;
    }

}
