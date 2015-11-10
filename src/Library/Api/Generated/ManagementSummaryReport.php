<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ManagementSummaryReport
{

    /**
     * @var string $GroupIdentifier
     */
    protected $GroupIdentifier = null;

    /**
     * @var string $DeviceType
     */
    protected $DeviceType = null;

    /**
     * @var int $SNMPMachines
     */
    protected $SNMPMachines = null;

    /**
     * @var int $TotalWorkstations
     */
    protected $TotalWorkstations = null;

    /**
     * @var int $TotalServers
     */
    protected $TotalServers = null;

    /**
     * @var int $TotalWindowsServers
     */
    protected $TotalWindowsServers = null;

    /**
     * @var int $TotalWindowsWorkstations
     */
    protected $TotalWindowsWorkstations = null;

    /**
     * @var int $TotalManagedMachines
     */
    protected $TotalManagedMachines = null;

    /**
     * @var int $ServersOffline
     */
    protected $ServersOffline = null;

    /**
     * @var int $ServersDiskSpaceLow
     */
    protected $ServersDiskSpaceLow = null;

    /**
     * @var int $FailedBackupJobs
     */
    protected $FailedBackupJobs = null;

    /**
     * @var int $TotalNotifications
     */
    protected $TotalNotifications = null;

    /**
     * @var int $SuccessfulBackupJobs
     */
    protected $SuccessfulBackupJobs = null;

    /**
     * @var int $ServerAvailability
     */
    protected $ServerAvailability = null;

    /**
     * @var int $VirusesRemoved
     */
    protected $VirusesRemoved = null;

    /**
     * @var int $SpywareItemsRemoved
     */
    protected $SpywareItemsRemoved = null;

    /**
     * @var int $WindowsPatchesInstalled
     */
    protected $WindowsPatchesInstalled = null;

    /**
     * @var int $DiskCleanups
     */
    protected $DiskCleanups = null;

    /**
     * @var int $DiskDefragmentations
     */
    protected $DiskDefragmentations = null;

    /**
     * @var int $FullyPatchedMachines
     */
    protected $FullyPatchedMachines = null;

    /**
     * @var int $MissingOneTwoPatchesMachines
     */
    protected $MissingOneTwoPatchesMachines = null;

    /**
     * @var int $MissingThreeFivePatchesMachines
     */
    protected $MissingThreeFivePatchesMachines = null;

    /**
     * @var int $MissingMoreFivePatchesMachines
     */
    protected $MissingMoreFivePatchesMachines = null;

    /**
     * @var int $MissingUnscannedPatchesMachines
     */
    protected $MissingUnscannedPatchesMachines = null;

    /**
     * @var string $AlertsGenerated
     */
    protected $AlertsGenerated = null;

    /**
     * @var float $InternetConnectivity
     */
    protected $InternetConnectivity = null;

    /**
     * @var int $DiskSpaceCleanedMb
     */
    protected $DiskSpaceCleanedMb = null;

    /**
     * @var string $MissingSecurityPatches
     */
    protected $MissingSecurityPatches = null;

    /**
     * @var float $CPUUtilization
     */
    protected $CPUUtilization = null;

    /**
     * @var float $MemoryUtilization
     */
    protected $MemoryUtilization = null;

    /**
     * @param string $GroupIdentifier
     * @param string $DeviceType
     * @param int $SNMPMachines
     * @param int $TotalWorkstations
     * @param int $TotalServers
     * @param int $TotalWindowsServers
     * @param int $TotalWindowsWorkstations
     * @param int $TotalManagedMachines
     * @param int $ServersOffline
     * @param int $ServersDiskSpaceLow
     * @param int $FailedBackupJobs
     * @param int $TotalNotifications
     * @param int $SuccessfulBackupJobs
     * @param int $ServerAvailability
     * @param int $VirusesRemoved
     * @param int $SpywareItemsRemoved
     * @param int $WindowsPatchesInstalled
     * @param int $DiskCleanups
     * @param int $DiskDefragmentations
     * @param int $FullyPatchedMachines
     * @param int $MissingOneTwoPatchesMachines
     * @param int $MissingThreeFivePatchesMachines
     * @param int $MissingMoreFivePatchesMachines
     * @param int $MissingUnscannedPatchesMachines
     * @param string $AlertsGenerated
     * @param float $InternetConnectivity
     * @param int $DiskSpaceCleanedMb
     * @param string $MissingSecurityPatches
     * @param float $CPUUtilization
     * @param float $MemoryUtilization
     */
    public function __construct($GroupIdentifier = null, $DeviceType = null, $SNMPMachines = null, $TotalWorkstations = null, $TotalServers = null, $TotalWindowsServers = null, $TotalWindowsWorkstations = null, $TotalManagedMachines = null, $ServersOffline = null, $ServersDiskSpaceLow = null, $FailedBackupJobs = null, $TotalNotifications = null, $SuccessfulBackupJobs = null, $ServerAvailability = null, $VirusesRemoved = null, $SpywareItemsRemoved = null, $WindowsPatchesInstalled = null, $DiskCleanups = null, $DiskDefragmentations = null, $FullyPatchedMachines = null, $MissingOneTwoPatchesMachines = null, $MissingThreeFivePatchesMachines = null, $MissingMoreFivePatchesMachines = null, $MissingUnscannedPatchesMachines = null, $AlertsGenerated = null, $InternetConnectivity = null, $DiskSpaceCleanedMb = null, $MissingSecurityPatches = null, $CPUUtilization = null, $MemoryUtilization = null)
    {
        $this->GroupIdentifier                 = $GroupIdentifier;
        $this->DeviceType                      = $DeviceType;
        $this->SNMPMachines                    = $SNMPMachines;
        $this->TotalWorkstations               = $TotalWorkstations;
        $this->TotalServers                    = $TotalServers;
        $this->TotalWindowsServers             = $TotalWindowsServers;
        $this->TotalWindowsWorkstations        = $TotalWindowsWorkstations;
        $this->TotalManagedMachines            = $TotalManagedMachines;
        $this->ServersOffline                  = $ServersOffline;
        $this->ServersDiskSpaceLow             = $ServersDiskSpaceLow;
        $this->FailedBackupJobs                = $FailedBackupJobs;
        $this->TotalNotifications              = $TotalNotifications;
        $this->SuccessfulBackupJobs            = $SuccessfulBackupJobs;
        $this->ServerAvailability              = $ServerAvailability;
        $this->VirusesRemoved                  = $VirusesRemoved;
        $this->SpywareItemsRemoved             = $SpywareItemsRemoved;
        $this->WindowsPatchesInstalled         = $WindowsPatchesInstalled;
        $this->DiskCleanups                    = $DiskCleanups;
        $this->DiskDefragmentations            = $DiskDefragmentations;
        $this->FullyPatchedMachines            = $FullyPatchedMachines;
        $this->MissingOneTwoPatchesMachines    = $MissingOneTwoPatchesMachines;
        $this->MissingThreeFivePatchesMachines = $MissingThreeFivePatchesMachines;
        $this->MissingMoreFivePatchesMachines  = $MissingMoreFivePatchesMachines;
        $this->MissingUnscannedPatchesMachines = $MissingUnscannedPatchesMachines;
        $this->AlertsGenerated                 = $AlertsGenerated;
        $this->InternetConnectivity            = $InternetConnectivity;
        $this->DiskSpaceCleanedMb              = $DiskSpaceCleanedMb;
        $this->MissingSecurityPatches          = $MissingSecurityPatches;
        $this->CPUUtilization                  = $CPUUtilization;
        $this->MemoryUtilization               = $MemoryUtilization;
    }

    /**
     * @return string
     */
    public function getGroupIdentifier()
    {
        return $this->GroupIdentifier;
    }

    /**
     * @param string $GroupIdentifier
     * @return \Spinen\ConnectWise\Library\Api\Generated\ManagementSummaryReport
     */
    public function setGroupIdentifier($GroupIdentifier)
    {
        $this->GroupIdentifier = $GroupIdentifier;
        return $this;
    }

    /**
     * @return string
     */
    public function getDeviceType()
    {
        return $this->DeviceType;
    }

    /**
     * @param string $DeviceType
     * @return \Spinen\ConnectWise\Library\Api\Generated\ManagementSummaryReport
     */
    public function setDeviceType($DeviceType)
    {
        $this->DeviceType = $DeviceType;
        return $this;
    }

    /**
     * @return int
     */
    public function getSNMPMachines()
    {
        return $this->SNMPMachines;
    }

    /**
     * @param int $SNMPMachines
     * @return \Spinen\ConnectWise\Library\Api\Generated\ManagementSummaryReport
     */
    public function setSNMPMachines($SNMPMachines)
    {
        $this->SNMPMachines = $SNMPMachines;
        return $this;
    }

    /**
     * @return int
     */
    public function getTotalWorkstations()
    {
        return $this->TotalWorkstations;
    }

    /**
     * @param int $TotalWorkstations
     * @return \Spinen\ConnectWise\Library\Api\Generated\ManagementSummaryReport
     */
    public function setTotalWorkstations($TotalWorkstations)
    {
        $this->TotalWorkstations = $TotalWorkstations;
        return $this;
    }

    /**
     * @return int
     */
    public function getTotalServers()
    {
        return $this->TotalServers;
    }

    /**
     * @param int $TotalServers
     * @return \Spinen\ConnectWise\Library\Api\Generated\ManagementSummaryReport
     */
    public function setTotalServers($TotalServers)
    {
        $this->TotalServers = $TotalServers;
        return $this;
    }

    /**
     * @return int
     */
    public function getTotalWindowsServers()
    {
        return $this->TotalWindowsServers;
    }

    /**
     * @param int $TotalWindowsServers
     * @return \Spinen\ConnectWise\Library\Api\Generated\ManagementSummaryReport
     */
    public function setTotalWindowsServers($TotalWindowsServers)
    {
        $this->TotalWindowsServers = $TotalWindowsServers;
        return $this;
    }

    /**
     * @return int
     */
    public function getTotalWindowsWorkstations()
    {
        return $this->TotalWindowsWorkstations;
    }

    /**
     * @param int $TotalWindowsWorkstations
     * @return \Spinen\ConnectWise\Library\Api\Generated\ManagementSummaryReport
     */
    public function setTotalWindowsWorkstations($TotalWindowsWorkstations)
    {
        $this->TotalWindowsWorkstations = $TotalWindowsWorkstations;
        return $this;
    }

    /**
     * @return int
     */
    public function getTotalManagedMachines()
    {
        return $this->TotalManagedMachines;
    }

    /**
     * @param int $TotalManagedMachines
     * @return \Spinen\ConnectWise\Library\Api\Generated\ManagementSummaryReport
     */
    public function setTotalManagedMachines($TotalManagedMachines)
    {
        $this->TotalManagedMachines = $TotalManagedMachines;
        return $this;
    }

    /**
     * @return int
     */
    public function getServersOffline()
    {
        return $this->ServersOffline;
    }

    /**
     * @param int $ServersOffline
     * @return \Spinen\ConnectWise\Library\Api\Generated\ManagementSummaryReport
     */
    public function setServersOffline($ServersOffline)
    {
        $this->ServersOffline = $ServersOffline;
        return $this;
    }

    /**
     * @return int
     */
    public function getServersDiskSpaceLow()
    {
        return $this->ServersDiskSpaceLow;
    }

    /**
     * @param int $ServersDiskSpaceLow
     * @return \Spinen\ConnectWise\Library\Api\Generated\ManagementSummaryReport
     */
    public function setServersDiskSpaceLow($ServersDiskSpaceLow)
    {
        $this->ServersDiskSpaceLow = $ServersDiskSpaceLow;
        return $this;
    }

    /**
     * @return int
     */
    public function getFailedBackupJobs()
    {
        return $this->FailedBackupJobs;
    }

    /**
     * @param int $FailedBackupJobs
     * @return \Spinen\ConnectWise\Library\Api\Generated\ManagementSummaryReport
     */
    public function setFailedBackupJobs($FailedBackupJobs)
    {
        $this->FailedBackupJobs = $FailedBackupJobs;
        return $this;
    }

    /**
     * @return int
     */
    public function getTotalNotifications()
    {
        return $this->TotalNotifications;
    }

    /**
     * @param int $TotalNotifications
     * @return \Spinen\ConnectWise\Library\Api\Generated\ManagementSummaryReport
     */
    public function setTotalNotifications($TotalNotifications)
    {
        $this->TotalNotifications = $TotalNotifications;
        return $this;
    }

    /**
     * @return int
     */
    public function getSuccessfulBackupJobs()
    {
        return $this->SuccessfulBackupJobs;
    }

    /**
     * @param int $SuccessfulBackupJobs
     * @return \Spinen\ConnectWise\Library\Api\Generated\ManagementSummaryReport
     */
    public function setSuccessfulBackupJobs($SuccessfulBackupJobs)
    {
        $this->SuccessfulBackupJobs = $SuccessfulBackupJobs;
        return $this;
    }

    /**
     * @return int
     */
    public function getServerAvailability()
    {
        return $this->ServerAvailability;
    }

    /**
     * @param int $ServerAvailability
     * @return \Spinen\ConnectWise\Library\Api\Generated\ManagementSummaryReport
     */
    public function setServerAvailability($ServerAvailability)
    {
        $this->ServerAvailability = $ServerAvailability;
        return $this;
    }

    /**
     * @return int
     */
    public function getVirusesRemoved()
    {
        return $this->VirusesRemoved;
    }

    /**
     * @param int $VirusesRemoved
     * @return \Spinen\ConnectWise\Library\Api\Generated\ManagementSummaryReport
     */
    public function setVirusesRemoved($VirusesRemoved)
    {
        $this->VirusesRemoved = $VirusesRemoved;
        return $this;
    }

    /**
     * @return int
     */
    public function getSpywareItemsRemoved()
    {
        return $this->SpywareItemsRemoved;
    }

    /**
     * @param int $SpywareItemsRemoved
     * @return \Spinen\ConnectWise\Library\Api\Generated\ManagementSummaryReport
     */
    public function setSpywareItemsRemoved($SpywareItemsRemoved)
    {
        $this->SpywareItemsRemoved = $SpywareItemsRemoved;
        return $this;
    }

    /**
     * @return int
     */
    public function getWindowsPatchesInstalled()
    {
        return $this->WindowsPatchesInstalled;
    }

    /**
     * @param int $WindowsPatchesInstalled
     * @return \Spinen\ConnectWise\Library\Api\Generated\ManagementSummaryReport
     */
    public function setWindowsPatchesInstalled($WindowsPatchesInstalled)
    {
        $this->WindowsPatchesInstalled = $WindowsPatchesInstalled;
        return $this;
    }

    /**
     * @return int
     */
    public function getDiskCleanups()
    {
        return $this->DiskCleanups;
    }

    /**
     * @param int $DiskCleanups
     * @return \Spinen\ConnectWise\Library\Api\Generated\ManagementSummaryReport
     */
    public function setDiskCleanups($DiskCleanups)
    {
        $this->DiskCleanups = $DiskCleanups;
        return $this;
    }

    /**
     * @return int
     */
    public function getDiskDefragmentations()
    {
        return $this->DiskDefragmentations;
    }

    /**
     * @param int $DiskDefragmentations
     * @return \Spinen\ConnectWise\Library\Api\Generated\ManagementSummaryReport
     */
    public function setDiskDefragmentations($DiskDefragmentations)
    {
        $this->DiskDefragmentations = $DiskDefragmentations;
        return $this;
    }

    /**
     * @return int
     */
    public function getFullyPatchedMachines()
    {
        return $this->FullyPatchedMachines;
    }

    /**
     * @param int $FullyPatchedMachines
     * @return \Spinen\ConnectWise\Library\Api\Generated\ManagementSummaryReport
     */
    public function setFullyPatchedMachines($FullyPatchedMachines)
    {
        $this->FullyPatchedMachines = $FullyPatchedMachines;
        return $this;
    }

    /**
     * @return int
     */
    public function getMissingOneTwoPatchesMachines()
    {
        return $this->MissingOneTwoPatchesMachines;
    }

    /**
     * @param int $MissingOneTwoPatchesMachines
     * @return \Spinen\ConnectWise\Library\Api\Generated\ManagementSummaryReport
     */
    public function setMissingOneTwoPatchesMachines($MissingOneTwoPatchesMachines)
    {
        $this->MissingOneTwoPatchesMachines = $MissingOneTwoPatchesMachines;
        return $this;
    }

    /**
     * @return int
     */
    public function getMissingThreeFivePatchesMachines()
    {
        return $this->MissingThreeFivePatchesMachines;
    }

    /**
     * @param int $MissingThreeFivePatchesMachines
     * @return \Spinen\ConnectWise\Library\Api\Generated\ManagementSummaryReport
     */
    public function setMissingThreeFivePatchesMachines($MissingThreeFivePatchesMachines)
    {
        $this->MissingThreeFivePatchesMachines = $MissingThreeFivePatchesMachines;
        return $this;
    }

    /**
     * @return int
     */
    public function getMissingMoreFivePatchesMachines()
    {
        return $this->MissingMoreFivePatchesMachines;
    }

    /**
     * @param int $MissingMoreFivePatchesMachines
     * @return \Spinen\ConnectWise\Library\Api\Generated\ManagementSummaryReport
     */
    public function setMissingMoreFivePatchesMachines($MissingMoreFivePatchesMachines)
    {
        $this->MissingMoreFivePatchesMachines = $MissingMoreFivePatchesMachines;
        return $this;
    }

    /**
     * @return int
     */
    public function getMissingUnscannedPatchesMachines()
    {
        return $this->MissingUnscannedPatchesMachines;
    }

    /**
     * @param int $MissingUnscannedPatchesMachines
     * @return \Spinen\ConnectWise\Library\Api\Generated\ManagementSummaryReport
     */
    public function setMissingUnscannedPatchesMachines($MissingUnscannedPatchesMachines)
    {
        $this->MissingUnscannedPatchesMachines = $MissingUnscannedPatchesMachines;
        return $this;
    }

    /**
     * @return string
     */
    public function getAlertsGenerated()
    {
        return $this->AlertsGenerated;
    }

    /**
     * @param string $AlertsGenerated
     * @return \Spinen\ConnectWise\Library\Api\Generated\ManagementSummaryReport
     */
    public function setAlertsGenerated($AlertsGenerated)
    {
        $this->AlertsGenerated = $AlertsGenerated;
        return $this;
    }

    /**
     * @return float
     */
    public function getInternetConnectivity()
    {
        return $this->InternetConnectivity;
    }

    /**
     * @param float $InternetConnectivity
     * @return \Spinen\ConnectWise\Library\Api\Generated\ManagementSummaryReport
     */
    public function setInternetConnectivity($InternetConnectivity)
    {
        $this->InternetConnectivity = $InternetConnectivity;
        return $this;
    }

    /**
     * @return int
     */
    public function getDiskSpaceCleanedMb()
    {
        return $this->DiskSpaceCleanedMb;
    }

    /**
     * @param int $DiskSpaceCleanedMb
     * @return \Spinen\ConnectWise\Library\Api\Generated\ManagementSummaryReport
     */
    public function setDiskSpaceCleanedMb($DiskSpaceCleanedMb)
    {
        $this->DiskSpaceCleanedMb = $DiskSpaceCleanedMb;
        return $this;
    }

    /**
     * @return string
     */
    public function getMissingSecurityPatches()
    {
        return $this->MissingSecurityPatches;
    }

    /**
     * @param string $MissingSecurityPatches
     * @return \Spinen\ConnectWise\Library\Api\Generated\ManagementSummaryReport
     */
    public function setMissingSecurityPatches($MissingSecurityPatches)
    {
        $this->MissingSecurityPatches = $MissingSecurityPatches;
        return $this;
    }

    /**
     * @return float
     */
    public function getCPUUtilization()
    {
        return $this->CPUUtilization;
    }

    /**
     * @param float $CPUUtilization
     * @return \Spinen\ConnectWise\Library\Api\Generated\ManagementSummaryReport
     */
    public function setCPUUtilization($CPUUtilization)
    {
        $this->CPUUtilization = $CPUUtilization;
        return $this;
    }

    /**
     * @return float
     */
    public function getMemoryUtilization()
    {
        return $this->MemoryUtilization;
    }

    /**
     * @param float $MemoryUtilization
     * @return \Spinen\ConnectWise\Library\Api\Generated\ManagementSummaryReport
     */
    public function setMemoryUtilization($MemoryUtilization)
    {
        $this->MemoryUtilization = $MemoryUtilization;
        return $this;
    }

}
