<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class RunReportQueryWithFiltersResponse
{

    /**
     * @var ArrayOfResultRow $RunReportQueryWithFiltersResult
     */
    protected $RunReportQueryWithFiltersResult = null;

    /**
     * @param ArrayOfResultRow $RunReportQueryWithFiltersResult
     */
    public function __construct($RunReportQueryWithFiltersResult = null)
    {
        $this->RunReportQueryWithFiltersResult = $RunReportQueryWithFiltersResult;
    }

    /**
     * @return ArrayOfResultRow
     */
    public function getRunReportQueryWithFiltersResult()
    {
        return $this->RunReportQueryWithFiltersResult;
    }

    /**
     * @param ArrayOfResultRow $RunReportQueryWithFiltersResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\RunReportQueryWithFiltersResponse
     */
    public function setRunReportQueryWithFiltersResult($RunReportQueryWithFiltersResult)
    {
        $this->RunReportQueryWithFiltersResult = $RunReportQueryWithFiltersResult;
        return $this;
    }

}
