<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ProjectContactFindResult
{

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var int $ContactId
     */
    protected $ContactId = null;

    /**
     * @var int $ProjectId
     */
    protected $ProjectId = null;

    /**
     * @param int $Id
     * @param int $ContactId
     * @param int $ProjectId
     */
    public function __construct($Id = null, $ContactId = null, $ProjectId = null)
    {
        $this->Id        = $Id;
        $this->ContactId = $ContactId;
        $this->ProjectId = $ProjectId;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param int $Id
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProjectContactFindResult
     */
    public function setId($Id)
    {
        $this->Id = $Id;
        return $this;
    }

    /**
     * @return int
     */
    public function getContactId()
    {
        return $this->ContactId;
    }

    /**
     * @param int $ContactId
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProjectContactFindResult
     */
    public function setContactId($ContactId)
    {
        $this->ContactId = $ContactId;
        return $this;
    }

    /**
     * @return int
     */
    public function getProjectId()
    {
        return $this->ProjectId;
    }

    /**
     * @param int $ProjectId
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProjectContactFindResult
     */
    public function setProjectId($ProjectId)
    {
        $this->ProjectId = $ProjectId;
        return $this;
    }

}
