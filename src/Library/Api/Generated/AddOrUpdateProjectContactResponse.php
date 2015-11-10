<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddOrUpdateProjectContactResponse
{

    /**
     * @var ProjectContact $AddOrUpdateProjectContactResult
     */
    protected $AddOrUpdateProjectContactResult = null;

    /**
     * @param ProjectContact $AddOrUpdateProjectContactResult
     */
    public function __construct(ProjectContact $AddOrUpdateProjectContactResult = null)
    {
        $this->AddOrUpdateProjectContactResult = $AddOrUpdateProjectContactResult;
    }

    /**
     * @return ProjectContact
     */
    public function getAddOrUpdateProjectContactResult()
    {
        return $this->AddOrUpdateProjectContactResult;
    }

    /**
     * @param ProjectContact $AddOrUpdateProjectContactResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdateProjectContactResponse
     */
    public function setAddOrUpdateProjectContactResult(ProjectContact $AddOrUpdateProjectContactResult)
    {
        $this->AddOrUpdateProjectContactResult = $AddOrUpdateProjectContactResult;
        return $this;
    }

}
