<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class CreateAuthenticatedMemberHashTokenResponse
{

    /**
     * @var string $CreateAuthenticatedMemberHashTokenResult
     */
    protected $CreateAuthenticatedMemberHashTokenResult = null;

    /**
     * @param string $CreateAuthenticatedMemberHashTokenResult
     */
    public function __construct($CreateAuthenticatedMemberHashTokenResult = null)
    {
        $this->CreateAuthenticatedMemberHashTokenResult = $CreateAuthenticatedMemberHashTokenResult;
    }

    /**
     * @return string
     */
    public function getCreateAuthenticatedMemberHashTokenResult()
    {
        return $this->CreateAuthenticatedMemberHashTokenResult;
    }

    /**
     * @param string $CreateAuthenticatedMemberHashTokenResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\CreateAuthenticatedMemberHashTokenResponse
     */
    public function setCreateAuthenticatedMemberHashTokenResult($CreateAuthenticatedMemberHashTokenResult)
    {
        $this->CreateAuthenticatedMemberHashTokenResult = $CreateAuthenticatedMemberHashTokenResult;
        return $this;
    }

}
