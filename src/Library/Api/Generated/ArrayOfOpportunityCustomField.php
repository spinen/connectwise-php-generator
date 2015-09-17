<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ArrayOfOpportunityCustomField
{

    /**
     * @var OpportunityCustomField[] $OpportunityCustomField
     */
    protected $OpportunityCustomField = null;

    public function __construct()
    {

    }

    /**
     * @return OpportunityCustomField[]
     */
    public function getOpportunityCustomField()
    {
        return $this->OpportunityCustomField;
    }

    /**
     * @param OpportunityCustomField[] $OpportunityCustomField
     * @return \Spinen\ConnectWise\Library\Api\Generated\ArrayOfOpportunityCustomField
     */
    public function setOpportunityCustomField(array $OpportunityCustomField = null)
    {
        $this->OpportunityCustomField = $OpportunityCustomField;
        return $this;
    }

}
