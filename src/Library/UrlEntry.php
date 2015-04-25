<?php

namespace Spinen\ConnectWise\Library;

use Spinen\ConnectWise\Client\Client;

/**
 * Class UrlEntry
 *
 * @package Spinen\ConnectWise\Library
 */
class UrlEntry
{

    /**
     * @var Client
     */
    private $client;

    /**
     * @var Validator
     */
    private $validator;

    /**
     * @param Client    $client
     * @param Validator $validator
     */
    public function __construct(Client $client, Validator $validator)
    {
        $this->client = $client;
        $this->validator = $validator;
    }

    /**
     * Build the url to the activity for a given activity_id.
     *
     * @param int $activity_id
     *
     * @return string
     */
    public function activity($activity_id)
    {
        return $this->buildUrl("%s/v4_6_release/services/system_io/router/openrecord.rails?locale=en_US&recordType=ActivityFv&recid=%s&companyName=%s",
            $activity_id);
    }

    /**
     * Builds the url from the known variables of the client & and the passed in id.
     *
     * @param string $format
     * @param int    $id
     *
     * @return string
     */
    private function buildUrl($format, $id)
    {
        $this->validator->validateIntegerProperty('Id', $id);

        $company = urlencode($this->client->get('config')['connectwise']['company']);

        return sprintf($format, $this->client->getHost(), $id, $company);
    }

    /**
     * Build the url to the company for a given company_id.
     *
     * @param int $company_id
     *
     * @return string
     */
    public function company($company_id)
    {
        return $this->buildUrl("%s/v4_6_release/ConnectWise.html?locale=en_US&locale=en_US&routeTo=CompanyFv&recid=%s&companyName=%s",
            $company_id);
    }

    /**
     * Build the url to the contact for a given contact_id.
     *
     * @param int $contact_id
     *
     * @return string
     */
    public function contact($contact_id)
    {
        return $this->buildUrl("%s/v4_6_release/services/system_io/router/openrecord.rails?locale=en_US&recordType=ContactFv&recid=%s&companyName=%s",
            $contact_id);
    }

    /**
     * Build the url to the configuration for a given configuration_id.
     *
     * @param int $configuration_id
     *
     * @return string
     */
    public function configuration($configuration_id)
    {
        return $this->buildUrl("%s/v4_6_release/services/system_io/router/openrecord.rails?locale=en_US&recordType=ConfigFv&recid=%s&companyName=%s",
            $configuration_id);
    }

    /**
     * Build the url to the opportunity for a given opportunity_id.
     *
     * @param int $opportunity_id
     *
     * @return string
     */
    public function opportunity($opportunity_id)
    {
        return $this->buildUrl("%s/v4_6_release/services/system_io/router/openrecord.rails?locale=en_US&recordType=OpportunityFv&recid=%s&companyName=%s",
            $opportunity_id);
    }

    /**
     * Build the url to the ticket for a given ticket_id.
     *
     * @param int $ticket_id
     *
     * @return string
     */
    public function serviceTicket($ticket_id)
    {
        return $this->buildUrl("%s/v4_6_release/services/system_io/router/openrecord.rails?locale=en_US&recordType=ServiceFv&recid=%s&companyName=%s",
            $ticket_id);
    }

}
