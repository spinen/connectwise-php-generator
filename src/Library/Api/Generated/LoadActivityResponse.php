<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class LoadActivityResponse
{

    /**
     * @var Activity $LoadActivityResult
     */
    protected $LoadActivityResult = null;

    /**
     * @param Activity $LoadActivityResult
     */
    public function __construct(Activity $LoadActivityResult = null)
    {
        $this->LoadActivityResult = $LoadActivityResult;
    }

    /**
     * @return Activity
     */
    public function getLoadActivityResult()
    {
        return $this->LoadActivityResult;
    }

    /**
     * @param Activity $LoadActivityResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\LoadActivityResponse
     */
    public function setLoadActivityResult(Activity $LoadActivityResult)
    {
        $this->LoadActivityResult = $LoadActivityResult;
        return $this;
    }

}
