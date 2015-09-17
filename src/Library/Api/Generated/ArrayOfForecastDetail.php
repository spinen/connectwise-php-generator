<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ArrayOfForecastDetail
{

    /**
     * @var ForecastDetail[] $ForecastDetail
     */
    protected $ForecastDetail = null;

    public function __construct()
    {

    }

    /**
     * @return ForecastDetail[]
     */
    public function getForecastDetail()
    {
        return $this->ForecastDetail;
    }

    /**
     * @param ForecastDetail[] $ForecastDetail
     * @return \Spinen\ConnectWise\Library\Api\Generated\ArrayOfForecastDetail
     */
    public function setForecastDetail(array $ForecastDetail = null)
    {
        $this->ForecastDetail = $ForecastDetail;
        return $this;
    }

}
