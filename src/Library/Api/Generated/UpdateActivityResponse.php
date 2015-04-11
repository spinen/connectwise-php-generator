<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class UpdateActivityResponse
{

    /**
     * @var Activity $UpdateActivityResult
     */
    protected $UpdateActivityResult = null;

    /**
     * @param Activity $UpdateActivityResult
     */
    public function __construct(Activity $UpdateActivityResult = null)
    {
        $this->UpdateActivityResult = $UpdateActivityResult;
    }

    /**
     * @return Activity
     */
    public function getUpdateActivityResult()
    {
        return $this->UpdateActivityResult;
    }

    /**
     * @param Activity $UpdateActivityResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\UpdateActivityResponse
     */
    public function setUpdateActivityResult(Activity $UpdateActivityResult)
    {
        $this->UpdateActivityResult = $UpdateActivityResult;
        return $this;
    }

}
