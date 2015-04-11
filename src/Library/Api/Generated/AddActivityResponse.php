<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddActivityResponse
{

    /**
     * @var Activity $AddActivityResult
     */
    protected $AddActivityResult = null;

    /**
     * @param Activity $AddActivityResult
     */
    public function __construct(Activity $AddActivityResult = null)
    {
        $this->AddActivityResult = $AddActivityResult;
    }

    /**
     * @return Activity
     */
    public function getAddActivityResult()
    {
        return $this->AddActivityResult;
    }

    /**
     * @param Activity $AddActivityResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddActivityResponse
     */
    public function setAddActivityResult(Activity $AddActivityResult)
    {
        $this->AddActivityResult = $AddActivityResult;
        return $this;
    }

}
