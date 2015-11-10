<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ArrayOfProjectPhase
{

    /**
     * @var ProjectPhase[] $ProjectPhase
     */
    protected $ProjectPhase = null;

    public function __construct()
    {

    }

    /**
     * @return ProjectPhase[]
     */
    public function getProjectPhase()
    {
        return $this->ProjectPhase;
    }

    /**
     * @param ProjectPhase[] $ProjectPhase
     * @return \Spinen\ConnectWise\Library\Api\Generated\ArrayOfProjectPhase
     */
    public function setProjectPhase(array $ProjectPhase)
    {
        $this->ProjectPhase = $ProjectPhase;
        return $this;
    }

}
