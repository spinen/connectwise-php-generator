<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddOrUpdateProductResponse
{

    /**
     * @var Product $AddOrUpdateProductResult
     */
    protected $AddOrUpdateProductResult = null;

    /**
     * @param Product $AddOrUpdateProductResult
     */
    public function __construct(Product $AddOrUpdateProductResult = null)
    {
        $this->AddOrUpdateProductResult = $AddOrUpdateProductResult;
    }

    /**
     * @return Product
     */
    public function getAddOrUpdateProductResult()
    {
        return $this->AddOrUpdateProductResult;
    }

    /**
     * @param Product $AddOrUpdateProductResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdateProductResponse
     */
    public function setAddOrUpdateProductResult(Product $AddOrUpdateProductResult)
    {
        $this->AddOrUpdateProductResult = $AddOrUpdateProductResult;
        return $this;
    }

}
