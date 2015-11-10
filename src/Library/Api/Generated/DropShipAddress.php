<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class DropShipAddress extends PurchasingCompanyAddress
{

    /**
     * @param int $Id
     * @param string $ContactName
     * @param string $POPhone
     * @param string $PhoneExt
     * @param string $SiteName
     * @param string $StreetLine1
     * @param string $StreetLine2
     * @param string $City
     * @param string $Country
     * @param string $State
     * @param string $Zip
     */
    public function __construct($Id = null, $ContactName = null, $POPhone = null, $PhoneExt = null, $SiteName = null, $StreetLine1 = null, $StreetLine2 = null, $City = null, $Country = null, $State = null, $Zip = null)
    {
        parent::__construct($Id, $ContactName, $POPhone, $PhoneExt, $SiteName, $StreetLine1, $StreetLine2, $City, $Country, $State, $Zip);
    }

}
