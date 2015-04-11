<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class RunReportQueryWithTimeoutResponse
{

    /**
     * @var ArrayOfResultRow $RunReportQueryWithTimeoutResult
     */
    protected $RunReportQueryWithTimeoutResult = null;

    /**
     * @param ArrayOfResultRow $RunReportQueryWithTimeoutResult
     */
    public function __construct($RunReportQueryWithTimeoutResult = null)
    {
        $this->RunReportQueryWithTimeoutResult = $RunReportQueryWithTimeoutResult;
    }

    /**
     * @return ArrayOfResultRow
     */
    public function getRunReportQueryWithTimeoutResult()
    {
        return $this->RunReportQueryWithTimeoutResult;
    }

    /**
     * @param ArrayOfResultRow $RunReportQueryWithTimeoutResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\RunReportQueryWithTimeoutResponse
     */
    public function setRunReportQueryWithTimeoutResult($RunReportQueryWithTimeoutResult)
    {
        $this->RunReportQueryWithTimeoutResult = $RunReportQueryWithTimeoutResult;
        return $this;
    }

}
