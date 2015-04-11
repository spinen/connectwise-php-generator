<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class GetAllContactCommunicationItemsResponse
{

    /**
     * @var ArrayOfContactCommunicationItem $GetAllContactCommunicationItemsResult
     */
    protected $GetAllContactCommunicationItemsResult = null;

    /**
     * @param ArrayOfContactCommunicationItem $GetAllContactCommunicationItemsResult
     */
    public function __construct($GetAllContactCommunicationItemsResult = null)
    {
        $this->GetAllContactCommunicationItemsResult = $GetAllContactCommunicationItemsResult;
    }

    /**
     * @return ArrayOfContactCommunicationItem
     */
    public function getGetAllContactCommunicationItemsResult()
    {
        return $this->GetAllContactCommunicationItemsResult;
    }

    /**
     * @param ArrayOfContactCommunicationItem $GetAllContactCommunicationItemsResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetAllContactCommunicationItemsResponse
     */
    public function setGetAllContactCommunicationItemsResult($GetAllContactCommunicationItemsResult)
    {
        $this->GetAllContactCommunicationItemsResult = $GetAllContactCommunicationItemsResult;
        return $this;
    }

}
