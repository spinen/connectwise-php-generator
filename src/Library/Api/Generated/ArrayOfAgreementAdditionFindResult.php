<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ArrayOfAgreementAdditionFindResult
{

    /**
     * @var AgreementAdditionFindResult[] $AgreementAdditionFindResult
     */
    protected $AgreementAdditionFindResult = null;

    public function __construct()
    {

    }

    /**
     * @return AgreementAdditionFindResult[]
     */
    public function getAgreementAdditionFindResult()
    {
        return $this->AgreementAdditionFindResult;
    }

    /**
     * @param AgreementAdditionFindResult[] $AgreementAdditionFindResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\ArrayOfAgreementAdditionFindResult
     */
    public function setAgreementAdditionFindResult(array $AgreementAdditionFindResult)
    {
        $this->AgreementAdditionFindResult = $AgreementAdditionFindResult;
        return $this;
    }

}
