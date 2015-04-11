<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class UpdateSpamStatsDomainsResponse
{

    /**
     * @var ArrayOfSpamStatsDomainData $UpdateSpamStatsDomainsResult
     */
    protected $UpdateSpamStatsDomainsResult = null;

    /**
     * @param ArrayOfSpamStatsDomainData $UpdateSpamStatsDomainsResult
     */
    public function __construct($UpdateSpamStatsDomainsResult = null)
    {
        $this->UpdateSpamStatsDomainsResult = $UpdateSpamStatsDomainsResult;
    }

    /**
     * @return ArrayOfSpamStatsDomainData
     */
    public function getUpdateSpamStatsDomainsResult()
    {
        return $this->UpdateSpamStatsDomainsResult;
    }

    /**
     * @param ArrayOfSpamStatsDomainData $UpdateSpamStatsDomainsResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\UpdateSpamStatsDomainsResponse
     */
    public function setUpdateSpamStatsDomainsResult($UpdateSpamStatsDomainsResult)
    {
        $this->UpdateSpamStatsDomainsResult = $UpdateSpamStatsDomainsResult;
        return $this;
    }

}
