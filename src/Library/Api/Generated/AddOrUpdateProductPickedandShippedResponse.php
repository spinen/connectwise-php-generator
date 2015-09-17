<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddOrUpdateProductPickedandShippedResponse
{

    /**
     * @var ProductDetail $AddOrUpdateProductPickedandShippedResult
     */
    protected $AddOrUpdateProductPickedandShippedResult = null;

    /**
     * @param ProductDetail $AddOrUpdateProductPickedandShippedResult
     */
    public function __construct(ProductDetail $AddOrUpdateProductPickedandShippedResult = null)
    {
        $this->AddOrUpdateProductPickedandShippedResult = $AddOrUpdateProductPickedandShippedResult;
    }

    /**
     * @return ProductDetail
     */
    public function getAddOrUpdateProductPickedandShippedResult()
    {
        return $this->AddOrUpdateProductPickedandShippedResult;
    }

    /**
     * @param ProductDetail $AddOrUpdateProductPickedandShippedResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdateProductPickedandShippedResponse
     */
    public function setAddOrUpdateProductPickedandShippedResult(ProductDetail $AddOrUpdateProductPickedandShippedResult)
    {
        $this->AddOrUpdateProductPickedandShippedResult = $AddOrUpdateProductPickedandShippedResult;
        return $this;
    }

}
