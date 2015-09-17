<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ArrayOfProjectTicket
{

    /**
     * @var ProjectTicket[] $ProjectTicket
     */
    protected $ProjectTicket = null;

    public function __construct()
    {

    }

    /**
     * @return ProjectTicket[]
     */
    public function getProjectTicket()
    {
        return $this->ProjectTicket;
    }

    /**
     * @param ProjectTicket[] $ProjectTicket
     * @return \Spinen\ConnectWise\Library\Api\Generated\ArrayOfProjectTicket
     */
    public function setProjectTicket(array $ProjectTicket = null)
    {
        $this->ProjectTicket = $ProjectTicket;
        return $this;
    }

}
