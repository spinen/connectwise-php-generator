<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ContactInformation
{

    /**
     * @var int $ContactId
     */
    protected $ContactId = null;

    /**
     * @var string $FirstName
     */
    protected $FirstName = null;

    /**
     * @var string $LastName
     */
    protected $LastName = null;

    /**
     * @param int $ContactId
     * @param string $FirstName
     * @param string $LastName
     */
    public function __construct($ContactId = null, $FirstName = null, $LastName = null)
    {
        $this->ContactId = $ContactId;
        $this->FirstName = $FirstName;
        $this->LastName  = $LastName;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ContactInformation
     */
    public function setContactId($ContactId)
    {
        $this->ContactId = $ContactId;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ContactInformation
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ContactInformation
     */
    public function setLastName($LastName)
    {
        $this->LastName = $LastName;
        return $this;
    }

}
