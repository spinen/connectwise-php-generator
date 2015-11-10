<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class UpdateProductResponse
{

    /**
     * @var Product $UpdateProductResult
     */
    protected $UpdateProductResult = null;

    /**
     * @param Product $UpdateProductResult
     */
    public function __construct(Product $UpdateProductResult = null)
    {
        $this->UpdateProductResult = $UpdateProductResult;
    }

    /**
     * @return Product
     */
    public function getUpdateProductResult()
    {
        return $this->UpdateProductResult;
    }

    /**
     * @param Product $UpdateProductResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\UpdateProductResponse
     */
    public function setUpdateProductResult(Product $UpdateProductResult)
    {
        $this->UpdateProductResult = $UpdateProductResult;
        return $this;
    }

}
