<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class UpdateTimeEntry
{

    /**
     * @var ApiCredentials $credentials
     */
    protected $credentials = null;

    /**
     * @var TimeEntry $timeEntry
     */
    protected $timeEntry = null;

    /**
     * @param ApiCredentials $credentials
     * @param TimeEntry $timeEntry
     */
    public function __construct(ApiCredentials $credentials = null, TimeEntry $timeEntry = null)
    {
        $this->credentials = $credentials;
        $this->timeEntry   = $timeEntry;
    }

    /**
     * @return ApiCredentials
     */
    public function getCredentials()
    {
        return $this->credentials;
    }

    /**
     * @param ApiCredentials $credentials
     * @return \Spinen\ConnectWise\Library\Api\Generated\UpdateTimeEntry
     */
    public function setCredentials(ApiCredentials $credentials)
    {
        $this->credentials = $credentials;
        return $this;
    }

    /**
     * @return TimeEntry
     */
    public function getTimeEntry()
    {
        return $this->timeEntry;
    }

    /**
     * @param TimeEntry $timeEntry
     * @return \Spinen\ConnectWise\Library\Api\Generated\UpdateTimeEntry
     */
    public function setTimeEntry(TimeEntry $timeEntry)
    {
        $this->timeEntry = $timeEntry;
        return $this;
    }

}
