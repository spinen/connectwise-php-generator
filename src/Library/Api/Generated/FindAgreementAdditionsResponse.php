<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class FindAgreementAdditionsResponse
{

    /**
     * @var ArrayOfAgreementAdditionFindResult $FindAgreementAdditionsResult
     */
    protected $FindAgreementAdditionsResult = null;

    /**
     * @param ArrayOfAgreementAdditionFindResult $FindAgreementAdditionsResult
     */
    public function __construct($FindAgreementAdditionsResult = null)
    {
        $this->FindAgreementAdditionsResult = $FindAgreementAdditionsResult;
    }

    /**
     * @return ArrayOfAgreementAdditionFindResult
     */
    public function getFindAgreementAdditionsResult()
    {
        return $this->FindAgreementAdditionsResult;
    }

    /**
     * @param ArrayOfAgreementAdditionFindResult $FindAgreementAdditionsResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\FindAgreementAdditionsResponse
     */
    public function setFindAgreementAdditionsResult($FindAgreementAdditionsResult)
    {
        $this->FindAgreementAdditionsResult = $FindAgreementAdditionsResult;
        return $this;
    }

}
