<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ConfigurationTypeFindResult
{

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var boolean $InactiveFlag
     */
    protected $InactiveFlag = null;

    /**
     * @var boolean $SystemFlag
     */
    protected $SystemFlag = null;

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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ConfigurationTypeFindResult
     */
    public function setId($Id)
    {
        $this->Id = $Id;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param string $Name
     * @return \Spinen\ConnectWise\Library\Api\Generated\ConfigurationTypeFindResult
     */
    public function setName($Name)
    {
        $this->Name = $Name;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getInactiveFlag()
    {
        return $this->InactiveFlag;
    }

    /**
     * @param boolean $InactiveFlag
     * @return \Spinen\ConnectWise\Library\Api\Generated\ConfigurationTypeFindResult
     */
    public function setInactiveFlag($InactiveFlag)
    {
        $this->InactiveFlag = $InactiveFlag;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getSystemFlag()
    {
        return $this->SystemFlag;
    }

    /**
     * @param boolean $SystemFlag
     * @return \Spinen\ConnectWise\Library\Api\Generated\ConfigurationTypeFindResult
     */
    public function setSystemFlag($SystemFlag)
    {
        $this->SystemFlag = $SystemFlag;
        return $this;
    }

}
