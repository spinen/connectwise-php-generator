<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddOrUpdateContactCommunicationItemResponse
{

    /**
     * @var ContactCommunicationItem $AddOrUpdateContactCommunicationItemResult
     */
    protected $AddOrUpdateContactCommunicationItemResult = null;

    /**
     * @param ContactCommunicationItem $AddOrUpdateContactCommunicationItemResult
     */
    public function __construct(ContactCommunicationItem $AddOrUpdateContactCommunicationItemResult = null)
    {
        $this->AddOrUpdateContactCommunicationItemResult = $AddOrUpdateContactCommunicationItemResult;
    }

    /**
     * @return ContactCommunicationItem
     */
    public function getAddOrUpdateContactCommunicationItemResult()
    {
        return $this->AddOrUpdateContactCommunicationItemResult;
    }

    /**
     * @param ContactCommunicationItem $AddOrUpdateContactCommunicationItemResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdateContactCommunicationItemResponse
     */
    public function setAddOrUpdateContactCommunicationItemResult(ContactCommunicationItem $AddOrUpdateContactCommunicationItemResult)
    {
        $this->AddOrUpdateContactCommunicationItemResult = $AddOrUpdateContactCommunicationItemResult;
        return $this;
    }

}
