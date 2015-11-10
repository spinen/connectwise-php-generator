<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddServiceTicketViaManagedIdentifier
{

    /**
     * @var ApiCredentials $credentials
     */
    protected $credentials = null;

    /**
     * @var string $managedIdentifier
     */
    protected $managedIdentifier = null;

    /**
     * @var ServiceTicket $serviceTicket
     */
    protected $serviceTicket = null;

    /**
     * @param ApiCredentials $credentials
     * @param string $managedIdentifier
     * @param ServiceTicket $serviceTicket
     */
    public function __construct(ApiCredentials $credentials = null, $managedIdentifier = null, ServiceTicket $serviceTicket = null)
    {
        $this->credentials       = $credentials;
        $this->managedIdentifier = $managedIdentifier;
        $this->serviceTicket     = $serviceTicket;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddServiceTicketViaManagedIdentifier
     */
    public function setCredentials(ApiCredentials $credentials)
    {
        $this->credentials = $credentials;
        return $this;
    }

    /**
     * @return string
     */
    public function getManagedIdentifier()
    {
        return $this->managedIdentifier;
    }

    /**
     * @param string $managedIdentifier
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddServiceTicketViaManagedIdentifier
     */
    public function setManagedIdentifier($managedIdentifier)
    {
        $this->managedIdentifier = $managedIdentifier;
        return $this;
    }

    /**
     * @return ServiceTicket
     */
    public function getServiceTicket()
    {
        return $this->serviceTicket;
    }

    /**
     * @param ServiceTicket $serviceTicket
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddServiceTicketViaManagedIdentifier
     */
    public function setServiceTicket(ServiceTicket $serviceTicket)
    {
        $this->serviceTicket = $serviceTicket;
        return $this;
    }

}
