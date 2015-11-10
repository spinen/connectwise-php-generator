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
        'GetActivity'                                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetActivity',
        'ApiCredentials'                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ApiCredentials',
        'GetActivityResponse'                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetActivityResponse',
        'Activity'                                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\Activity',
        'ActivityDuration'                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ActivityDuration',
        'ContactInformation'                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ContactInformation',
        'LoadActivity'                                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\LoadActivity',
        'LoadActivityResponse'                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\LoadActivityResponse',
        'AddActivity'                                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddActivity',
        'AddActivityResponse'                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddActivityResponse',
        'UpdateActivity'                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateActivity',
        'UpdateActivityResponse'                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateActivityResponse',
        'AddOrUpdateActivity'                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateActivity',
        'AddOrUpdateActivityResponse'                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateActivityResponse',
        'DeleteActivity'                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteActivity',
        'DeleteActivityResponse'                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteActivityResponse',
        'FindActivities'                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindActivities',
        'ArrayOfString'                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfString',
        'FindActivitiesResponse'                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindActivitiesResponse',
        'ArrayOfActivityFindResult'                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfActivityFindResult',
        'ActivityFindResult'                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ActivityFindResult',
        'GetAgreementSite'                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAgreementSite',
        'GetAgreementSiteResponse'                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAgreementSiteResponse',
        'AgreementSite'                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AgreementSite',
        'AddOrUpdateAgreementSite'                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateAgreementSite',
        'AddOrUpdateAgreementSiteResponse'               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateAgreementSiteResponse',
        'FindAgreementSites'                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindAgreementSites',
        'FindAgreementSitesResponse'                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindAgreementSitesResponse',
        'ArrayOfAgreementSiteFindResult'                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfAgreementSiteFindResult',
        'AgreementSiteFindResult'                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AgreementSiteFindResult',
        'DeleteAgreementSite'                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteAgreementSite',
        'DeleteAgreementSiteResponse'                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteAgreementSiteResponse',
        'GetAgreementWorkType'                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAgreementWorkType',
        'GetAgreementWorkTypeResponse'                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAgreementWorkTypeResponse',
        'AgreementWorkType'                              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AgreementWorkType',
        'AddOrUpdateAgreementWorkType'                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateAgreementWorkType',
        'AddOrUpdateAgreementWorkTypeResponse'           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateAgreementWorkTypeResponse',
        'FindAgreementWorkTypes'                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindAgreementWorkTypes',
        'FindAgreementWorkTypesResponse'                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindAgreementWorkTypesResponse',
        'ArrayOfAgreementWorkTypeFindResult'             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfAgreementWorkTypeFindResult',
        'AgreementWorkTypeFindResult'                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AgreementWorkTypeFindResult',
        'DeleteAgreementWorkType'                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteAgreementWorkType',
        'DeleteAgreementWorkTypeResponse'                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteAgreementWorkTypeResponse',
        'GetAgreementWorkRole'                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAgreementWorkRole',
        'GetAgreementWorkRoleResponse'                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAgreementWorkRoleResponse',
        'AgreementWorkRole'                              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AgreementWorkRole',
        'AddOrUpdateAgreementWorkRole'                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateAgreementWorkRole',
        'AddOrUpdateAgreementWorkRoleResponse'           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateAgreementWorkRoleResponse',
        'FindAgreementWorkRoles'                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindAgreementWorkRoles',
        'FindAgreementWorkRolesResponse'                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindAgreementWorkRolesResponse',
        'ArrayOfAgreementWorkRoleFindResult'             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfAgreementWorkRoleFindResult',
        'AgreementWorkRoleFindResult'                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AgreementWorkRoleFindResult',
        'DeleteAgreementWorkRole'                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteAgreementWorkRole',
        'DeleteAgreementWorkRoleResponse'                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteAgreementWorkRoleResponse',
        'GetAgreementAdjustment'                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAgreementAdjustment',
        'GetAgreementAdjustmentResponse'                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAgreementAdjustmentResponse',
        'AgreementAdjustment'                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AgreementAdjustment',
        'AddOrUpdateAgreementAdjustment'                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateAgreementAdjustment',
        'AddOrUpdateAgreementAdjustmentResponse'         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateAgreementAdjustmentResponse',
        'FindAgreementAdjustments'                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindAgreementAdjustments',
        'FindAgreementAdjustmentsResponse'               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindAgreementAdjustmentsResponse',
        'ArrayOfAgreementAdjustmentFindResult'           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfAgreementAdjustmentFindResult',
        'AgreementAdjustmentFindResult'                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AgreementAdjustmentFindResult',
        'DeleteAgreementAdjustment'                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteAgreementAdjustment',
        'DeleteAgreementAdjustmentResponse'              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteAgreementAdjustmentResponse',
        'GetAgreement'                                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAgreement',
        'GetAgreementResponse'                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAgreementResponse',
        'Agreement'                                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\Agreement',
        'DeleteAgreement'                                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteAgreement',
        'DeleteAgreementResponse'                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteAgreementResponse',
        'FindAgreements'                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindAgreements',
        'FindAgreementsResponse'                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindAgreementsResponse',
        'ArrayOfAgreementFindResult'                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfAgreementFindResult',
        'AgreementFindResult'                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AgreementFindResult',
        'AddOrUpdateAgreement'                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateAgreement',
        'AddOrUpdateAgreementResponse'                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateAgreementResponse',
        'GetAgreementAddition'                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAgreementAddition',
        'GetAgreementAdditionResponse'                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAgreementAdditionResponse',
        'AgreementAddition'                              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AgreementAddition',
        'AdditionsProduct'                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AdditionsProduct',
        'AddOrUpdateAgreementAddition'                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateAgreementAddition',
        'AddOrUpdateAgreementAdditionResponse'           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateAgreementAdditionResponse',
        'FindAgreementAdditions'                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindAgreementAdditions',
        'FindAgreementAdditionsResponse'                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindAgreementAdditionsResponse',
        'ArrayOfAgreementAdditionFindResult'             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfAgreementAdditionFindResult',
        'AgreementAdditionFindResult'                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AgreementAdditionFindResult',
        'DeleteAgreementAddition'                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteAgreementAddition',
        'DeleteAgreementAdditionResponse'                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteAgreementAdditionResponse',
        'GetAgreementWorkRoleExclusion'                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAgreementWorkRoleExclusion',
        'GetAgreementWorkRoleExclusionResponse'          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAgreementWorkRoleExclusionResponse',
        'AgreementWorkRoleExclusion'                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AgreementWorkRoleExclusion',
        'GetAgreementWorkTypeExclusion'                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAgreementWorkTypeExclusion',
        'GetAgreementWorkTypeExclusionResponse'          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAgreementWorkTypeExclusionResponse',
        'AgreementWorkTypeExclusion'                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AgreementWorkTypeExclusion',
        'FindAgreementExclusions'                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindAgreementExclusions',
        'FindAgreementExclusionsResponse'                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindAgreementExclusionsResponse',
        'ArrayOfAgreementExclusionFindResult'            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfAgreementExclusionFindResult',
        'AgreementExclusionFindResult'                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AgreementExclusionFindResult',
        'AddOrRemoveAgreementWorkTypeExclusion'          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrRemoveAgreementWorkTypeExclusion',
        'ArrayOfAgreementWorkTypeExclusion'              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfAgreementWorkTypeExclusion',
        'AddOrRemoveAgreementWorkTypeExclusionResponse'  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrRemoveAgreementWorkTypeExclusionResponse',
        'AddOrRemoveAgreementWorkRoleExclusion'          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrRemoveAgreementWorkRoleExclusion',
        'ArrayOfAgreementWorkRoleExclusion'              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfAgreementWorkRoleExclusion',
        'AddOrRemoveAgreementWorkRoleExclusionResponse'  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrRemoveAgreementWorkRoleExclusionResponse',
        'GetAgreementBoardDefault'                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAgreementBoardDefault',
        'GetAgreementBoardDefaultResponse'               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAgreementBoardDefaultResponse',
        'AgreementBoardDefault'                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AgreementBoardDefault',
        'FindAgreementBoardDefaults'                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindAgreementBoardDefaults',
        'FindAgreementBoardDefaultsResponse'             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindAgreementBoardDefaultsResponse',
        'ArrayOfAgreementBoardDefaultFindResult'         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfAgreementBoardDefaultFindResult',
        'AgreementBoardDefaultFindResult'                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AgreementBoardDefaultFindResult',
        'AddOrUpdateAgreementBoardDefault'               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateAgreementBoardDefault',
        'AddOrUpdateAgreementBoardDefaultResponse'       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateAgreementBoardDefaultResponse',
        'DeleteAgreementBoardDefault'                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteAgreementBoardDefault',
        'DeleteAgreementBoardDefaultResponse'            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteAgreementBoardDefaultResponse',
        'GetCompany'                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetCompany',
        'GetCompanyResponse'                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetCompanyResponse',
        'Company'                                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\Company',
        'CompanyAddress'                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\CompanyAddress',
        'Address'                                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\Address',
        'ArrayOfCompanyAddress'                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfCompanyAddress',
        'LoadCompany'                                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\LoadCompany',
        'LoadCompanyResponse'                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\LoadCompanyResponse',
        'AddCompany'                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddCompany',
        'AddCompanyResponse'                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddCompanyResponse',
        'UpdateCompany'                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateCompany',
        'UpdateCompanyResponse'                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateCompanyResponse',
        'AddOrUpdateCompany'                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateCompany',
        'AddOrUpdateCompanyResponse'                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateCompanyResponse',
        'DeleteCompany'                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteCompany',
        'DeleteCompanyResponse'                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteCompanyResponse',
        'FindCompanies'                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindCompanies',
        'FindCompaniesResponse'                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindCompaniesResponse',
        'ArrayOfCompanyFindResult'                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfCompanyFindResult',
        'CompanyFindResult'                              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\CompanyFindResult',
        'SetCompanyDefaultContact'                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\SetCompanyDefaultContact',
        'SetCompanyDefaultContactResponse'               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\SetCompanyDefaultContactResponse',
        'GetCompanyProfile'                              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetCompanyProfile',
        'GetCompanyProfileResponse'                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetCompanyProfileResponse',
        'CompanyProfile'                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\CompanyProfile',
        'UpdateCompanyProfile'                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateCompanyProfile',
        'UpdateCompanyProfileResponse'                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateCompanyProfileResponse',
        'GetAllCompanyNotes'                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAllCompanyNotes',
        'GetAllCompanyNotesResponse'                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAllCompanyNotesResponse',
        'ArrayOfNote'                                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfNote',
        'Note'                                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\Note',
        'GetCompanyNote'                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetCompanyNote',
        'GetCompanyNoteResponse'                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetCompanyNoteResponse',
        'AddOrUpdateCompanyNote'                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateCompanyNote',
        'AddOrUpdateCompanyNoteResponse'                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateCompanyNoteResponse',
        'DeleteCompanyNote'                              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteCompanyNote',
        'DeleteCompanyNoteResponse'                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteCompanyNoteResponse',
        'AddOrUpdateCompanyCustomField'                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateCompanyCustomField',
        'ArrayOfUserDefinedCustomField'                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfUserDefinedCustomField',
        'UserDefinedCustomField'                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UserDefinedCustomField',
        'AddOrUpdateCompanyCustomFieldResponse'          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateCompanyCustomFieldResponse',
        'GetCompanyTeam'                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetCompanyTeam',
        'GetCompanyTeamResponse'                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetCompanyTeamResponse',
        'CompanyTeam'                                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\CompanyTeam',
        'AddOrUpdateCompanyTeam'                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateCompanyTeam',
        'AddOrUpdateCompanyTeamResponse'                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateCompanyTeamResponse',
        'DeleteCompanyTeam'                              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteCompanyTeam',
        'DeleteCompanyTeamResponse'                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteCompanyTeamResponse',
        'GetConfiguration'                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetConfiguration',
        'GetConfigurationResponse'                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetConfigurationResponse',
        'Configuration'                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\Configuration',
        'ArrayOfConfigurationQuestion'                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfConfigurationQuestion',
        'ConfigurationQuestion'                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ConfigurationQuestion',
        'VendorCompany'                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\VendorCompany',
        'ManufacturerCompany'                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ManufacturerCompany',
        'LoadConfiguration'                              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\LoadConfiguration',
        'LoadConfigurationResponse'                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\LoadConfigurationResponse',
        'FindConfigurations'                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindConfigurations',
        'FindConfigurationsResponse'                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindConfigurationsResponse',
        'ArrayOfConfigurationFindResult'                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfConfigurationFindResult',
        'ConfigurationFindResult'                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ConfigurationFindResult',
        'FindConfigurationCount'                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindConfigurationCount',
        'FindConfigurationCountResponse'                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindConfigurationCountResponse',
        'AddConfiguration'                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddConfiguration',
        'AddConfigurationResponse'                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddConfigurationResponse',
        'UpdateConfiguration'                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateConfiguration',
        'UpdateConfigurationResponse'                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateConfigurationResponse',
        'AddOrUpdateConfiguration'                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateConfiguration',
        'AddOrUpdateConfigurationResponse'               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateConfigurationResponse',
        'DeleteConfiguration'                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteConfiguration',
        'DeleteConfigurationResponse'                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteConfigurationResponse',
        'FindConfigurationTypes'                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindConfigurationTypes',
        'FindConfigurationTypesResponse'                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindConfigurationTypesResponse',
        'ArrayOfConfigurationTypeFindResult'             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfConfigurationTypeFindResult',
        'ConfigurationTypeFindResult'                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ConfigurationTypeFindResult',
        'GetConfigurationType'                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetConfigurationType',
        'GetConfigurationTypeResponse'                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetConfigurationTypeResponse',
        'ConfigurationType'                              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ConfigurationType',
        'ArrayOfConfigurationTypeQuestion'               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfConfigurationTypeQuestion',
        'ConfigurationTypeQuestion'                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ConfigurationTypeQuestion',
        'ArrayOfPossibleResponse'                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfPossibleResponse',
        'PossibleResponse'                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\PossibleResponse',
        'LoadConfigurationType'                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\LoadConfigurationType',
        'LoadConfigurationTypeResponse'                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\LoadConfigurationTypeResponse',
        'UpdateConfigurationType'                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateConfigurationType',
        'UpdateConfigurationTypeResponse'                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateConfigurationTypeResponse',
        'AddConfigurationType'                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddConfigurationType',
        'AddConfigurationTypeResponse'                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddConfigurationTypeResponse',
        'AddOrUpdateConfigurationType'                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateConfigurationType',
        'AddOrUpdateConfigurationTypeResponse'           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateConfigurationTypeResponse',
        'DeleteConfigurationType'                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteConfigurationType',
        'DeleteConfigurationTypeResponse'                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteConfigurationTypeResponse',
        'DeleteConfigurationTypeQuestion'                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteConfigurationTypeQuestion',
        'DeleteConfigurationTypeQuestionResponse'        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteConfigurationTypeQuestionResponse',
        'DeletePossibleResponse'                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeletePossibleResponse',
        'DeletePossibleResponseResponse'                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeletePossibleResponseResponse',
        'GetAllContactNotes'                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAllContactNotes',
        'GetAllContactNotesResponse'                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAllContactNotesResponse',
        'GetContactNote'                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetContactNote',
        'GetContactNoteResponse'                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetContactNoteResponse',
        'AddOrUpdateContactNote'                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateContactNote',
        'AddOrUpdateContactNoteResponse'                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateContactNoteResponse',
        'DeleteNote'                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteNote',
        'DeleteNoteResponse'                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteNoteResponse',
        'GetAllContactCommunicationItems'                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAllContactCommunicationItems',
        'GetAllContactCommunicationItemsResponse'        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAllContactCommunicationItemsResponse',
        'ArrayOfContactCommunicationItem'                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfContactCommunicationItem',
        'ContactCommunicationItem'                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ContactCommunicationItem',
        'GetAllCommunicationTypesAndDescription'         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAllCommunicationTypesAndDescription',
        'GetAllCommunicationTypesAndDescriptionResponse' => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAllCommunicationTypesAndDescriptionResponse',
        'ArrayOfCommunicationTypeDescriptions'           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfCommunicationTypeDescriptions',
        'CommunicationTypeDescriptions'                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\CommunicationTypeDescriptions',
        'GetContactCommunicationItem'                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetContactCommunicationItem',
        'GetContactCommunicationItemResponse'            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetContactCommunicationItemResponse',
        'AddOrUpdateContactCommunicationItem'            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateContactCommunicationItem',
        'AddOrUpdateContactCommunicationItemResponse'    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateContactCommunicationItemResponse',
        'DeleteContactCommunicationItem'                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteContactCommunicationItem',
        'DeleteContactCommunicationItemResponse'         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteContactCommunicationItemResponse',
        'SetDefaultContactCommunicationItem'             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\SetDefaultContactCommunicationItem',
        'SetDefaultContactCommunicationItemResponse'     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\SetDefaultContactCommunicationItemResponse',
        'GetContact'                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetContact',
        'GetContactResponse'                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetContactResponse',
        'Contact'                                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\Contact',
        'CompanyAddressInfo'                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\CompanyAddressInfo',
        'LoadContact'                                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\LoadContact',
        'LoadContactResponse'                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\LoadContactResponse',
        'AddOrUpdateContact'                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateContact',
        'AddOrUpdateContactResponse'                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateContactResponse',
        'DeleteContact'                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteContact',
        'DeleteContactResponse'                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteContactResponse',
        'FindContacts'                                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindContacts',
        'FindContactsResponse'                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindContactsResponse',
        'ArrayOfContactFindResult'                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfContactFindResult',
        'ContactFindResult'                              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ContactFindResult',
        'FindContactCount'                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindContactCount',
        'FindContactCountResponse'                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindContactCountResponse',
        'AddContactToGroup'                              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddContactToGroup',
        'AddContactToGroupResponse'                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddContactToGroupResponse',
        'RemoveContactFromGroup'                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\RemoveContactFromGroup',
        'RemoveContactFromGroupResponse'                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\RemoveContactFromGroupResponse',
        'Authenticate'                                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\Authenticate',
        'AuthenticateResponse'                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AuthenticateResponse',
        'AuthenticationResponse'                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AuthenticationResponse',
        'GetPortalConfigSettings'                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetPortalConfigSettings',
        'GetPortalConfigSettingsResponse'                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetPortalConfigSettingsResponse',
        'PortalConfigSettings'                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\PortalConfigSettings',
        'PortalImage'                                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\PortalImage',
        'PortalImageBase'                                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\PortalImageBase',
        'CountryCaption'                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\CountryCaption',
        'MouseOverData'                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\MouseOverData',
        'LongDescription'                                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\LongDescription',
        'GetPortalSecurity'                              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetPortalSecurity',
        'GetPortalSecurityResponse'                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetPortalSecurityResponse',
        'ArrayOfPortalSecurity'                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfPortalSecurity',
        'PortalSecurity'                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\PortalSecurity',
        'GetPortalLoginCustomizations'                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetPortalLoginCustomizations',
        'GetPortalLoginCustomizationsResponse'           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetPortalLoginCustomizationsResponse',
        'PortalLoginCustomization'                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\PortalLoginCustomization',
        'RequestPassword'                                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\RequestPassword',
        'RequestPasswordResponse'                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\RequestPasswordResponse',
        'GetAvatarImage'                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAvatarImage',
        'GetAvatarImageResponse'                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAvatarImageResponse',
        'GetPresenceStatus'                              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetPresenceStatus',
        'GetPresenceStatusResponse'                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetPresenceStatusResponse',
        'ContactPresence'                                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ContactPresence',
        'UpdatePresenceStatus'                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdatePresenceStatus',
        'UpdatePresenceStatusResponse'                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdatePresenceStatusResponse',
        'AddDocuments'                                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddDocuments',
        'ArrayOfDocumentInfo'                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfDocumentInfo',
        'DocumentInfo'                                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DocumentInfo',
        'AddDocumentsResponse'                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddDocumentsResponse',
        'GetDocument'                                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetDocument',
        'GetDocumentResponse'                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetDocumentResponse',
        'DeleteDocument'                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteDocument',
        'DeleteDocumentResponse'                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteDocumentResponse',
        'FindDocuments'                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindDocuments',
        'FindDocumentsResponse'                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindDocumentsResponse',
        'ArrayOfDocumentFindResult'                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfDocumentFindResult',
        'DocumentFindResult'                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DocumentFindResult',
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
