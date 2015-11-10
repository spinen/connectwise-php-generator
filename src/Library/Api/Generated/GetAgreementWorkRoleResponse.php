<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class GetAgreementWorkRoleResponse
{

    /**
     * @var AgreementWorkRole $GetAgreementWorkRoleResult
     */
    protected $GetAgreementWorkRoleResult = null;

    /**
     * @param AgreementWorkRole $GetAgreementWorkRoleResult
     */
    public function __construct(AgreementWorkRole $GetAgreementWorkRoleResult = null)
    {
        $this->GetAgreementWorkRoleResult = $GetAgreementWorkRoleResult;
    }

    /**
     * @return AgreementWorkRole
     */
    public function getGetAgreementWorkRoleResult()
    {
        return $this->GetAgreementWorkRoleResult;
    }

    /**
     * @param AgreementWorkRole $GetAgreementWorkRoleResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetAgreementWorkRoleResponse
     */
    public function setGetAgreementWorkRoleResult(AgreementWorkRole $GetAgreementWorkRoleResult)
    {
        $this->GetAgreementWorkRoleResult = $GetAgreementWorkRoleResult;
        return $this;
    }

}
