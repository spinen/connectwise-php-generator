<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddOrUpdateContactResponse
{

    /**
     * @var Contact $AddOrUpdateContactResult
     */
    protected $AddOrUpdateContactResult = null;

    /**
     * @param Contact $AddOrUpdateContactResult
     */
    public function __construct(Contact $AddOrUpdateContactResult = null)
    {
        $this->AddOrUpdateContactResult = $AddOrUpdateContactResult;
    }

    /**
     * @return Contact
     */
    public function getAddOrUpdateContactResult()
    {
        return $this->AddOrUpdateContactResult;
    }

    /**
     * @param Contact $AddOrUpdateContactResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdateContactResponse
     */
    public function setAddOrUpdateContactResult(Contact $AddOrUpdateContactResult)
    {
        $this->AddOrUpdateContactResult = $AddOrUpdateContactResult;
        return $this;
    }

}
