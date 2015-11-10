<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddOrUpdateActivityResponse
{

    /**
     * @var Activity $AddOrUpdateActivityResult
     */
    protected $AddOrUpdateActivityResult = null;

    /**
     * @param Activity $AddOrUpdateActivityResult
     */
    public function __construct(Activity $AddOrUpdateActivityResult = null)
    {
        $this->AddOrUpdateActivityResult = $AddOrUpdateActivityResult;
    }

    /**
     * @return Activity
     */
    public function getAddOrUpdateActivityResult()
    {
        return $this->AddOrUpdateActivityResult;
    }

    /**
     * @param Activity $AddOrUpdateActivityResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdateActivityResponse
     */
    public function setAddOrUpdateActivityResult(Activity $AddOrUpdateActivityResult)
    {
        $this->AddOrUpdateActivityResult = $AddOrUpdateActivityResult;
        return $this;
    }

}
