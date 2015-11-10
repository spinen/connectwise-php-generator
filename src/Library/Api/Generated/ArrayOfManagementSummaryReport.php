<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ArrayOfManagementSummaryReport
{

    /**
     * @var ManagementSummaryReport[] $ManagementSummaryReport
     */
    protected $ManagementSummaryReport = null;

    public function __construct()
    {

    }

    /**
     * @return ManagementSummaryReport[]
     */
    public function getManagementSummaryReport()
    {
        return $this->ManagementSummaryReport;
    }

    /**
     * @param ManagementSummaryReport[] $ManagementSummaryReport
     * @return \Spinen\ConnectWise\Library\Api\Generated\ArrayOfManagementSummaryReport
     */
    public function setManagementSummaryReport(array $ManagementSummaryReport)
    {
        $this->ManagementSummaryReport = $ManagementSummaryReport;
        return $this;
    }

}
