<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ArrayOfSalesTaxDetail
{

    /**
     * @var SalesTaxDetail[] $SalesTaxDetail
     */
    protected $SalesTaxDetail = null;

    public function __construct()
    {

    }

    /**
     * @return SalesTaxDetail[]
     */
    public function getSalesTaxDetail()
    {
        return $this->SalesTaxDetail;
    }

    /**
     * @param SalesTaxDetail[] $SalesTaxDetail
     * @return \Spinen\ConnectWise\Library\Api\Generated\ArrayOfSalesTaxDetail
     */
    public function setSalesTaxDetail(array $SalesTaxDetail)
    {
        $this->SalesTaxDetail = $SalesTaxDetail;
        return $this;
    }

}
