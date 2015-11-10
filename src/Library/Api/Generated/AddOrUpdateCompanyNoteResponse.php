<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddOrUpdateCompanyNoteResponse
{

    /**
     * @var Note $AddOrUpdateCompanyNoteResult
     */
    protected $AddOrUpdateCompanyNoteResult = null;

    /**
     * @param Note $AddOrUpdateCompanyNoteResult
     */
    public function __construct(Note $AddOrUpdateCompanyNoteResult = null)
    {
        $this->AddOrUpdateCompanyNoteResult = $AddOrUpdateCompanyNoteResult;
    }

    /**
     * @return Note
     */
    public function getAddOrUpdateCompanyNoteResult()
    {
        return $this->AddOrUpdateCompanyNoteResult;
    }

    /**
     * @param Note $AddOrUpdateCompanyNoteResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdateCompanyNoteResponse
     */
    public function setAddOrUpdateCompanyNoteResult(Note $AddOrUpdateCompanyNoteResult)
    {
        $this->AddOrUpdateCompanyNoteResult = $AddOrUpdateCompanyNoteResult;
        return $this;
    }

}
