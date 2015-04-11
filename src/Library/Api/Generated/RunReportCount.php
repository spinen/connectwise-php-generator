<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class RunReportCount
{

    /**
     * @var ApiCredentials $credentials
     */
    protected $credentials = null;

    /**
     * @var string $reportName
     */
    protected $reportName = null;

    /**
     * @var string $conditions
     */
    protected $conditions = null;

    /**
     * @param ApiCredentials $credentials
     * @param string $reportName
     * @param string $conditions
     */
    public function __construct(ApiCredentials $credentials = null, $reportName = null, $conditions = null)
    {
        $this->credentials = $credentials;
        $this->reportName  = $reportName;
        $this->conditions  = $conditions;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\RunReportCount
     */
    public function setCredentials(ApiCredentials $credentials)
    {
        $this->credentials = $credentials;
        return $this;
    }

    /**
     * @return string
     */
    public function getReportName()
    {
        return $this->reportName;
    }

    /**
     * @param string $reportName
     * @return \Spinen\ConnectWise\Library\Api\Generated\RunReportCount
     */
    public function setReportName($reportName)
    {
        $this->reportName = $reportName;
        return $this;
    }

    /**
     * @return string
     */
    public function getConditions()
    {
        return $this->conditions;
    }

    /**
     * @param string $conditions
     * @return \Spinen\ConnectWise\Library\Api\Generated\RunReportCount
     */
    public function setConditions($conditions)
    {
        $this->conditions = $conditions;
        return $this;
    }

}
