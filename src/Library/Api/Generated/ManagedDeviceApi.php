<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

/**
 * ConnectWise Managed Device API
 */
class ManagedDeviceApi extends \Spinen\ConnectWise\Library\SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array(
        'UpdateManagedDevices'                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateManagedDevices',
        'ApiCredentials'                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ApiCredentials',
        'ArrayOfManagedDevice'                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfManagedDevice',
        'ManagedDevice'                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ManagedDevice',
        'DeviceInfo'                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeviceInfo',
        'ArrayOfConfigurationAnswer'             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfConfigurationAnswer',
        'ConfigurationAnswer'                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ConfigurationAnswer',
        'VendorCompany'                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\VendorCompany',
        'ManufacturerCompany'                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ManufacturerCompany',
        'BillingInfo'                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\BillingInfo',
        'UpdateManagedDevicesResponse'           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateManagedDevicesResponse',
        'UpdateManagementSolution'               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateManagementSolution',
        'ManagementSolution'                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ManagementSolution',
        'UpdateManagementSolutionResponse'       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateManagementSolutionResponse',
        'GetManagementItSetupsName'              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetManagementItSetupsName',
        'GetManagementItSetupsNameResponse'      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetManagementItSetupsNameResponse',
        'GetManagedGroup'                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetManagedGroup',
        'GetManagedGroupResponse'                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetManagedGroupResponse',
        'ArrayOfManagedGroup'                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfManagedGroup',
        'ManagedGroup'                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ManagedGroup',
        'GetManagedServers'                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetManagedServers',
        'GetManagedServersResponse'              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetManagedServersResponse',
        'ArrayOfManagedMachineData'              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfManagedMachineData',
        'ManagedMachineData'                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ManagedMachineData',
        'ArrayOfHardDrive'                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfHardDrive',
        'HardDrive'                              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\HardDrive',
        'GetManagedWorkstations'                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetManagedWorkstations',
        'GetManagedWorkstationsResponse'         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetManagedWorkstationsResponse',
        'UpdateManagedServers'                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateManagedServers',
        'ArrayOfManagedServersData'              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfManagedServersData',
        'ManagedServersData'                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ManagedServersData',
        'UpdateManagedServersResponse'           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateManagedServersResponse',
        'UpdateManagedWorkstations'              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateManagedWorkstations',
        'ArrayOfManagedWorkstationsData'         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfManagedWorkstationsData',
        'ManagedWorkstationsData'                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ManagedWorkstationsData',
        'UpdateManagedWorkstationsResponse'      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateManagedWorkstationsResponse',
        'UpdateSpamStatsDomains'                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateSpamStatsDomains',
        'ArrayOfSpamStatsDomainData'             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfSpamStatsDomainData',
        'SpamStatsDomainData'                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\SpamStatsDomainData',
        'UpdateSpamStatsDomainsResponse'         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateSpamStatsDomainsResponse',
        'UpdateManagementSummaryReports'         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateManagementSummaryReports',
        'ArrayOfManagementSummaryReport'         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfManagementSummaryReport',
        'ManagementSummaryReport'                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ManagementSummaryReport',
        'UpdateManagementSummaryReportsResponse' => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateManagementSummaryReportsResponse',
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
    public function __construct($host, array $options = array(), $wsdl = '/v4_6_release/apis/2.0/ManagedDeviceApi.asmx?wsdl')
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
     * Updates billing parameters for Managed Devices (agreements). Creates and updates Managed Devices (Configurations). Returns the error message
     *
     * @param UpdateManagedDevices $parameters
     * @return UpdateManagedDevicesResponse
     */
    public function UpdateManagedDevices(UpdateManagedDevices $parameters)
    {
        return $this->__soapCall('UpdateManagedDevices', array($parameters));
    }

    /**
     * Creates or Updates the Management Solution entry for a company. Returns the Id of the saved entry.
     *
     * @param UpdateManagementSolution $parameters
     * @return UpdateManagementSolutionResponse
     */
    public function UpdateManagementSolution(UpdateManagementSolution $parameters)
    {
        return $this->__soapCall('UpdateManagementSolution', array($parameters));
    }

    /**
     * Gets ManagementITSetup Name. Returns the name of the solution that you've defined in the Management IT setup table.
     *
     * @param GetManagementItSetupsName $parameters
     * @return GetManagementItSetupsNameResponse
     */
    public function GetManagementItSetupsName(GetManagementItSetupsName $parameters)
    {
        return $this->__soapCall('GetManagementItSetupsName', array($parameters));
    }

    /**
     * Gets the Managed Group. Returns the groupId and DeviceType of the Managed Group
     *
     * @param GetManagedGroup $parameters
     * @return GetManagedGroupResponse
     */
    public function GetManagedGroup(GetManagedGroup $parameters)
    {
        return $this->__soapCall('GetManagedGroup', array($parameters));
    }

    /**
     * Gets the Managed Server. Returns a list of the managed servers associated with the groupId
     *
     * @param GetManagedServers $parameters
     * @return GetManagedServersResponse
     */
    public function GetManagedServers(GetManagedServers $parameters)
    {
        return $this->__soapCall('GetManagedServers', array($parameters));
    }

    /**
     * Gets the Managed Workstation. Returns a list of the managed workstations associated with the groupId
     *
     * @param GetManagedWorkstations $parameters
     * @return GetManagedWorkstationsResponse
     */
    public function GetManagedWorkstations(GetManagedWorkstations $parameters)
    {
        return $this->__soapCall('GetManagedWorkstations', array($parameters));
    }

    /**
     * Creates or Updates Managed Servers
     *
     * @param UpdateManagedServers $parameters
     * @return UpdateManagedServersResponse
     */
    public function UpdateManagedServers(UpdateManagedServers $parameters)
    {
        return $this->__soapCall('UpdateManagedServers', array($parameters));
    }

    /**
     * Creates or Updates Managed Workstations
     *
     * @param UpdateManagedWorkstations $parameters
     * @return UpdateManagedWorkstationsResponse
     */
    public function UpdateManagedWorkstations(UpdateManagedWorkstations $parameters)
    {
        return $this->__soapCall('UpdateManagedWorkstations', array($parameters));
    }

    /**
     * @param UpdateSpamStatsDomains $parameters
     * @return UpdateSpamStatsDomainsResponse
     */
    public function UpdateSpamStatsDomains(UpdateSpamStatsDomains $parameters)
    {
        return $this->__soapCall('UpdateSpamStatsDomains', array($parameters));
    }

    /**
     * Creates or Updates the Management Summary Respor for a company.
     *
     * @param UpdateManagementSummaryReports $parameters
     * @return UpdateManagementSummaryReportsResponse
     */
    public function UpdateManagementSummaryReports(UpdateManagementSummaryReports $parameters)
    {
        return $this->__soapCall('UpdateManagementSummaryReports', array($parameters));
    }

}
