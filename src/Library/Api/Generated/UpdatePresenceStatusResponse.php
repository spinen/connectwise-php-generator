<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class UpdatePresenceStatusResponse
{

    /**
     * @var ContactPresence $UpdatePresenceStatusResult
     */
    protected $UpdatePresenceStatusResult = null;

    /**
     * @param ContactPresence $UpdatePresenceStatusResult
     */
    public function __construct(ContactPresence $UpdatePresenceStatusResult = null)
    {
        $this->UpdatePresenceStatusResult = $UpdatePresenceStatusResult;
    }

    /**
     * @return ContactPresence
     */
    public function getUpdatePresenceStatusResult()
    {
        return $this->UpdatePresenceStatusResult;
    }

    /**
     * @param ContactPresence $UpdatePresenceStatusResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\UpdatePresenceStatusResponse
     */
    public function setUpdatePresenceStatusResult(ContactPresence $UpdatePresenceStatusResult)
    {
        $this->UpdatePresenceStatusResult = $UpdatePresenceStatusResult;
        return $this;
    }

}
