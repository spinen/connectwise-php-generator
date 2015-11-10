<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddActivity
{

    /**
     * @var ApiCredentials $credentials
     */
    protected $credentials = null;

    /**
     * @var Activity $activity
     */
    protected $activity = null;

    /**
     * @param ApiCredentials $credentials
     * @param Activity $activity
     */
    public function __construct(ApiCredentials $credentials = null, Activity $activity = null)
    {
        $this->credentials = $credentials;
        $this->activity    = $activity;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddActivity
     */
    public function setCredentials(ApiCredentials $credentials)
    {
        $this->credentials = $credentials;
        return $this;
    }

    /**
     * @return Activity
     */
    public function getActivity()
    {
        return $this->activity;
    }

    /**
     * @param Activity $activity
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddActivity
     */
    public function setActivity(Activity $activity)
    {
        $this->activity = $activity;
        return $this;
    }

}
