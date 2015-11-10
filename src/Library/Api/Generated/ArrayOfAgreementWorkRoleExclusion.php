<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ArrayOfAgreementWorkRoleExclusion
{

    /**
     * @var AgreementWorkRoleExclusion[] $AgreementWorkRoleExclusion
     */
    protected $AgreementWorkRoleExclusion = null;

    public function __construct()
    {

    }

    /**
     * @return AgreementWorkRoleExclusion[]
     */
    public function getAgreementWorkRoleExclusion()
    {
        return $this->AgreementWorkRoleExclusion;
    }

    /**
     * @param AgreementWorkRoleExclusion[] $AgreementWorkRoleExclusion
     * @return \Spinen\ConnectWise\Library\Api\Generated\ArrayOfAgreementWorkRoleExclusion
     */
    public function setAgreementWorkRoleExclusion(array $AgreementWorkRoleExclusion)
    {
        $this->AgreementWorkRoleExclusion = $AgreementWorkRoleExclusion;
        return $this;
    }

}
