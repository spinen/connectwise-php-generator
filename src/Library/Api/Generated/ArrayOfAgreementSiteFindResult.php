<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ArrayOfAgreementSiteFindResult
{

    /**
     * @var AgreementSiteFindResult[] $AgreementSiteFindResult
     */
    protected $AgreementSiteFindResult = null;

    public function __construct()
    {

    }

    /**
     * @return AgreementSiteFindResult[]
     */
    public function getAgreementSiteFindResult()
    {
        return $this->AgreementSiteFindResult;
    }

    /**
     * @param AgreementSiteFindResult[] $AgreementSiteFindResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\ArrayOfAgreementSiteFindResult
     */
    public function setAgreementSiteFindResult(array $AgreementSiteFindResult = null)
    {
        $this->AgreementSiteFindResult = $AgreementSiteFindResult;
        return $this;
    }

}
