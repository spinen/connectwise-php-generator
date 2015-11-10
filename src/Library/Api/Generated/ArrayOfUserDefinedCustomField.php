<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ArrayOfUserDefinedCustomField
{

    /**
     * @var UserDefinedCustomField[] $UserDefinedCustomField
     */
    protected $UserDefinedCustomField = null;

    public function __construct()
    {

    }

    /**
     * @return UserDefinedCustomField[]
     */
    public function getUserDefinedCustomField()
    {
        return $this->UserDefinedCustomField;
    }

    /**
     * @param UserDefinedCustomField[] $UserDefinedCustomField
     * @return \Spinen\ConnectWise\Library\Api\Generated\ArrayOfUserDefinedCustomField
     */
    public function setUserDefinedCustomField(array $UserDefinedCustomField)
    {
        $this->UserDefinedCustomField = $UserDefinedCustomField;
        return $this;
    }

}
