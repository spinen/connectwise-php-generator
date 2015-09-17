<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ArrayOfTimeDetail
{

    /**
     * @var TimeDetail[] $TimeDetail
     */
    protected $TimeDetail = null;

    public function __construct()
    {

    }

    /**
     * @return TimeDetail[]
     */
    public function getTimeDetail()
    {
        return $this->TimeDetail;
    }

    /**
     * @param TimeDetail[] $TimeDetail
     * @return \Spinen\ConnectWise\Library\Api\Generated\ArrayOfTimeDetail
     */
    public function setTimeDetail(array $TimeDetail = null)
    {
        $this->TimeDetail = $TimeDetail;
        return $this;
    }

}
