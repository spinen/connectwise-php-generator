<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

/**
 * ConnectWise Opportunity API
 */
class OpportunityApi extends \Spinen\ConnectWise\Library\SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array(
        'GetOpportunity'                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetOpportunity',
        'ApiCredentials'                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ApiCredentials',
        'GetOpportunityResponse'                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetOpportunityResponse',
        'Opportunity'                                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\Opportunity',
        'CompanyAddress'                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\CompanyAddress',
        'Address'                                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\Address',
        'ArrayOfString'                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfString',
        'ArrayOfNote'                                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfNote',
        'Note'                                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\Note',
        'ArrayOfOpportunityItem'                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfOpportunityItem',
        'OpportunityItem'                                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\OpportunityItem',
        'ProductItem'                                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ProductItem',
        'ArrayOfComponent'                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfComponent',
        'Component'                                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\Component',
        'ArrayOfForecastDetail'                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfForecastDetail',
        'ForecastDetail'                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ForecastDetail',
        'ArrayOfOpportunityCustomField'                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfOpportunityCustomField',
        'OpportunityCustomField'                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\OpportunityCustomField',
        'UserDefinedCustomField'                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UserDefinedCustomField',
        'OpportunityTeam'                                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\OpportunityTeam',
        'PrimarySalesRepMember'                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\PrimarySalesRepMember',
        'SecondarySalesRepMember'                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\SecondarySalesRepMember',
        'ArrayOfSalesIndividualMember'                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfSalesIndividualMember',
        'SalesIndividualMember'                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\SalesIndividualMember',
        'ArrayOfSalesTeam'                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfSalesTeam',
        'SalesTeam'                                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\SalesTeam',
        'LoadOpportunity'                                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\LoadOpportunity',
        'LoadOpportunityResponse'                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\LoadOpportunityResponse',
        'AddOpportunity'                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOpportunity',
        'AddOpportunityResponse'                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOpportunityResponse',
        'UpdateOpportunity'                              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateOpportunity',
        'UpdateOpportunityResponse'                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateOpportunityResponse',
        'AddOrUpdateOpportunity'                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateOpportunity',
        'AddOrUpdateOpportunityResponse'                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateOpportunityResponse',
        'DeleteOpportunity'                              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteOpportunity',
        'DeleteOpportunityResponse'                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteOpportunityResponse',
        'FindOpportunities'                              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindOpportunities',
        'FindOpportunitiesResponse'                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindOpportunitiesResponse',
        'ArrayOfOpportunityFindResult'                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfOpportunityFindResult',
        'OpportunityFindResult'                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\OpportunityFindResult',
        'FindOpportunityCount'                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindOpportunityCount',
        'FindOpportunityCountResponse'                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindOpportunityCountResponse',
        'AddForecastAndRecurringRevenue'                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddForecastAndRecurringRevenue',
        'ForecastRevenueInfo'                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ForecastRevenueInfo',
        'ForecastItem'                                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ForecastItem',
        'RecurringRevenueItem'                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\RecurringRevenueItem',
        'AddForecastAndRecurringRevenueResponse'         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddForecastAndRecurringRevenueResponse',
        'UpdateForecastAndRecurringRevenue'              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateForecastAndRecurringRevenue',
        'UpdateForecastAndRecurringRevenueResponse'      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateForecastAndRecurringRevenueResponse',
        'AddOrUpdateForecastAndRecurringRevenue'         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateForecastAndRecurringRevenue',
        'AddOrUpdateForecastAndRecurringRevenueResponse' => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateForecastAndRecurringRevenueResponse',
        'DeleteForecast'                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteForecast',
        'DeleteForecastResponse'                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteForecastResponse',
        'DeleteRecurringRevenue'                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteRecurringRevenue',
        'DeleteRecurringRevenueResponse'                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteRecurringRevenueResponse',
        'AddOpportunityItem'                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOpportunityItem',
        'AddOpportunityItemResponse'                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOpportunityItemResponse',
        'UpdateOpportunityItem'                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateOpportunityItem',
        'UpdateOpportunityItemResponse'                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateOpportunityItemResponse',
        'AddOrUpdateOpportunityItem'                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateOpportunityItem',
        'AddOrUpdateOpportunityItemResponse'             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateOpportunityItemResponse',
        'DeleteOpportunityItem'                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteOpportunityItem',
        'DeleteOpportunityItemResponse'                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteOpportunityItemResponse',
        'GetOpportunityDocuments'                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetOpportunityDocuments',
        'GetOpportunityDocumentsResponse'                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetOpportunityDocumentsResponse',
        'ArrayOfDocumentInfo'                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfDocumentInfo',
        'DocumentInfo'                                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DocumentInfo',
        'DeleteOpportunityDocument'                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteOpportunityDocument',
        'DeleteOpportunityDocumentResponse'              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteOpportunityDocumentResponse',
        'DeleteOpportunityNote'                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteOpportunityNote',
        'DeleteOpportunityNoteResponse'                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteOpportunityNoteResponse',
        'AddOpportunityDocuments'                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOpportunityDocuments',
        'ArrayOfOppDocumentInfo'                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfOppDocumentInfo',
        'OppDocumentInfo'                                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\OppDocumentInfo',
        'AddOpportunityDocumentsResponse'                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOpportunityDocumentsResponse',
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
    public function __construct($host, array $options = array(), $wsdl = '/v4_6_release/apis/2.0/OpportunityApi.asmx?wsdl')
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
     * Gets an opportunity by database record id. If no opportunity exists with the given id, null is returned.
     *
     * @param GetOpportunity $parameters
     * @return GetOpportunityResponse
     */
    public function GetOpportunity(GetOpportunity $parameters)
    {
        return $this->__soapCall('GetOpportunity', array($parameters));
    }

    /**
     * Gets an opportunity by database record id. If no opportunity exists with the given id, an error is returned.
     *
     * @param LoadOpportunity $parameters
     * @return LoadOpportunityResponse
     */
    public function LoadOpportunity(LoadOpportunity $parameters)
    {
        return $this->__soapCall('LoadOpportunity', array($parameters));
    }

    /**
     * Adds a new opportunity.
     *
     * @param AddOpportunity $parameters
     * @return AddOpportunityResponse
     */
    public function AddOpportunity(AddOpportunity $parameters)
    {
        return $this->__soapCall('AddOpportunity', array($parameters));
    }

    /**
     * Updates an existing opportunity.
     *
     * @param UpdateOpportunity $parameters
     * @return UpdateOpportunityResponse
     */
    public function UpdateOpportunity(UpdateOpportunity $parameters)
    {
        return $this->__soapCall('UpdateOpportunity', array($parameters));
    }

    /**
     * Adds or updates an opportunity. If the opportunity Id is 0, the opportunity is added. If non-zero, the existing opportunity with that Id is updated.
     *
     * @param AddOrUpdateOpportunity $parameters
     * @return AddOrUpdateOpportunityResponse
     */
    public function AddOrUpdateOpportunity(AddOrUpdateOpportunity $parameters)
    {
        return $this->__soapCall('AddOrUpdateOpportunity', array($parameters));
    }

    /**
     * Deletes an opportunity by database record id.
     *
     * @param DeleteOpportunity $parameters
     * @return DeleteOpportunityResponse
     */
    public function DeleteOpportunity(DeleteOpportunity $parameters)
    {
        return $this->__soapCall('DeleteOpportunity', array($parameters));
    }

    /**
     * Finds opportunity information by a set of conditions, filtering by status.
     *
     * @param FindOpportunities $parameters
     * @return FindOpportunitiesResponse
     */
    public function FindOpportunities(FindOpportunities $parameters)
    {
        return $this->__soapCall('FindOpportunities', array($parameters));
    }

    /**
     * Find the count of available opportunities given the specified set of conditions.
     *
     * @param FindOpportunityCount $parameters
     * @return FindOpportunityCountResponse
     */
    public function FindOpportunityCount(FindOpportunityCount $parameters)
    {
        return $this->__soapCall('FindOpportunityCount', array($parameters));
    }

    /**
     * Adds a forecast and recurring revenue entry.
     *
     * @param AddForecastAndRecurringRevenue $parameters
     * @return AddForecastAndRecurringRevenueResponse
     */
    public function AddForecastAndRecurringRevenue(AddForecastAndRecurringRevenue $parameters)
    {
        return $this->__soapCall('AddForecastAndRecurringRevenue', array($parameters));
    }

    /**
     * Updates a forecast and recurring revenue entry.
     *
     * @param UpdateForecastAndRecurringRevenue $parameters
     * @return UpdateForecastAndRecurringRevenueResponse
     */
    public function UpdateForecastAndRecurringRevenue(UpdateForecastAndRecurringRevenue $parameters)
    {
        return $this->__soapCall('UpdateForecastAndRecurringRevenue', array($parameters));
    }

    /**
     * Adds or updates a forecast and recurring revenue entry.
     *
     * @param AddOrUpdateForecastAndRecurringRevenue $parameters
     * @return AddOrUpdateForecastAndRecurringRevenueResponse
     */
    public function AddOrUpdateForecastAndRecurringRevenue(AddOrUpdateForecastAndRecurringRevenue $parameters)
    {
        return $this->__soapCall('AddOrUpdateForecastAndRecurringRevenue', array($parameters));
    }

    /**
     * Deletes a forecast entry.
     *
     * @param DeleteForecast $parameters
     * @return DeleteForecastResponse
     */
    public function DeleteForecast(DeleteForecast $parameters)
    {
        return $this->__soapCall('DeleteForecast', array($parameters));
    }

    /**
     * Deletes a recurring revenue entry.
     *
     * @param DeleteRecurringRevenue $parameters
     * @return DeleteRecurringRevenueResponse
     */
    public function DeleteRecurringRevenue(DeleteRecurringRevenue $parameters)
    {
        return $this->__soapCall('DeleteRecurringRevenue', array($parameters));
    }

    /**
     * Adds an item to an opportunity.
     *
     * @param AddOpportunityItem $parameters
     * @return AddOpportunityItemResponse
     */
    public function AddOpportunityItem(AddOpportunityItem $parameters)
    {
        return $this->__soapCall('AddOpportunityItem', array($parameters));
    }

    /**
     * Updates an opportunity item to an opportunity.
     *
     * @param UpdateOpportunityItem $parameters
     * @return UpdateOpportunityItemResponse
     */
    public function UpdateOpportunityItem(UpdateOpportunityItem $parameters)
    {
        return $this->__soapCall('UpdateOpportunityItem', array($parameters));
    }

    /**
     * Adds or updates an item to an opportunity.
     *
     * @param AddOrUpdateOpportunityItem $parameters
     * @return AddOrUpdateOpportunityItemResponse
     */
    public function AddOrUpdateOpportunityItem(AddOrUpdateOpportunityItem $parameters)
    {
        return $this->__soapCall('AddOrUpdateOpportunityItem', array($parameters));
    }

    /**
     * Deletes an opportunity item.
     *
     * @param DeleteOpportunityItem $parameters
     * @return DeleteOpportunityItemResponse
     */
    public function DeleteOpportunityItem(DeleteOpportunityItem $parameters)
    {
        return $this->__soapCall('DeleteOpportunityItem', array($parameters));
    }

    /**
     * Gets the list of documents attached to an opportunity.
     *
     * @param GetOpportunityDocuments $parameters
     * @return GetOpportunityDocumentsResponse
     */
    public function GetOpportunityDocuments(GetOpportunityDocuments $parameters)
    {
        return $this->__soapCall('GetOpportunityDocuments', array($parameters));
    }

    /**
     * Removes the document from the opportunity.
     *
     * @param DeleteOpportunityDocument $parameters
     * @return DeleteOpportunityDocumentResponse
     */
    public function DeleteOpportunityDocument(DeleteOpportunityDocument $parameters)
    {
        return $this->__soapCall('DeleteOpportunityDocument', array($parameters));
    }

    /**
     * Removes the note from the opportunity.
     *
     * @param DeleteOpportunityNote $parameters
     * @return DeleteOpportunityNoteResponse
     */
    public function DeleteOpportunityNote(DeleteOpportunityNote $parameters)
    {
        return $this->__soapCall('DeleteOpportunityNote', array($parameters));
    }

    /**
     * Uploads a document to an opportunity
     *
     * @param AddOpportunityDocuments $parameters
     * @return AddOpportunityDocumentsResponse
     */
    public function AddOpportunityDocuments(AddOpportunityDocuments $parameters)
    {
        return $this->__soapCall('AddOpportunityDocuments', array($parameters));
    }

}
