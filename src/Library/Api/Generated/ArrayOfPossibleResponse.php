<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ArrayOfPossibleResponse
{

    /**
     * @var PossibleResponse[] $PossibleResponse
     */
    protected $PossibleResponse = null;

    public function __construct()
    {

    }

    /**
     * @return PossibleResponse[]
     */
    public function getPossibleResponse()
    {
        return $this->PossibleResponse;
    }

    /**
     * @param PossibleResponse[] $PossibleResponse
     * @return \Spinen\ConnectWise\Library\Api\Generated\ArrayOfPossibleResponse
     */
    public function setPossibleResponse(array $PossibleResponse)
    {
        $this->PossibleResponse = $PossibleResponse;
        return $this;
    }

}
