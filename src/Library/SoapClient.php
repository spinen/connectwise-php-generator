<?php

namespace Spinen\ConnectWise\Library;

use SoapClient as RealSoapClient;

/**
 * Class SoapClient
 *
 * @package Spinen\ConnectWise\Library
 */
class SoapClient extends RealSoapClient
{

    /**
     * Our way of keeping the hostname out of the code
     *
     * @param string $wsdl
     * @param array  $options
     */
    public function __construct($wsdl, array $options = [])
    {
        parent::__construct($wsdl, $options);
    }

}
