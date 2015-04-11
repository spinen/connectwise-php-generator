<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class FindScheduleEntries
{

    /**
     * @var ApiCredentials $credentials
     */
    protected $credentials = null;

    /**
     * @var string $conditions
     */
    protected $conditions = null;

    /**
     * @var string $orderBy
     */
    protected $orderBy = null;

    /**
     * @var int $limit
     */
    protected $limit = null;

    /**
     * @var int $skip
     */
    protected $skip = null;

    /**
     * @var boolean $isOpen
     */
    protected $isOpen = null;

    /**
     * @var ArrayOfString $returnFields
     */
    protected $returnFields = null;

    /**
     * @param ApiCredentials $credentials
     * @param string $conditions
     * @param string $orderBy
     * @param int $limit
     * @param int $skip
     * @param boolean $isOpen
     * @param ArrayOfString $returnFields
     */
    public function __construct(ApiCredentials $credentials = null, $conditions = null, $orderBy = null, $limit = null, $skip = null, $isOpen = null, $returnFields = null)
    {
        $this->credentials  = $credentials;
        $this->conditions   = $conditions;
        $this->orderBy      = $orderBy;
        $this->limit        = $limit;
        $this->skip         = $skip;
        $this->isOpen       = $isOpen;
        $this->returnFields = $returnFields;
    }

    /**
     * @return ApiCredentials
     */
    public function getCredentials()
    {
        return $this->credentials;
    }

    /**
     * @param ApiCredentials $credentials
     * @return \Spinen\ConnectWise\Library\Api\Generated\FindScheduleEntries
     */
    public function setCredentials(ApiCredentials $credentials)
    {
        $this->credentials = $credentials;
        return $this;
    }

    /**
     * @return string
     */
    public function getConditions()
    {
        return $this->conditions;
    }

    /**
     * @param string $conditions
     * @return \Spinen\ConnectWise\Library\Api\Generated\FindScheduleEntries
     */
    public function setConditions($conditions)
    {
        $this->conditions = $conditions;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrderBy()
    {
        return $this->orderBy;
    }

    /**
     * @param string $orderBy
     * @return \Spinen\ConnectWise\Library\Api\Generated\FindScheduleEntries
     */
    public function setOrderBy($orderBy)
    {
        $this->orderBy = $orderBy;
        return $this;
    }

    /**
     * @return int
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * @param int $limit
     * @return \Spinen\ConnectWise\Library\Api\Generated\FindScheduleEntries
     */
    public function setLimit($limit)
    {
        $this->limit = $limit;
        return $this;
    }

    /**
     * @return int
     */
    public function getSkip()
    {
        return $this->skip;
    }

    /**
     * @param int $skip
     * @return \Spinen\ConnectWise\Library\Api\Generated\FindScheduleEntries
     */
    public function setSkip($skip)
    {
        $this->skip = $skip;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsOpen()
    {
        return $this->isOpen;
    }

    /**
     * @param boolean $isOpen
     * @return \Spinen\ConnectWise\Library\Api\Generated\FindScheduleEntries
     */
    public function setIsOpen($isOpen)
    {
        $this->isOpen = $isOpen;
        return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getReturnFields()
    {
        return $this->returnFields;
    }

    /**
     * @param ArrayOfString $returnFields
     * @return \Spinen\ConnectWise\Library\Api\Generated\FindScheduleEntries
     */
    public function setReturnFields($returnFields)
    {
        $this->returnFields = $returnFields;
        return $this;
    }

}
