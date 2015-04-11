<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class FindProjectNotesResponse
{

    /**
     * @var ArrayOfProjectNoteFindResult $FindProjectNotesResult
     */
    protected $FindProjectNotesResult = null;

    /**
     * @param ArrayOfProjectNoteFindResult $FindProjectNotesResult
     */
    public function __construct($FindProjectNotesResult = null)
    {
        $this->FindProjectNotesResult = $FindProjectNotesResult;
    }

    /**
     * @return ArrayOfProjectNoteFindResult
     */
    public function getFindProjectNotesResult()
    {
        return $this->FindProjectNotesResult;
    }

    /**
     * @param ArrayOfProjectNoteFindResult $FindProjectNotesResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\FindProjectNotesResponse
     */
    public function setFindProjectNotesResult($FindProjectNotesResult)
    {
        $this->FindProjectNotesResult = $FindProjectNotesResult;
        return $this;
    }

}
