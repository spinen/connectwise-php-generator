<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class RemoveContactFromGroupResponse
{

    /**
     * @var boolean $RemoveContactFromGroupResult
     */
    protected $RemoveContactFromGroupResult = null;

    /**
     * @param boolean $RemoveContactFromGroupResult
     */
    public function __construct($RemoveContactFromGroupResult = null)
    {
        $this->RemoveContactFromGroupResult = $RemoveContactFromGroupResult;
    }

    /**
     * @return boolean
     */
    public function getRemoveContactFromGroupResult()
    {
        return $this->RemoveContactFromGroupResult;
    }

    /**
     * @param boolean $RemoveContactFromGroupResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\RemoveContactFromGroupResponse
     */
    public function setRemoveContactFromGroupResult($RemoveContactFromGroupResult)
    {
        $this->RemoveContactFromGroupResult = $RemoveContactFromGroupResult;
        return $this;
    }

}
