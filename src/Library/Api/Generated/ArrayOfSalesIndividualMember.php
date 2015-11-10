<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ArrayOfSalesIndividualMember
{

    /**
     * @var SalesIndividualMember[] $SalesIndividualMember
     */
    protected $SalesIndividualMember = null;

    public function __construct()
    {

    }

    /**
     * @return SalesIndividualMember[]
     */
    public function getSalesIndividualMember()
    {
        return $this->SalesIndividualMember;
    }

    /**
     * @param SalesIndividualMember[] $SalesIndividualMember
     * @return \Spinen\ConnectWise\Library\Api\Generated\ArrayOfSalesIndividualMember
     */
    public function setSalesIndividualMember(array $SalesIndividualMember)
    {
        $this->SalesIndividualMember = $SalesIndividualMember;
        return $this;
    }

}
