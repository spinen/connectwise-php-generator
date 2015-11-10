<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class RunPortalReportResponse
{

    /**
     * @var ArrayOfResultRow $RunPortalReportResult
     */
    protected $RunPortalReportResult = null;

    /**
     * @param ArrayOfResultRow $RunPortalReportResult
     */
    public function __construct($RunPortalReportResult = null)
    {
        $this->RunPortalReportResult = $RunPortalReportResult;
    }

    /**
     * @return ArrayOfResultRow
     */
    public function getRunPortalReportResult()
    {
        return $this->RunPortalReportResult;
    }

    /**
     * @param ArrayOfResultRow $RunPortalReportResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\RunPortalReportResponse
     */
    public function setRunPortalReportResult($RunPortalReportResult)
    {
        $this->RunPortalReportResult = $RunPortalReportResult;
        return $this;
    }

}
