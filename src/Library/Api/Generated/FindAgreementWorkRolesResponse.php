<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class FindAgreementWorkRolesResponse
{

    /**
     * @var ArrayOfAgreementWorkRoleFindResult $FindAgreementWorkRolesResult
     */
    protected $FindAgreementWorkRolesResult = null;

    /**
     * @param ArrayOfAgreementWorkRoleFindResult $FindAgreementWorkRolesResult
     */
    public function __construct($FindAgreementWorkRolesResult = null)
    {
        $this->FindAgreementWorkRolesResult = $FindAgreementWorkRolesResult;
    }

    /**
     * @return ArrayOfAgreementWorkRoleFindResult
     */
    public function getFindAgreementWorkRolesResult()
    {
        return $this->FindAgreementWorkRolesResult;
    }

    /**
     * @param ArrayOfAgreementWorkRoleFindResult $FindAgreementWorkRolesResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\FindAgreementWorkRolesResponse
     */
    public function setFindAgreementWorkRolesResult($FindAgreementWorkRolesResult)
    {
        $this->FindAgreementWorkRolesResult = $FindAgreementWorkRolesResult;
        return $this;
    }

}
