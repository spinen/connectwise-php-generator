<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class GetPresenceStatusResponse
{

    /**
     * @var ContactPresence $GetPresenceStatusResult
     */
    protected $GetPresenceStatusResult = null;

    /**
     * @param ContactPresence $GetPresenceStatusResult
     */
    public function __construct(ContactPresence $GetPresenceStatusResult = null)
    {
        $this->GetPresenceStatusResult = $GetPresenceStatusResult;
    }

    /**
     * @return ContactPresence
     */
    public function getGetPresenceStatusResult()
    {
        return $this->GetPresenceStatusResult;
    }

    /**
     * @param ContactPresence $GetPresenceStatusResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetPresenceStatusResponse
     */
    public function setGetPresenceStatusResult(ContactPresence $GetPresenceStatusResult)
    {
        $this->GetPresenceStatusResult = $GetPresenceStatusResult;
        return $this;
    }

}
