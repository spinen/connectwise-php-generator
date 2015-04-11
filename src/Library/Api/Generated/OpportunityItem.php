<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class OpportunityItem extends ProductItem
{

    /**
     * @param int $Id
     * @param float $QuantityCancelled
     * @param string $Description
     * @param string $ShortDescription
     * @param string $Warehouse
     * @param string $Bin
     * @param string $QuoteNumber
     * @param string $QuoteName
     * @param ArrayOfComponent $BundleComponents
     */
    public function __construct($Id = null, $QuantityCancelled = null, $Description = null, $ShortDescription = null, $Warehouse = null, $Bin = null, $QuoteNumber = null, $QuoteName = null, $BundleComponents = null)
    {
        parent::__construct($Id, $QuantityCancelled, $Description, $ShortDescription, $Warehouse, $Bin, $QuoteNumber, $QuoteName, $BundleComponents);
    }

}
