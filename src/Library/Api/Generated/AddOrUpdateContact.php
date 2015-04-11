<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddOrUpdateContact
{

    /**
     * @var ApiCredentials $credentials
     */
    protected $credentials = null;

    /**
     * @var Contact $contact
     */
    protected $contact = null;

    /**
     * @param ApiCredentials $credentials
     * @param Contact $contact
     */
    public function __construct(ApiCredentials $credentials = null, Contact $contact = null)
    {
        $this->credentials = $credentials;
        $this->contact     = $contact;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdateContact
     */
    public function setCredentials(ApiCredentials $credentials)
    {
        $this->credentials = $credentials;
        return $this;
    }

    /**
     * @return Contact
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * @param Contact $contact
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdateContact
     */
    public function setContact(Contact $contact)
    {
        $this->contact = $contact;
        return $this;
    }

}
