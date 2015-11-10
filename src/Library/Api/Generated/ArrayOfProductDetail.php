<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ArrayOfProductDetail
{

    /**
     * @var ProductDetail[] $ProductDetail
     */
    protected $ProductDetail = null;

    public function __construct()
    {

    }

    /**
     * @return ProductDetail[]
     */
    public function getProductDetail()
    {
        return $this->ProductDetail;
    }

    /**
     * @param ProductDetail[] $ProductDetail
     * @return \Spinen\ConnectWise\Library\Api\Generated\ArrayOfProductDetail
     */
    public function setProductDetail(array $ProductDetail)
    {
        $this->ProductDetail = $ProductDetail;
        return $this;
    }

}
