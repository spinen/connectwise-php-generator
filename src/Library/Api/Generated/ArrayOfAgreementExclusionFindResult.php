<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ArrayOfAgreementExclusionFindResult
{

    /**
     * @var AgreementExclusionFindResult[] $AgreementExclusionFindResult
     */
    protected $AgreementExclusionFindResult = null;

    public function __construct()
    {

    }

    /**
     * @return AgreementExclusionFindResult[]
     */
    public function getAgreementExclusionFindResult()
    {
        return $this->AgreementExclusionFindResult;
    }

    /**
     * @param AgreementExclusionFindResult[] $AgreementExclusionFindResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\ArrayOfAgreementExclusionFindResult
     */
    public function setAgreementExclusionFindResult(array $AgreementExclusionFindResult)
    {
        $this->AgreementExclusionFindResult = $AgreementExclusionFindResult;
        return $this;
    }

}
