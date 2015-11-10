<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class GetContactResponse
{

    /**
     * @var Contact $GetContactResult
     */
    protected $GetContactResult = null;

    /**
     * @param Contact $GetContactResult
     */
    public function __construct(Contact $GetContactResult = null)
    {
        $this->GetContactResult = $GetContactResult;
    }

    /**
     * @return Contact
     */
    public function getGetContactResult()
    {
        return $this->GetContactResult;
    }

    /**
     * @param Contact $GetContactResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetContactResponse
     */
    public function setGetContactResult(Contact $GetContactResult)
    {
        $this->GetContactResult = $GetContactResult;
        return $this;
    }

}
