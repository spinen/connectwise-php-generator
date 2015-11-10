<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class PrimarySalesRepMember
{

    /**
     * @var string $MemberIdentifier
     */
    protected $MemberIdentifier = null;

    /**
     * @var int $SplitPercentage
     */
    protected $SplitPercentage = null;

    /**
     * @var boolean $ReferralFlag
     */
    protected $ReferralFlag = null;

    /**
     * @param string $MemberIdentifier
     * @param int $SplitPercentage
     * @param boolean $ReferralFlag
     */
    public function __construct($MemberIdentifier = null, $SplitPercentage = null, $ReferralFlag = null)
    {
        $this->MemberIdentifier = $MemberIdentifier;
        $this->SplitPercentage  = $SplitPercentage;
        $this->ReferralFlag     = $ReferralFlag;
    }

    /**
     * @return string
     */
    public function getMemberIdentifier()
    {
        return $this->MemberIdentifier;
    }

    /**
     * @param string $MemberIdentifier
     * @return \Spinen\ConnectWise\Library\Api\Generated\PrimarySalesRepMember
     */
    public function setMemberIdentifier($MemberIdentifier)
    {
        $this->MemberIdentifier = $MemberIdentifier;
        return $this;
    }

    /**
     * @return int
     */
    public function getSplitPercentage()
    {
        return $this->SplitPercentage;
    }

    /**
     * @param int $SplitPercentage
     * @return \Spinen\ConnectWise\Library\Api\Generated\PrimarySalesRepMember
     */
    public function setSplitPercentage($SplitPercentage)
    {
        $this->SplitPercentage = $SplitPercentage;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\PrimarySalesRepMember
     */
    public function setReferralFlag($ReferralFlag)
    {
        $this->ReferralFlag = $ReferralFlag;
        return $this;
    }

}
