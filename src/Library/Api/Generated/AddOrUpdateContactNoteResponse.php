<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddOrUpdateContactNoteResponse
{

    /**
     * @var Note $AddOrUpdateContactNoteResult
     */
    protected $AddOrUpdateContactNoteResult = null;

    /**
     * @param Note $AddOrUpdateContactNoteResult
     */
    public function __construct(Note $AddOrUpdateContactNoteResult = null)
    {
        $this->AddOrUpdateContactNoteResult = $AddOrUpdateContactNoteResult;
    }

    /**
     * @return Note
     */
    public function getAddOrUpdateContactNoteResult()
    {
        return $this->AddOrUpdateContactNoteResult;
    }

    /**
     * @param Note $AddOrUpdateContactNoteResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdateContactNoteResponse
     */
    public function setAddOrUpdateContactNoteResult(Note $AddOrUpdateContactNoteResult)
    {
        $this->AddOrUpdateContactNoteResult = $AddOrUpdateContactNoteResult;
        return $this;
    }

}
