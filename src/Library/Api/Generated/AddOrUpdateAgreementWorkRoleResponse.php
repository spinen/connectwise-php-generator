<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddOrUpdateAgreementWorkRoleResponse
{

    /**
     * @var AgreementWorkRole $AddOrUpdateAgreementWorkRoleResult
     */
    protected $AddOrUpdateAgreementWorkRoleResult = null;

    /**
     * @param AgreementWorkRole $AddOrUpdateAgreementWorkRoleResult
     */
    public function __construct(AgreementWorkRole $AddOrUpdateAgreementWorkRoleResult = null)
    {
        $this->AddOrUpdateAgreementWorkRoleResult = $AddOrUpdateAgreementWorkRoleResult;
    }

    /**
     * @return AgreementWorkRole
     */
    public function getAddOrUpdateAgreementWorkRoleResult()
    {
        return $this->AddOrUpdateAgreementWorkRoleResult;
    }

    /**
     * @param AgreementWorkRole $AddOrUpdateAgreementWorkRoleResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdateAgreementWorkRoleResponse
     */
    public function setAddOrUpdateAgreementWorkRoleResult(AgreementWorkRole $AddOrUpdateAgreementWorkRoleResult)
    {
        $this->AddOrUpdateAgreementWorkRoleResult = $AddOrUpdateAgreementWorkRoleResult;
        return $this;
    }

}
