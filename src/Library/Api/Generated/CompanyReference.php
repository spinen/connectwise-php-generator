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

    public function __construct()
    {

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
