<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class UpdateManagedWorkstationsResponse
{

    /**
     * @var ArrayOfManagedWorkstationsData $UpdateManagedWorkstationsResult
     */
    protected $UpdateManagedWorkstationsResult = null;

    /**
     * @param ArrayOfManagedWorkstationsData $UpdateManagedWorkstationsResult
     */
    public function __construct($UpdateManagedWorkstationsResult = null)
    {
        $this->UpdateManagedWorkstationsResult = $UpdateManagedWorkstationsResult;
    }

    /**
     * @return ArrayOfManagedWorkstationsData
     */
    public function getUpdateManagedWorkstationsResult()
    {
        return $this->UpdateManagedWorkstationsResult;
    }

    /**
     * @param ArrayOfManagedWorkstationsData $UpdateManagedWorkstationsResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\UpdateManagedWorkstationsResponse
     */
    public function setUpdateManagedWorkstationsResult($UpdateManagedWorkstationsResult)
    {
        $this->UpdateManagedWorkstationsResult = $UpdateManagedWorkstationsResult;
        return $this;
    }

}
