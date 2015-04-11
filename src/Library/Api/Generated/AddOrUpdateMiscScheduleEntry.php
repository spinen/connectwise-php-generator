<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddOrUpdateMiscScheduleEntry
{

    /**
     * @var ApiCredentials $credentials
     */
    protected $credentials = null;

    /**
     * @var MiscScheduleEntry $miscScheduleEntry
     */
    protected $miscScheduleEntry = null;

    /**
     * @param ApiCredentials $credentials
     * @param MiscScheduleEntry $miscScheduleEntry
     */
    public function __construct(ApiCredentials $credentials = null, MiscScheduleEntry $miscScheduleEntry = null)
    {
        $this->credentials       = $credentials;
        $this->miscScheduleEntry = $miscScheduleEntry;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdateMiscScheduleEntry
     */
    public function setCredentials(ApiCredentials $credentials)
    {
        $this->credentials = $credentials;
        return $this;
    }

    /**
     * @return MiscScheduleEntry
     */
    public function getMiscScheduleEntry()
    {
        return $this->miscScheduleEntry;
    }

    /**
     * @param MiscScheduleEntry $miscScheduleEntry
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdateMiscScheduleEntry
     */
    public function setMiscScheduleEntry(MiscScheduleEntry $miscScheduleEntry)
    {
        $this->miscScheduleEntry = $miscScheduleEntry;
        return $this;
    }

}
