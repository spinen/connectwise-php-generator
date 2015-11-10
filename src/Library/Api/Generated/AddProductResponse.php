<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddProductResponse
{

    /**
     * @var Product $AddProductResult
     */
    protected $AddProductResult = null;

    /**
     * @param Product $AddProductResult
     */
    public function __construct(Product $AddProductResult = null)
    {
        $this->AddProductResult = $AddProductResult;
    }

    /**
     * @return Product
     */
    public function getAddProductResult()
    {
        return $this->AddProductResult;
    }

    /**
     * @param Product $AddProductResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddProductResponse
     */
    public function setAddProductResult(Product $AddProductResult)
    {
        $this->AddProductResult = $AddProductResult;
        return $this;
    }

}
