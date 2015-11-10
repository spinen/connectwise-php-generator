<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ProjectWorkPlan
{

    /**
     * @var ArrayOfProjectPhase $Phases
     */
    protected $Phases = null;

    /**
     * @param ArrayOfProjectPhase $Phases
     */
    public function __construct($Phases = null)
    {
        $this->Phases = $Phases;
    }

    /**
     * @return ArrayOfProjectPhase
     */
    public function getPhases()
    {
        return $this->Phases;
    }

    /**
     * @param ArrayOfProjectPhase $Phases
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProjectWorkPlan
     */
    public function setPhases($Phases)
    {
        $this->Phases = $Phases;
        return $this;
    }

}
