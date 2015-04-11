<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class OpportunityToProjectConversion
{

    /**
     * @var ApiCredentials $credentials
     */
    protected $credentials = null;

    /**
     * @var OpportunityToProjectConversion $opportunityToProject
     */
    protected $opportunityToProject = null;

    /**
     * @param ApiCredentials $credentials
     * @param OpportunityToProjectConversion $opportunityToProject
     */
    public function __construct(ApiCredentials $credentials = null, OpportunityToProjectConversion $opportunityToProject = null)
    {
        $this->credentials          = $credentials;
        $this->opportunityToProject = $opportunityToProject;
    }

    /**
     * @return ApiCredentials
     */
    public function getCredentials()
    {
        return $this->credentials;
    }

    /**
     * @param ApiCredentials $credentials
     * @return \Spinen\ConnectWise\Library\Api\Generated\OpportunityToProjectConversion
     */
    public function setCredentials(ApiCredentials $credentials)
    {
        $this->credentials = $credentials;
        return $this;
    }

    /**
     * @return OpportunityToProjectConversion
     */
    public function getOpportunityToProject()
    {
        return $this->opportunityToProject;
    }

    /**
     * @param OpportunityToProjectConversion $opportunityToProject
     * @return \Spinen\ConnectWise\Library\Api\Generated\OpportunityToProjectConversion
     */
    public function setOpportunityToProject(OpportunityToProjectConversion $opportunityToProject)
    {
        $this->opportunityToProject = $opportunityToProject;
        return $this;
    }

}
