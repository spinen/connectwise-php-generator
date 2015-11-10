<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class GetContactCommunicationItemResponse
{

    /**
     * @var ContactCommunicationItem $GetContactCommunicationItemResult
     */
    protected $GetContactCommunicationItemResult = null;

    /**
     * @param ContactCommunicationItem $GetContactCommunicationItemResult
     */
    public function __construct(ContactCommunicationItem $GetContactCommunicationItemResult = null)
    {
        $this->GetContactCommunicationItemResult = $GetContactCommunicationItemResult;
    }

    /**
     * @return ContactCommunicationItem
     */
    public function getGetContactCommunicationItemResult()
    {
        return $this->GetContactCommunicationItemResult;
    }

    /**
     * @param ContactCommunicationItem $GetContactCommunicationItemResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetContactCommunicationItemResponse
     */
    public function setGetContactCommunicationItemResult(ContactCommunicationItem $GetContactCommunicationItemResult)
    {
        $this->GetContactCommunicationItemResult = $GetContactCommunicationItemResult;
        return $this;
    }

}
