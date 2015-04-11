<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class GetCompanyNoteResponse
{

    /**
     * @var Note $GetCompanyNoteResult
     */
    protected $GetCompanyNoteResult = null;

    /**
     * @param Note $GetCompanyNoteResult
     */
    public function __construct(Note $GetCompanyNoteResult = null)
    {
        $this->GetCompanyNoteResult = $GetCompanyNoteResult;
    }

    /**
     * @return Note
     */
    public function getGetCompanyNoteResult()
    {
        return $this->GetCompanyNoteResult;
    }

    /**
     * @param Note $GetCompanyNoteResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetCompanyNoteResponse
     */
    public function setGetCompanyNoteResult(Note $GetCompanyNoteResult)
    {
        $this->GetCompanyNoteResult = $GetCompanyNoteResult;
        return $this;
    }

}
