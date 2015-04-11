<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class GetAvatarImage
{

    /**
     * @var ApiCredentials $credentials
     */
    protected $credentials = null;

    /**
     * @var string $imageId
     */
    protected $imageId = null;

    /**
     * @var string $portalName
     */
    protected $portalName = null;

    /**
     * @param ApiCredentials $credentials
     * @param string $imageId
     * @param string $portalName
     */
    public function __construct(ApiCredentials $credentials = null, $imageId = null, $portalName = null)
    {
        $this->credentials = $credentials;
        $this->imageId     = $imageId;
        $this->portalName  = $portalName;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetAvatarImage
     */
    public function setCredentials(ApiCredentials $credentials)
    {
        $this->credentials = $credentials;
        return $this;
    }

    /**
     * @return string
     */
    public function getImageId()
    {
        return $this->imageId;
    }

    /**
     * @param string $imageId
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetAvatarImage
     */
    public function setImageId($imageId)
    {
        $this->imageId = $imageId;
        return $this;
    }

    /**
     * @return string
     */
    public function getPortalName()
    {
        return $this->portalName;
    }

    /**
     * @param string $portalName
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetAvatarImage
     */
    public function setPortalName($portalName)
    {
        $this->portalName = $portalName;
        return $this;
    }

}
