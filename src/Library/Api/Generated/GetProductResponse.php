<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class GetProductResponse
{

    /**
     * @var Product $GetProductResult
     */
    protected $GetProductResult = null;

    /**
     * @param Product $GetProductResult
     */
    public function __construct(Product $GetProductResult = null)
    {
        $this->GetProductResult = $GetProductResult;
    }

    /**
     * @return Product
     */
    public function getGetProductResult()
    {
        return $this->GetProductResult;
    }

    /**
     * @param Product $GetProductResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetProductResponse
     */
    public function setGetProductResult(Product $GetProductResult)
    {
        $this->GetProductResult = $GetProductResult;
        return $this;
    }

}
