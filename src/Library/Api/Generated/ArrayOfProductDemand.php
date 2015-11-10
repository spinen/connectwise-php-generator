<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ArrayOfProductDemand
{

    /**
     * @var ProductDemand[] $ProductDemand
     */
    protected $ProductDemand = null;

    public function __construct()
    {

    }

    /**
     * @return ProductDemand[]
     */
    public function getProductDemand()
    {
        return $this->ProductDemand;
    }

    /**
     * @param ProductDemand[] $ProductDemand
     * @return \Spinen\ConnectWise\Library\Api\Generated\ArrayOfProductDemand
     */
    public function setProductDemand(array $ProductDemand)
    {
        $this->ProductDemand = $ProductDemand;
        return $this;
    }

}
