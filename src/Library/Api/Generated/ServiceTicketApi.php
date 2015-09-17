<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

/**
 * ConnectWise Service Ticket API
 */
class ServiceTicketApi extends \Spinen\ConnectWise\Library\SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array(
        'GetServiceTicket'                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetServiceTicket',
        'ApiCredentials'                                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ApiCredentials',
        'GetServiceTicketResponse'                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetServiceTicketResponse',
        'ServiceTicket'                                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ServiceTicket',
        'TicketBase'                                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\TicketBase',
        'ArrayOfTicketConfiguration'                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfTicketConfiguration',
        'TicketConfiguration'                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\TicketConfiguration',
        'ArrayOfTicketNote'                                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfTicketNote',
        'TicketNote'                                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\TicketNote',
        'ArrayOfTicketTask'                                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfTicketTask',
        'TicketTask'                                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\TicketTask',
        'ArrayOfDocumentInfo'                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfDocumentInfo',
        'DocumentInfo'                                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DocumentInfo',
        'LoadServiceTicket'                                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\LoadServiceTicket',
        'LoadServiceTicketResponse'                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\LoadServiceTicketResponse',
        'AddServiceTicketViaManagedIdentifier'                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddServiceTicketViaManagedIdentifier',
        'AddServiceTicketViaManagedIdentifierResponse'         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddServiceTicketViaManagedIdentifierResponse',
        'UpdateServiceTicketViaManagedIdentifier'              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateServiceTicketViaManagedIdentifier',
        'UpdateServiceTicketViaManagedIdentifierResponse'      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateServiceTicketViaManagedIdentifierResponse',
        'AddOrUpdateServiceTicketViaManagedIdentifier'         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateServiceTicketViaManagedIdentifier',
        'AddOrUpdateServiceTicketViaManagedIdentifierResponse' => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateServiceTicketViaManagedIdentifierResponse',
        'AddServiceTicketViaCompanyIdentifier'                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddServiceTicketViaCompanyIdentifier',
        'AddServiceTicketViaCompanyIdentifierResponse'         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddServiceTicketViaCompanyIdentifierResponse',
        'UpdateServiceTicketViaCompanyIdentifier'              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateServiceTicketViaCompanyIdentifier',
        'UpdateServiceTicketViaCompanyIdentifierResponse'      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateServiceTicketViaCompanyIdentifierResponse',
        'AddOrUpdateServiceTicketViaCompanyIdentifier'         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateServiceTicketViaCompanyIdentifier',
        'AddOrUpdateServiceTicketViaCompanyIdentifierResponse' => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateServiceTicketViaCompanyIdentifierResponse',
        'DeleteServiceTicket'                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteServiceTicket',
        'DeleteServiceTicketResponse'                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteServiceTicketResponse',
        'FindServiceTickets'                                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindServiceTickets',
        'ArrayOfString'                                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfString',
        'FindServiceTicketsResponse'                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindServiceTicketsResponse',
        'ArrayOfTicketFindResult'                              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfTicketFindResult',
        'TicketFindResult'                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\TicketFindResult',
        'FindServiceTicketCount'                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindServiceTicketCount',
        'FindServiceTicketCountResponse'                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindServiceTicketCountResponse',
        'GetServiceStatuses'                                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetServiceStatuses',
        'GetServiceStatusesResponse'                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetServiceStatusesResponse',
        'SearchKnowledgebase'                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\SearchKnowledgebase',
        'SearchKnowledgebaseResponse'                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\SearchKnowledgebaseResponse',
        'ArrayOfKnowledgeBaseResult'                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfKnowledgeBaseResult',
        'KnowledgeBaseResult'                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\KnowledgeBaseResult',
        'SearchKnowledgebaseCount'                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\SearchKnowledgebaseCount',
        'SearchKnowledgebaseCountResponse'                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\SearchKnowledgebaseCountResponse',
        'DeleteTicketDocument'                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteTicketDocument',
        'DeleteTicketDocumentResponse'                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteTicketDocumentResponse',
        'GetTicketProductList'                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetTicketProductList',
        'GetTicketProductListResponse'                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetTicketProductListResponse',
        'ArrayOfTicketProduct'                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfTicketProduct',
        'TicketProduct'                                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\TicketProduct',
        'ProductItem'                                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ProductItem',
        'ArrayOfComponent'                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfComponent',
        'Component'                                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\Component',
        'AddTicketProduct'                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddTicketProduct',
        'AddTicketProductResponse'                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddTicketProductResponse',
        'UpdateTicketProduct'                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateTicketProduct',
        'UpdateTicketProductResponse'                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateTicketProductResponse',
        'AddOrUpdateTicketProduct'                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateTicketProduct',
        'AddOrUpdateTicketProductResponse'                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateTicketProductResponse',
        'DeleteTicketProduct'                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteTicketProduct',
        'DeleteTicketProductResponse'                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteTicketProductResponse',
        'GetTicketDocuments'                                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetTicketDocuments',
        'GetTicketDocumentsResponse'                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetTicketDocumentsResponse',
        'GetDocument'                                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetDocument',
        'GetDocumentResponse'                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetDocumentResponse',
        'AddOrUpdateTicketNote'                                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateTicketNote',
        'AddOrUpdateTicketNoteResponse'                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateTicketNoteResponse',
        'AddTicketDocuments'                                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddTicketDocuments',
        'AddTicketDocumentsResponse'                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddTicketDocumentsResponse',
        'AddServiceTicketToKnowledgebase'                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddServiceTicketToKnowledgebase',
        'AddServiceTicketToKnowledgebaseResponse'              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddServiceTicketToKnowledgebaseResponse',
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
    public function __construct($host, array $options = array(), $wsdl = '/v4_6_release/apis/2.0/ServiceTicketApi.asmx?wsdl')
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
     * Gets a service ticket by the ticket Id. If no service ticket exists with the given ticket Id, null is returned.
     *
     * @param GetServiceTicket $parameters
     * @return GetServiceTicketResponse
     */
    public function GetServiceTicket(GetServiceTicket $parameters)
    {
        return $this->__soapCall('GetServiceTicket', array($parameters));
    }

    /**
     * Gets a service ticket by the ticket Id. If no service ticket exists with the given ticket Id, an error is returned.
     *
     * @param LoadServiceTicket $parameters
     * @return LoadServiceTicketResponse
     */
    public function LoadServiceTicket(LoadServiceTicket $parameters)
    {
        return $this->__soapCall('LoadServiceTicket', array($parameters));
    }

    /**
     * Adds a new service ticket for a company identified by managed id.
     *
     * @param AddServiceTicketViaManagedIdentifier $parameters
     * @return AddServiceTicketViaManagedIdentifierResponse
     */
    public function AddServiceTicketViaManagedIdentifier(AddServiceTicketViaManagedIdentifier $parameters)
    {
        return $this->__soapCall('AddServiceTicketViaManagedIdentifier', array($parameters));
    }

    /**
     * Updates an existing service ticket for a company identified by managed id.
     *
     * @param UpdateServiceTicketViaManagedIdentifier $parameters
     * @return UpdateServiceTicketViaManagedIdentifierResponse
     */
    public function UpdateServiceTicketViaManagedIdentifier(UpdateServiceTicketViaManagedIdentifier $parameters)
    {
        return $this->__soapCall('UpdateServiceTicketViaManagedIdentifier', array($parameters));
    }

    /**
     * Adds or updates a service ticket for a company identified by managed id. If the service ticket Id is 0, the service ticket is added. If non-zero, the existing service ticket with that ticket Id is updated.
     *
     * @param AddOrUpdateServiceTicketViaManagedIdentifier $parameters
     * @return AddOrUpdateServiceTicketViaManagedIdentifierResponse
     */
    public function AddOrUpdateServiceTicketViaManagedIdentifier(AddOrUpdateServiceTicketViaManagedIdentifier $parameters)
    {
        return $this->__soapCall('AddOrUpdateServiceTicketViaManagedIdentifier', array($parameters));
    }

    /**
     * Adds a new service ticket for a company identified by the text-based company id.
     *
     * @param AddServiceTicketViaCompanyIdentifier $parameters
     * @return AddServiceTicketViaCompanyIdentifierResponse
     */
    public function AddServiceTicketViaCompanyIdentifier(AddServiceTicketViaCompanyIdentifier $parameters)
    {
        return $this->__soapCall('AddServiceTicketViaCompanyIdentifier', array($parameters));
    }

    /**
     * Updates an existing service ticket for a company identified by the text-based company id.
     *
     * @param UpdateServiceTicketViaCompanyIdentifier $parameters
     * @return UpdateServiceTicketViaCompanyIdentifierResponse
     */
    public function UpdateServiceTicketViaCompanyIdentifier(UpdateServiceTicketViaCompanyIdentifier $parameters)
    {
        return $this->__soapCall('UpdateServiceTicketViaCompanyIdentifier', array($parameters));
    }

    /**
     * Adds or updates a service ticket for a company identified by the text-based company id. If the service ticket Id is 0, the service ticket is added. If non-zero, the existing service ticket with that ticket Id is updated.
     *
     * @param AddOrUpdateServiceTicketViaCompanyIdentifier $parameters
     * @return AddOrUpdateServiceTicketViaCompanyIdentifierResponse
     */
    public function AddOrUpdateServiceTicketViaCompanyIdentifier(AddOrUpdateServiceTicketViaCompanyIdentifier $parameters)
    {
        return $this->__soapCall('AddOrUpdateServiceTicketViaCompanyIdentifier', array($parameters));
    }

    /**
     * Deletes a service ticket by the ticket Id.
     *
     * @param DeleteServiceTicket $parameters
     * @return DeleteServiceTicketResponse
     */
    public function DeleteServiceTicket(DeleteServiceTicket $parameters)
    {
        return $this->__soapCall('DeleteServiceTicket', array($parameters));
    }

    /**
     * Finds service ticket information by a set of conditions.  If isOpen is set, it will pre-filter by the ticket status.
     *
     * @param FindServiceTickets $parameters
     * @return FindServiceTicketsResponse
     */
    public function FindServiceTickets(FindServiceTickets $parameters)
    {
        return $this->__soapCall('FindServiceTickets', array($parameters));
    }

    /**
     * Gets the count of service tickets that meet the specified conditions
     *
     * @param FindServiceTicketCount $parameters
     * @return FindServiceTicketCountResponse
     */
    public function FindServiceTicketCount(FindServiceTicketCount $parameters)
    {
        return $this->__soapCall('FindServiceTicketCount', array($parameters));
    }

    /**
     * Gets the list of statuses available to the specified ticket.
     *
     * @param GetServiceStatuses $parameters
     * @return GetServiceStatusesResponse
     */
    public function GetServiceStatuses(GetServiceStatuses $parameters)
    {
        return $this->__soapCall('GetServiceStatuses', array($parameters));
    }

    /**
     * Performs a Knowledgebase search using the specified parameters
     *
     * @param SearchKnowledgebase $parameters
     * @return SearchKnowledgebaseResponse
     */
    public function SearchKnowledgebase(SearchKnowledgebase $parameters)
    {
        return $this->__soapCall('SearchKnowledgebase', array($parameters));
    }

    /**
     * Counts the Knowledgebase records that will be returned by performing the associated search.
     *
     * @param SearchKnowledgebaseCount $parameters
     * @return SearchKnowledgebaseCountResponse
     */
    public function SearchKnowledgebaseCount(SearchKnowledgebaseCount $parameters)
    {
        return $this->__soapCall('SearchKnowledgebaseCount', array($parameters));
    }

    /**
     * Removes the document from the ticket
     *
     * @param DeleteTicketDocument $parameters
     * @return DeleteTicketDocumentResponse
     */
    public function DeleteTicketDocument(DeleteTicketDocument $parameters)
    {
        return $this->__soapCall('DeleteTicketDocument', array($parameters));
    }

    /**
     * Get a list of products for the specified ticket
     *
     * @param GetTicketProductList $parameters
     * @return GetTicketProductListResponse
     */
    public function GetTicketProductList(GetTicketProductList $parameters)
    {
        return $this->__soapCall('GetTicketProductList', array($parameters));
    }

    /**
     * Add a product on a ticket
     *
     * @param AddTicketProduct $parameters
     * @return AddTicketProductResponse
     */
    public function AddTicketProduct(AddTicketProduct $parameters)
    {
        return $this->__soapCall('AddTicketProduct', array($parameters));
    }

    /**
     * Update a product on a ticket
     *
     * @param UpdateTicketProduct $parameters
     * @return UpdateTicketProductResponse
     */
    public function UpdateTicketProduct(UpdateTicketProduct $parameters)
    {
        return $this->__soapCall('UpdateTicketProduct', array($parameters));
    }

    /**
     * Add or Update a product on a ticket
     *
     * @param AddOrUpdateTicketProduct $parameters
     * @return AddOrUpdateTicketProductResponse
     */
    public function AddOrUpdateTicketProduct(AddOrUpdateTicketProduct $parameters)
    {
        return $this->__soapCall('AddOrUpdateTicketProduct', array($parameters));
    }

    /**
     * Delete Product from a ticket
     *
     * @param DeleteTicketProduct $parameters
     * @return DeleteTicketProductResponse
     */
    public function DeleteTicketProduct(DeleteTicketProduct $parameters)
    {
        return $this->__soapCall('DeleteTicketProduct', array($parameters));
    }

    /**
     * Gets the documents attached to the specified ticket
     *
     * @param GetTicketDocuments $parameters
     * @return GetTicketDocumentsResponse
     */
    public function GetTicketDocuments(GetTicketDocuments $parameters)
    {
        return $this->__soapCall('GetTicketDocuments', array($parameters));
    }

    /**
     * Gets the document for the specified documentId
     *
     * @param GetDocument $parameters
     * @return GetDocumentResponse
     */
    public function GetDocument(GetDocument $parameters)
    {
        return $this->__soapCall('GetDocument', array($parameters));
    }

    /**
     * Add a new ticket note or update an existing ticket note by service ticket id.
     *
     * @param AddOrUpdateTicketNote $parameters
     * @return AddOrUpdateTicketNoteResponse
     */
    public function AddOrUpdateTicketNote(AddOrUpdateTicketNote $parameters)
    {
        return $this->__soapCall('AddOrUpdateTicketNote', array($parameters));
    }

    /**
     * Add a document to a ticket
     *
     * @param AddTicketDocuments $parameters
     * @return AddTicketDocumentsResponse
     */
    public function AddTicketDocuments(AddTicketDocuments $parameters)
    {
        return $this->__soapCall('AddTicketDocuments', array($parameters));
    }

    /**
     * Adds the ticket to Knowledgebase
     *
     * @param AddServiceTicketToKnowledgebase $parameters
     * @return AddServiceTicketToKnowledgebaseResponse
     */
    public function AddServiceTicketToKnowledgebase(AddServiceTicketToKnowledgebase $parameters)
    {
        return $this->__soapCall('AddServiceTicketToKnowledgebase', array($parameters));
    }

}
