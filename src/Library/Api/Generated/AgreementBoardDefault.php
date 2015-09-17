<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AgreementBoardDefault
{

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var int $BoardId
     */
    protected $BoardId = null;

    /**
     * @var int $AgreementId
     */
    protected $AgreementId = null;

    /**
     * @var int $ServiceTypeId
     */
    protected $ServiceTypeId = null;

    /**
     * @var boolean $DefaultFlag
     */
    protected $DefaultFlag = null;

    /**
     * @var string $UpdatedBy
     */
    protected $UpdatedBy = null;

    /**
     * @var \DateTime $LastUpdate
     */
    protected $LastUpdate = null;

    /**
     * @param int $Id
     */
    public function __construct($Id = null)
    {
        $this->Id = $Id;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementBoardDefault
     */
    public function setId($Id)
    {
        $this->Id = $Id;
        return $this;
    }

    /**
     * @return int
     */
    public function getBoardId()
    {
        return $this->BoardId;
    }

    /**
     * @param int $BoardId
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementBoardDefault
     */
    public function setBoardId($BoardId)
    {
        $this->BoardId = $BoardId;
        return $this;
    }

    /**
     * @return int
     */
    public function getAgreementId()
    {
        return $this->AgreementId;
    }

    /**
     * @param int $AgreementId
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementBoardDefault
     */
    public function setAgreementId($AgreementId)
    {
        $this->AgreementId = $AgreementId;
        return $this;
    }

    /**
     * @return int
     */
    public function getServiceTypeId()
    {
        return $this->ServiceTypeId;
    }

    /**
     * @param int $ServiceTypeId
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementBoardDefault
     */
    public function setServiceTypeId($ServiceTypeId)
    {
        $this->ServiceTypeId = $ServiceTypeId;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getDefaultFlag()
    {
        return $this->DefaultFlag;
    }

    /**
     * @param boolean $DefaultFlag
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementBoardDefault
     */
    public function setDefaultFlag($DefaultFlag)
    {
        $this->DefaultFlag = $DefaultFlag;
        return $this;
    }

    /**
     * @return string
     */
    public function getUpdatedBy()
    {
        return $this->UpdatedBy;
    }

    /**
     * @param string $UpdatedBy
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementBoardDefault
     */
    public function setUpdatedBy($UpdatedBy)
    {
        $this->UpdatedBy = $UpdatedBy;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastUpdate()
    {
        if ($this->LastUpdate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->LastUpdate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $LastUpdate
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementBoardDefault
     */
    public function setLastUpdate(\DateTime $LastUpdate = null)
    {
        if ($LastUpdate == null) {
            $this->LastUpdate = null;
        } else {
            $this->LastUpdate = $LastUpdate->format(\DateTime::ATOM);
        }
        return $this;
    }

}
