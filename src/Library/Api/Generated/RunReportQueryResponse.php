<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class RunReportQueryResponse
{

    /**
     * @var ArrayOfResultRow $RunReportQueryResult
     */
    protected $RunReportQueryResult = null;

    /**
     * @param ArrayOfResultRow $RunReportQueryResult
     */
    public function __construct($RunReportQueryResult = null)
    {
        $this->RunReportQueryResult = $RunReportQueryResult;
    }

    /**
     * @return ArrayOfResultRow
     */
    public function getRunReportQueryResult()
    {
        return $this->RunReportQueryResult;
    }

    /**
     * @param ArrayOfResultRow $RunReportQueryResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\RunReportQueryResponse
     */
    public function setRunReportQueryResult($RunReportQueryResult)
    {
        $this->RunReportQueryResult = $RunReportQueryResult;
        return $this;
    }

}
