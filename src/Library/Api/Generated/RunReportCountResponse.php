<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class RunReportCountResponse
{

    /**
     * @var int $RunReportCountResult
     */
    protected $RunReportCountResult = null;

    /**
     * @param int $RunReportCountResult
     */
    public function __construct($RunReportCountResult = null)
    {
        $this->RunReportCountResult = $RunReportCountResult;
    }

    /**
     * @return int
     */
    public function getRunReportCountResult()
    {
        return $this->RunReportCountResult;
    }

    /**
     * @param int $RunReportCountResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\RunReportCountResponse
     */
    public function setRunReportCountResult($RunReportCountResult)
    {
        $this->RunReportCountResult = $RunReportCountResult;
        return $this;
    }

}
