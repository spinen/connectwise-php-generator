<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ArrayOfAgreementDetail
{

    /**
     * @var AgreementDetail[] $AgreementDetail
     */
    protected $AgreementDetail = null;

    public function __construct()
    {

    }

    /**
     * @return AgreementDetail[]
     */
    public function getAgreementDetail()
    {
        return $this->AgreementDetail;
    }

    /**
     * @param AgreementDetail[] $AgreementDetail
     * @return \Spinen\ConnectWise\Library\Api\Generated\ArrayOfAgreementDetail
     */
    public function setAgreementDetail(array $AgreementDetail = null)
    {
        $this->AgreementDetail = $AgreementDetail;
        return $this;
    }

}
