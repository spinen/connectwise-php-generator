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
        'GetActivity'                                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetActivity',
        'ApiCredentials'                                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ApiCredentials',
        'GetActivityResponse'                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetActivityResponse',
        'Activity'                                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\Activity',
        'ActivityDuration'                              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ActivityDuration',
        'ContactInformation'                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ContactInformation',
        'LoadActivity'                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\LoadActivity',
        'LoadActivityResponse'                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\LoadActivityResponse',
        'AddActivity'                                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddActivity',
        'AddActivityResponse'                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddActivityResponse',
        'UpdateActivity'                                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateActivity',
        'UpdateActivityResponse'                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateActivityResponse',
        'AddOrUpdateActivity'                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateActivity',
        'AddOrUpdateActivityResponse'                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateActivityResponse',
        'DeleteActivity'                                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteActivity',
        'DeleteActivityResponse'                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteActivityResponse',
        'FindActivities'                                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindActivities',
        'ArrayOfString'                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfString',
        'FindActivitiesResponse'                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindActivitiesResponse',
        'ArrayOfActivityFindResult'                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfActivityFindResult',
        'ActivityFindResult'                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ActivityFindResult',
        'GetAgreementSite'                              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAgreementSite',
        'GetAgreementSiteResponse'                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAgreementSiteResponse',
        'AgreementSite'                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AgreementSite',
        'AddOrUpdateAgreementSite'                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateAgreementSite',
        'AddOrUpdateAgreementSiteResponse'              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateAgreementSiteResponse',
        'FindAgreementSites'                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindAgreementSites',
        'FindAgreementSitesResponse'                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindAgreementSitesResponse',
        'ArrayOfAgreementSiteFindResult'                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfAgreementSiteFindResult',
        'AgreementSiteFindResult'                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AgreementSiteFindResult',
        'DeleteAgreementSite'                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteAgreementSite',
        'DeleteAgreementSiteResponse'                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteAgreementSiteResponse',
        'GetAgreementWorkType'                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAgreementWorkType',
        'GetAgreementWorkTypeResponse'                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAgreementWorkTypeResponse',
        'AgreementWorkType'                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AgreementWorkType',
        'AddOrUpdateAgreementWorkType'                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateAgreementWorkType',
        'AddOrUpdateAgreementWorkTypeResponse'          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateAgreementWorkTypeResponse',
        'FindAgreementWorkTypes'                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindAgreementWorkTypes',
        'FindAgreementWorkTypesResponse'                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindAgreementWorkTypesResponse',
        'ArrayOfAgreementWorkTypeFindResult'            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfAgreementWorkTypeFindResult',
        'AgreementWorkTypeFindResult'                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AgreementWorkTypeFindResult',
        'DeleteAgreementWorkType'                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteAgreementWorkType',
        'DeleteAgreementWorkTypeResponse'               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteAgreementWorkTypeResponse',
        'GetAgreementWorkRole'                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAgreementWorkRole',
        'GetAgreementWorkRoleResponse'                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAgreementWorkRoleResponse',
        'AgreementWorkRole'                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AgreementWorkRole',
        'AddOrUpdateAgreementWorkRole'                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateAgreementWorkRole',
        'AddOrUpdateAgreementWorkRoleResponse'          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateAgreementWorkRoleResponse',
        'FindAgreementWorkRoles'                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindAgreementWorkRoles',
        'FindAgreementWorkRolesResponse'                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindAgreementWorkRolesResponse',
        'ArrayOfAgreementWorkRoleFindResult'            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfAgreementWorkRoleFindResult',
        'AgreementWorkRoleFindResult'                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AgreementWorkRoleFindResult',
        'DeleteAgreementWorkRole'                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteAgreementWorkRole',
        'DeleteAgreementWorkRoleResponse'               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteAgreementWorkRoleResponse',
        'GetAgreementAdjustment'                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAgreementAdjustment',
        'GetAgreementAdjustmentResponse'                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAgreementAdjustmentResponse',
        'AgreementAdjustment'                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AgreementAdjustment',
        'AddOrUpdateAgreementAdjustment'                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateAgreementAdjustment',
        'AddOrUpdateAgreementAdjustmentResponse'        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateAgreementAdjustmentResponse',
        'FindAgreementAdjustments'                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindAgreementAdjustments',
        'FindAgreementAdjustmentsResponse'              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindAgreementAdjustmentsResponse',
        'ArrayOfAgreementAdjustmentFindResult'          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfAgreementAdjustmentFindResult',
        'AgreementAdjustmentFindResult'                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AgreementAdjustmentFindResult',
        'DeleteAgreementAdjustment'                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteAgreementAdjustment',
        'DeleteAgreementAdjustmentResponse'             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteAgreementAdjustmentResponse',
        'GetAgreement'                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAgreement',
        'GetAgreementResponse'                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAgreementResponse',
        'Agreement'                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\Agreement',
        'DeleteAgreement'                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteAgreement',
        'DeleteAgreementResponse'                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteAgreementResponse',
        'FindAgreements'                                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindAgreements',
        'FindAgreementsResponse'                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindAgreementsResponse',
        'ArrayOfAgreementFindResult'                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfAgreementFindResult',
        'AgreementFindResult'                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AgreementFindResult',
        'AddOrUpdateAgreement'                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateAgreement',
        'AddOrUpdateAgreementResponse'                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateAgreementResponse',
        'GetAgreementAddition'                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAgreementAddition',
        'GetAgreementAdditionResponse'                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAgreementAdditionResponse',
        'AgreementAddition'                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AgreementAddition',
        'AdditionsProduct'                              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AdditionsProduct',
        'AddOrUpdateAgreementAddition'                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateAgreementAddition',
        'AddOrUpdateAgreementAdditionResponse'          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateAgreementAdditionResponse',
        'FindAgreementAdditions'                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindAgreementAdditions',
        'FindAgreementAdditionsResponse'                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindAgreementAdditionsResponse',
        'ArrayOfAgreementAdditionFindResult'            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfAgreementAdditionFindResult',
        'AgreementAdditionFindResult'                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AgreementAdditionFindResult',
        'DeleteAgreementAddition'                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteAgreementAddition',
        'DeleteAgreementAdditionResponse'               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteAgreementAdditionResponse',
        'GetAgreementWorkRoleExclusion'                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAgreementWorkRoleExclusion',
        'GetAgreementWorkRoleExclusionResponse'         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAgreementWorkRoleExclusionResponse',
        'AgreementWorkRoleExclusion'                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AgreementWorkRoleExclusion',
        'GetAgreementWorkTypeExclusion'                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAgreementWorkTypeExclusion',
        'GetAgreementWorkTypeExclusionResponse'         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAgreementWorkTypeExclusionResponse',
        'AgreementWorkTypeExclusion'                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AgreementWorkTypeExclusion',
        'FindAgreementExclusions'                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindAgreementExclusions',
        'FindAgreementExclusionsResponse'               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindAgreementExclusionsResponse',
        'ArrayOfAgreementExclusionFindResult'           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfAgreementExclusionFindResult',
        'AgreementExclusionFindResult'                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AgreementExclusionFindResult',
        'AddOrRemoveAgreementWorkTypeExclusion'         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrRemoveAgreementWorkTypeExclusion',
        'ArrayOfAgreementWorkTypeExclusion'             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfAgreementWorkTypeExclusion',
        'AddOrRemoveAgreementWorkTypeExclusionResponse' => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrRemoveAgreementWorkTypeExclusionResponse',
        'AddOrRemoveAgreementWorkRoleExclusion'         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrRemoveAgreementWorkRoleExclusion',
        'ArrayOfAgreementWorkRoleExclusion'             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfAgreementWorkRoleExclusion',
        'AddOrRemoveAgreementWorkRoleExclusionResponse' => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrRemoveAgreementWorkRoleExclusionResponse',
        'GetAgreementBoardDefault'                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAgreementBoardDefault',
        'GetAgreementBoardDefaultResponse'              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAgreementBoardDefaultResponse',
        'AgreementBoardDefault'                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AgreementBoardDefault',
        'FindAgreementBoardDefaults'                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindAgreementBoardDefaults',
        'FindAgreementBoardDefaultsResponse'            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindAgreementBoardDefaultsResponse',
        'ArrayOfAgreementBoardDefaultFindResult'        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfAgreementBoardDefaultFindResult',
        'AgreementBoardDefaultFindResult'               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AgreementBoardDefaultFindResult',
        'AddOrUpdateAgreementBoardDefault'              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateAgreementBoardDefault',
        'AddOrUpdateAgreementBoardDefaultResponse'      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateAgreementBoardDefaultResponse',
        'DeleteAgreementBoardDefault'                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteAgreementBoardDefault',
        'DeleteAgreementBoardDefaultResponse'           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteAgreementBoardDefaultResponse',
        'GetCompany'                                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetCompany',
        'GetCompanyResponse'                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetCompanyResponse',
        'Company'                                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\Company',
        'CompanyAddress'                                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\CompanyAddress',
        'Address'                                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\Address',
        'ArrayOfCompanyAddress'                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfCompanyAddress',
        'LoadCompany'                                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\LoadCompany',
        'LoadCompanyResponse'                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\LoadCompanyResponse',
        'AddCompany'                                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddCompany',
        'AddCompanyResponse'                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddCompanyResponse',
        'UpdateCompany'                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateCompany',
        'UpdateCompanyResponse'                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateCompanyResponse',
        'AddOrUpdateCompany'                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateCompany',
        'AddOrUpdateCompanyResponse'                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateCompanyResponse',
        'DeleteCompany'                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteCompany',
        'DeleteCompanyResponse'                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteCompanyResponse',
        'FindCompanies'                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindCompanies',
        'FindCompaniesResponse'                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindCompaniesResponse',
        'ArrayOfCompanyFindResult'                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfCompanyFindResult',
        'CompanyFindResult'                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\CompanyFindResult',
        'SetCompanyDefaultContact'                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\SetCompanyDefaultContact',
        'SetCompanyDefaultContactResponse'              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\SetCompanyDefaultContactResponse',
        'GetCompanyProfile'                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetCompanyProfile',
        'GetCompanyProfileResponse'                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetCompanyProfileResponse',
        'CompanyProfile'                                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\CompanyProfile',
        'UpdateCompanyProfile'                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateCompanyProfile',
        'UpdateCompanyProfileResponse'                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateCompanyProfileResponse',
        'GetAllCompanyNotes'                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAllCompanyNotes',
        'GetAllCompanyNotesResponse'                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAllCompanyNotesResponse',
        'ArrayOfNote'                                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfNote',
        'Note'                                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\Note',
        'GetCompanyNote'                                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetCompanyNote',
        'GetCompanyNoteResponse'                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetCompanyNoteResponse',
        'AddOrUpdateCompanyNote'                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateCompanyNote',
        'AddOrUpdateCompanyNoteResponse'                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateCompanyNoteResponse',
        'DeleteCompanyNote'                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteCompanyNote',
        'DeleteCompanyNoteResponse'                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteCompanyNoteResponse',
        'AddOrUpdateCompanyCustomField'                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateCompanyCustomField',
        'ArrayOfUserDefinedCustomField'                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfUserDefinedCustomField',
        'UserDefinedCustomField'                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UserDefinedCustomField',
        'AddOrUpdateCompanyCustomFieldResponse'         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateCompanyCustomFieldResponse',
        'GetCompanyTeam'                                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetCompanyTeam',
        'GetCompanyTeamResponse'                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetCompanyTeamResponse',
        'CompanyTeam'                                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\CompanyTeam',
        'AddOrUpdateCompanyTeam'                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateCompanyTeam',
        'AddOrUpdateCompanyTeamResponse'                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateCompanyTeamResponse',
        'DeleteCompanyTeam'                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteCompanyTeam',
        'DeleteCompanyTeamResponse'                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteCompanyTeamResponse',
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

    /**
     * Adds or Updates company custom fields
     *
     * @param AddOrUpdateCompanyCustomField $parameters
     * @return AddOrUpdateCompanyCustomFieldResponse
     */
    public function AddOrUpdateCompanyCustomField(AddOrUpdateCompanyCustomField $parameters)
    {
        return $this->__soapCall('AddOrUpdateCompanyCustomField', array($parameters));
    }

    /**
     * Obtains a specific Company Team record against a given company.
     *
     * @param GetCompanyTeam $parameters
     * @return GetCompanyTeamResponse
     */
    public function GetCompanyTeam(GetCompanyTeam $parameters)
    {
        return $this->__soapCall('GetCompanyTeam', array($parameters));
    }

    /**
     * Adds or Updates a specific Company Team record against a given company.
     *
     * @param AddOrUpdateCompanyTeam $parameters
     * @return AddOrUpdateCompanyTeamResponse
     */
    public function AddOrUpdateCompanyTeam(AddOrUpdateCompanyTeam $parameters)
    {
        return $this->__soapCall('AddOrUpdateCompanyTeam', array($parameters));
    }

    /**
     * Deletes a specific Company Team record against a given company.
     *
     * @param DeleteCompanyTeam $parameters
     * @return DeleteCompanyTeamResponse
     */
    public function DeleteCompanyTeam(DeleteCompanyTeam $parameters)
    {
        return $this->__soapCall('DeleteCompanyTeam', array($parameters));
    }

}
