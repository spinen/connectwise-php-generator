<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class OpportunityCustomField extends UserDefinedCustomField
{

    /**
     * @param int $Id
     * @param string $CustomField
     * @param string $FieldType
     * @param int $NumberOfDecimals
     * @param string $CustomValue
     */
    public function __construct($Id = null, $CustomField = null, $FieldType = null, $NumberOfDecimals = null, $CustomValue = null)
    {
        parent::__construct($Id, $CustomField, $FieldType, $NumberOfDecimals, $CustomValue);
    }

}
