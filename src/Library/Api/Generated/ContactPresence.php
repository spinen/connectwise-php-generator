<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ContactPresence
{

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var int $ContactId
     */
    protected $ContactId = null;

    /**
     * @var string $PresenceDescription
     */
    protected $PresenceDescription = null;

    /**
     * @param int $Id
     * @param int $ContactId
     * @param string $PresenceDescription
     */
    public function __construct($Id = null, $ContactId = null, $PresenceDescription = null)
    {
        $this->Id                  = $Id;
        $this->ContactId           = $ContactId;
        $this->PresenceDescription = $PresenceDescription;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param int $Id
     * @return \Spinen\ConnectWise\Library\Api\Generated\ContactPresence
     */
    public function setId($Id)
    {
        $this->Id = $Id;
        return $this;
    }

    /**
     * @return int
     */
    public function getContactId()
    {
        return $this->ContactId;
    }

    /**
     * @param int $ContactId
     * @return \Spinen\ConnectWise\Library\Api\Generated\ContactPresence
     */
    public function setContactId($ContactId)
    {
        $this->ContactId = $ContactId;
        return $this;
    }

    /**
     * @return string
     */
    public function getPresenceDescription()
    {
        return $this->PresenceDescription;
    }

    /**
     * @param string $PresenceDescription
     * @return \Spinen\ConnectWise\Library\Api\Generated\ContactPresence
     */
    public function setPresenceDescription($PresenceDescription)
    {
        $this->PresenceDescription = $PresenceDescription;
        return $this;
    }

}
