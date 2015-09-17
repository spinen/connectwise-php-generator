<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

/**
 * ConnectWise Product API
 */
class ProductApi extends \Spinen\ConnectWise\Library\SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array(
        'GetProduct'                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetProduct',
        'ApiCredentials'                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ApiCredentials',
        'GetProductResponse'                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetProductResponse',
        'Product'                                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\Product',
        'ArrayOfComponent'                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfComponent',
        'Component'                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\Component',
        'LoadProduct'                                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\LoadProduct',
        'LoadProductResponse'                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\LoadProductResponse',
        'AddProduct'                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddProduct',
        'AddProductResponse'                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddProductResponse',
        'UpdateProduct'                              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateProduct',
        'UpdateProductResponse'                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateProductResponse',
        'AddOrUpdateProduct'                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateProduct',
        'AddOrUpdateProductResponse'                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateProductResponse',
        'DeleteProduct'                              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteProduct',
        'DeleteProductResponse'                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteProductResponse',
        'FindProducts'                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindProducts',
        'ArrayOfString'                              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfString',
        'FindProductsResponse'                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindProductsResponse',
        'ArrayOfProductFindResult'                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfProductFindResult',
        'ProductFindResult'                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ProductFindResult',
        'GetQuantityOnHand'                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetQuantityOnHand',
        'ProductQuantityOnHand'                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ProductQuantityOnHand',
        'GetQuantityOnHandResponse'                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetQuantityOnHandResponse',
        'GetProductPickedandShipped'                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetProductPickedandShipped',
        'GetProductPickedandShippedResponse'         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetProductPickedandShippedResponse',
        'ProductDetail'                              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ProductDetail',
        'ArrayOfInt'                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfInt',
        'AddOrUpdateProductPickedandShipped'         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateProductPickedandShipped',
        'AddOrUpdateProductPickedandShippedResponse' => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateProductPickedandShippedResponse',
        'DeleteProductPickedandShipped'              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteProductPickedandShipped',
        'DeleteProductPickedandShippedResponse'      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteProductPickedandShippedResponse',
        'AddOrUpdatePricingSchedule'                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdatePricingSchedule',
        'PricingSchedule'                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\PricingSchedule',
        'AddOrUpdatePricingScheduleResponse'         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdatePricingScheduleResponse',
        'GetPricingSchedule'                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetPricingSchedule',
        'GetPricingScheduleResponse'                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetPricingScheduleResponse',
        'DeletePricingSchedule'                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeletePricingSchedule',
        'DeletePricingScheduleResponse'              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeletePricingScheduleResponse',
        'FindPricingSchedules'                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindPricingSchedules',
        'FindPricingSchedulesResponse'               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindPricingSchedulesResponse',
        'ArrayOfPricingSchedule'                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfPricingSchedule',
        'AddOrUpdatePricingDetail'                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdatePricingDetail',
        'PricingDetail'                              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\PricingDetail',
        'AddOrUpdatePricingDetailResponse'           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdatePricingDetailResponse',
        'GetPricingDetail'                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetPricingDetail',
        'GetPricingDetailResponse'                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetPricingDetailResponse',
        'DeletePricingDetail'                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeletePricingDetail',
        'DeletePricingDetailResponse'                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeletePricingDetailResponse',
        'FindPricingDetails'                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindPricingDetails',
        'FindPricingDetailsResponse'                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindPricingDetailsResponse',
        'ArrayOfPricingDetail'                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfPricingDetail',
        'AddOrUpdatePriceBreak'                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdatePriceBreak',
        'PriceBreak'                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\PriceBreak',
        'AddOrUpdatePriceBreakResponse'              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdatePriceBreakResponse',
        'GetPriceBreak'                              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetPriceBreak',
        'GetPriceBreakResponse'                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetPriceBreakResponse',
        'DeletePriceBreak'                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeletePriceBreak',
        'DeletePriceBreakResponse'                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeletePriceBreakResponse',
        'FindPriceBreaks'                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindPriceBreaks',
        'FindPriceBreaksResponse'                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindPriceBreaksResponse',
        'ArrayOfPriceBreak'                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfPriceBreak',
        'SetCompanyPricingSchedule'                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\SetCompanyPricingSchedule',
        'SetCompanyPricingScheduleResponse'          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\SetCompanyPricingScheduleResponse',
        'RemoveCompanyPricingSchedule'               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\RemoveCompanyPricingSchedule',
        'RemoveCompanyPricingScheduleResponse'       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\RemoveCompanyPricingScheduleResponse',
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
    public function __construct($host, array $options = array(), $wsdl = '/v4_6_release/apis/2.0/ProductApi.asmx?wsdl')
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
     * Gets a product by database record id. If no product exists with the given id, null is returned.
     *
     * @param GetProduct $parameters
     * @return GetProductResponse
     */
    public function GetProduct(GetProduct $parameters)
    {
        return $this->__soapCall('GetProduct', array($parameters));
    }

    /**
     * Gets a product by database record id. If no product exists with the given id, an error is returned.
     *
     * @param LoadProduct $parameters
     * @return LoadProductResponse
     */
    public function LoadProduct(LoadProduct $parameters)
    {
        return $this->__soapCall('LoadProduct', array($parameters));
    }

    /**
     * Adds a new product.
     *
     * @param AddProduct $parameters
     * @return AddProductResponse
     */
    public function AddProduct(AddProduct $parameters)
    {
        return $this->__soapCall('AddProduct', array($parameters));
    }

    /**
     * Updates an existing product.
     *
     * @param UpdateProduct $parameters
     * @return UpdateProductResponse
     */
    public function UpdateProduct(UpdateProduct $parameters)
    {
        return $this->__soapCall('UpdateProduct', array($parameters));
    }

    /**
     * Adds or updates a product. If the product Id is 0, the product is added. If non-zero, the existing product with that Id is updated.
     *
     * @param AddOrUpdateProduct $parameters
     * @return AddOrUpdateProductResponse
     */
    public function AddOrUpdateProduct(AddOrUpdateProduct $parameters)
    {
        return $this->__soapCall('AddOrUpdateProduct', array($parameters));
    }

    /**
     * Deletes a product by database record id.
     *
     * @param DeleteProduct $parameters
     * @return DeleteProductResponse
     */
    public function DeleteProduct(DeleteProduct $parameters)
    {
        return $this->__soapCall('DeleteProduct', array($parameters));
    }

    /**
     * Finds product information by a set of conditions.
     *
     * @param FindProducts $parameters
     * @return FindProductsResponse
     */
    public function FindProducts(FindProducts $parameters)
    {
        return $this->__soapCall('FindProducts', array($parameters));
    }

    /**
     * Gets quantity on hand for product
     *
     * @param GetQuantityOnHand $parameters
     * @return GetQuantityOnHandResponse
     */
    public function GetQuantityOnHand(GetQuantityOnHand $parameters)
    {
        return $this->__soapCall('GetQuantityOnHand', array($parameters));
    }

    /**
     * Gets picking and shipping information for a product
     *
     * @param GetProductPickedandShipped $parameters
     * @return GetProductPickedandShippedResponse
     */
    public function GetProductPickedandShipped(GetProductPickedandShipped $parameters)
    {
        return $this->__soapCall('GetProductPickedandShipped', array($parameters));
    }

    /**
     * Add or Updates picking and shipping information for a product
     *
     * @param AddOrUpdateProductPickedandShipped $parameters
     * @return AddOrUpdateProductPickedandShippedResponse
     */
    public function AddOrUpdateProductPickedandShipped(AddOrUpdateProductPickedandShipped $parameters)
    {
        return $this->__soapCall('AddOrUpdateProductPickedandShipped', array($parameters));
    }

    /**
     * Deletes picking and shipping information for a product.
     *
     * @param DeleteProductPickedandShipped $parameters
     * @return DeleteProductPickedandShippedResponse
     */
    public function DeleteProductPickedandShipped(DeleteProductPickedandShipped $parameters)
    {
        return $this->__soapCall('DeleteProductPickedandShipped', array($parameters));
    }

    /**
     * Add or update pricing schedule.
     *
     * @param AddOrUpdatePricingSchedule $parameters
     * @return AddOrUpdatePricingScheduleResponse
     */
    public function AddOrUpdatePricingSchedule(AddOrUpdatePricingSchedule $parameters)
    {
        return $this->__soapCall('AddOrUpdatePricingSchedule', array($parameters));
    }

    /**
     * Get pricing schedule.
     *
     * @param GetPricingSchedule $parameters
     * @return GetPricingScheduleResponse
     */
    public function GetPricingSchedule(GetPricingSchedule $parameters)
    {
        return $this->__soapCall('GetPricingSchedule', array($parameters));
    }

    /**
     * Delete pricing schedule.
     *
     * @param DeletePricingSchedule $parameters
     * @return DeletePricingScheduleResponse
     */
    public function DeletePricingSchedule(DeletePricingSchedule $parameters)
    {
        return $this->__soapCall('DeletePricingSchedule', array($parameters));
    }

    /**
     * Get list of pricing schedules.
     *
     * @param FindPricingSchedules $parameters
     * @return FindPricingSchedulesResponse
     */
    public function FindPricingSchedules(FindPricingSchedules $parameters)
    {
        return $this->__soapCall('FindPricingSchedules', array($parameters));
    }

    /**
     * Add or update pricing detail.
     *
     * @param AddOrUpdatePricingDetail $parameters
     * @return AddOrUpdatePricingDetailResponse
     */
    public function AddOrUpdatePricingDetail(AddOrUpdatePricingDetail $parameters)
    {
        return $this->__soapCall('AddOrUpdatePricingDetail', array($parameters));
    }

    /**
     * Get pricing detail.
     *
     * @param GetPricingDetail $parameters
     * @return GetPricingDetailResponse
     */
    public function GetPricingDetail(GetPricingDetail $parameters)
    {
        return $this->__soapCall('GetPricingDetail', array($parameters));
    }

    /**
     * Delete pricing detail.
     *
     * @param DeletePricingDetail $parameters
     * @return DeletePricingDetailResponse
     */
    public function DeletePricingDetail(DeletePricingDetail $parameters)
    {
        return $this->__soapCall('DeletePricingDetail', array($parameters));
    }

    /**
     * Get list of pricing details.
     *
     * @param FindPricingDetails $parameters
     * @return FindPricingDetailsResponse
     */
    public function FindPricingDetails(FindPricingDetails $parameters)
    {
        return $this->__soapCall('FindPricingDetails', array($parameters));
    }

    /**
     * Add or update price break.
     *
     * @param AddOrUpdatePriceBreak $parameters
     * @return AddOrUpdatePriceBreakResponse
     */
    public function AddOrUpdatePriceBreak(AddOrUpdatePriceBreak $parameters)
    {
        return $this->__soapCall('AddOrUpdatePriceBreak', array($parameters));
    }

    /**
     * Get price break.
     *
     * @param GetPriceBreak $parameters
     * @return GetPriceBreakResponse
     */
    public function GetPriceBreak(GetPriceBreak $parameters)
    {
        return $this->__soapCall('GetPriceBreak', array($parameters));
    }

    /**
     * Delete price break.
     *
     * @param DeletePriceBreak $parameters
     * @return DeletePriceBreakResponse
     */
    public function DeletePriceBreak(DeletePriceBreak $parameters)
    {
        return $this->__soapCall('DeletePriceBreak', array($parameters));
    }

    /**
     * Get list of price breaks.
     *
     * @param FindPriceBreaks $parameters
     * @return FindPriceBreaksResponse
     */
    public function FindPriceBreaks(FindPriceBreaks $parameters)
    {
        return $this->__soapCall('FindPriceBreaks', array($parameters));
    }

    /**
     * Set a pricing schedule to a list of companies
     *
     * @param SetCompanyPricingSchedule $parameters
     * @return SetCompanyPricingScheduleResponse
     */
    public function SetCompanyPricingSchedule(SetCompanyPricingSchedule $parameters)
    {
        return $this->__soapCall('SetCompanyPricingSchedule', array($parameters));
    }

    /**
     * Remove a pricing schedule from a list of companies
     *
     * @param RemoveCompanyPricingSchedule $parameters
     * @return RemoveCompanyPricingScheduleResponse
     */
    public function RemoveCompanyPricingSchedule(RemoveCompanyPricingSchedule $parameters)
    {
        return $this->__soapCall('RemoveCompanyPricingSchedule', array($parameters));
    }

}
