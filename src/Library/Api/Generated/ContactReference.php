<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ContactReference
{

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var string $FirstName
     */
    protected $FirstName = null;

    /**
     * @var string $LastName
     */
    protected $LastName = null;

    /**
     * @param int $Id
     * @param string $FirstName
     * @param string $LastName
     */
    public function __construct($Id = null, $FirstName = null, $LastName = null)
    {
        $this->Id        = $Id;
        $this->FirstName = $FirstName;
        $this->LastName  = $LastName;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ContactReference
     */
    public function setId($Id)
    {
        $this->Id = $Id;
        return $this;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->FirstName;
    }

    /**
     * @param string $FirstName
     * @return \Spinen\ConnectWise\Library\Api\Generated\ContactReference
     */
    public function setFirstName($FirstName)
    {
        $this->FirstName = $FirstName;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->LastName;
    }

    /**
     * @param string $LastName
     * @return \Spinen\ConnectWise\Library\Api\Generated\ContactReference
     */
    public function setLastName($LastName)
    {
        $this->LastName = $LastName;
        return $this;
    }

}
