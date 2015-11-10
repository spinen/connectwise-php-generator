<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class LoadProductResponse
{

    /**
     * @var Product $LoadProductResult
     */
    protected $LoadProductResult = null;

    /**
     * @param Product $LoadProductResult
     */
    public function __construct(Product $LoadProductResult = null)
    {
        $this->LoadProductResult = $LoadProductResult;
    }

    /**
     * @return Product
     */
    public function getLoadProductResult()
    {
        return $this->LoadProductResult;
    }

    /**
     * @param Product $LoadProductResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\LoadProductResponse
     */
    public function setLoadProductResult(Product $LoadProductResult)
    {
        $this->LoadProductResult = $LoadProductResult;
        return $this;
    }

}
