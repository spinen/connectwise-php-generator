<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ArrayOfProjectTicketFindResult
{

    /**
     * @var ProjectTicketFindResult[] $ProjectTicketFindResult
     */
    protected $ProjectTicketFindResult = null;

    public function __construct()
    {

    }

    /**
     * @return ProjectTicketFindResult[]
     */
    public function getProjectTicketFindResult()
    {
        return $this->ProjectTicketFindResult;
    }

    /**
     * @param ProjectTicketFindResult[] $ProjectTicketFindResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\ArrayOfProjectTicketFindResult
     */
    public function setProjectTicketFindResult(array $ProjectTicketFindResult = null)
    {
        $this->ProjectTicketFindResult = $ProjectTicketFindResult;
        return $this;
    }

}
