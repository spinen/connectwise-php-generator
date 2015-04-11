<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class KnowledgeBaseResult extends TicketBase
{

    /**
     * @param string $CompanyName
     * @param string $ContactName
     * @param string $AddressLine1
     * @param string $AddressLine2
     * @param string $City
     * @param string $StateIdentifier
     * @param string $Zip
     * @param string $Country
     * @param string $Board
     * @param string $TicketStatus
     * @param string $StatusName
     * @param boolean $ClosedFlag
     * @param string $Type
     * @param string $ServiceType
     * @param string $ServiceSubType
     * @param string $ServiceItem
     * @param string $Priority
     * @param string $Location
     * @param string $Source
     * @param string $Summary
     * @param string $DetailDescription
     * @param string $InternalDescription
     * @param string $ResolutionDescription
     * @param string $SiteName
     * @param boolean $Approved
     * @param string $ClosedBy
     * @param string $UpdatedBy
     * @param boolean $EmergencyFlag
     * @param string $EnteredBy
     * @param string $RecordType
     */
    public function __construct($CompanyName = null, $ContactName = null, $AddressLine1 = null, $AddressLine2 = null, $City = null, $StateIdentifier = null, $Zip = null, $Country = null, $Board = null, $TicketStatus = null, $StatusName = null, $ClosedFlag = null, $Type = null, $ServiceType = null, $ServiceSubType = null, $ServiceItem = null, $Priority = null, $Location = null, $Source = null, $Summary = null, $DetailDescription = null, $InternalDescription = null, $ResolutionDescription = null, $SiteName = null, $Approved = null, $ClosedBy = null, $UpdatedBy = null, $EmergencyFlag = null, $EnteredBy = null, $RecordType = null)
    {
        parent::__construct($CompanyName, $ContactName, $AddressLine1, $AddressLine2, $City, $StateIdentifier, $Zip, $Country, $Board, $TicketStatus, $StatusName, $ClosedFlag, $Type, $ServiceType, $ServiceSubType, $ServiceItem, $Priority, $Location, $Source, $Summary, $DetailDescription, $InternalDescription, $ResolutionDescription, $SiteName, $Approved, $ClosedBy, $UpdatedBy, $EmergencyFlag, $EnteredBy, $RecordType);
    }

}
