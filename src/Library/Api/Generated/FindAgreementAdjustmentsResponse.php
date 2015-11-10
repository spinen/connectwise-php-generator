<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class FindAgreementAdjustmentsResponse
{

    /**
     * @var ArrayOfAgreementAdjustmentFindResult $FindAgreementAdjustmentsResult
     */
    protected $FindAgreementAdjustmentsResult = null;

    /**
     * @param ArrayOfAgreementAdjustmentFindResult $FindAgreementAdjustmentsResult
     */
    public function __construct($FindAgreementAdjustmentsResult = null)
    {
        $this->FindAgreementAdjustmentsResult = $FindAgreementAdjustmentsResult;
    }

    /**
     * @return ArrayOfAgreementAdjustmentFindResult
     */
    public function getFindAgreementAdjustmentsResult()
    {
        return $this->FindAgreementAdjustmentsResult;
    }

    /**
     * @param ArrayOfAgreementAdjustmentFindResult $FindAgreementAdjustmentsResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\FindAgreementAdjustmentsResponse
     */
    public function setFindAgreementAdjustmentsResult($FindAgreementAdjustmentsResult)
    {
        $this->FindAgreementAdjustmentsResult = $FindAgreementAdjustmentsResult;
        return $this;
    }

}
