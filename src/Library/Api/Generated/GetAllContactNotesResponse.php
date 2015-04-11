<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class GetAllContactNotesResponse
{

    /**
     * @var ArrayOfNote $GetAllContactNotesResult
     */
    protected $GetAllContactNotesResult = null;

    /**
     * @param ArrayOfNote $GetAllContactNotesResult
     */
    public function __construct($GetAllContactNotesResult = null)
    {
        $this->GetAllContactNotesResult = $GetAllContactNotesResult;
    }

    /**
     * @return ArrayOfNote
     */
    public function getGetAllContactNotesResult()
    {
        return $this->GetAllContactNotesResult;
    }

    /**
     * @param ArrayOfNote $GetAllContactNotesResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetAllContactNotesResponse
     */
    public function setGetAllContactNotesResult($GetAllContactNotesResult)
    {
        $this->GetAllContactNotesResult = $GetAllContactNotesResult;
        return $this;
    }

}
