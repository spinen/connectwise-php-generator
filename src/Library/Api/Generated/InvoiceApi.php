<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

/**
 * ConnectWise Invoice API
 */
class InvoiceApi extends \Spinen\ConnectWise\Library\SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array(
        'GetInvoice'                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetInvoice',
        'ApiCredentials'                              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ApiCredentials',
        'GetInvoiceResponse'                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetInvoiceResponse',
        'Invoice'                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\Invoice',
        'Company'                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\Company',
        'CompanyAddress'                              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\CompanyAddress',
        'Address'                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\Address',
        'ArrayOfString'                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfString',
        'ArrayOfCompanyAddress'                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfCompanyAddress',
        'Contact'                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\Contact',
        'CompanyAddressInfo'                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\CompanyAddressInfo',
        'ArrayOfContactCommunicationItem'             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfContactCommunicationItem',
        'ContactCommunicationItem'                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ContactCommunicationItem',
        'ArrayOfExpenseDetail'                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfExpenseDetail',
        'ExpenseDetail'                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ExpenseDetail',
        'ArrayOfProductDetail'                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfProductDetail',
        'ProductDetail'                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ProductDetail',
        'ArrayOfTimeDetail'                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfTimeDetail',
        'TimeDetail'                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\TimeDetail',
        'ArrayOfSalesTaxDetail'                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfSalesTaxDetail',
        'SalesTaxDetail'                              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\SalesTaxDetail',
        'ArrayOfAgreementDetail'                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfAgreementDetail',
        'AgreementDetail'                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AgreementDetail',
        'LoadInvoice'                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\LoadInvoice',
        'LoadInvoiceResponse'                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\LoadInvoiceResponse',
        'GetInvoiceByInvoiceNumber'                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetInvoiceByInvoiceNumber',
        'GetInvoiceByInvoiceNumberResponse'           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetInvoiceByInvoiceNumberResponse',
        'FindInvoices'                                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindInvoices',
        'FindInvoicesResponse'                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindInvoicesResponse',
        'ArrayOfInvoiceFindResult'                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfInvoiceFindResult',
        'InvoiceFindResult'                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\InvoiceFindResult',
        'FindInvoiceCount'                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindInvoiceCount',
        'FindInvoiceCountResponse'                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindInvoiceCountResponse',
        'GetInvoicePdf'                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetInvoicePdf',
        'GetInvoicePdfResponse'                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetInvoicePdfResponse',
        'GetSpecialInvoice'                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetSpecialInvoice',
        'GetSpecialInvoiceResponse'                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetSpecialInvoiceResponse',
        'SpecialInvoice'                              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\SpecialInvoice',
        'ApplyTo'                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ApplyTo',
        'ArrayOfSpecialInvoiceProduct'                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfSpecialInvoiceProduct',
        'SpecialInvoiceProduct'                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\SpecialInvoiceProduct',
        'ProductItem'                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ProductItem',
        'ArrayOfComponent'                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfComponent',
        'Component'                                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\Component',
        'GetSpecialInvoiceByInvoiceNumber'            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetSpecialInvoiceByInvoiceNumber',
        'GetSpecialInvoiceByInvoiceNumberResponse'    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetSpecialInvoiceByInvoiceNumberResponse',
        'AddOrUpdateSpecialInvoice'                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateSpecialInvoice',
        'AddOrUpdateSpecialInvoiceResponse'           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateSpecialInvoiceResponse',
        'DeleteSpecialInvoice'                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteSpecialInvoice',
        'DeleteSpecialInvoiceResponse'                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteSpecialInvoiceResponse',
        'DeleteSpecialInvoiceByInvoiceNumber'         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteSpecialInvoiceByInvoiceNumber',
        'DeleteSpecialInvoiceByInvoiceNumberResponse' => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteSpecialInvoiceByInvoiceNumberResponse',
        'GetApplyToForCompanyByType'                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetApplyToForCompanyByType',
        'GetApplyToForCompanyByTypeResponse'          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetApplyToForCompanyByTypeResponse',
        'ArrayOfApplyTo'                              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfApplyTo',
        'FindSpecialInvoices'                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindSpecialInvoices',
        'FindSpecialInvoicesResponse'                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindSpecialInvoicesResponse',
        'ArrayOfSpecialInvoiceFindResult'             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfSpecialInvoiceFindResult',
        'SpecialInvoiceFindResult'                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\SpecialInvoiceFindResult',
        'AddOrUpdateSpecialInvoiceProduct'            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateSpecialInvoiceProduct',
        'AddOrUpdateSpecialInvoiceProductResponse'    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateSpecialInvoiceProductResponse',
        'DeleteSpecialInvoiceProduct'                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteSpecialInvoiceProduct',
        'DeleteSpecialInvoiceProductResponse'         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteSpecialInvoiceProductResponse',
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
    public function __construct($host, array $options = array(), $wsdl = '/v4_6_release/apis/2.0/InvoiceApi.asmx?wsdl')
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
     * Gets an invoice by database record id. If no invoice exists with the given id, null is returned.
     *
     * @param GetInvoice $parameters
     * @return GetInvoiceResponse
     */
    public function GetInvoice(GetInvoice $parameters)
    {
        return $this->__soapCall('GetInvoice', array($parameters));
    }

    /**
     * Gets an invoice by database record id. If no invoice exists with the given id, an error is returned.
     *
     * @param LoadInvoice $parameters
     * @return LoadInvoiceResponse
     */
    public function LoadInvoice(LoadInvoice $parameters)
    {
        return $this->__soapCall('LoadInvoice', array($parameters));
    }

    /**
     * Gets an invoice by database record invoice number. If no invoice exists with the given number, null is returned.
     *
     * @param GetInvoiceByInvoiceNumber $parameters
     * @return GetInvoiceByInvoiceNumberResponse
     */
    public function GetInvoiceByInvoiceNumber(GetInvoiceByInvoiceNumber $parameters)
    {
        return $this->__soapCall('GetInvoiceByInvoiceNumber', array($parameters));
    }

    /**
     * Finds invoice information by a set of conditions, filtering by status.
     *
     * @param FindInvoices $parameters
     * @return FindInvoicesResponse
     */
    public function FindInvoices(FindInvoices $parameters)
    {
        return $this->__soapCall('FindInvoices', array($parameters));
    }

    /**
     * Finds a count of available invoices by a set of conditions.
     *
     * @param FindInvoiceCount $parameters
     * @return FindInvoiceCountResponse
     */
    public function FindInvoiceCount(FindInvoiceCount $parameters)
    {
        return $this->__soapCall('FindInvoiceCount', array($parameters));
    }

    /**
     * Gets the PDF for the specified Invoice record.  If no pdf is found, null is returned
     *
     * @param GetInvoicePdf $parameters
     * @return GetInvoicePdfResponse
     */
    public function GetInvoicePdf(GetInvoicePdf $parameters)
    {
        return $this->__soapCall('GetInvoicePdf', array($parameters));
    }

    /**
     * Gets SpecialInvoice for the specified id
     *
     * @param GetSpecialInvoice $parameters
     * @return GetSpecialInvoiceResponse
     */
    public function GetSpecialInvoice(GetSpecialInvoice $parameters)
    {
        return $this->__soapCall('GetSpecialInvoice', array($parameters));
    }

    /**
     * Gets SpecialInvoice for the specified invoiceNumber
     *
     * @param GetSpecialInvoiceByInvoiceNumber $parameters
     * @return GetSpecialInvoiceByInvoiceNumberResponse
     */
    public function GetSpecialInvoiceByInvoiceNumber(GetSpecialInvoiceByInvoiceNumber $parameters)
    {
        return $this->__soapCall('GetSpecialInvoiceByInvoiceNumber', array($parameters));
    }

    /**
     * Adds or Updates a SpecialInvoice. If Id is zero, SpecialInvoice is added. If non-zero, SpecialInvoice is updated
     *
     * @param AddOrUpdateSpecialInvoice $parameters
     * @return AddOrUpdateSpecialInvoiceResponse
     */
    public function AddOrUpdateSpecialInvoice(AddOrUpdateSpecialInvoice $parameters)
    {
        return $this->__soapCall('AddOrUpdateSpecialInvoice', array($parameters));
    }

    /**
     * Deletes SpecialInvoice for the specified id
     *
     * @param DeleteSpecialInvoice $parameters
     * @return DeleteSpecialInvoiceResponse
     */
    public function DeleteSpecialInvoice(DeleteSpecialInvoice $parameters)
    {
        return $this->__soapCall('DeleteSpecialInvoice', array($parameters));
    }

    /**
     * Deletes SpecialInvoice for the specified invoiceNumber
     *
     * @param DeleteSpecialInvoiceByInvoiceNumber $parameters
     * @return DeleteSpecialInvoiceByInvoiceNumberResponse
     */
    public function DeleteSpecialInvoiceByInvoiceNumber(DeleteSpecialInvoiceByInvoiceNumber $parameters)
    {
        return $this->__soapCall('DeleteSpecialInvoiceByInvoiceNumber', array($parameters));
    }

    /**
     * Gets a list of all of the available ApplyTo for a company
     *
     * @param GetApplyToForCompanyByType $parameters
     * @return GetApplyToForCompanyByTypeResponse
     */
    public function GetApplyToForCompanyByType(GetApplyToForCompanyByType $parameters)
    {
        return $this->__soapCall('GetApplyToForCompanyByType', array($parameters));
    }

    /**
     * Finds special invoice information by a set of conditions
     *
     * @param FindSpecialInvoices $parameters
     * @return FindSpecialInvoicesResponse
     */
    public function FindSpecialInvoices(FindSpecialInvoices $parameters)
    {
        return $this->__soapCall('FindSpecialInvoices', array($parameters));
    }

    /**
     * Adds or updates a SpecialInvoiceProduct
     *
     * @param AddOrUpdateSpecialInvoiceProduct $parameters
     * @return AddOrUpdateSpecialInvoiceProductResponse
     */
    public function AddOrUpdateSpecialInvoiceProduct(AddOrUpdateSpecialInvoiceProduct $parameters)
    {
        return $this->__soapCall('AddOrUpdateSpecialInvoiceProduct', array($parameters));
    }

    /**
     * Deletes a SpecialInvoiceProduct
     *
     * @param DeleteSpecialInvoiceProduct $parameters
     * @return DeleteSpecialInvoiceProductResponse
     */
    public function DeleteSpecialInvoiceProduct(DeleteSpecialInvoiceProduct $parameters)
    {
        return $this->__soapCall('DeleteSpecialInvoiceProduct', array($parameters));
    }

}
