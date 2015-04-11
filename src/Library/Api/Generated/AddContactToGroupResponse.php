<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddContactToGroupResponse
{

    /**
     * @var boolean $AddContactToGroupResult
     */
    protected $AddContactToGroupResult = null;

    /**
     * @param boolean $AddContactToGroupResult
     */
    public function __construct($AddContactToGroupResult = null)
    {
        $this->AddContactToGroupResult = $AddContactToGroupResult;
    }

    /**
     * @return boolean
     */
    public function getAddContactToGroupResult()
    {
        return $this->AddContactToGroupResult;
    }

    /**
     * @param boolean $AddContactToGroupResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddContactToGroupResponse
     */
    public function setAddContactToGroupResult($AddContactToGroupResult)
    {
        $this->AddContactToGroupResult = $AddContactToGroupResult;
        return $this;
    }

}
