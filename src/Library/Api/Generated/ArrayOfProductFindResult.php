<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ArrayOfProductFindResult
{

    /**
     * @var ProductFindResult[] $ProductFindResult
     */
    protected $ProductFindResult = null;

    public function __construct()
    {

    }

    /**
     * @return ProductFindResult[]
     */
    public function getProductFindResult()
    {
        return $this->ProductFindResult;
    }

    /**
     * @param ProductFindResult[] $ProductFindResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\ArrayOfProductFindResult
     */
    public function setProductFindResult(array $ProductFindResult = null)
    {
        $this->ProductFindResult = $ProductFindResult;
        return $this;
    }

}
