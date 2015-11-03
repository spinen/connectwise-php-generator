<?php

namespace Spinen\ConnectWise\Library;

use Mockery;
use Spinen\ConnectWise\BaseTest;
use Spinen\ConnectWise\TestFactory;

/**
 * Class UrlEntryTest
 *
 * @package Spinen\ConnectWise\Library
 * @group   library
 */
class UrlEntryTest extends BaseTest
{
    /**
     * @var UrlEntry
     */
    protected $url;

    /**
     * @var Mockery\Mock
     */
    protected $client_mock;

    /**
     * @var Mockery\Mock
     */
    protected $validator_mock;

    protected function setUp()
    {
        $this->setUpMocks();

        $this->url = new UrlEntry($this->client_mock, $this->validator_mock);
    }

    private function setUpMocks()
    {
        $this->client_mock = TestFactory::mockClient();

        $this->validator_mock = TestFactory::mockValidator();
    }

    private function addAssertions($company = 'Company', $host = 'Host', $integer = 1, $integer_return = true)
    {
        $this->client_mock->shouldReceive('get')
                          ->with('config')
                          ->andReturn([
                              'connectwise' => [
                                  'company' => $company,
                              ],
                          ])
                          ->once();

        $this->client_mock->shouldReceive('getHost')
                          ->withNoArgs()
                          ->andReturn($host)
                          ->once();

        $this->validator_mock->shouldReceive('validateIntegerProperty')
                             ->with("Id", $integer)
                             ->andReturn($integer_return)
                             ->once();
    }

    /**
     * @test
     */
    public function it_can_be_constructed()
    {
        $this->assertInstanceOf('Spinen\\ConnectWise\\Library\\UrlEntry', $this->url);
    }

    /**
     * @test
     */
    public function it_builds_url_to_a_activity()
    {
        $this->addAssertions();

        $expected = 'Host/v4_6_release/services/system_io/router/openrecord.rails?locale=en_US&recordType=ActivityFv&recid=1&companyName=Company';

        $this->assertEquals($expected, $this->url->activity(1));
    }

    /**
     * @test
     */
    public function it_escapes_the_company_when_building_url_to_a_activity()
    {
        $this->addAssertions('Company/Location');

        $expected = 'Host/v4_6_release/services/system_io/router/openrecord.rails?locale=en_US&recordType=ActivityFv&recid=1&companyName=Company%2FLocation';

        $this->assertEquals($expected, $this->url->activity(1));
    }

    /**
     * @test
     */
    public function it_builds_url_to_a_company()
    {
        $this->addAssertions();

        $expected = 'Host/v4_6_release/ConnectWise.html?locale=en_US&locale=en_US&routeTo=CompanyFv&recid=1&companyName=Company';

        $this->assertEquals($expected, $this->url->company(1));
    }

    /**
     * @test
     */
    public function it_escapes_the_company_when_building_url_to_a_company()
    {
        $this->addAssertions('Company/Location');

        $expected = 'Host/v4_6_release/ConnectWise.html?locale=en_US&locale=en_US&routeTo=CompanyFv&recid=1&companyName=Company%2FLocation';

        $this->assertEquals($expected, $this->url->company(1));
    }

    /**
     * @test
     */
    public function it_builds_url_to_a_contact()
    {
        $this->addAssertions();

        $expected = 'Host/v4_6_release/services/system_io/router/openrecord.rails?locale=en_US&recordType=ContactFv&recid=1&companyName=Company';

        $this->assertEquals($expected, $this->url->contact(1));
    }

    /**
     * @test
     */
    public function it_escapes_the_company_when_building_url_to_a_contact()
    {
        $this->addAssertions('Company/Location');

        $expected = 'Host/v4_6_release/services/system_io/router/openrecord.rails?locale=en_US&recordType=ContactFv&recid=1&companyName=Company%2FLocation';

        $this->assertEquals($expected, $this->url->contact(1));
    }

    /**
     * @test
     */
    public function it_builds_url_to_a_configuration()
    {
        $this->addAssertions();

        $expected = 'Host/v4_6_release/services/system_io/router/openrecord.rails?locale=en_US&recordType=ConfigFv&recid=1&companyName=Company';

        $this->assertEquals($expected, $this->url->configuration(1));
    }

    /**
     * @test
     */
    public function it_escapes_the_company_when_building_url_to_a_configuration()
    {
        $this->addAssertions('Company/Location');

        $expected = 'Host/v4_6_release/services/system_io/router/openrecord.rails?locale=en_US&recordType=ConfigFv&recid=1&companyName=Company%2FLocation';

        $this->assertEquals($expected, $this->url->configuration(1));
    }

    /**
     * @test
     */
    public function it_builds_url_to_a_opportunity()
    {
        $this->addAssertions();

        $expected = 'Host/v4_6_release/services/system_io/router/openrecord.rails?locale=en_US&recordType=OpportunityFv&recid=1&companyName=Company';

        $this->assertEquals($expected, $this->url->opportunity(1));
    }

    /**
     * @test
     */
    public function it_escapes_the_company_when_building_url_to_a_opportunity()
    {
        $this->addAssertions('Company/Location');

        $expected = 'Host/v4_6_release/services/system_io/router/openrecord.rails?locale=en_US&recordType=OpportunityFv&recid=1&companyName=Company%2FLocation';

        $this->assertEquals($expected, $this->url->opportunity(1));
    }

    /**
     * @test
     */
    public function it_builds_url_to_a_service_ticket()
    {
        $this->addAssertions();

        $expected = 'Host/v4_6_release/services/system_io/router/openrecord.rails?locale=en_US&recordType=ServiceFv&recid=1&companyName=Company';

        $this->assertEquals($expected, $this->url->serviceTicket(1));
    }

    /**
     * @test
     */
    public function it_escapes_the_company_when_building_url_to_a_service_ticket()
    {
        $this->addAssertions('Company/Location');

        $expected = 'Host/v4_6_release/services/system_io/router/openrecord.rails?locale=en_US&recordType=ServiceFv&recid=1&companyName=Company%2FLocation';

        $this->assertEquals($expected, $this->url->serviceTicket(1));
    }
}
