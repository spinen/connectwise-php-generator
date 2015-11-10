<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddOrUpdateCompanyTeamResponse
{

    /**
     * @var CompanyTeam $AddOrUpdateCompanyTeamResult
     */
    protected $AddOrUpdateCompanyTeamResult = null;

    /**
     * @param CompanyTeam $AddOrUpdateCompanyTeamResult
     */
    public function __construct(CompanyTeam $AddOrUpdateCompanyTeamResult = null)
    {
        $this->AddOrUpdateCompanyTeamResult = $AddOrUpdateCompanyTeamResult;
    }

    /**
     * @return CompanyTeam
     */
    public function getAddOrUpdateCompanyTeamResult()
    {
        return $this->AddOrUpdateCompanyTeamResult;
    }

    /**
     * @param CompanyTeam $AddOrUpdateCompanyTeamResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdateCompanyTeamResponse
     */
    public function setAddOrUpdateCompanyTeamResult(CompanyTeam $AddOrUpdateCompanyTeamResult)
    {
        $this->AddOrUpdateCompanyTeamResult = $AddOrUpdateCompanyTeamResult;
        return $this;
    }

}
