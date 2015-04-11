<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class GetAvatarImageResponse
{

    /**
     * @var base64Binary $GetAvatarImageResult
     */
    protected $GetAvatarImageResult = null;

    /**
     * @param base64Binary $GetAvatarImageResult
     */
    public function __construct(base64Binary $GetAvatarImageResult = null)
    {
        $this->GetAvatarImageResult = $GetAvatarImageResult;
    }

    /**
     * @return base64Binary
     */
    public function getGetAvatarImageResult()
    {
        return $this->GetAvatarImageResult;
    }

    /**
     * @param base64Binary $GetAvatarImageResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetAvatarImageResponse
     */
    public function setGetAvatarImageResult(base64Binary $GetAvatarImageResult)
    {
        $this->GetAvatarImageResult = $GetAvatarImageResult;
        return $this;
    }

}
