<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

/**
 * ConnectWise Purchasing API
 */
class PurchasingApi extends \Spinen\ConnectWise\Library\SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array(
        'GetPurchaseOrder'                                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetPurchaseOrder',
        'ApiCredentials'                                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ApiCredentials',
        'GetPurchaseOrderResponse'                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetPurchaseOrderResponse',
        'PurchaseOrder'                                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\PurchaseOrder',
        'CompanyReference'                                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\CompanyReference',
        'ContactReference'                                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ContactReference',
        'PurchasingCompanyAddress'                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\PurchasingCompanyAddress',
        'ArrayOfPurchaseOrderLineItem'                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfPurchaseOrderLineItem',
        'PurchaseOrderLineItem'                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\PurchaseOrderLineItem',
        'ArrayOfString'                                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfString',
        'LoadPurchaseOrder'                                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\LoadPurchaseOrder',
        'LoadPurchaseOrderResponse'                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\LoadPurchaseOrderResponse',
        'AddPurchaseOrder'                                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddPurchaseOrder',
        'PurchaseOrderUpdateValues'                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\PurchaseOrderUpdateValues',
        'DropShipAddress'                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DropShipAddress',
        'AddPurchaseOrderResponse'                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddPurchaseOrderResponse',
        'UpdatePurchaseOrder'                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdatePurchaseOrder',
        'UpdatePurchaseOrderResponse'                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdatePurchaseOrderResponse',
        'AddOrUpdatePurchaseOrder'                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdatePurchaseOrder',
        'AddOrUpdatePurchaseOrderResponse'                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdatePurchaseOrderResponse',
        'DeletePurchaseOrder'                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeletePurchaseOrder',
        'DeletePurchaseOrderResponse'                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeletePurchaseOrderResponse',
        'AddPurchaseOrderLineItem'                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddPurchaseOrderLineItem',
        'AddPurchaseOrderLineItemResponse'                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddPurchaseOrderLineItemResponse',
        'UpdatePurchaseOrderLineItem'                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdatePurchaseOrderLineItem',
        'UpdatePurchaseOrderLineItemResponse'                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdatePurchaseOrderLineItemResponse',
        'AddOrUpdatePurchaseOrderLineItem'                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdatePurchaseOrderLineItem',
        'AddOrUpdatePurchaseOrderLineItemResponse'            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdatePurchaseOrderLineItemResponse',
        'DeletePurchaseOrderLineItem'                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeletePurchaseOrderLineItem',
        'DeletePurchaseOrderLineItemResponse'                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeletePurchaseOrderLineItemResponse',
        'GetAllOpenProductDemands'                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAllOpenProductDemands',
        'GetAllOpenProductDemandsResponse'                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAllOpenProductDemandsResponse',
        'ArrayOfProductDemand'                                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfProductDemand',
        'ProductDemand'                                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ProductDemand',
        'CreatePurchaseOrderFromProductDemandsAction'         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\CreatePurchaseOrderFromProductDemandsAction',
        'ArrayOfProductDemandReference'                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfProductDemandReference',
        'ProductDemandReference'                              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ProductDemandReference',
        'CreatePurchaseOrderFromProductDemandsActionResponse' => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\CreatePurchaseOrderFromProductDemandsActionResponse',
        'FindPurchaseOrders'                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindPurchaseOrders',
        'FindPurchaseOrdersResponse'                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindPurchaseOrdersResponse',
        'ArrayOfPurchaseOrderFindResult'                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfPurchaseOrderFindResult',
        'PurchaseOrderFindResult'                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\PurchaseOrderFindResult',
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
    public function __construct($host, array $options = array(), $wsdl = '/v4_6_release/apis/2.0/PurchasingApi.asmx?wsdl')
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
     * Gets a purchase order by database record id. If no purchase order exists with the given id, null is returned.
     *
     * @param GetPurchaseOrder $parameters
     * @return GetPurchaseOrderResponse
     */
    public function GetPurchaseOrder(GetPurchaseOrder $parameters)
    {
        return $this->__soapCall('GetPurchaseOrder', array($parameters));
    }

    /**
     * Gets a purchase order by database record id. If no purchase order exists with the given id, an error is returned.
     *
     * @param LoadPurchaseOrder $parameters
     * @return LoadPurchaseOrderResponse
     */
    public function LoadPurchaseOrder(LoadPurchaseOrder $parameters)
    {
        return $this->__soapCall('LoadPurchaseOrder', array($parameters));
    }

    /**
     * Adds a new purchase order.
     *
     * @param AddPurchaseOrder $parameters
     * @return AddPurchaseOrderResponse
     */
    public function AddPurchaseOrder(AddPurchaseOrder $parameters)
    {
        return $this->__soapCall('AddPurchaseOrder', array($parameters));
    }

    /**
     * Updates an existing purchase order.
     *
     * @param UpdatePurchaseOrder $parameters
     * @return UpdatePurchaseOrderResponse
     */
    public function UpdatePurchaseOrder(UpdatePurchaseOrder $parameters)
    {
        return $this->__soapCall('UpdatePurchaseOrder', array($parameters));
    }

    /**
     * Adds or updates a purchase order. If the given Id is 0, a purchase order is added. If non-zero, the existing purchase order with that Id is updated.
     *
     * @param AddOrUpdatePurchaseOrder $parameters
     * @return AddOrUpdatePurchaseOrderResponse
     */
    public function AddOrUpdatePurchaseOrder(AddOrUpdatePurchaseOrder $parameters)
    {
        return $this->__soapCall('AddOrUpdatePurchaseOrder', array($parameters));
    }

    /**
     * Deletes a purchase order by database record id.
     *
     * @param DeletePurchaseOrder $parameters
     * @return DeletePurchaseOrderResponse
     */
    public function DeletePurchaseOrder(DeletePurchaseOrder $parameters)
    {
        return $this->__soapCall('DeletePurchaseOrder', array($parameters));
    }

    /**
     * Adds a new purchase order line item (one of the entries under the "Products" tab of the purchase order screen in ConnectWise).
     *
     * @param AddPurchaseOrderLineItem $parameters
     * @return AddPurchaseOrderLineItemResponse
     */
    public function AddPurchaseOrderLineItem(AddPurchaseOrderLineItem $parameters)
    {
        return $this->__soapCall('AddPurchaseOrderLineItem', array($parameters));
    }

    /**
     * Updates an existing purchase order line item (one of the entries under the "Products" tab of the purchase order screen in ConnectWise).
     *
     * @param UpdatePurchaseOrderLineItem $parameters
     * @return UpdatePurchaseOrderLineItemResponse
     */
    public function UpdatePurchaseOrderLineItem(UpdatePurchaseOrderLineItem $parameters)
    {
        return $this->__soapCall('UpdatePurchaseOrderLineItem', array($parameters));
    }

    /**
     * Adds or updates a purchase order line item (one of the entries under the "Products" tab of the purchase order screen in ConnectWise). If the given Id is 0, a purchase order line item is added. If non-zero, the existing purchase order line item with that Id is updated.
     *
     * @param AddOrUpdatePurchaseOrderLineItem $parameters
     * @return AddOrUpdatePurchaseOrderLineItemResponse
     */
    public function AddOrUpdatePurchaseOrderLineItem(AddOrUpdatePurchaseOrderLineItem $parameters)
    {
        return $this->__soapCall('AddOrUpdatePurchaseOrderLineItem', array($parameters));
    }

    /**
     * Deletes a purchase order line item by database record id.
     *
     * @param DeletePurchaseOrderLineItem $parameters
     * @return DeletePurchaseOrderLineItemResponse
     */
    public function DeletePurchaseOrderLineItem(DeletePurchaseOrderLineItem $parameters)
    {
        return $this->__soapCall('DeletePurchaseOrderLineItem', array($parameters));
    }

    /**
     * Gets all open product demands throughout the system with the option to include demands which are already fully satisfied by the stock on hand at the warehouse they are scheduled to be shipped to.
     *
     * @param GetAllOpenProductDemands $parameters
     * @return GetAllOpenProductDemandsResponse
     */
    public function GetAllOpenProductDemands(GetAllOpenProductDemands $parameters)
    {
        return $this->__soapCall('GetAllOpenProductDemands', array($parameters));
    }

    /**
     * Creates a new puchase order from a list of specific open product demands in the system.
     *
     * @param CreatePurchaseOrderFromProductDemandsAction $parameters
     * @return CreatePurchaseOrderFromProductDemandsActionResponse
     */
    public function CreatePurchaseOrderFromProductDemandsAction(CreatePurchaseOrderFromProductDemandsAction $parameters)
    {
        return $this->__soapCall('CreatePurchaseOrderFromProductDemandsAction', array($parameters));
    }

    /**
     * Finds purchase orders information by a set of conditions.
     *
     * @param FindPurchaseOrders $parameters
     * @return FindPurchaseOrdersResponse
     */
    public function FindPurchaseOrders(FindPurchaseOrders $parameters)
    {
        return $this->__soapCall('FindPurchaseOrders', array($parameters));
    }

}
