<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddOrUpdateServiceTicketViaCompanyIdentifier
{

    /**
     * @var ApiCredentials $credentials
     */
    protected $credentials = null;

    /**
     * @var string $companyIdentifier
     */
    protected $companyIdentifier = null;

    /**
     * @var ServiceTicket $serviceTicket
     */
    protected $serviceTicket = null;

    /**
     * @param ApiCredentials $credentials
     * @param string $companyIdentifier
     * @param ServiceTicket $serviceTicket
     */
    public function __construct(ApiCredentials $credentials = null, $companyIdentifier = null, ServiceTicket $serviceTicket = null)
    {
        $this->credentials       = $credentials;
        $this->companyIdentifier = $companyIdentifier;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdateServiceTicketViaCompanyIdentifier
     */
    public function setCredentials(ApiCredentials $credentials)
    {
        $this->credentials = $credentials;
        return $this;
    }

    /**
     * @return string
     */
    public function getCompanyIdentifier()
    {
        return $this->companyIdentifier;
    }

    /**
     * @param string $companyIdentifier
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdateServiceTicketViaCompanyIdentifier
     */
    public function setCompanyIdentifier($companyIdentifier)
    {
        $this->companyIdentifier = $companyIdentifier;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdateServiceTicketViaCompanyIdentifier
     */
    public function setServiceTicket(ServiceTicket $serviceTicket)
    {
        $this->serviceTicket = $serviceTicket;
        return $this;
    }

}
