<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ArrayOfContactFindResult
{

    /**
     * @var ContactFindResult[] $ContactFindResult
     */
    protected $ContactFindResult = null;

    public function __construct()
    {

    }

    /**
     * @return ContactFindResult[]
     */
    public function getContactFindResult()
    {
        return $this->ContactFindResult;
    }

    /**
     * @param ContactFindResult[] $ContactFindResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\ArrayOfContactFindResult
     */
    public function setContactFindResult(array $ContactFindResult)
    {
        $this->ContactFindResult = $ContactFindResult;
        return $this;
    }

}
