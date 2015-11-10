<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class GetCompanyTeamResponse
{

    /**
     * @var CompanyTeam $GetCompanyTeamResult
     */
    protected $GetCompanyTeamResult = null;

    /**
     * @param CompanyTeam $GetCompanyTeamResult
     */
    public function __construct(CompanyTeam $GetCompanyTeamResult = null)
    {
        $this->GetCompanyTeamResult = $GetCompanyTeamResult;
    }

    /**
     * @return CompanyTeam
     */
    public function getGetCompanyTeamResult()
    {
        return $this->GetCompanyTeamResult;
    }

    /**
     * @param CompanyTeam $GetCompanyTeamResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetCompanyTeamResponse
     */
    public function setGetCompanyTeamResult(CompanyTeam $GetCompanyTeamResult)
    {
        $this->GetCompanyTeamResult = $GetCompanyTeamResult;
        return $this;
    }

}
