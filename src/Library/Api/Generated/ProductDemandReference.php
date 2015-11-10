<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ProductDemandReference
{

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var int $VerifyQuantityToOrder
     */
    protected $VerifyQuantityToOrder = null;

    /**
     * @param int $Id
     * @param int $VerifyQuantityToOrder
     */
    public function __construct($Id = null, $VerifyQuantityToOrder = null)
    {
        $this->Id                    = $Id;
        $this->VerifyQuantityToOrder = $VerifyQuantityToOrder;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param int $Id
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductDemandReference
     */
    public function setId($Id)
    {
        $this->Id = $Id;
        return $this;
    }

    /**
     * @return int
     */
    public function getVerifyQuantityToOrder()
    {
        return $this->VerifyQuantityToOrder;
    }

    /**
     * @param int $VerifyQuantityToOrder
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductDemandReference
     */
    public function setVerifyQuantityToOrder($VerifyQuantityToOrder)
    {
        $this->VerifyQuantityToOrder = $VerifyQuantityToOrder;
        return $this;
    }

}
