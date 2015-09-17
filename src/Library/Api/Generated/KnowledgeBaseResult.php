<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class KnowledgeBaseResult extends TicketBase
{

    /**
     * @param boolean $ClosedFlag
     * @param boolean $Approved
     * @param boolean $EmergencyFlag
     */
    public function __construct($ClosedFlag = null, $Approved = null, $EmergencyFlag = null)
    {
        parent::__construct($ClosedFlag, $Approved, $EmergencyFlag);
    }

}
