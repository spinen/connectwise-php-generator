<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

/**
 * ConnectWise Reporting API
 */
class ReportingApi extends \Spinen\ConnectWise\Library\SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array(
        'GetReports'                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetReports',
        'ApiCredentials'                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ApiCredentials',
        'GetReportsResponse'                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetReportsResponse',
        'ArrayOfReport'                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfReport',
        'Report'                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\Report',
        'FieldInfo'                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FieldInfo',
        'GetReportFields'                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetReportFields',
        'ArrayOfString'                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfString',
        'GetReportFieldsResponse'           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetReportFieldsResponse',
        'ArrayOfFieldInfo'                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfFieldInfo',
        'GetPortalReports'                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetPortalReports',
        'GetPortalReportsResponse'          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetPortalReportsResponse',
        'RunPortalReport'                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\RunPortalReport',
        'RunPortalReportResponse'           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\RunPortalReportResponse',
        'ArrayOfResultRow'                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfResultRow',
        'ResultRow'                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ResultRow',
        'FieldValue'                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FieldValue',
        'RunReportQuery'                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\RunReportQuery',
        'RunReportQueryResponse'            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\RunReportQueryResponse',
        'RunReportQueryWithFilters'         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\RunReportQueryWithFilters',
        'RunReportQueryWithFiltersResponse' => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\RunReportQueryWithFiltersResponse',
        'RunReportQueryWithTimeout'         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\RunReportQueryWithTimeout',
        'RunReportQueryWithTimeoutResponse' => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\RunReportQueryWithTimeoutResponse',
        'RunReportCount'                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\RunReportCount',
        'RunReportCountResponse'            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\RunReportCountResponse',
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
    public function __construct($host, array $options = array(), $wsdl = '/v4_6_release/apis/2.0/ReportingApi.asmx?wsdl')
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
     * Gets the list of available reports.
     *
     * @param GetReports $parameters
     * @return GetReportsResponse
     */
    public function GetReports(GetReports $parameters)
    {
        return $this->__soapCall('GetReports', array($parameters));
    }

    /**
     * Gets the list of fields for a particular report.
     *
     * @param GetReportFields $parameters
     * @return GetReportFieldsResponse
     */
    public function GetReportFields(GetReportFields $parameters)
    {
        return $this->__soapCall('GetReportFields', array($parameters));
    }

    /**
     * Gets the list of reports accessible via the customer portal.
     *
     * @param GetPortalReports $parameters
     * @return GetPortalReportsResponse
     */
    public function GetPortalReports(GetPortalReports $parameters)
    {
        return $this->__soapCall('GetPortalReports', array($parameters));
    }

    /**
     * Run a protal report with the given set of condiitons.
     *
     * @param RunPortalReport $parameters
     * @return RunPortalReportResponse
     */
    public function RunPortalReport(RunPortalReport $parameters)
    {
        return $this->__soapCall('RunPortalReport', array($parameters));
    }

    /**
     * Runs a particular report with a given set of conditions.
     *
     * @param RunReportQuery $parameters
     * @return RunReportQueryResponse
     */
    public function RunReportQuery(RunReportQuery $parameters)
    {
        return $this->__soapCall('RunReportQuery', array($parameters));
    }

    /**
     * Runs a particular report with a given set of conditions and a set of field filters.
     *
     * @param RunReportQueryWithFilters $parameters
     * @return RunReportQueryWithFiltersResponse
     */
    public function RunReportQueryWithFilters(RunReportQueryWithFilters $parameters)
    {
        return $this->__soapCall('RunReportQueryWithFilters', array($parameters));
    }

    /**
     * Runs a particular report with a given set of conditions and pre-defined timeout
     *
     * @param RunReportQueryWithTimeout $parameters
     * @return RunReportQueryWithTimeoutResponse
     */
    public function RunReportQueryWithTimeout(RunReportQueryWithTimeout $parameters)
    {
        return $this->__soapCall('RunReportQueryWithTimeout', array($parameters));
    }

    /**
     * Runs a particular report with a given set of conditions.  Returnss the # of records that would be returned.
     *
     * @param RunReportCount $parameters
     * @return RunReportCountResponse
     */
    public function RunReportCount(RunReportCount $parameters)
    {
        return $this->__soapCall('RunReportCount', array($parameters));
    }

}
