<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class GetAllCompanyNotesResponse
{

    /**
     * @var ArrayOfNote $GetAllCompanyNotesResult
     */
    protected $GetAllCompanyNotesResult = null;

    /**
     * @param ArrayOfNote $GetAllCompanyNotesResult
     */
    public function __construct($GetAllCompanyNotesResult = null)
    {
        $this->GetAllCompanyNotesResult = $GetAllCompanyNotesResult;
    }

    /**
     * @return ArrayOfNote
     */
    public function getGetAllCompanyNotesResult()
    {
        return $this->GetAllCompanyNotesResult;
    }

    /**
     * @param ArrayOfNote $GetAllCompanyNotesResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetAllCompanyNotesResponse
     */
    public function setGetAllCompanyNotesResult($GetAllCompanyNotesResult)
    {
        $this->GetAllCompanyNotesResult = $GetAllCompanyNotesResult;
        return $this;
    }

}
