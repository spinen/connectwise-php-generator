<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ArrayOfAgreementWorkTypeExclusion
{

    /**
     * @var AgreementWorkTypeExclusion[] $AgreementWorkTypeExclusion
     */
    protected $AgreementWorkTypeExclusion = null;

    public function __construct()
    {

    }

    /**
     * @return AgreementWorkTypeExclusion[]
     */
    public function getAgreementWorkTypeExclusion()
    {
        return $this->AgreementWorkTypeExclusion;
    }

    /**
     * @param AgreementWorkTypeExclusion[] $AgreementWorkTypeExclusion
     * @return \Spinen\ConnectWise\Library\Api\Generated\ArrayOfAgreementWorkTypeExclusion
     */
    public function setAgreementWorkTypeExclusion(array $AgreementWorkTypeExclusion = null)
    {
        $this->AgreementWorkTypeExclusion = $AgreementWorkTypeExclusion;
        return $this;
    }

}
