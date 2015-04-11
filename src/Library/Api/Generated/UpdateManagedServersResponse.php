<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class UpdateManagedServersResponse
{

    /**
     * @var ArrayOfManagedServersData $UpdateManagedServersResult
     */
    protected $UpdateManagedServersResult = null;

    /**
     * @param ArrayOfManagedServersData $UpdateManagedServersResult
     */
    public function __construct($UpdateManagedServersResult = null)
    {
        $this->UpdateManagedServersResult = $UpdateManagedServersResult;
    }

    /**
     * @return ArrayOfManagedServersData
     */
    public function getUpdateManagedServersResult()
    {
        return $this->UpdateManagedServersResult;
    }

    /**
     * @param ArrayOfManagedServersData $UpdateManagedServersResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\UpdateManagedServersResponse
     */
    public function setUpdateManagedServersResult($UpdateManagedServersResult)
    {
        $this->UpdateManagedServersResult = $UpdateManagedServersResult;
        return $this;
    }

}
