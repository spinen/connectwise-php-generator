<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class GetReportFields
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
     * @var ArrayOfString $returnFields
     */
    protected $returnFields = null;

    /**
     * @param ApiCredentials $credentials
     * @param string $reportName
     * @param ArrayOfString $returnFields
     */
    public function __construct(ApiCredentials $credentials = null, $reportName = null, $returnFields = null)
    {
        $this->credentials  = $credentials;
        $this->reportName   = $reportName;
        $this->returnFields = $returnFields;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetReportFields
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetReportFields
     */
    public function setReportName($reportName)
    {
        $this->reportName = $reportName;
        return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getReturnFields()
    {
        return $this->returnFields;
    }

    /**
     * @param ArrayOfString $returnFields
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetReportFields
     */
    public function setReturnFields($returnFields)
    {
        $this->returnFields = $returnFields;
        return $this;
    }

}
