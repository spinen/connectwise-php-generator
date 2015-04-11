<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class GetManagedServersResponse
{

    /**
     * @var ArrayOfManagedMachineData $GetManagedServersResult
     */
    protected $GetManagedServersResult = null;

    /**
     * @param ArrayOfManagedMachineData $GetManagedServersResult
     */
    public function __construct($GetManagedServersResult = null)
    {
        $this->GetManagedServersResult = $GetManagedServersResult;
    }

    /**
     * @return ArrayOfManagedMachineData
     */
    public function getGetManagedServersResult()
    {
        return $this->GetManagedServersResult;
    }

    /**
     * @param ArrayOfManagedMachineData $GetManagedServersResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetManagedServersResponse
     */
    public function setGetManagedServersResult($GetManagedServersResult)
    {
        $this->GetManagedServersResult = $GetManagedServersResult;
        return $this;
    }

}
