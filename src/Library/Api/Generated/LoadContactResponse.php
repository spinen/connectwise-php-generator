<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class LoadContactResponse
{

    /**
     * @var Contact $LoadContactResult
     */
    protected $LoadContactResult = null;

    /**
     * @param Contact $LoadContactResult
     */
    public function __construct(Contact $LoadContactResult = null)
    {
        $this->LoadContactResult = $LoadContactResult;
    }

    /**
     * @return Contact
     */
    public function getLoadContactResult()
    {
        return $this->LoadContactResult;
    }

    /**
     * @param Contact $LoadContactResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\LoadContactResponse
     */
    public function setLoadContactResult(Contact $LoadContactResult)
    {
        $this->LoadContactResult = $LoadContactResult;
        return $this;
    }

}
