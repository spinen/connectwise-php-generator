<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ArrayOfContactCommunicationItem
{

    /**
     * @var ContactCommunicationItem[] $ContactCommunicationItem
     */
    protected $ContactCommunicationItem = null;

    public function __construct()
    {

    }

    /**
     * @return ContactCommunicationItem[]
     */
    public function getContactCommunicationItem()
    {
        return $this->ContactCommunicationItem;
    }

    /**
     * @param ContactCommunicationItem[] $ContactCommunicationItem
     * @return \Spinen\ConnectWise\Library\Api\Generated\ArrayOfContactCommunicationItem
     */
    public function setContactCommunicationItem(array $ContactCommunicationItem = null)
    {
        $this->ContactCommunicationItem = $ContactCommunicationItem;
        return $this;
    }

}
