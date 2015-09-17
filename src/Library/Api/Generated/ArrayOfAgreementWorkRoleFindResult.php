<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ArrayOfAgreementWorkRoleFindResult
{

    /**
     * @var AgreementWorkRoleFindResult[] $AgreementWorkRoleFindResult
     */
    protected $AgreementWorkRoleFindResult = null;

    public function __construct()
    {

    }

    /**
     * @return AgreementWorkRoleFindResult[]
     */
    public function getAgreementWorkRoleFindResult()
    {
        return $this->AgreementWorkRoleFindResult;
    }

    /**
     * @param AgreementWorkRoleFindResult[] $AgreementWorkRoleFindResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\ArrayOfAgreementWorkRoleFindResult
     */
    public function setAgreementWorkRoleFindResult(array $AgreementWorkRoleFindResult = null)
    {
        $this->AgreementWorkRoleFindResult = $AgreementWorkRoleFindResult;
        return $this;
    }

}
