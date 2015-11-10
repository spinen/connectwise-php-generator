<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ArrayOfFieldInfo
{

    /**
     * @var FieldInfo[] $FieldInfo
     */
    protected $FieldInfo = null;

    public function __construct()
    {

    }

    /**
     * @return FieldInfo[]
     */
    public function getFieldInfo()
    {
        return $this->FieldInfo;
    }

    /**
     * @param FieldInfo[] $FieldInfo
     * @return \Spinen\ConnectWise\Library\Api\Generated\ArrayOfFieldInfo
     */
    public function setFieldInfo(array $FieldInfo)
    {
        $this->FieldInfo = $FieldInfo;
        return $this;
    }

}
