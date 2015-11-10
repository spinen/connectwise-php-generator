<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ArrayOfSpamStatsDomainData
{

    /**
     * @var SpamStatsDomainData[] $SpamStatsDomainData
     */
    protected $SpamStatsDomainData = null;

    public function __construct()
    {

    }

    /**
     * @return SpamStatsDomainData[]
     */
    public function getSpamStatsDomainData()
    {
        return $this->SpamStatsDomainData;
    }

    /**
     * @param SpamStatsDomainData[] $SpamStatsDomainData
     * @return \Spinen\ConnectWise\Library\Api\Generated\ArrayOfSpamStatsDomainData
     */
    public function setSpamStatsDomainData(array $SpamStatsDomainData)
    {
        $this->SpamStatsDomainData = $SpamStatsDomainData;
        return $this;
    }

}
