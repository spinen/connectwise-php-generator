<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class LoadInvoice
{

    /**
     * @var ApiCredentials $credentials
     */
    protected $credentials = null;

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @param ApiCredentials $credentials
     * @param int $id
     */
    public function __construct(ApiCredentials $credentials = null, $id = null)
    {
        $this->credentials = $credentials;
        $this->id          = $id;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\LoadInvoice
     */
    public function setCredentials(ApiCredentials $credentials)
    {
        $this->credentials = $credentials;
        return $this;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return \Spinen\ConnectWise\Library\Api\Generated\LoadInvoice
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

}
