<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ArrayOfProductDemandReference
{

    /**
     * @var ProductDemandReference[] $ProductDemandReference
     */
    protected $ProductDemandReference = null;

    public function __construct()
    {

    }

    /**
     * @return ProductDemandReference[]
     */
    public function getProductDemandReference()
    {
        return $this->ProductDemandReference;
    }

    /**
     * @param ProductDemandReference[] $ProductDemandReference
     * @return \Spinen\ConnectWise\Library\Api\Generated\ArrayOfProductDemandReference
     */
    public function setProductDemandReference(array $ProductDemandReference = null)
    {
        $this->ProductDemandReference = $ProductDemandReference;
        return $this;
    }

}
