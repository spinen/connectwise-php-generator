<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class SpamStatsDomainData
{

    /**
     * @var string $DomainName
     */
    protected $DomainName = null;

    /**
     * @var int $SpamRemovedLast30Days
     */
    protected $SpamRemovedLast30Days = null;

    /**
     * @var int $SpamRemovedYTD
     */
    protected $SpamRemovedYTD = null;

    /**
     * @var int $EmailVirusesRemovedLast30Days
     */
    protected $EmailVirusesRemovedLast30Days = null;

    /**
     * @var int $EmailVirusesRemovedYTD
     */
    protected $EmailVirusesRemovedYTD = null;

    /**
     * @var int $AccountMessagesLast30Days
     */
    protected $AccountMessagesLast30Days = null;

    /**
     * @var int $AccountMessagesYTD
     */
    protected $AccountMessagesYTD = null;

    /**
     * @var int $TotalMessagesLast30Days
     */
    protected $TotalMessagesLast30Days = null;

    /**
     * @var int $TotalMessagesYTD
     */
    protected $TotalMessagesYTD = null;

    /**
     * @param string $DomainName
     * @param int $SpamRemovedLast30Days
     * @param int $SpamRemovedYTD
     * @param int $EmailVirusesRemovedLast30Days
     * @param int $EmailVirusesRemovedYTD
     * @param int $AccountMessagesLast30Days
     * @param int $AccountMessagesYTD
     * @param int $TotalMessagesLast30Days
     * @param int $TotalMessagesYTD
     */
    public function __construct($DomainName = null, $SpamRemovedLast30Days = null, $SpamRemovedYTD = null, $EmailVirusesRemovedLast30Days = null, $EmailVirusesRemovedYTD = null, $AccountMessagesLast30Days = null, $AccountMessagesYTD = null, $TotalMessagesLast30Days = null, $TotalMessagesYTD = null)
    {
        $this->DomainName                    = $DomainName;
        $this->SpamRemovedLast30Days         = $SpamRemovedLast30Days;
        $this->SpamRemovedYTD                = $SpamRemovedYTD;
        $this->EmailVirusesRemovedLast30Days = $EmailVirusesRemovedLast30Days;
        $this->EmailVirusesRemovedYTD        = $EmailVirusesRemovedYTD;
        $this->AccountMessagesLast30Days     = $AccountMessagesLast30Days;
        $this->AccountMessagesYTD            = $AccountMessagesYTD;
        $this->TotalMessagesLast30Days       = $TotalMessagesLast30Days;
        $this->TotalMessagesYTD              = $TotalMessagesYTD;
    }

    /**
     * @return string
     */
    public function getDomainName()
    {
        return $this->DomainName;
    }

    /**
     * @param string $DomainName
     * @return \Spinen\ConnectWise\Library\Api\Generated\SpamStatsDomainData
     */
    public function setDomainName($DomainName)
    {
        $this->DomainName = $DomainName;
        return $this;
    }

    /**
     * @return int
     */
    public function getSpamRemovedLast30Days()
    {
        return $this->SpamRemovedLast30Days;
    }

    /**
     * @param int $SpamRemovedLast30Days
     * @return \Spinen\ConnectWise\Library\Api\Generated\SpamStatsDomainData
     */
    public function setSpamRemovedLast30Days($SpamRemovedLast30Days)
    {
        $this->SpamRemovedLast30Days = $SpamRemovedLast30Days;
        return $this;
    }

    /**
     * @return int
     */
    public function getSpamRemovedYTD()
    {
        return $this->SpamRemovedYTD;
    }

    /**
     * @param int $SpamRemovedYTD
     * @return \Spinen\ConnectWise\Library\Api\Generated\SpamStatsDomainData
     */
    public function setSpamRemovedYTD($SpamRemovedYTD)
    {
        $this->SpamRemovedYTD = $SpamRemovedYTD;
        return $this;
    }

    /**
     * @return int
     */
    public function getEmailVirusesRemovedLast30Days()
    {
        return $this->EmailVirusesRemovedLast30Days;
    }

    /**
     * @param int $EmailVirusesRemovedLast30Days
     * @return \Spinen\ConnectWise\Library\Api\Generated\SpamStatsDomainData
     */
    public function setEmailVirusesRemovedLast30Days($EmailVirusesRemovedLast30Days)
    {
        $this->EmailVirusesRemovedLast30Days = $EmailVirusesRemovedLast30Days;
        return $this;
    }

    /**
     * @return int
     */
    public function getEmailVirusesRemovedYTD()
    {
        return $this->EmailVirusesRemovedYTD;
    }

    /**
     * @param int $EmailVirusesRemovedYTD
     * @return \Spinen\ConnectWise\Library\Api\Generated\SpamStatsDomainData
     */
    public function setEmailVirusesRemovedYTD($EmailVirusesRemovedYTD)
    {
        $this->EmailVirusesRemovedYTD = $EmailVirusesRemovedYTD;
        return $this;
    }

    /**
     * @return int
     */
    public function getAccountMessagesLast30Days()
    {
        return $this->AccountMessagesLast30Days;
    }

    /**
     * @param int $AccountMessagesLast30Days
     * @return \Spinen\ConnectWise\Library\Api\Generated\SpamStatsDomainData
     */
    public function setAccountMessagesLast30Days($AccountMessagesLast30Days)
    {
        $this->AccountMessagesLast30Days = $AccountMessagesLast30Days;
        return $this;
    }

    /**
     * @return int
     */
    public function getAccountMessagesYTD()
    {
        return $this->AccountMessagesYTD;
    }

    /**
     * @param int $AccountMessagesYTD
     * @return \Spinen\ConnectWise\Library\Api\Generated\SpamStatsDomainData
     */
    public function setAccountMessagesYTD($AccountMessagesYTD)
    {
        $this->AccountMessagesYTD = $AccountMessagesYTD;
        return $this;
    }

    /**
     * @return int
     */
    public function getTotalMessagesLast30Days()
    {
        return $this->TotalMessagesLast30Days;
    }

    /**
     * @param int $TotalMessagesLast30Days
     * @return \Spinen\ConnectWise\Library\Api\Generated\SpamStatsDomainData
     */
    public function setTotalMessagesLast30Days($TotalMessagesLast30Days)
    {
        $this->TotalMessagesLast30Days = $TotalMessagesLast30Days;
        return $this;
    }

    /**
     * @return int
     */
    public function getTotalMessagesYTD()
    {
        return $this->TotalMessagesYTD;
    }

    /**
     * @param int $TotalMessagesYTD
     * @return \Spinen\ConnectWise\Library\Api\Generated\SpamStatsDomainData
     */
    public function setTotalMessagesYTD($TotalMessagesYTD)
    {
        $this->TotalMessagesYTD = $TotalMessagesYTD;
        return $this;
    }

}
