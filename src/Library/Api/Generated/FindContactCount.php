<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class FindContactCount
{

    /**
     * @var ApiCredentials $credentials
     */
    protected $credentials = null;

    /**
     * @var string $conditions
     */
    protected $conditions = null;

    /**
     * @param ApiCredentials $credentials
     * @param string $conditions
     */
    public function __construct(ApiCredentials $credentials = null, $conditions = null)
    {
        $this->credentials = $credentials;
        $this->conditions  = $conditions;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\FindContactCount
     */
    public function setCredentials(ApiCredentials $credentials)
    {
        $this->credentials = $credentials;
        return $this;
    }

    /**
     * @return string
     */
    public function getConditions()
    {
        return $this->conditions;
    }

    /**
     * @param string $conditions
     * @return \Spinen\ConnectWise\Library\Api\Generated\FindContactCount
     */
    public function setConditions($conditions)
    {
        $this->conditions = $conditions;
        return $this;
    }

}
