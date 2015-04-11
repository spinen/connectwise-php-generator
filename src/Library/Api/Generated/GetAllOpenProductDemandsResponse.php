<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class GetAllOpenProductDemandsResponse
{

    /**
     * @var ArrayOfProductDemand $GetAllOpenProductDemandsResult
     */
    protected $GetAllOpenProductDemandsResult = null;

    /**
     * @param ArrayOfProductDemand $GetAllOpenProductDemandsResult
     */
    public function __construct($GetAllOpenProductDemandsResult = null)
    {
        $this->GetAllOpenProductDemandsResult = $GetAllOpenProductDemandsResult;
    }

    /**
     * @return ArrayOfProductDemand
     */
    public function getGetAllOpenProductDemandsResult()
    {
        return $this->GetAllOpenProductDemandsResult;
    }

    /**
     * @param ArrayOfProductDemand $GetAllOpenProductDemandsResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetAllOpenProductDemandsResponse
     */
    public function setGetAllOpenProductDemandsResult($GetAllOpenProductDemandsResult)
    {
        $this->GetAllOpenProductDemandsResult = $GetAllOpenProductDemandsResult;
        return $this;
    }

}
