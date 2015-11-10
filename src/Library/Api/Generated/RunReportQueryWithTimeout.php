<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class RunReportQueryWithTimeout
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
     * @var string $orderBy
     */
    protected $orderBy = null;

    /**
     * @var int $limit
     */
    protected $limit = null;

    /**
     * @var int $skip
     */
    protected $skip = null;

    /**
     * @var int $queryTimeoutInSeconds
     */
    protected $queryTimeoutInSeconds = null;

    /**
     * @param ApiCredentials $credentials
     * @param string $reportName
     * @param string $conditions
     * @param string $orderBy
     * @param int $limit
     * @param int $skip
     * @param int $queryTimeoutInSeconds
     */
    public function __construct(ApiCredentials $credentials = null, $reportName = null, $conditions = null, $orderBy = null, $limit = null, $skip = null, $queryTimeoutInSeconds = null)
    {
        $this->credentials           = $credentials;
        $this->reportName            = $reportName;
        $this->conditions            = $conditions;
        $this->orderBy               = $orderBy;
        $this->limit                 = $limit;
        $this->skip                  = $skip;
        $this->queryTimeoutInSeconds = $queryTimeoutInSeconds;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\RunReportQueryWithTimeout
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\RunReportQueryWithTimeout
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\RunReportQueryWithTimeout
     */
    public function setConditions($conditions)
    {
        $this->conditions = $conditions;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrderBy()
    {
        return $this->orderBy;
    }

    /**
     * @param string $orderBy
     * @return \Spinen\ConnectWise\Library\Api\Generated\RunReportQueryWithTimeout
     */
    public function setOrderBy($orderBy)
    {
        $this->orderBy = $orderBy;
        return $this;
    }

    /**
     * @return int
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * @param int $limit
     * @return \Spinen\ConnectWise\Library\Api\Generated\RunReportQueryWithTimeout
     */
    public function setLimit($limit)
    {
        $this->limit = $limit;
        return $this;
    }

    /**
     * @return int
     */
    public function getSkip()
    {
        return $this->skip;
    }

    /**
     * @param int $skip
     * @return \Spinen\ConnectWise\Library\Api\Generated\RunReportQueryWithTimeout
     */
    public function setSkip($skip)
    {
        $this->skip = $skip;
        return $this;
    }

    /**
     * @return int
     */
    public function getQueryTimeoutInSeconds()
    {
        return $this->queryTimeoutInSeconds;
    }

    /**
     * @param int $queryTimeoutInSeconds
     * @return \Spinen\ConnectWise\Library\Api\Generated\RunReportQueryWithTimeout
     */
    public function setQueryTimeoutInSeconds($queryTimeoutInSeconds)
    {
        $this->queryTimeoutInSeconds = $queryTimeoutInSeconds;
        return $this;
    }

}
