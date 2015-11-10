<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class SetDefaultContactCommunicationItemResponse
{

    /**
     * @var ContactCommunicationItem $SetDefaultContactCommunicationItemResult
     */
    protected $SetDefaultContactCommunicationItemResult = null;

    /**
     * @param ContactCommunicationItem $SetDefaultContactCommunicationItemResult
     */
    public function __construct(ContactCommunicationItem $SetDefaultContactCommunicationItemResult = null)
    {
        $this->SetDefaultContactCommunicationItemResult = $SetDefaultContactCommunicationItemResult;
    }

    /**
     * @return ContactCommunicationItem
     */
    public function getSetDefaultContactCommunicationItemResult()
    {
        return $this->SetDefaultContactCommunicationItemResult;
    }

    /**
     * @param ContactCommunicationItem $SetDefaultContactCommunicationItemResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\SetDefaultContactCommunicationItemResponse
     */
    public function setSetDefaultContactCommunicationItemResult(ContactCommunicationItem $SetDefaultContactCommunicationItemResult)
    {
        $this->SetDefaultContactCommunicationItemResult = $SetDefaultContactCommunicationItemResult;
        return $this;
    }

}
