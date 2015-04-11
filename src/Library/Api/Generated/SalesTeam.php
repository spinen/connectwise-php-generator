<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class SalesTeam
{

    /**
     * @var string $SalesTeamIdentifier
     */
    protected $SalesTeamIdentifier = null;

    /**
     * @var boolean $ReferralFlag
     */
    protected $ReferralFlag = null;

    /**
     * @param string $SalesTeamIdentifier
     * @param boolean $ReferralFlag
     */
    public function __construct($SalesTeamIdentifier = null, $ReferralFlag = null)
    {
        $this->SalesTeamIdentifier = $SalesTeamIdentifier;
        $this->ReferralFlag        = $ReferralFlag;
    }

    /**
     * @return string
     */
    public function getSalesTeamIdentifier()
    {
        return $this->SalesTeamIdentifier;
    }

    /**
     * @param string $SalesTeamIdentifier
     * @return \Spinen\ConnectWise\Library\Api\Generated\SalesTeam
     */
    public function setSalesTeamIdentifier($SalesTeamIdentifier)
    {
        $this->SalesTeamIdentifier = $SalesTeamIdentifier;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getReferralFlag()
    {
        return $this->ReferralFlag;
    }

    /**
     * @param boolean $ReferralFlag
     * @return \Spinen\ConnectWise\Library\Api\Generated\SalesTeam
     */
    public function setReferralFlag($ReferralFlag)
    {
        $this->ReferralFlag = $ReferralFlag;
        return $this;
    }

}
