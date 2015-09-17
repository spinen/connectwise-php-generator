<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

/**
 * ConnectWise Company API
 */
class CompanyApi extends \Spinen\ConnectWise\Library\SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array(
        'GetCompany'                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetCompany',
        'ApiCredentials'                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ApiCredentials',
        'GetCompanyResponse'               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetCompanyResponse',
        'Company'                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\Company',
        'CompanyAddress'                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\CompanyAddress',
        'Address'                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\Address',
        'ArrayOfString'                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfString',
        'ArrayOfCompanyAddress'            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfCompanyAddress',
        'LoadCompany'                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\LoadCompany',
        'LoadCompanyResponse'              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\LoadCompanyResponse',
        'AddCompany'                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddCompany',
        'AddCompanyResponse'               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddCompanyResponse',
        'UpdateCompany'                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateCompany',
        'UpdateCompanyResponse'            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateCompanyResponse',
        'AddOrUpdateCompany'               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateCompany',
        'AddOrUpdateCompanyResponse'       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateCompanyResponse',
        'DeleteCompany'                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteCompany',
        'DeleteCompanyResponse'            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteCompanyResponse',
        'FindCompanies'                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindCompanies',
        'FindCompaniesResponse'            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindCompaniesResponse',
        'ArrayOfCompanyFindResult'         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfCompanyFindResult',
        'CompanyFindResult'                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\CompanyFindResult',
        'SetCompanyDefaultContact'         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\SetCompanyDefaultContact',
        'SetCompanyDefaultContactResponse' => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\SetCompanyDefaultContactResponse',
        'GetCompanyProfile'                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetCompanyProfile',
        'GetCompanyProfileResponse'        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetCompanyProfileResponse',
        'CompanyProfile'                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\CompanyProfile',
        'UpdateCompanyProfile'             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateCompanyProfile',
        'UpdateCompanyProfileResponse'     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateCompanyProfileResponse',
        'GetAllCompanyNotes'               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAllCompanyNotes',
        'GetAllCompanyNotesResponse'       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAllCompanyNotesResponse',
        'ArrayOfNote'                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfNote',
        'Note'                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\Note',
        'GetCompanyNote'                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetCompanyNote',
        'GetCompanyNoteResponse'           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetCompanyNoteResponse',
        'AddOrUpdateCompanyNote'           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateCompanyNote',
        'AddOrUpdateCompanyNoteResponse'   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateCompanyNoteResponse',
        'DeleteCompanyNote'                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteCompanyNote',
        'DeleteCompanyNoteResponse'        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteCompanyNoteResponse',
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
    public function __construct($host, array $options = array(), $wsdl = '/v4_6_release/apis/2.0/CompanyApi.asmx?wsdl')
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
     * Gets a company by database record id. If no company exists with the given id, null is returned.
     *
     * @param GetCompany $parameters
     * @return GetCompanyResponse
     */
    public function GetCompany(GetCompany $parameters)
    {
        return $this->__soapCall('GetCompany', array($parameters));
    }

    /**
     * Gets a company by database record id. If no company exists with the given id, an error is returned.
     *
     * @param LoadCompany $parameters
     * @return LoadCompanyResponse
     */
    public function LoadCompany(LoadCompany $parameters)
    {
        return $this->__soapCall('LoadCompany', array($parameters));
    }

    /**
     * Adds a new company.
     *
     * @param AddCompany $parameters
     * @return AddCompanyResponse
     */
    public function AddCompany(AddCompany $parameters)
    {
        return $this->__soapCall('AddCompany', array($parameters));
    }

    /**
     * Updates an existing company.
     *
     * @param UpdateCompany $parameters
     * @return UpdateCompanyResponse
     */
    public function UpdateCompany(UpdateCompany $parameters)
    {
        return $this->__soapCall('UpdateCompany', array($parameters));
    }

    /**
     * Adds or updates a company. If the company Id is 0, the company is added. If non-zero, the existing company with that Id is updated.
     *
     * @param AddOrUpdateCompany $parameters
     * @return AddOrUpdateCompanyResponse
     */
    public function AddOrUpdateCompany(AddOrUpdateCompany $parameters)
    {
        return $this->__soapCall('AddOrUpdateCompany', array($parameters));
    }

    /**
     * Deletes a company by database record id.
     *
     * @param DeleteCompany $parameters
     * @return DeleteCompanyResponse
     */
    public function DeleteCompany(DeleteCompany $parameters)
    {
        return $this->__soapCall('DeleteCompany', array($parameters));
    }

    /**
     * Finds company information by a set of conditions.
     *
     * @param FindCompanies $parameters
     * @return FindCompaniesResponse
     */
    public function FindCompanies(FindCompanies $parameters)
    {
        return $this->__soapCall('FindCompanies', array($parameters));
    }

    /**
     * Sets an existing contact as the default contact for a company.
     *
     * @param SetCompanyDefaultContact $parameters
     * @return SetCompanyDefaultContactResponse
     */
    public function SetCompanyDefaultContact(SetCompanyDefaultContact $parameters)
    {
        return $this->__soapCall('SetCompanyDefaultContact', array($parameters));
    }

    /**
     * Gets the company profile for a given company.
     *
     * @param GetCompanyProfile $parameters
     * @return GetCompanyProfileResponse
     */
    public function GetCompanyProfile(GetCompanyProfile $parameters)
    {
        return $this->__soapCall('GetCompanyProfile', array($parameters));
    }

    /**
     * Updates the company profile for a given company.
     *
     * @param UpdateCompanyProfile $parameters
     * @return UpdateCompanyProfileResponse
     */
    public function UpdateCompanyProfile(UpdateCompanyProfile $parameters)
    {
        return $this->__soapCall('UpdateCompanyProfile', array($parameters));
    }

    /**
     * Obtains all Notes written against a given company.
     *
     * @param GetAllCompanyNotes $parameters
     * @return GetAllCompanyNotesResponse
     */
    public function GetAllCompanyNotes(GetAllCompanyNotes $parameters)
    {
        return $this->__soapCall('GetAllCompanyNotes', array($parameters));
    }

    /**
     * Obtains a specific Note written against a given company.
     *
     * @param GetCompanyNote $parameters
     * @return GetCompanyNoteResponse
     */
    public function GetCompanyNote(GetCompanyNote $parameters)
    {
        return $this->__soapCall('GetCompanyNote', array($parameters));
    }

    /**
     * Updates a specific Note written against a given company. If the Note Id is 0, the note is added. If non-zero, the existing note with that Id is updated.
     *
     * @param AddOrUpdateCompanyNote $parameters
     * @return AddOrUpdateCompanyNoteResponse
     */
    public function AddOrUpdateCompanyNote(AddOrUpdateCompanyNote $parameters)
    {
        return $this->__soapCall('AddOrUpdateCompanyNote', array($parameters));
    }

    /**
     * Deletes a specific Note written against a given company.
     *
     * @param DeleteCompanyNote $parameters
     * @return DeleteCompanyNoteResponse
     */
    public function DeleteCompanyNote(DeleteCompanyNote $parameters)
    {
        return $this->__soapCall('DeleteCompanyNote', array($parameters));
    }

}
