<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class GetActivityResponse
{

    /**
     * @var Activity $GetActivityResult
     */
    protected $GetActivityResult = null;

    /**
     * @param Activity $GetActivityResult
     */
    public function __construct(Activity $GetActivityResult = null)
    {
        $this->GetActivityResult = $GetActivityResult;
    }

    /**
     * @return Activity
     */
    public function getGetActivityResult()
    {
        return $this->GetActivityResult;
    }

    /**
     * @param Activity $GetActivityResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetActivityResponse
     */
    public function setGetActivityResult(Activity $GetActivityResult)
    {
        $this->GetActivityResult = $GetActivityResult;
        return $this;
    }

}
