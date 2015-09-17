<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ManufacturerCompany
{

    /**
     * @var int $Id
     */
    protected $Id = null;

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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ManufacturerCompany
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ManufacturerCompany
     */
    public function setName($Name)
    {
        $this->Name = $Name;
        return $this;
    }

}
