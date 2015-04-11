<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class GetReportFieldsResponse
{

    /**
     * @var ArrayOfFieldInfo $GetReportFieldsResult
     */
    protected $GetReportFieldsResult = null;

    /**
     * @param ArrayOfFieldInfo $GetReportFieldsResult
     */
    public function __construct($GetReportFieldsResult = null)
    {
        $this->GetReportFieldsResult = $GetReportFieldsResult;
    }

    /**
     * @return ArrayOfFieldInfo
     */
    public function getGetReportFieldsResult()
    {
        return $this->GetReportFieldsResult;
    }

    /**
     * @param ArrayOfFieldInfo $GetReportFieldsResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetReportFieldsResponse
     */
    public function setGetReportFieldsResult($GetReportFieldsResult)
    {
        $this->GetReportFieldsResult = $GetReportFieldsResult;
        return $this;
    }

}
