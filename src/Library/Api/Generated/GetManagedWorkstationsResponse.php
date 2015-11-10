<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class GetManagedWorkstationsResponse
{

    /**
     * @var ArrayOfManagedMachineData $GetManagedWorkstationsResult
     */
    protected $GetManagedWorkstationsResult = null;

    /**
     * @param ArrayOfManagedMachineData $GetManagedWorkstationsResult
     */
    public function __construct($GetManagedWorkstationsResult = null)
    {
        $this->GetManagedWorkstationsResult = $GetManagedWorkstationsResult;
    }

    /**
     * @return ArrayOfManagedMachineData
     */
    public function getGetManagedWorkstationsResult()
    {
        return $this->GetManagedWorkstationsResult;
    }

    /**
     * @param ArrayOfManagedMachineData $GetManagedWorkstationsResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetManagedWorkstationsResponse
     */
    public function setGetManagedWorkstationsResult($GetManagedWorkstationsResult)
    {
        $this->GetManagedWorkstationsResult = $GetManagedWorkstationsResult;
        return $this;
    }

}
