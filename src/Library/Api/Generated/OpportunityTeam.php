<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class OpportunityTeam
{

    /**
     * @var PrimarySalesRepMember $PrimarySalesRep
     */
    protected $PrimarySalesRep = null;

    /**
     * @var SecondarySalesRepMember $SecondarySalesRep
     */
    protected $SecondarySalesRep = null;

    /**
     * @var ArrayOfSalesIndividualMember $SalesIndividualMembers
     */
    protected $SalesIndividualMembers = null;

    /**
     * @var ArrayOfSalesTeam $SalesTeams
     */
    protected $SalesTeams = null;

    public function __construct()
    {

    }

    /**
     * @return PrimarySalesRepMember
     */
    public function getPrimarySalesRep()
    {
        return $this->PrimarySalesRep;
    }

    /**
     * @param PrimarySalesRepMember $PrimarySalesRep
     * @return \Spinen\ConnectWise\Library\Api\Generated\OpportunityTeam
     */
    public function setPrimarySalesRep(PrimarySalesRepMember $PrimarySalesRep)
    {
        $this->PrimarySalesRep = $PrimarySalesRep;
        return $this;
    }

    /**
     * @return SecondarySalesRepMember
     */
    public function getSecondarySalesRep()
    {
        return $this->SecondarySalesRep;
    }

    /**
     * @param SecondarySalesRepMember $SecondarySalesRep
     * @return \Spinen\ConnectWise\Library\Api\Generated\OpportunityTeam
     */
    public function setSecondarySalesRep(SecondarySalesRepMember $SecondarySalesRep)
    {
        $this->SecondarySalesRep = $SecondarySalesRep;
        return $this;
    }

    /**
     * @return ArrayOfSalesIndividualMember
     */
    public function getSalesIndividualMembers()
    {
        return $this->SalesIndividualMembers;
    }

    /**
     * @param ArrayOfSalesIndividualMember $SalesIndividualMembers
     * @return \Spinen\ConnectWise\Library\Api\Generated\OpportunityTeam
     */
    public function setSalesIndividualMembers($SalesIndividualMembers)
    {
        $this->SalesIndividualMembers = $SalesIndividualMembers;
        return $this;
    }

    /**
     * @return ArrayOfSalesTeam
     */
    public function getSalesTeams()
    {
        return $this->SalesTeams;
    }

    /**
     * @param ArrayOfSalesTeam $SalesTeams
     * @return \Spinen\ConnectWise\Library\Api\Generated\OpportunityTeam
     */
    public function setSalesTeams($SalesTeams)
    {
        $this->SalesTeams = $SalesTeams;
        return $this;
    }

}
