<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ArrayOfReport
{

    /**
     * @var Report[] $Report
     */
    protected $Report = null;

    public function __construct()
    {

    }

    /**
     * @return Report[]
     */
    public function getReport()
    {
        return $this->Report;
    }

    /**
     * @param Report[] $Report
     * @return \Spinen\ConnectWise\Library\Api\Generated\ArrayOfReport
     */
    public function setReport(array $Report = null)
    {
        $this->Report = $Report;
        return $this;
    }

}
