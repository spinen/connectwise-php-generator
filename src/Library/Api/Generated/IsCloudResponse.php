<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class IsCloudResponse
{

    /**
     * @var boolean $IsCloudResult
     */
    protected $IsCloudResult = null;

    /**
     * @param boolean $IsCloudResult
     */
    public function __construct($IsCloudResult = null)
    {
        $this->IsCloudResult = $IsCloudResult;
    }

    /**
     * @return boolean
     */
    public function getIsCloudResult()
    {
        return $this->IsCloudResult;
    }

    /**
     * @param boolean $IsCloudResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\IsCloudResponse
     */
    public function setIsCloudResult($IsCloudResult)
    {
        $this->IsCloudResult = $IsCloudResult;
        return $this;
    }

}
