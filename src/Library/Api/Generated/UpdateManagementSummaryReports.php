<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class UpdateManagementSummaryReports
{

    /**
     * @var ApiCredentials $credentials
     */
    protected $credentials = null;

    /**
     * @var string $managementSolutionName
     */
    protected $managementSolutionName = null;

    /**
     * @var ArrayOfManagementSummaryReport $managementSummaryReport
     */
    protected $managementSummaryReport = null;

    /**
     * @param ApiCredentials $credentials
     * @param string $managementSolutionName
     * @param ArrayOfManagementSummaryReport $managementSummaryReport
     */
    public function __construct(ApiCredentials $credentials = null, $managementSolutionName = null, $managementSummaryReport = null)
    {
        $this->credentials             = $credentials;
        $this->managementSolutionName  = $managementSolutionName;
        $this->managementSummaryReport = $managementSummaryReport;
    }

    /**
     * @return ApiCredentials
     */
    public function getCredentials()
    {
        return $this->credentials;
    }

    /**
     * @param ApiCredentials $credentials
     * @return \Spinen\ConnectWise\Library\Api\Generated\UpdateManagementSummaryReports
     */
    public function setCredentials(ApiCredentials $credentials)
    {
        $this->credentials = $credentials;
        return $this;
    }

    /**
     * @return string
     */
    public function getManagementSolutionName()
    {
        return $this->managementSolutionName;
    }

    /**
     * @param string $managementSolutionName
     * @return \Spinen\ConnectWise\Library\Api\Generated\UpdateManagementSummaryReports
     */
    public function setManagementSolutionName($managementSolutionName)
    {
        $this->managementSolutionName = $managementSolutionName;
        return $this;
    }

    /**
     * @return ArrayOfManagementSummaryReport
     */
    public function getManagementSummaryReport()
    {
        return $this->managementSummaryReport;
    }

    /**
     * @param ArrayOfManagementSummaryReport $managementSummaryReport
     * @return \Spinen\ConnectWise\Library\Api\Generated\UpdateManagementSummaryReports
     */
    public function setManagementSummaryReport($managementSummaryReport)
    {
        $this->managementSummaryReport = $managementSummaryReport;
        return $this;
    }

}
