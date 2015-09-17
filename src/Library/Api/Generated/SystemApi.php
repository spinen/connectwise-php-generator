<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

/**
 * ConnectWise System API
 */
class SystemApi extends \Spinen\ConnectWise\Library\SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array(
        'GetConnectWiseVersion'             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetConnectWiseVersion',
        'ApiCredentials'                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ApiCredentials',
        'GetConnectWiseVersionResponse'     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetConnectWiseVersionResponse',
        'IsCloud'                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\IsCloud',
        'IsCloudResponse'                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\IsCloudResponse',
        'GetConnectWiseVersionInfo'         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetConnectWiseVersionInfo',
        'GetConnectWiseVersionInfoResponse' => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetConnectWiseVersionInfoResponse',
        'ConnectWiseVersionInfo'            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ConnectWiseVersionInfo',
    );

    private function setClassmap($classmap)
    {
        $this->classmap = $classmap;
    }

    private function getClassmap()
    {
        return $this->classmap;
    }

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct($host, array $options = array(), $wsdl = '/v4_6_release/apis/2.0/SystemApi.asmx?wsdl')
    {
        foreach (self::$classmap as $key => $value) {
            if (!isset($options['classmap'][$key])) {
                $options['classmap'][$key] = $value;
            }
        }
        $options = array_merge(array(
            'features' => 1,
        ), $options);
        parent::__construct($host . $wsdl, $options);
    }

    /**
     * Gets the current version of ConnectWise.
     *
     * @param GetConnectWiseVersion $parameters
     * @return GetConnectWiseVersionResponse
     */
    public function GetConnectWiseVersion(GetConnectWiseVersion $parameters)
    {
        return $this->__soapCall('GetConnectWiseVersion', array($parameters));
    }

    /**
     * Gets the cloud state of the ConnectWise instance
     *
     * @param IsCloud $parameters
     * @return IsCloudResponse
     */
    public function IsCloud(IsCloud $parameters)
    {
        return $this->__soapCall('IsCloud', array($parameters));
    }

    /**
     * Gets all ConnectWise system information
     *
     * @param GetConnectWiseVersionInfo $parameters
     * @return GetConnectWiseVersionInfoResponse
     */
    public function GetConnectWiseVersionInfo(GetConnectWiseVersionInfo $parameters)
    {
        return $this->__soapCall('GetConnectWiseVersionInfo', array($parameters));
    }

}
