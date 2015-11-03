<?php

namespace Spinen\ConnectWise\Library;

use SoapFault;
use Spinen\ConnectWise\BaseTest;

/**
 * Class SoapClientTest
 *
 * @package Spinen\ConnectWise\Library
 * @group   library
 */
class SoapClientTest extends BaseTest
{
    /**
     * @test
     */
    public function it_can_be_constructed()
    {
        $options = [
            "location" => "/wsdl",
            "uri"      => "http://some.tld",
        ];

        // non-WSDL mode to keep it from going after wsdl on construct
        $client = new SoapClient(null, $options);

        $this->assertInstanceOf('Spinen\\ConnectWise\\Library\\SoapClient', $client);
    }

    /**
     * When the class gets constructed, we are doing so with a fake WSDL, so going to get an error
     *
     * @test
     * @expectedException SoapFault
     * @expectedExceptionMessage SOAP-ERROR: Parsing WSDL: Couldn't load from 'http://some.tld/wsdl' : EntityRef: expecting ';'
     */
    public function it_can_be_constructed_with_no_options()
    {
        $client = new SoapClient("http://some.tld/wsdl");

        $this->assertInstanceOf('Spinen\\ConnectWise\\Library\\SoapClient', $client);
    }
}
