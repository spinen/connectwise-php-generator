<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ProductQuantityOnHand
{

    /**
     * @var int $ProductId
     */
    protected $ProductId = null;

    /**
     * @var int $WarehouseBinId
     */
    protected $WarehouseBinId = null;

    /**
     * @param int $ProductId
     * @param int $WarehouseBinId
     */
    public function __construct($ProductId = null, $WarehouseBinId = null)
    {
        $this->ProductId      = $ProductId;
        $this->WarehouseBinId = $WarehouseBinId;
    }

    /**
     * @return int
     */
    public function getProductId()
    {
        return $this->ProductId;
    }

    /**
     * @param int $ProductId
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductQuantityOnHand
     */
    public function setProductId($ProductId)
    {
        $this->ProductId = $ProductId;
        return $this;
    }

    /**
     * @return int
     */
    public function getWarehouseBinId()
    {
        return $this->WarehouseBinId;
    }

    /**
     * @param int $WarehouseBinId
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductQuantityOnHand
     */
    public function setWarehouseBinId($WarehouseBinId)
    {
        $this->WarehouseBinId = $WarehouseBinId;
        return $this;
    }

}
