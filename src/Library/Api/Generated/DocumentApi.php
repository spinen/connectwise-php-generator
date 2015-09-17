<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

/**
 * ConnectWise Document API
 */
class DocumentApi extends \Spinen\ConnectWise\Library\SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array(
        'AddDocuments'              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddDocuments',
        'ApiCredentials'            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ApiCredentials',
        'ArrayOfDocumentInfo'       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfDocumentInfo',
        'DocumentInfo'              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DocumentInfo',
        'AddDocumentsResponse'      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddDocumentsResponse',
        'GetDocument'               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetDocument',
        'GetDocumentResponse'       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetDocumentResponse',
        'DeleteDocument'            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteDocument',
        'DeleteDocumentResponse'    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteDocumentResponse',
        'FindDocuments'             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindDocuments',
        'ArrayOfString'             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfString',
        'FindDocumentsResponse'     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindDocumentsResponse',
        'ArrayOfDocumentFindResult' => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfDocumentFindResult',
        'DocumentFindResult'        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DocumentFindResult',
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
    public function __construct($host, array $options = array(), $wsdl = '/v4_6_release/apis/2.0/DocumentApi.asmx?wsdl')
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
     * Adds a document to the application
     *
     * @param AddDocuments $parameters
     * @return AddDocumentsResponse
     */
    public function AddDocuments(AddDocuments $parameters)
    {
        return $this->__soapCall('AddDocuments', array($parameters));
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
     * Deletes a document associated with the objectId and table reference
     *
     * @param DeleteDocument $parameters
     * @return DeleteDocumentResponse
     */
    public function DeleteDocument(DeleteDocument $parameters)
    {
        return $this->__soapCall('DeleteDocument', array($parameters));
    }

    /**
     * Returns a List of Documents
     *
     * @param FindDocuments $parameters
     * @return FindDocumentsResponse
     */
    public function FindDocuments(FindDocuments $parameters)
    {
        return $this->__soapCall('FindDocuments', array($parameters));
    }

}
