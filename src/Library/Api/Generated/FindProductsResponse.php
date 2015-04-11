<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class FindProductsResponse
{

    /**
     * @var ArrayOfProductFindResult $FindProductsResult
     */
    protected $FindProductsResult = null;

    /**
     * @param ArrayOfProductFindResult $FindProductsResult
     */
    public function __construct($FindProductsResult = null)
    {
        $this->FindProductsResult = $FindProductsResult;
    }

    /**
     * @return ArrayOfProductFindResult
     */
    public function getFindProductsResult()
    {
        return $this->FindProductsResult;
    }

    /**
     * @param ArrayOfProductFindResult $FindProductsResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\FindProductsResponse
     */
    public function setFindProductsResult($FindProductsResult)
    {
        $this->FindProductsResult = $FindProductsResult;
        return $this;
    }

}
