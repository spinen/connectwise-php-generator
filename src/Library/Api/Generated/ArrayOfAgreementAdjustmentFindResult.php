<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ArrayOfAgreementAdjustmentFindResult
{

    /**
     * @var AgreementAdjustmentFindResult[] $AgreementAdjustmentFindResult
     */
    protected $AgreementAdjustmentFindResult = null;

    public function __construct()
    {

    }

    /**
     * @return AgreementAdjustmentFindResult[]
     */
    public function getAgreementAdjustmentFindResult()
    {
        return $this->AgreementAdjustmentFindResult;
    }

    /**
     * @param AgreementAdjustmentFindResult[] $AgreementAdjustmentFindResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\ArrayOfAgreementAdjustmentFindResult
     */
    public function setAgreementAdjustmentFindResult(array $AgreementAdjustmentFindResult = null)
    {
        $this->AgreementAdjustmentFindResult = $AgreementAdjustmentFindResult;
        return $this;
    }

}
