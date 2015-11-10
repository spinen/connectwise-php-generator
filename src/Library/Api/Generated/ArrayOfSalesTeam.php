<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ArrayOfSalesTeam
{

    /**
     * @var SalesTeam[] $SalesTeam
     */
    protected $SalesTeam = null;

    public function __construct()
    {

    }

    /**
     * @return SalesTeam[]
     */
    public function getSalesTeam()
    {
        return $this->SalesTeam;
    }

    /**
     * @param SalesTeam[] $SalesTeam
     * @return \Spinen\ConnectWise\Library\Api\Generated\ArrayOfSalesTeam
     */
    public function setSalesTeam(array $SalesTeam)
    {
        $this->SalesTeam = $SalesTeam;
        return $this;
    }

}
