<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class GetManagedGroupResponse
{

    /**
     * @var ArrayOfManagedGroup $GetManagedGroupResult
     */
    protected $GetManagedGroupResult = null;

    /**
     * @param ArrayOfManagedGroup $GetManagedGroupResult
     */
    public function __construct($GetManagedGroupResult = null)
    {
        $this->GetManagedGroupResult = $GetManagedGroupResult;
    }

    /**
     * @return ArrayOfManagedGroup
     */
    public function getGetManagedGroupResult()
    {
        return $this->GetManagedGroupResult;
    }

    /**
     * @param ArrayOfManagedGroup $GetManagedGroupResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetManagedGroupResponse
     */
    public function setGetManagedGroupResult($GetManagedGroupResult)
    {
        $this->GetManagedGroupResult = $GetManagedGroupResult;
        return $this;
    }

}
