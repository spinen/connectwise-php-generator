<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ArrayOfAgreementWorkTypeFindResult
{

    /**
     * @var AgreementWorkTypeFindResult[] $AgreementWorkTypeFindResult
     */
    protected $AgreementWorkTypeFindResult = null;

    public function __construct()
    {

    }

    /**
     * @return AgreementWorkTypeFindResult[]
     */
    public function getAgreementWorkTypeFindResult()
    {
        return $this->AgreementWorkTypeFindResult;
    }

    /**
     * @param AgreementWorkTypeFindResult[] $AgreementWorkTypeFindResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\ArrayOfAgreementWorkTypeFindResult
     */
    public function setAgreementWorkTypeFindResult(array $AgreementWorkTypeFindResult = null)
    {
        $this->AgreementWorkTypeFindResult = $AgreementWorkTypeFindResult;
        return $this;
    }

}
