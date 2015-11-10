<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

/**
 * ConnectWise Project API
 */
class ProjectApi extends \Spinen\ConnectWise\Library\SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array(
        'GetActivity'                                                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetActivity',
        'ApiCredentials'                                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ApiCredentials',
        'GetActivityResponse'                                                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetActivityResponse',
        'Activity'                                                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\Activity',
        'ActivityDuration'                                                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ActivityDuration',
        'ContactInformation'                                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ContactInformation',
        'LoadActivity'                                                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\LoadActivity',
        'LoadActivityResponse'                                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\LoadActivityResponse',
        'AddActivity'                                                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddActivity',
        'AddActivityResponse'                                                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddActivityResponse',
        'UpdateActivity'                                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateActivity',
        'UpdateActivityResponse'                                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateActivityResponse',
        'AddOrUpdateActivity'                                                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateActivity',
        'AddOrUpdateActivityResponse'                                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateActivityResponse',
        'DeleteActivity'                                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteActivity',
        'DeleteActivityResponse'                                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteActivityResponse',
        'FindActivities'                                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindActivities',
        'ArrayOfString'                                                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfString',
        'FindActivitiesResponse'                                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindActivitiesResponse',
        'ArrayOfActivityFindResult'                                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfActivityFindResult',
        'ActivityFindResult'                                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ActivityFindResult',
        'GetAgreementSite'                                                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAgreementSite',
        'GetAgreementSiteResponse'                                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAgreementSiteResponse',
        'AgreementSite'                                                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AgreementSite',
        'AddOrUpdateAgreementSite'                                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateAgreementSite',
        'AddOrUpdateAgreementSiteResponse'                                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateAgreementSiteResponse',
        'FindAgreementSites'                                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindAgreementSites',
        'FindAgreementSitesResponse'                                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindAgreementSitesResponse',
        'ArrayOfAgreementSiteFindResult'                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfAgreementSiteFindResult',
        'AgreementSiteFindResult'                                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AgreementSiteFindResult',
        'DeleteAgreementSite'                                                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteAgreementSite',
        'DeleteAgreementSiteResponse'                                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteAgreementSiteResponse',
        'GetAgreementWorkType'                                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAgreementWorkType',
        'GetAgreementWorkTypeResponse'                                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAgreementWorkTypeResponse',
        'AgreementWorkType'                                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AgreementWorkType',
        'AddOrUpdateAgreementWorkType'                                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateAgreementWorkType',
        'AddOrUpdateAgreementWorkTypeResponse'                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateAgreementWorkTypeResponse',
        'FindAgreementWorkTypes'                                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindAgreementWorkTypes',
        'FindAgreementWorkTypesResponse'                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindAgreementWorkTypesResponse',
        'ArrayOfAgreementWorkTypeFindResult'                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfAgreementWorkTypeFindResult',
        'AgreementWorkTypeFindResult'                                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AgreementWorkTypeFindResult',
        'DeleteAgreementWorkType'                                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteAgreementWorkType',
        'DeleteAgreementWorkTypeResponse'                                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteAgreementWorkTypeResponse',
        'GetAgreementWorkRole'                                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAgreementWorkRole',
        'GetAgreementWorkRoleResponse'                                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAgreementWorkRoleResponse',
        'AgreementWorkRole'                                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AgreementWorkRole',
        'AddOrUpdateAgreementWorkRole'                                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateAgreementWorkRole',
        'AddOrUpdateAgreementWorkRoleResponse'                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateAgreementWorkRoleResponse',
        'FindAgreementWorkRoles'                                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindAgreementWorkRoles',
        'FindAgreementWorkRolesResponse'                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindAgreementWorkRolesResponse',
        'ArrayOfAgreementWorkRoleFindResult'                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfAgreementWorkRoleFindResult',
        'AgreementWorkRoleFindResult'                                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AgreementWorkRoleFindResult',
        'DeleteAgreementWorkRole'                                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteAgreementWorkRole',
        'DeleteAgreementWorkRoleResponse'                                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteAgreementWorkRoleResponse',
        'GetAgreementAdjustment'                                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAgreementAdjustment',
        'GetAgreementAdjustmentResponse'                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAgreementAdjustmentResponse',
        'AgreementAdjustment'                                                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AgreementAdjustment',
        'AddOrUpdateAgreementAdjustment'                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateAgreementAdjustment',
        'AddOrUpdateAgreementAdjustmentResponse'                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateAgreementAdjustmentResponse',
        'FindAgreementAdjustments'                                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindAgreementAdjustments',
        'FindAgreementAdjustmentsResponse'                                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindAgreementAdjustmentsResponse',
        'ArrayOfAgreementAdjustmentFindResult'                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfAgreementAdjustmentFindResult',
        'AgreementAdjustmentFindResult'                                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AgreementAdjustmentFindResult',
        'DeleteAgreementAdjustment'                                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteAgreementAdjustment',
        'DeleteAgreementAdjustmentResponse'                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteAgreementAdjustmentResponse',
        'GetAgreement'                                                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAgreement',
        'GetAgreementResponse'                                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAgreementResponse',
        'Agreement'                                                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\Agreement',
        'DeleteAgreement'                                                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteAgreement',
        'DeleteAgreementResponse'                                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteAgreementResponse',
        'FindAgreements'                                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindAgreements',
        'FindAgreementsResponse'                                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindAgreementsResponse',
        'ArrayOfAgreementFindResult'                                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfAgreementFindResult',
        'AgreementFindResult'                                                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AgreementFindResult',
        'AddOrUpdateAgreement'                                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateAgreement',
        'AddOrUpdateAgreementResponse'                                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateAgreementResponse',
        'GetAgreementAddition'                                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAgreementAddition',
        'GetAgreementAdditionResponse'                                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAgreementAdditionResponse',
        'AgreementAddition'                                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AgreementAddition',
        'AdditionsProduct'                                                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AdditionsProduct',
        'AddOrUpdateAgreementAddition'                                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateAgreementAddition',
        'AddOrUpdateAgreementAdditionResponse'                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateAgreementAdditionResponse',
        'FindAgreementAdditions'                                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindAgreementAdditions',
        'FindAgreementAdditionsResponse'                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindAgreementAdditionsResponse',
        'ArrayOfAgreementAdditionFindResult'                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfAgreementAdditionFindResult',
        'AgreementAdditionFindResult'                                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AgreementAdditionFindResult',
        'DeleteAgreementAddition'                                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteAgreementAddition',
        'DeleteAgreementAdditionResponse'                                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteAgreementAdditionResponse',
        'GetAgreementWorkRoleExclusion'                                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAgreementWorkRoleExclusion',
        'GetAgreementWorkRoleExclusionResponse'                              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAgreementWorkRoleExclusionResponse',
        'AgreementWorkRoleExclusion'                                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AgreementWorkRoleExclusion',
        'GetAgreementWorkTypeExclusion'                                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAgreementWorkTypeExclusion',
        'GetAgreementWorkTypeExclusionResponse'                              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAgreementWorkTypeExclusionResponse',
        'AgreementWorkTypeExclusion'                                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AgreementWorkTypeExclusion',
        'FindAgreementExclusions'                                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindAgreementExclusions',
        'FindAgreementExclusionsResponse'                                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindAgreementExclusionsResponse',
        'ArrayOfAgreementExclusionFindResult'                                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfAgreementExclusionFindResult',
        'AgreementExclusionFindResult'                                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AgreementExclusionFindResult',
        'AddOrRemoveAgreementWorkTypeExclusion'                              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrRemoveAgreementWorkTypeExclusion',
        'ArrayOfAgreementWorkTypeExclusion'                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfAgreementWorkTypeExclusion',
        'AddOrRemoveAgreementWorkTypeExclusionResponse'                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrRemoveAgreementWorkTypeExclusionResponse',
        'AddOrRemoveAgreementWorkRoleExclusion'                              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrRemoveAgreementWorkRoleExclusion',
        'ArrayOfAgreementWorkRoleExclusion'                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfAgreementWorkRoleExclusion',
        'AddOrRemoveAgreementWorkRoleExclusionResponse'                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrRemoveAgreementWorkRoleExclusionResponse',
        'GetAgreementBoardDefault'                                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAgreementBoardDefault',
        'GetAgreementBoardDefaultResponse'                                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAgreementBoardDefaultResponse',
        'AgreementBoardDefault'                                              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AgreementBoardDefault',
        'FindAgreementBoardDefaults'                                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindAgreementBoardDefaults',
        'FindAgreementBoardDefaultsResponse'                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindAgreementBoardDefaultsResponse',
        'ArrayOfAgreementBoardDefaultFindResult'                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfAgreementBoardDefaultFindResult',
        'AgreementBoardDefaultFindResult'                                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AgreementBoardDefaultFindResult',
        'AddOrUpdateAgreementBoardDefault'                                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateAgreementBoardDefault',
        'AddOrUpdateAgreementBoardDefaultResponse'                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateAgreementBoardDefaultResponse',
        'DeleteAgreementBoardDefault'                                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteAgreementBoardDefault',
        'DeleteAgreementBoardDefaultResponse'                                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteAgreementBoardDefaultResponse',
        'GetCompany'                                                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetCompany',
        'GetCompanyResponse'                                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetCompanyResponse',
        'Company'                                                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\Company',
        'CompanyAddress'                                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\CompanyAddress',
        'Address'                                                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\Address',
        'ArrayOfCompanyAddress'                                              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfCompanyAddress',
        'LoadCompany'                                                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\LoadCompany',
        'LoadCompanyResponse'                                                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\LoadCompanyResponse',
        'AddCompany'                                                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddCompany',
        'AddCompanyResponse'                                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddCompanyResponse',
        'UpdateCompany'                                                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateCompany',
        'UpdateCompanyResponse'                                              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateCompanyResponse',
        'AddOrUpdateCompany'                                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateCompany',
        'AddOrUpdateCompanyResponse'                                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateCompanyResponse',
        'DeleteCompany'                                                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteCompany',
        'DeleteCompanyResponse'                                              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteCompanyResponse',
        'FindCompanies'                                                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindCompanies',
        'FindCompaniesResponse'                                              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindCompaniesResponse',
        'ArrayOfCompanyFindResult'                                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfCompanyFindResult',
        'CompanyFindResult'                                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\CompanyFindResult',
        'SetCompanyDefaultContact'                                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\SetCompanyDefaultContact',
        'SetCompanyDefaultContactResponse'                                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\SetCompanyDefaultContactResponse',
        'GetCompanyProfile'                                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetCompanyProfile',
        'GetCompanyProfileResponse'                                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetCompanyProfileResponse',
        'CompanyProfile'                                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\CompanyProfile',
        'UpdateCompanyProfile'                                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateCompanyProfile',
        'UpdateCompanyProfileResponse'                                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateCompanyProfileResponse',
        'GetAllCompanyNotes'                                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAllCompanyNotes',
        'GetAllCompanyNotesResponse'                                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAllCompanyNotesResponse',
        'ArrayOfNote'                                                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfNote',
        'Note'                                                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\Note',
        'GetCompanyNote'                                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetCompanyNote',
        'GetCompanyNoteResponse'                                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetCompanyNoteResponse',
        'AddOrUpdateCompanyNote'                                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateCompanyNote',
        'AddOrUpdateCompanyNoteResponse'                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateCompanyNoteResponse',
        'DeleteCompanyNote'                                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteCompanyNote',
        'DeleteCompanyNoteResponse'                                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteCompanyNoteResponse',
        'AddOrUpdateCompanyCustomField'                                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateCompanyCustomField',
        'ArrayOfUserDefinedCustomField'                                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfUserDefinedCustomField',
        'UserDefinedCustomField'                                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UserDefinedCustomField',
        'AddOrUpdateCompanyCustomFieldResponse'                              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateCompanyCustomFieldResponse',
        'GetCompanyTeam'                                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetCompanyTeam',
        'GetCompanyTeamResponse'                                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetCompanyTeamResponse',
        'CompanyTeam'                                                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\CompanyTeam',
        'AddOrUpdateCompanyTeam'                                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateCompanyTeam',
        'AddOrUpdateCompanyTeamResponse'                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateCompanyTeamResponse',
        'DeleteCompanyTeam'                                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteCompanyTeam',
        'DeleteCompanyTeamResponse'                                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteCompanyTeamResponse',
        'GetConfiguration'                                                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetConfiguration',
        'GetConfigurationResponse'                                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetConfigurationResponse',
        'Configuration'                                                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\Configuration',
        'ArrayOfConfigurationQuestion'                                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfConfigurationQuestion',
        'ConfigurationQuestion'                                              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ConfigurationQuestion',
        'VendorCompany'                                                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\VendorCompany',
        'ManufacturerCompany'                                                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ManufacturerCompany',
        'LoadConfiguration'                                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\LoadConfiguration',
        'LoadConfigurationResponse'                                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\LoadConfigurationResponse',
        'FindConfigurations'                                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindConfigurations',
        'FindConfigurationsResponse'                                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindConfigurationsResponse',
        'ArrayOfConfigurationFindResult'                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfConfigurationFindResult',
        'ConfigurationFindResult'                                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ConfigurationFindResult',
        'FindConfigurationCount'                                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindConfigurationCount',
        'FindConfigurationCountResponse'                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindConfigurationCountResponse',
        'AddConfiguration'                                                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddConfiguration',
        'AddConfigurationResponse'                                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddConfigurationResponse',
        'UpdateConfiguration'                                                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateConfiguration',
        'UpdateConfigurationResponse'                                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateConfigurationResponse',
        'AddOrUpdateConfiguration'                                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateConfiguration',
        'AddOrUpdateConfigurationResponse'                                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateConfigurationResponse',
        'DeleteConfiguration'                                                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteConfiguration',
        'DeleteConfigurationResponse'                                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteConfigurationResponse',
        'FindConfigurationTypes'                                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindConfigurationTypes',
        'FindConfigurationTypesResponse'                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindConfigurationTypesResponse',
        'ArrayOfConfigurationTypeFindResult'                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfConfigurationTypeFindResult',
        'ConfigurationTypeFindResult'                                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ConfigurationTypeFindResult',
        'GetConfigurationType'                                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetConfigurationType',
        'GetConfigurationTypeResponse'                                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetConfigurationTypeResponse',
        'ConfigurationType'                                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ConfigurationType',
        'ArrayOfConfigurationTypeQuestion'                                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfConfigurationTypeQuestion',
        'ConfigurationTypeQuestion'                                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ConfigurationTypeQuestion',
        'ArrayOfPossibleResponse'                                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfPossibleResponse',
        'PossibleResponse'                                                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\PossibleResponse',
        'LoadConfigurationType'                                              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\LoadConfigurationType',
        'LoadConfigurationTypeResponse'                                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\LoadConfigurationTypeResponse',
        'UpdateConfigurationType'                                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateConfigurationType',
        'UpdateConfigurationTypeResponse'                                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateConfigurationTypeResponse',
        'AddConfigurationType'                                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddConfigurationType',
        'AddConfigurationTypeResponse'                                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddConfigurationTypeResponse',
        'AddOrUpdateConfigurationType'                                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateConfigurationType',
        'AddOrUpdateConfigurationTypeResponse'                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateConfigurationTypeResponse',
        'DeleteConfigurationType'                                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteConfigurationType',
        'DeleteConfigurationTypeResponse'                                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteConfigurationTypeResponse',
        'DeleteConfigurationTypeQuestion'                                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteConfigurationTypeQuestion',
        'DeleteConfigurationTypeQuestionResponse'                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteConfigurationTypeQuestionResponse',
        'DeletePossibleResponse'                                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeletePossibleResponse',
        'DeletePossibleResponseResponse'                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeletePossibleResponseResponse',
        'GetAllContactNotes'                                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAllContactNotes',
        'GetAllContactNotesResponse'                                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAllContactNotesResponse',
        'GetContactNote'                                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetContactNote',
        'GetContactNoteResponse'                                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetContactNoteResponse',
        'AddOrUpdateContactNote'                                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateContactNote',
        'AddOrUpdateContactNoteResponse'                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateContactNoteResponse',
        'DeleteNote'                                                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteNote',
        'DeleteNoteResponse'                                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteNoteResponse',
        'GetAllContactCommunicationItems'                                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAllContactCommunicationItems',
        'GetAllContactCommunicationItemsResponse'                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAllContactCommunicationItemsResponse',
        'ArrayOfContactCommunicationItem'                                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfContactCommunicationItem',
        'ContactCommunicationItem'                                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ContactCommunicationItem',
        'GetAllCommunicationTypesAndDescription'                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAllCommunicationTypesAndDescription',
        'GetAllCommunicationTypesAndDescriptionResponse'                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAllCommunicationTypesAndDescriptionResponse',
        'ArrayOfCommunicationTypeDescriptions'                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfCommunicationTypeDescriptions',
        'CommunicationTypeDescriptions'                                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\CommunicationTypeDescriptions',
        'GetContactCommunicationItem'                                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetContactCommunicationItem',
        'GetContactCommunicationItemResponse'                                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetContactCommunicationItemResponse',
        'AddOrUpdateContactCommunicationItem'                                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateContactCommunicationItem',
        'AddOrUpdateContactCommunicationItemResponse'                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateContactCommunicationItemResponse',
        'DeleteContactCommunicationItem'                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteContactCommunicationItem',
        'DeleteContactCommunicationItemResponse'                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteContactCommunicationItemResponse',
        'SetDefaultContactCommunicationItem'                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\SetDefaultContactCommunicationItem',
        'SetDefaultContactCommunicationItemResponse'                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\SetDefaultContactCommunicationItemResponse',
        'GetContact'                                                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetContact',
        'GetContactResponse'                                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetContactResponse',
        'Contact'                                                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\Contact',
        'CompanyAddressInfo'                                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\CompanyAddressInfo',
        'LoadContact'                                                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\LoadContact',
        'LoadContactResponse'                                                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\LoadContactResponse',
        'AddOrUpdateContact'                                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateContact',
        'AddOrUpdateContactResponse'                                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateContactResponse',
        'DeleteContact'                                                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteContact',
        'DeleteContactResponse'                                              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteContactResponse',
        'FindContacts'                                                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindContacts',
        'FindContactsResponse'                                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindContactsResponse',
        'ArrayOfContactFindResult'                                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfContactFindResult',
        'ContactFindResult'                                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ContactFindResult',
        'FindContactCount'                                                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindContactCount',
        'FindContactCountResponse'                                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindContactCountResponse',
        'AddContactToGroup'                                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddContactToGroup',
        'AddContactToGroupResponse'                                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddContactToGroupResponse',
        'RemoveContactFromGroup'                                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\RemoveContactFromGroup',
        'RemoveContactFromGroupResponse'                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\RemoveContactFromGroupResponse',
        'Authenticate'                                                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\Authenticate',
        'AuthenticateResponse'                                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AuthenticateResponse',
        'AuthenticationResponse'                                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AuthenticationResponse',
        'GetPortalConfigSettings'                                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetPortalConfigSettings',
        'GetPortalConfigSettingsResponse'                                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetPortalConfigSettingsResponse',
        'PortalConfigSettings'                                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\PortalConfigSettings',
        'PortalImage'                                                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\PortalImage',
        'PortalImageBase'                                                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\PortalImageBase',
        'CountryCaption'                                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\CountryCaption',
        'MouseOverData'                                                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\MouseOverData',
        'LongDescription'                                                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\LongDescription',
        'GetPortalSecurity'                                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetPortalSecurity',
        'GetPortalSecurityResponse'                                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetPortalSecurityResponse',
        'ArrayOfPortalSecurity'                                              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfPortalSecurity',
        'PortalSecurity'                                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\PortalSecurity',
        'GetPortalLoginCustomizations'                                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetPortalLoginCustomizations',
        'GetPortalLoginCustomizationsResponse'                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetPortalLoginCustomizationsResponse',
        'PortalLoginCustomization'                                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\PortalLoginCustomization',
        'RequestPassword'                                                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\RequestPassword',
        'RequestPasswordResponse'                                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\RequestPasswordResponse',
        'GetAvatarImage'                                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAvatarImage',
        'GetAvatarImageResponse'                                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAvatarImageResponse',
        'GetPresenceStatus'                                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetPresenceStatus',
        'GetPresenceStatusResponse'                                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetPresenceStatusResponse',
        'ContactPresence'                                                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ContactPresence',
        'UpdatePresenceStatus'                                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdatePresenceStatus',
        'UpdatePresenceStatusResponse'                                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdatePresenceStatusResponse',
        'AddDocuments'                                                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddDocuments',
        'ArrayOfDocumentInfo'                                                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfDocumentInfo',
        'DocumentInfo'                                                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DocumentInfo',
        'AddDocumentsResponse'                                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddDocumentsResponse',
        'GetDocument'                                                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetDocument',
        'GetDocumentResponse'                                                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetDocumentResponse',
        'DeleteDocument'                                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteDocument',
        'DeleteDocumentResponse'                                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteDocumentResponse',
        'FindDocuments'                                                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindDocuments',
        'FindDocumentsResponse'                                              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindDocumentsResponse',
        'ArrayOfDocumentFindResult'                                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfDocumentFindResult',
        'DocumentFindResult'                                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DocumentFindResult',
        'GetInvoice'                                                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetInvoice',
        'GetInvoiceResponse'                                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetInvoiceResponse',
        'Invoice'                                                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\Invoice',
        'ArrayOfExpenseDetail'                                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfExpenseDetail',
        'ExpenseDetail'                                                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ExpenseDetail',
        'ArrayOfProductDetail'                                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfProductDetail',
        'ProductDetail'                                                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ProductDetail',
        'ArrayOfTimeDetail'                                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfTimeDetail',
        'TimeDetail'                                                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\TimeDetail',
        'ArrayOfSalesTaxDetail'                                              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfSalesTaxDetail',
        'SalesTaxDetail'                                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\SalesTaxDetail',
        'ArrayOfAgreementDetail'                                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfAgreementDetail',
        'AgreementDetail'                                                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AgreementDetail',
        'LoadInvoice'                                                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\LoadInvoice',
        'LoadInvoiceResponse'                                                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\LoadInvoiceResponse',
        'GetInvoiceByInvoiceNumber'                                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetInvoiceByInvoiceNumber',
        'GetInvoiceByInvoiceNumberResponse'                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetInvoiceByInvoiceNumberResponse',
        'FindInvoices'                                                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindInvoices',
        'FindInvoicesResponse'                                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindInvoicesResponse',
        'ArrayOfInvoiceFindResult'                                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfInvoiceFindResult',
        'InvoiceFindResult'                                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\InvoiceFindResult',
        'FindInvoiceCount'                                                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindInvoiceCount',
        'FindInvoiceCountResponse'                                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindInvoiceCountResponse',
        'GetInvoicePdf'                                                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetInvoicePdf',
        'GetInvoicePdfResponse'                                              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetInvoicePdfResponse',
        'GetSpecialInvoice'                                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetSpecialInvoice',
        'GetSpecialInvoiceResponse'                                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetSpecialInvoiceResponse',
        'SpecialInvoice'                                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\SpecialInvoice',
        'ApplyTo'                                                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ApplyTo',
        'ArrayOfSpecialInvoiceProduct'                                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfSpecialInvoiceProduct',
        'SpecialInvoiceProduct'                                              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\SpecialInvoiceProduct',
        'ProductItem'                                                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ProductItem',
        'ArrayOfComponent'                                                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfComponent',
        'Component'                                                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\Component',
        'GetSpecialInvoiceByInvoiceNumber'                                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetSpecialInvoiceByInvoiceNumber',
        'GetSpecialInvoiceByInvoiceNumberResponse'                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetSpecialInvoiceByInvoiceNumberResponse',
        'AddOrUpdateSpecialInvoice'                                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateSpecialInvoice',
        'AddOrUpdateSpecialInvoiceResponse'                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateSpecialInvoiceResponse',
        'DeleteSpecialInvoice'                                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteSpecialInvoice',
        'DeleteSpecialInvoiceResponse'                                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteSpecialInvoiceResponse',
        'DeleteSpecialInvoiceByInvoiceNumber'                                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteSpecialInvoiceByInvoiceNumber',
        'DeleteSpecialInvoiceByInvoiceNumberResponse'                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteSpecialInvoiceByInvoiceNumberResponse',
        'GetApplyToForCompanyByType'                                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetApplyToForCompanyByType',
        'GetApplyToForCompanyByTypeResponse'                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetApplyToForCompanyByTypeResponse',
        'ArrayOfApplyTo'                                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfApplyTo',
        'FindSpecialInvoices'                                                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindSpecialInvoices',
        'FindSpecialInvoicesResponse'                                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindSpecialInvoicesResponse',
        'ArrayOfSpecialInvoiceFindResult'                                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfSpecialInvoiceFindResult',
        'SpecialInvoiceFindResult'                                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\SpecialInvoiceFindResult',
        'AddOrUpdateSpecialInvoiceProduct'                                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateSpecialInvoiceProduct',
        'AddOrUpdateSpecialInvoiceProductResponse'                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateSpecialInvoiceProductResponse',
        'DeleteSpecialInvoiceProduct'                                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteSpecialInvoiceProduct',
        'DeleteSpecialInvoiceProductResponse'                                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteSpecialInvoiceProductResponse',
        'UpdateManagedDevices'                                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateManagedDevices',
        'ArrayOfManagedDevice'                                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfManagedDevice',
        'ManagedDevice'                                                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ManagedDevice',
        'DeviceInfo'                                                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeviceInfo',
        'ArrayOfConfigurationAnswer'                                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfConfigurationAnswer',
        'ConfigurationAnswer'                                                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ConfigurationAnswer',
        'BillingInfo'                                                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\BillingInfo',
        'UpdateManagedDevicesResponse'                                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateManagedDevicesResponse',
        'UpdateManagementSolution'                                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateManagementSolution',
        'ManagementSolution'                                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ManagementSolution',
        'UpdateManagementSolutionResponse'                                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateManagementSolutionResponse',
        'GetManagementItSetupsName'                                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetManagementItSetupsName',
        'GetManagementItSetupsNameResponse'                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetManagementItSetupsNameResponse',
        'GetManagedGroup'                                                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetManagedGroup',
        'GetManagedGroupResponse'                                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetManagedGroupResponse',
        'ArrayOfManagedGroup'                                                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfManagedGroup',
        'ManagedGroup'                                                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ManagedGroup',
        'GetManagedServers'                                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetManagedServers',
        'GetManagedServersResponse'                                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetManagedServersResponse',
        'ArrayOfManagedMachineData'                                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfManagedMachineData',
        'ManagedMachineData'                                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ManagedMachineData',
        'ArrayOfHardDrive'                                                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfHardDrive',
        'HardDrive'                                                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\HardDrive',
        'GetManagedWorkstations'                                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetManagedWorkstations',
        'GetManagedWorkstationsResponse'                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetManagedWorkstationsResponse',
        'UpdateManagedServers'                                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateManagedServers',
        'ArrayOfManagedServersData'                                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfManagedServersData',
        'ManagedServersData'                                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ManagedServersData',
        'UpdateManagedServersResponse'                                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateManagedServersResponse',
        'UpdateManagedWorkstations'                                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateManagedWorkstations',
        'ArrayOfManagedWorkstationsData'                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfManagedWorkstationsData',
        'ManagedWorkstationsData'                                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ManagedWorkstationsData',
        'UpdateManagedWorkstationsResponse'                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateManagedWorkstationsResponse',
        'UpdateSpamStatsDomains'                                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateSpamStatsDomains',
        'ArrayOfSpamStatsDomainData'                                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfSpamStatsDomainData',
        'SpamStatsDomainData'                                                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\SpamStatsDomainData',
        'UpdateSpamStatsDomainsResponse'                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateSpamStatsDomainsResponse',
        'UpdateManagementSummaryReports'                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateManagementSummaryReports',
        'ArrayOfManagementSummaryReport'                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfManagementSummaryReport',
        'ManagementSummaryReport'                                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ManagementSummaryReport',
        'UpdateManagementSummaryReportsResponse'                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateManagementSummaryReportsResponse',
        'RecordCampaignImpression'                                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\RecordCampaignImpression',
        'RecordCampaignImpressionResponse'                                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\RecordCampaignImpressionResponse',
        'RecordEmailOpened'                                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\RecordEmailOpened',
        'RecordEmailOpenedResponse'                                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\RecordEmailOpenedResponse',
        'RecordLinkClicked'                                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\RecordLinkClicked',
        'RecordLinkClickedResponse'                                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\RecordLinkClickedResponse',
        'RecordFormSubmission'                                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\RecordFormSubmission',
        'RecordFormSubmissionResponse'                                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\RecordFormSubmissionResponse',
        'IsValidMemberIdAndPassword'                                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\IsValidMemberIdAndPassword',
        'IsValidMemberIdAndPasswordResponse'                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\IsValidMemberIdAndPasswordResponse',
        'AuthenticateSession'                                                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AuthenticateSession',
        'AuthenticateSessionResponse'                                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AuthenticateSessionResponse',
        'CreateAuthenticatedMemberHashToken'                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\CreateAuthenticatedMemberHashToken',
        'CreateAuthenticatedMemberHashTokenResponse'                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\CreateAuthenticatedMemberHashTokenResponse',
        'GetMemberIdByRemoteSupportPackageAuthenticationCredentials'         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetMemberIdByRemoteSupportPackageAuthenticationCredentials',
        'GetMemberIdByRemoteSupportPackageAuthenticationCredentialsResponse' => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetMemberIdByRemoteSupportPackageAuthenticationCredentialsResponse',
        'FindMembers'                                                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindMembers',
        'FindMembersResponse'                                                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindMembersResponse',
        'ArrayOfMemberFindResult'                                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfMemberFindResult',
        'MemberFindResult'                                                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\MemberFindResult',
        'CheckConnectWiseAuthenticationCredentials'                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\CheckConnectWiseAuthenticationCredentials',
        'CheckConnectWiseAuthenticationCredentialsResponse'                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\CheckConnectWiseAuthenticationCredentialsResponse',
        'GetOpportunity'                                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetOpportunity',
        'GetOpportunityResponse'                                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetOpportunityResponse',
        'Opportunity'                                                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\Opportunity',
        'ArrayOfOpportunityItem'                                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfOpportunityItem',
        'OpportunityItem'                                                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\OpportunityItem',
        'ArrayOfForecastDetail'                                              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfForecastDetail',
        'ForecastDetail'                                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ForecastDetail',
        'ArrayOfOpportunityCustomField'                                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfOpportunityCustomField',
        'OpportunityCustomField'                                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\OpportunityCustomField',
        'OpportunityTeam'                                                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\OpportunityTeam',
        'PrimarySalesRepMember'                                              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\PrimarySalesRepMember',
        'SecondarySalesRepMember'                                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\SecondarySalesRepMember',
        'ArrayOfSalesIndividualMember'                                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfSalesIndividualMember',
        'SalesIndividualMember'                                              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\SalesIndividualMember',
        'ArrayOfSalesTeam'                                                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfSalesTeam',
        'SalesTeam'                                                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\SalesTeam',
        'LoadOpportunity'                                                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\LoadOpportunity',
        'LoadOpportunityResponse'                                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\LoadOpportunityResponse',
        'AddOpportunity'                                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOpportunity',
        'AddOpportunityResponse'                                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOpportunityResponse',
        'UpdateOpportunity'                                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateOpportunity',
        'UpdateOpportunityResponse'                                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateOpportunityResponse',
        'AddOrUpdateOpportunity'                                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateOpportunity',
        'AddOrUpdateOpportunityResponse'                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateOpportunityResponse',
        'DeleteOpportunity'                                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteOpportunity',
        'DeleteOpportunityResponse'                                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteOpportunityResponse',
        'FindOpportunities'                                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindOpportunities',
        'FindOpportunitiesResponse'                                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindOpportunitiesResponse',
        'ArrayOfOpportunityFindResult'                                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfOpportunityFindResult',
        'OpportunityFindResult'                                              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\OpportunityFindResult',
        'FindOpportunityCount'                                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindOpportunityCount',
        'FindOpportunityCountResponse'                                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindOpportunityCountResponse',
        'AddForecastAndRecurringRevenue'                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddForecastAndRecurringRevenue',
        'ForecastRevenueInfo'                                                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ForecastRevenueInfo',
        'ForecastItem'                                                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ForecastItem',
        'RecurringRevenueItem'                                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\RecurringRevenueItem',
        'AddForecastAndRecurringRevenueResponse'                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddForecastAndRecurringRevenueResponse',
        'UpdateForecastAndRecurringRevenue'                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateForecastAndRecurringRevenue',
        'UpdateForecastAndRecurringRevenueResponse'                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateForecastAndRecurringRevenueResponse',
        'AddOrUpdateForecastAndRecurringRevenue'                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateForecastAndRecurringRevenue',
        'AddOrUpdateForecastAndRecurringRevenueResponse'                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateForecastAndRecurringRevenueResponse',
        'DeleteForecast'                                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteForecast',
        'DeleteForecastResponse'                                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteForecastResponse',
        'DeleteRecurringRevenue'                                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteRecurringRevenue',
        'DeleteRecurringRevenueResponse'                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteRecurringRevenueResponse',
        'AddOpportunityItem'                                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOpportunityItem',
        'AddOpportunityItemResponse'                                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOpportunityItemResponse',
        'UpdateOpportunityItem'                                              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateOpportunityItem',
        'UpdateOpportunityItemResponse'                                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateOpportunityItemResponse',
        'AddOrUpdateOpportunityItem'                                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateOpportunityItem',
        'AddOrUpdateOpportunityItemResponse'                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateOpportunityItemResponse',
        'DeleteOpportunityItem'                                              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteOpportunityItem',
        'DeleteOpportunityItemResponse'                                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteOpportunityItemResponse',
        'GetOpportunityDocuments'                                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetOpportunityDocuments',
        'GetOpportunityDocumentsResponse'                                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetOpportunityDocumentsResponse',
        'DeleteOpportunityDocument'                                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteOpportunityDocument',
        'DeleteOpportunityDocumentResponse'                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteOpportunityDocumentResponse',
        'DeleteOpportunityNote'                                              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteOpportunityNote',
        'DeleteOpportunityNoteResponse'                                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteOpportunityNoteResponse',
        'AddOpportunityDocuments'                                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOpportunityDocuments',
        'ArrayOfOppDocumentInfo'                                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfOppDocumentInfo',
        'OppDocumentInfo'                                                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\OppDocumentInfo',
        'AddOpportunityDocumentsResponse'                                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOpportunityDocumentsResponse',
        'OpportunityToProjectConversion'                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\OpportunityToProjectConversion',
        'ArrayOfInt'                                                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfInt',
        'ArrayOfInt1'                                                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfInt1',
        'OpportunityToProjectConversionResponse'                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\OpportunityToProjectConversionResponse',
        'OpportunityToTicketConversion'                                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\OpportunityToTicketConversion',
        'OpportunityToTicketConversionResponse'                              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\OpportunityToTicketConversionResponse',
        'OpportunityToSalesOrderConversion'                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\OpportunityToSalesOrderConversion',
        'OpportunityToSalesOrderConversionResponse'                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\OpportunityToSalesOrderConversionResponse',
        'GetProduct'                                                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetProduct',
        'GetProductResponse'                                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetProductResponse',
        'Product'                                                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\Product',
        'LoadProduct'                                                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\LoadProduct',
        'LoadProductResponse'                                                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\LoadProductResponse',
        'AddProduct'                                                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddProduct',
        'AddProductResponse'                                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddProductResponse',
        'UpdateProduct'                                                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateProduct',
        'UpdateProductResponse'                                              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateProductResponse',
        'AddOrUpdateProduct'                                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateProduct',
        'AddOrUpdateProductResponse'                                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateProductResponse',
        'DeleteProduct'                                                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteProduct',
        'DeleteProductResponse'                                              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteProductResponse',
        'FindProducts'                                                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindProducts',
        'FindProductsResponse'                                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindProductsResponse',
        'ArrayOfProductFindResult'                                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfProductFindResult',
        'ProductFindResult'                                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ProductFindResult',
        'GetQuantityOnHand'                                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetQuantityOnHand',
        'ProductQuantityOnHand'                                              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ProductQuantityOnHand',
        'GetQuantityOnHandResponse'                                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetQuantityOnHandResponse',
        'GetProductPickedandShipped'                                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetProductPickedandShipped',
        'GetProductPickedandShippedResponse'                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetProductPickedandShippedResponse',
        'AddOrUpdateProductPickedandShipped'                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateProductPickedandShipped',
        'AddOrUpdateProductPickedandShippedResponse'                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateProductPickedandShippedResponse',
        'DeleteProductPickedandShipped'                                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteProductPickedandShipped',
        'DeleteProductPickedandShippedResponse'                              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteProductPickedandShippedResponse',
        'AddOrUpdatePricingSchedule'                                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdatePricingSchedule',
        'PricingSchedule'                                                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\PricingSchedule',
        'AddOrUpdatePricingScheduleResponse'                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdatePricingScheduleResponse',
        'GetPricingSchedule'                                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetPricingSchedule',
        'GetPricingScheduleResponse'                                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetPricingScheduleResponse',
        'DeletePricingSchedule'                                              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeletePricingSchedule',
        'DeletePricingScheduleResponse'                                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeletePricingScheduleResponse',
        'FindPricingSchedules'                                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindPricingSchedules',
        'FindPricingSchedulesResponse'                                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindPricingSchedulesResponse',
        'ArrayOfPricingSchedule'                                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfPricingSchedule',
        'AddOrUpdatePricingDetail'                                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdatePricingDetail',
        'PricingDetail'                                                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\PricingDetail',
        'AddOrUpdatePricingDetailResponse'                                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdatePricingDetailResponse',
        'GetPricingDetail'                                                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetPricingDetail',
        'GetPricingDetailResponse'                                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetPricingDetailResponse',
        'DeletePricingDetail'                                                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeletePricingDetail',
        'DeletePricingDetailResponse'                                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeletePricingDetailResponse',
        'FindPricingDetails'                                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindPricingDetails',
        'FindPricingDetailsResponse'                                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindPricingDetailsResponse',
        'ArrayOfPricingDetail'                                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfPricingDetail',
        'AddOrUpdatePriceBreak'                                              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdatePriceBreak',
        'PriceBreak'                                                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\PriceBreak',
        'AddOrUpdatePriceBreakResponse'                                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdatePriceBreakResponse',
        'GetPriceBreak'                                                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetPriceBreak',
        'GetPriceBreakResponse'                                              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetPriceBreakResponse',
        'DeletePriceBreak'                                                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeletePriceBreak',
        'DeletePriceBreakResponse'                                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeletePriceBreakResponse',
        'FindPriceBreaks'                                                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindPriceBreaks',
        'FindPriceBreaksResponse'                                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindPriceBreaksResponse',
        'ArrayOfPriceBreak'                                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfPriceBreak',
        'SetCompanyPricingSchedule'                                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\SetCompanyPricingSchedule',
        'SetCompanyPricingScheduleResponse'                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\SetCompanyPricingScheduleResponse',
        'RemoveCompanyPricingSchedule'                                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\RemoveCompanyPricingSchedule',
        'RemoveCompanyPricingScheduleResponse'                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\RemoveCompanyPricingScheduleResponse',
        'FindProjects'                                                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindProjects',
        'FindProjectsResponse'                                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindProjectsResponse',
        'ArrayOfProjectFindResult'                                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfProjectFindResult',
        'ProjectFindResult'                                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ProjectFindResult',
        'FindProjectCount'                                                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindProjectCount',
        'FindProjectCountResponse'                                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindProjectCountResponse',
        'GetProjectWorkPlan'                                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetProjectWorkPlan',
        'GetProjectWorkPlanResponse'                                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetProjectWorkPlanResponse',
        'ProjectWorkPlan'                                                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ProjectWorkPlan',
        'ArrayOfProjectPhase'                                                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfProjectPhase',
        'ProjectPhase'                                                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ProjectPhase',
        'ArrayOfProjectTicket'                                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfProjectTicket',
        'ProjectTicket'                                                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ProjectTicket',
        'ProjectTicketSummaryInfo'                                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ProjectTicketSummaryInfo',
        'ProjectPhaseSummaryInfo'                                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ProjectPhaseSummaryInfo',
        'LoadProjectWorkPlan'                                                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\LoadProjectWorkPlan',
        'LoadProjectWorkPlanResponse'                                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\LoadProjectWorkPlanResponse',
        'GetProject'                                                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetProject',
        'GetProjectResponse'                                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetProjectResponse',
        'Project'                                                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\Project',
        'ProjectSummaryInfo'                                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ProjectSummaryInfo',
        'DeleteProject'                                                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteProject',
        'DeleteProjectResponse'                                              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteProjectResponse',
        'DeleteProjectTicket'                                                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteProjectTicket',
        'DeleteProjectTicketResponse'                                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteProjectTicketResponse',
        'DeleteProjectPhase'                                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteProjectPhase',
        'DeleteProjectPhaseResponse'                                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteProjectPhaseResponse',
        'DeleteProjectTeamMember'                                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteProjectTeamMember',
        'DeleteProjectTeamMemberResponse'                                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteProjectTeamMemberResponse',
        'DeleteProjectContact'                                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteProjectContact',
        'DeleteProjectContactResponse'                                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteProjectContactResponse',
        'DeleteProjectNote'                                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteProjectNote',
        'DeleteProjectNoteResponse'                                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteProjectNoteResponse',
        'ConvertServiceTicketToProjectTicket'                                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ConvertServiceTicketToProjectTicket',
        'ConvertServiceTicketToProjectTicketResponse'                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ConvertServiceTicketToProjectTicketResponse',
        'AddOrUpdateProjectNote'                                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateProjectNote',
        'ProjectNote'                                                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ProjectNote',
        'AddOrUpdateProjectNoteResponse'                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateProjectNoteResponse',
        'AddOrUpdateProjectContact'                                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateProjectContact',
        'ProjectContact'                                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ProjectContact',
        'AddOrUpdateProjectContactResponse'                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateProjectContactResponse',
        'AddOrUpdateProjectTeamMember'                                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateProjectTeamMember',
        'ProjectTeamMember'                                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ProjectTeamMember',
        'AddOrUpdateProjectTeamMemberResponse'                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateProjectTeamMemberResponse',
        'AddOrUpdateProject'                                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateProject',
        'AddOrUpdateProjectResponse'                                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateProjectResponse',
        'AddOrUpdateProjectPhase'                                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateProjectPhase',
        'AddOrUpdateProjectPhaseResponse'                                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateProjectPhaseResponse',
        'GetProjectPhase'                                                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetProjectPhase',
        'GetProjectPhaseResponse'                                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetProjectPhaseResponse',
        'AddOrUpdateProjectTicket'                                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateProjectTicket',
        'AddOrUpdateProjectTicketResponse'                                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateProjectTicketResponse',
        'AddOrUpdateProjectWorkPlan'                                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateProjectWorkPlan',
        'AddOrUpdateProjectWorkPlanResponse'                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateProjectWorkPlanResponse',
        'FindPhases'                                                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindPhases',
        'FindPhasesResponse'                                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindPhasesResponse',
        'ArrayOfProjectPhaseFindResults'                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfProjectPhaseFindResults',
        'ProjectPhaseFindResults'                                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ProjectPhaseFindResults',
        'GetProjectNote'                                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetProjectNote',
        'GetProjectNoteResponse'                                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetProjectNoteResponse',
        'FindProjectNotes'                                                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindProjectNotes',
        'FindProjectNotesResponse'                                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindProjectNotesResponse',
        'ArrayOfProjectNoteFindResult'                                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfProjectNoteFindResult',
        'ProjectNoteFindResult'                                              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ProjectNoteFindResult',
        'GetProjectContact'                                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetProjectContact',
        'GetProjectContactResponse'                                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetProjectContactResponse',
        'FindProjectContacts'                                                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindProjectContacts',
        'FindProjectContactsResponse'                                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindProjectContactsResponse',
        'ArrayOfProjectContactFindResult'                                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfProjectContactFindResult',
        'ProjectContactFindResult'                                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ProjectContactFindResult',
        'GetProjectTeamMember'                                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetProjectTeamMember',
        'GetProjectTeamMemberResponse'                                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetProjectTeamMemberResponse',
        'FindProjectTeamMembers'                                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindProjectTeamMembers',
        'FindProjectTeamMembersResponse'                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindProjectTeamMembersResponse',
        'ArrayOfProjectTeamMemberFindResult'                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfProjectTeamMemberFindResult',
        'ProjectTeamMemberFindResult'                                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ProjectTeamMemberFindResult',
        'GetProjectTicket'                                                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetProjectTicket',
        'GetProjectTicketResponse'                                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetProjectTicketResponse',
        'FindProjectTickets'                                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindProjectTickets',
        'FindProjectTicketsResponse'                                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindProjectTicketsResponse',
        'ArrayOfProjectTicketFindResult'                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfProjectTicketFindResult',
        'ProjectTicketFindResult'                                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ProjectTicketFindResult',
        'DeleteProjectProduct'                                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteProjectProduct',
        'DeleteProjectProductResponse'                                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteProjectProductResponse',
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
    public function __construct($host, array $options = array(), $wsdl = '/v4_6_release/apis/2.0/ProjectApi.asmx?wsdl')
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
     * Returns a List of Projects, filtering by the project status.
     *
     * @param FindProjects $parameters
     * @return FindProjectsResponse
     */
    public function FindProjects(FindProjects $parameters)
    {
        return $this->__soapCall('FindProjects', array($parameters));
    }

    /**
     * Returns a count of projects that meet the specified conditions.
     *
     * @param FindProjectCount $parameters
     * @return FindProjectCountResponse
     */
    public function FindProjectCount(FindProjectCount $parameters)
    {
        return $this->__soapCall('FindProjectCount', array($parameters));
    }

    /**
     * Gets a project work plan by database project record id. If no project exists with the given id, null is returned.
     *
     * @param GetProjectWorkPlan $parameters
     * @return GetProjectWorkPlanResponse
     */
    public function GetProjectWorkPlan(GetProjectWorkPlan $parameters)
    {
        return $this->__soapCall('GetProjectWorkPlan', array($parameters));
    }

    /**
     * Gets a project work plan by database project record id. If no project exists with the given id, an error is returned.
     *
     * @param LoadProjectWorkPlan $parameters
     * @return LoadProjectWorkPlanResponse
     */
    public function LoadProjectWorkPlan(LoadProjectWorkPlan $parameters)
    {
        return $this->__soapCall('LoadProjectWorkPlan', array($parameters));
    }

    /**
     * Gets a project by record id. If no project exists with the given id, an error is returned.
     *
     * @param GetProject $parameters
     * @return GetProjectResponse
     */
    public function GetProject(GetProject $parameters)
    {
        return $this->__soapCall('GetProject', array($parameters));
    }

    /**
     * Deletes a project
     *
     * @param DeleteProject $parameters
     * @return DeleteProjectResponse
     */
    public function DeleteProject(DeleteProject $parameters)
    {
        return $this->__soapCall('DeleteProject', array($parameters));
    }

    /**
     * Deletes ticket from project
     *
     * @param DeleteProjectTicket $parameters
     * @return DeleteProjectTicketResponse
     */
    public function DeleteProjectTicket(DeleteProjectTicket $parameters)
    {
        return $this->__soapCall('DeleteProjectTicket', array($parameters));
    }

    /**
     * Deletes a project phase
     *
     * @param DeleteProjectPhase $parameters
     * @return DeleteProjectPhaseResponse
     */
    public function DeleteProjectPhase(DeleteProjectPhase $parameters)
    {
        return $this->__soapCall('DeleteProjectPhase', array($parameters));
    }

    /**
     * Deletes a project team member from project
     *
     * @param DeleteProjectTeamMember $parameters
     * @return DeleteProjectTeamMemberResponse
     */
    public function DeleteProjectTeamMember(DeleteProjectTeamMember $parameters)
    {
        return $this->__soapCall('DeleteProjectTeamMember', array($parameters));
    }

    /**
     * Delete a contact from a project
     *
     * @param DeleteProjectContact $parameters
     * @return DeleteProjectContactResponse
     */
    public function DeleteProjectContact(DeleteProjectContact $parameters)
    {
        return $this->__soapCall('DeleteProjectContact', array($parameters));
    }

    /**
     * Deletes a note from a project
     *
     * @param DeleteProjectNote $parameters
     * @return DeleteProjectNoteResponse
     */
    public function DeleteProjectNote(DeleteProjectNote $parameters)
    {
        return $this->__soapCall('DeleteProjectNote', array($parameters));
    }

    /**
     * Converts a service ticket into a project ticket
     *
     * @param ConvertServiceTicketToProjectTicket $parameters
     * @return ConvertServiceTicketToProjectTicketResponse
     */
    public function ConvertServiceTicketToProjectTicket(ConvertServiceTicketToProjectTicket $parameters)
    {
        return $this->__soapCall('ConvertServiceTicketToProjectTicket', array($parameters));
    }

    /**
     * Adds or Updates a project note
     *
     * @param AddOrUpdateProjectNote $parameters
     * @return AddOrUpdateProjectNoteResponse
     */
    public function AddOrUpdateProjectNote(AddOrUpdateProjectNote $parameters)
    {
        return $this->__soapCall('AddOrUpdateProjectNote', array($parameters));
    }

    /**
     * Adds or Updates a project contact
     *
     * @param AddOrUpdateProjectContact $parameters
     * @return AddOrUpdateProjectContactResponse
     */
    public function AddOrUpdateProjectContact(AddOrUpdateProjectContact $parameters)
    {
        return $this->__soapCall('AddOrUpdateProjectContact', array($parameters));
    }

    /**
     * Adds or Updates a project team member
     *
     * @param AddOrUpdateProjectTeamMember $parameters
     * @return AddOrUpdateProjectTeamMemberResponse
     */
    public function AddOrUpdateProjectTeamMember(AddOrUpdateProjectTeamMember $parameters)
    {
        return $this->__soapCall('AddOrUpdateProjectTeamMember', array($parameters));
    }

    /**
     * Adds or Updates a project
     *
     * @param AddOrUpdateProject $parameters
     * @return AddOrUpdateProjectResponse
     */
    public function AddOrUpdateProject(AddOrUpdateProject $parameters)
    {
        return $this->__soapCall('AddOrUpdateProject', array($parameters));
    }

    /**
     * Add or Updates a project phase. No project tickets can be added
     *
     * @param AddOrUpdateProjectPhase $parameters
     * @return AddOrUpdateProjectPhaseResponse
     */
    public function AddOrUpdateProjectPhase(AddOrUpdateProjectPhase $parameters)
    {
        return $this->__soapCall('AddOrUpdateProjectPhase', array($parameters));
    }

    /**
     * Gets a project phase by record id. If no project phase exists with the given id, an error is returned.
     *
     * @param GetProjectPhase $parameters
     * @return GetProjectPhaseResponse
     */
    public function GetProjectPhase(GetProjectPhase $parameters)
    {
        return $this->__soapCall('GetProjectPhase', array($parameters));
    }

    /**
     * Adds or Updates a project ticket/project issue ticket
     *
     * @param AddOrUpdateProjectTicket $parameters
     * @return AddOrUpdateProjectTicketResponse
     */
    public function AddOrUpdateProjectTicket(AddOrUpdateProjectTicket $parameters)
    {
        return $this->__soapCall('AddOrUpdateProjectTicket', array($parameters));
    }

    /**
     * Adds or Updates a project workplan
     *
     * @param AddOrUpdateProjectWorkPlan $parameters
     * @return AddOrUpdateProjectWorkPlanResponse
     */
    public function AddOrUpdateProjectWorkPlan(AddOrUpdateProjectWorkPlan $parameters)
    {
        return $this->__soapCall('AddOrUpdateProjectWorkPlan', array($parameters));
    }

    /**
     * Returns a List of Projects phases
     *
     * @param FindPhases $parameters
     * @return FindPhasesResponse
     */
    public function FindPhases(FindPhases $parameters)
    {
        return $this->__soapCall('FindPhases', array($parameters));
    }

    /**
     * Gets a project note by id. If no id exists with the given id, an error is returned.
     *
     * @param GetProjectNote $parameters
     * @return GetProjectNoteResponse
     */
    public function GetProjectNote(GetProjectNote $parameters)
    {
        return $this->__soapCall('GetProjectNote', array($parameters));
    }

    /**
     * Returns a List of Project Notes
     *
     * @param FindProjectNotes $parameters
     * @return FindProjectNotesResponse
     */
    public function FindProjectNotes(FindProjectNotes $parameters)
    {
        return $this->__soapCall('FindProjectNotes', array($parameters));
    }

    /**
     * Gets a project contact by id. If no id exists with the given id, an error is returned.
     *
     * @param GetProjectContact $parameters
     * @return GetProjectContactResponse
     */
    public function GetProjectContact(GetProjectContact $parameters)
    {
        return $this->__soapCall('GetProjectContact', array($parameters));
    }

    /**
     * Returns a List of Project Contacts
     *
     * @param FindProjectContacts $parameters
     * @return FindProjectContactsResponse
     */
    public function FindProjectContacts(FindProjectContacts $parameters)
    {
        return $this->__soapCall('FindProjectContacts', array($parameters));
    }

    /**
     * Gets a project team member by id. If no id exists with the given id, an error is returned.
     *
     * @param GetProjectTeamMember $parameters
     * @return GetProjectTeamMemberResponse
     */
    public function GetProjectTeamMember(GetProjectTeamMember $parameters)
    {
        return $this->__soapCall('GetProjectTeamMember', array($parameters));
    }

    /**
     * Returns a List of Project team members
     *
     * @param FindProjectTeamMembers $parameters
     * @return FindProjectTeamMembersResponse
     */
    public function FindProjectTeamMembers(FindProjectTeamMembers $parameters)
    {
        return $this->__soapCall('FindProjectTeamMembers', array($parameters));
    }

    /**
     * Gets a project ticket/project issue ticket by id. If no id exists with the given id, an error is returned.
     *
     * @param GetProjectTicket $parameters
     * @return GetProjectTicketResponse
     */
    public function GetProjectTicket(GetProjectTicket $parameters)
    {
        return $this->__soapCall('GetProjectTicket', array($parameters));
    }

    /**
     * Returns a List of Project tickets/Project Issue tickets
     *
     * @param FindProjectTickets $parameters
     * @return FindProjectTicketsResponse
     */
    public function FindProjectTickets(FindProjectTickets $parameters)
    {
        return $this->__soapCall('FindProjectTickets', array($parameters));
    }

    /**
     * Deletes a product from a project
     *
     * @param DeleteProjectProduct $parameters
     * @return DeleteProjectProductResponse
     */
    public function DeleteProjectProduct(DeleteProjectProduct $parameters)
    {
        return $this->__soapCall('DeleteProjectProduct', array($parameters));
    }

}
