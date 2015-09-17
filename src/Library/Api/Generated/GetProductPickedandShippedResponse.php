<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class GetProductPickedandShippedResponse
{

    /**
     * @var ProductDetail $GetProductPickedandShippedResult
     */
    protected $GetProductPickedandShippedResult = null;

    /**
     * @param ProductDetail $GetProductPickedandShippedResult
     */
    public function __construct(ProductDetail $GetProductPickedandShippedResult = null)
    {
        $this->GetProductPickedandShippedResult = $GetProductPickedandShippedResult;
    }

    /**
     * @return ProductDetail
     */
    public function getGetProductPickedandShippedResult()
    {
        return $this->GetProductPickedandShippedResult;
    }

    /**
     * @param ProductDetail $GetProductPickedandShippedResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetProductPickedandShippedResponse
     */
    public function setGetProductPickedandShippedResult(ProductDetail $GetProductPickedandShippedResult)
    {
        $this->GetProductPickedandShippedResult = $GetProductPickedandShippedResult;
        return $this;
    }

}
