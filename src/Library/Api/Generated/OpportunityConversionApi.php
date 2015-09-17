<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

/**
 * ConnectWise Opportunity Conversion API
 */
class OpportunityConversionApi extends \Spinen\ConnectWise\Library\SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array(
        'OpportunityToProjectConversion'            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\OpportunityToProjectConversion',
        'ApiCredentials'                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ApiCredentials',
        'ArrayOfInt'                                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfInt',
        'ArrayOfInt1'                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfInt1',
        'OpportunityToProjectConversionResponse'    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\OpportunityToProjectConversionResponse',
        'OpportunityToTicketConversion'             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\OpportunityToTicketConversion',
        'OpportunityToTicketConversionResponse'     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\OpportunityToTicketConversionResponse',
        'OpportunityToSalesOrderConversion'         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\OpportunityToSalesOrderConversion',
        'OpportunityToSalesOrderConversionResponse' => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\OpportunityToSalesOrderConversionResponse',
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
    public function __construct($host, array $options = array(), $wsdl = '/v4_6_release/apis/2.0/OpportunityConversionApi.asmx?wsdl')
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
     * Converts Opportunity into Project
     *
     * @param OpportunityToProjectConversion $parameters
     * @return OpportunityToProjectConversionResponse
     */
    public function OpportunityToProjectConversion(OpportunityToProjectConversion $parameters)
    {
        return $this->__soapCall('OpportunityToProjectConversion', array($parameters));
    }

    /**
     * Converts Opportunity into new Service Ticket
     *
     * @param OpportunityToTicketConversion $parameters
     * @return OpportunityToTicketConversionResponse
     */
    public function OpportunityToTicketConversion(OpportunityToTicketConversion $parameters)
    {
        return $this->__soapCall('OpportunityToTicketConversion', array($parameters));
    }

    /**
     * Converts Opportunity into New Sales Order
     *
     * @param OpportunityToSalesOrderConversion $parameters
     * @return OpportunityToSalesOrderConversionResponse
     */
    public function OpportunityToSalesOrderConversion(OpportunityToSalesOrderConversion $parameters)
    {
        return $this->__soapCall('OpportunityToSalesOrderConversion', array($parameters));
    }

}
