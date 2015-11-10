<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class CompanyReference
{

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var string $CompanyIdentifier
     */
    protected $CompanyIdentifier = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @param string $CompanyIdentifier
     * @param string $Name
     */
    public function __construct($CompanyIdentifier = null, $Name = null)
    {
        $this->CompanyIdentifier = $CompanyIdentifier;
        $this->Name              = $Name;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\CompanyReference
     */
    public function setId($Id)
    {
        $this->Id = $Id;
        return $this;
    }

    /**
     * @return string
     */
    public function getCompanyIdentifier()
    {
        return $this->CompanyIdentifier;
    }

    /**
     * @param string $CompanyIdentifier
     * @return \Spinen\ConnectWise\Library\Api\Generated\CompanyReference
     */
    public function setCompanyIdentifier($CompanyIdentifier)
    {
        $this->CompanyIdentifier = $CompanyIdentifier;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\CompanyReference
     */
    public function setName($Name)
    {
        $this->Name = $Name;
        return $this;
    }

}
