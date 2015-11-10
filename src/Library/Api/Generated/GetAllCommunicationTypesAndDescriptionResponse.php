<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class GetAllCommunicationTypesAndDescriptionResponse
{

    /**
     * @var ArrayOfCommunicationTypeDescriptions $GetAllCommunicationTypesAndDescriptionResult
     */
    protected $GetAllCommunicationTypesAndDescriptionResult = null;

    /**
     * @param ArrayOfCommunicationTypeDescriptions $GetAllCommunicationTypesAndDescriptionResult
     */
    public function __construct($GetAllCommunicationTypesAndDescriptionResult = null)
    {
        $this->GetAllCommunicationTypesAndDescriptionResult = $GetAllCommunicationTypesAndDescriptionResult;
    }

    /**
     * @return ArrayOfCommunicationTypeDescriptions
     */
    public function getGetAllCommunicationTypesAndDescriptionResult()
    {
        return $this->GetAllCommunicationTypesAndDescriptionResult;
    }

    /**
     * @param ArrayOfCommunicationTypeDescriptions $GetAllCommunicationTypesAndDescriptionResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetAllCommunicationTypesAndDescriptionResponse
     */
    public function setGetAllCommunicationTypesAndDescriptionResult($GetAllCommunicationTypesAndDescriptionResult)
    {
        $this->GetAllCommunicationTypesAndDescriptionResult = $GetAllCommunicationTypesAndDescriptionResult;
        return $this;
    }

}
