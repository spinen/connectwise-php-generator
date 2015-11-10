<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class GetContactNoteResponse
{

    /**
     * @var Note $GetContactNoteResult
     */
    protected $GetContactNoteResult = null;

    /**
     * @param Note $GetContactNoteResult
     */
    public function __construct(Note $GetContactNoteResult = null)
    {
        $this->GetContactNoteResult = $GetContactNoteResult;
    }

    /**
     * @return Note
     */
    public function getGetContactNoteResult()
    {
        return $this->GetContactNoteResult;
    }

    /**
     * @param Note $GetContactNoteResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetContactNoteResponse
     */
    public function setGetContactNoteResult(Note $GetContactNoteResult)
    {
        $this->GetContactNoteResult = $GetContactNoteResult;
        return $this;
    }

}
