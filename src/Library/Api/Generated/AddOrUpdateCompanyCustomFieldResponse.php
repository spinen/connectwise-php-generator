<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddOrUpdateCompanyCustomFieldResponse
{

    /**
     * @var ArrayOfUserDefinedCustomField $AddOrUpdateCompanyCustomFieldResult
     */
    protected $AddOrUpdateCompanyCustomFieldResult = null;

    /**
     * @param ArrayOfUserDefinedCustomField $AddOrUpdateCompanyCustomFieldResult
     */
    public function __construct($AddOrUpdateCompanyCustomFieldResult = null)
    {
        $this->AddOrUpdateCompanyCustomFieldResult = $AddOrUpdateCompanyCustomFieldResult;
    }

    /**
     * @return ArrayOfUserDefinedCustomField
     */
    public function getAddOrUpdateCompanyCustomFieldResult()
    {
        return $this->AddOrUpdateCompanyCustomFieldResult;
    }

    /**
     * @param ArrayOfUserDefinedCustomField $AddOrUpdateCompanyCustomFieldResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdateCompanyCustomFieldResponse
     */
    public function setAddOrUpdateCompanyCustomFieldResult($AddOrUpdateCompanyCustomFieldResult)
    {
        $this->AddOrUpdateCompanyCustomFieldResult = $AddOrUpdateCompanyCustomFieldResult;
        return $this;
    }

}
