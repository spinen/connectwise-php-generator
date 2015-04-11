<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ManagedWorkstationsData extends ManagedMachineData
{

    /**
     * @param string $GroupIdentifier
     * @param string $DeviceIdentifier
     * @param string $ComputerName
     * @param string $SerialNumber
     * @param string $DateInstalled
     * @param string $ModelNumber
     * @param string $IPAddress
     * @param string $DefaultGatewayIPAddress
     * @param string $OSType
     * @param string $OSInfo
     * @param string $ProcessorDescription
     * @param string $RamSize
     * @param ArrayOfHardDrive $HardDrives
     * @param string $LastUsernameLogin
     * @param string $ManagementLink
     * @param string $RemoteLink
     * @param boolean $IsActive
     * @param string $MacAddress
     * @param string $CustomField
     */
    public function __construct($GroupIdentifier = null, $DeviceIdentifier = null, $ComputerName = null, $SerialNumber = null, $DateInstalled = null, $ModelNumber = null, $IPAddress = null, $DefaultGatewayIPAddress = null, $OSType = null, $OSInfo = null, $ProcessorDescription = null, $RamSize = null, $HardDrives = null, $LastUsernameLogin = null, $ManagementLink = null, $RemoteLink = null, $IsActive = null, $MacAddress = null, $CustomField = null)
    {
        parent::__construct($GroupIdentifier, $DeviceIdentifier, $ComputerName, $SerialNumber, $DateInstalled, $ModelNumber, $IPAddress, $DefaultGatewayIPAddress, $OSType, $OSInfo, $ProcessorDescription, $RamSize, $HardDrives, $LastUsernameLogin, $ManagementLink, $RemoteLink, $IsActive, $MacAddress, $CustomField);
    }

}
