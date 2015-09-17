<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ArrayOfAgreementFindResult
{

    /**
     * @var AgreementFindResult[] $AgreementFindResult
     */
    protected $AgreementFindResult = null;

    public function __construct()
    {

    }

    /**
     * @return AgreementFindResult[]
     */
    public function getAgreementFindResult()
    {
        return $this->AgreementFindResult;
    }

    /**
     * @param AgreementFindResult[] $AgreementFindResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\ArrayOfAgreementFindResult
     */
    public function setAgreementFindResult(array $AgreementFindResult = null)
    {
        $this->AgreementFindResult = $AgreementFindResult;
        return $this;
    }

}
