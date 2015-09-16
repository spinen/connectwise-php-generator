<?php

namespace Spinen\ConnectWise\Library\Api;

/**
 * Class Signature
 *
 * @package Spinen\ConnectWise\Library\Api
 */
trait Signature
{
    /**
     * Gets an activity by database record id. If no activity exists with the given id, null is returned.
     *
     * @param array|null $arguments
     *
     * @return GetActivityResponse
     */
    public function activityApiGetActivity(array $arguments = [])
    {
        return $this->setApi('ActivityApi')
                    ->setMethod('GetActivity')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Gets an activity by database record id. If no activity exists with the given id, an error is returned.
     *
     * @param array|null $arguments
     *
     * @return LoadActivityResponse
     */
    public function activityApiLoadActivity(array $arguments = [])
    {
        return $this->setApi('ActivityApi')
                    ->setMethod('LoadActivity')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Adds a new activity.
     *
     * @param array|null $arguments
     *
     * @return AddActivityResponse
     */
    public function activityApiAddActivity(array $arguments = [])
    {
        return $this->setApi('ActivityApi')
                    ->setMethod('AddActivity')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Updates an existing activity.
     *
     * @param array|null $arguments
     *
     * @return UpdateActivityResponse
     */
    public function activityApiUpdateActivity(array $arguments = [])
    {
        return $this->setApi('ActivityApi')
                    ->setMethod('UpdateActivity')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Adds or updates an activity. If the activity Id is 0, the activity is added. If non-zero, the existing activity with that Id is updated.
     *
     * @param array|null $arguments
     *
     * @return AddOrUpdateActivityResponse
     */
    public function activityApiAddOrUpdateActivity(array $arguments = [])
    {
        return $this->setApi('ActivityApi')
                    ->setMethod('AddOrUpdateActivity')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Deletes an activity by database record id.
     *
     * @param array|null $arguments
     *
     * @return DeleteActivityResponse
     */
    public function activityApiDeleteActivity(array $arguments = [])
    {
        return $this->setApi('ActivityApi')
                    ->setMethod('DeleteActivity')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Finds activity information by a set of conditions.
     *
     * @param array|null $arguments
     *
     * @return FindActivitiesResponse
     */
    public function activityApiFindActivities(array $arguments = [])
    {
        return $this->setApi('ActivityApi')
                    ->setMethod('FindActivities')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Gets an agreement site by database record id. If no agreement site exists with the given id, null is returned.
     *
     * @param array|null $arguments
     *
     * @return GetAgreementSiteResponse
     */
    public function agreementApiGetAgreementSite(array $arguments = [])
    {
        return $this->setApi('AgreementApi')
                    ->setMethod('GetAgreementSite')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Adds or updates an agreement site
     *
     * @param array|null $arguments
     *
     * @return AddOrUpdateAgreementSiteResponse
     */
    public function agreementApiAddOrUpdateAgreementSite(array $arguments = [])
    {
        return $this->setApi('AgreementApi')
                    ->setMethod('AddOrUpdateAgreementSite')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Returns a list of Agreement Sites
     *
     * @param array|null $arguments
     *
     * @return FindAgreementSitesResponse
     */
    public function agreementApiFindAgreementSites(array $arguments = [])
    {
        return $this->setApi('AgreementApi')
                    ->setMethod('FindAgreementSites')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Deletes an agreement site from agreement
     *
     * @param array|null $arguments
     *
     * @return DeleteAgreementSiteResponse
     */
    public function agreementApiDeleteAgreementSite(array $arguments = [])
    {
        return $this->setApi('AgreementApi')
                    ->setMethod('DeleteAgreementSite')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Gets an agreement work type by database record id. If no agreement work type exists with the given id, null is returned.
     *
     * @param array|null $arguments
     *
     * @return GetAgreementWorkTypeResponse
     */
    public function agreementApiGetAgreementWorkType(array $arguments = [])
    {
        return $this->setApi('AgreementApi')
                    ->setMethod('GetAgreementWorkType')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Adds or updates an agreement worktype
     *
     * @param array|null $arguments
     *
     * @return AddOrUpdateAgreementWorkTypeResponse
     */
    public function agreementApiAddOrUpdateAgreementWorkType(array $arguments = [])
    {
        return $this->setApi('AgreementApi')
                    ->setMethod('AddOrUpdateAgreementWorkType')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Returns a list of Agreement WorkTypes
     *
     * @param array|null $arguments
     *
     * @return FindAgreementWorkTypesResponse
     */
    public function agreementApiFindAgreementWorkTypes(array $arguments = [])
    {
        return $this->setApi('AgreementApi')
                    ->setMethod('FindAgreementWorkTypes')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Deletes an agreement worktype from agreement
     *
     * @param array|null $arguments
     *
     * @return DeleteAgreementWorkTypeResponse
     */
    public function agreementApiDeleteAgreementWorkType(array $arguments = [])
    {
        return $this->setApi('AgreementApi')
                    ->setMethod('DeleteAgreementWorkType')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Gets an agreement work role by database record id. If no agreement work role exists with the given id, null is returned.
     *
     * @param array|null $arguments
     *
     * @return GetAgreementWorkRoleResponse
     */
    public function agreementApiGetAgreementWorkRole(array $arguments = [])
    {
        return $this->setApi('AgreementApi')
                    ->setMethod('GetAgreementWorkRole')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Adds or updates an agreement workrole
     *
     * @param array|null $arguments
     *
     * @return AddOrUpdateAgreementWorkRoleResponse
     */
    public function agreementApiAddOrUpdateAgreementWorkRole(array $arguments = [])
    {
        return $this->setApi('AgreementApi')
                    ->setMethod('AddOrUpdateAgreementWorkRole')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Returns a list of Agreement WorkRoles
     *
     * @param array|null $arguments
     *
     * @return FindAgreementWorkRolesResponse
     */
    public function agreementApiFindAgreementWorkRoles(array $arguments = [])
    {
        return $this->setApi('AgreementApi')
                    ->setMethod('FindAgreementWorkRoles')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Deletes an agreement workrole from agreement
     *
     * @param array|null $arguments
     *
     * @return DeleteAgreementWorkRoleResponse
     */
    public function agreementApiDeleteAgreementWorkRole(array $arguments = [])
    {
        return $this->setApi('AgreementApi')
                    ->setMethod('DeleteAgreementWorkRole')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Gets an agreement adjustment by database record id. If no agreement adjustment exists with the given id, null is returned.
     *
     * @param array|null $arguments
     *
     * @return GetAgreementAdjustmentResponse
     */
    public function agreementApiGetAgreementAdjustment(array $arguments = [])
    {
        return $this->setApi('AgreementApi')
                    ->setMethod('GetAgreementAdjustment')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Adds or updates an agreement adjustment
     *
     * @param array|null $arguments
     *
     * @return AddOrUpdateAgreementAdjustmentResponse
     */
    public function agreementApiAddOrUpdateAgreementAdjustment(array $arguments = [])
    {
        return $this->setApi('AgreementApi')
                    ->setMethod('AddOrUpdateAgreementAdjustment')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Returns a list of Agreement Adjustment
     *
     * @param array|null $arguments
     *
     * @return FindAgreementAdjustmentsResponse
     */
    public function agreementApiFindAgreementAdjustments(array $arguments = [])
    {
        return $this->setApi('AgreementApi')
                    ->setMethod('FindAgreementAdjustments')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Deletes an agreement adjustment
     *
     * @param array|null $arguments
     *
     * @return DeleteAgreementAdjustmentResponse
     */
    public function agreementApiDeleteAgreementAdjustment(array $arguments = [])
    {
        return $this->setApi('AgreementApi')
                    ->setMethod('DeleteAgreementAdjustment')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Gets an agreement by database record id. If no agreement exists with the given id, null is returned.
     *
     * @param array|null $arguments
     *
     * @return GetAgreementResponse
     */
    public function agreementApiGetAgreement(array $arguments = [])
    {
        return $this->setApi('AgreementApi')
                    ->setMethod('GetAgreement')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Deletes an agreement
     *
     * @param array|null $arguments
     *
     * @return DeleteAgreementResponse
     */
    public function agreementApiDeleteAgreement(array $arguments = [])
    {
        return $this->setApi('AgreementApi')
                    ->setMethod('DeleteAgreement')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Returns a list of Agreements
     *
     * @param array|null $arguments
     *
     * @return FindAgreementsResponse
     */
    public function agreementApiFindAgreements(array $arguments = [])
    {
        return $this->setApi('AgreementApi')
                    ->setMethod('FindAgreements')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Adds or updates an agreement
     *
     * @param array|null $arguments
     *
     * @return AddOrUpdateAgreementResponse
     */
    public function agreementApiAddOrUpdateAgreement(array $arguments = [])
    {
        return $this->setApi('AgreementApi')
                    ->setMethod('AddOrUpdateAgreement')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Gets an agreement addition by database record id. If no agreement addition exists with the given id, null is returned.
     *
     * @param array|null $arguments
     *
     * @return GetAgreementAdditionResponse
     */
    public function agreementApiGetAgreementAddition(array $arguments = [])
    {
        return $this->setApi('AgreementApi')
                    ->setMethod('GetAgreementAddition')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Adds or updates an agreement
     *
     * @param array|null $arguments
     *
     * @return AddOrUpdateAgreementAdditionResponse
     */
    public function agreementApiAddOrUpdateAgreementAddition(array $arguments = [])
    {
        return $this->setApi('AgreementApi')
                    ->setMethod('AddOrUpdateAgreementAddition')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Returns a list of Agreement Additions
     *
     * @param array|null $arguments
     *
     * @return FindAgreementAdditionsResponse
     */
    public function agreementApiFindAgreementAdditions(array $arguments = [])
    {
        return $this->setApi('AgreementApi')
                    ->setMethod('FindAgreementAdditions')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Deletes an agreement addition
     *
     * @param array|null $arguments
     *
     * @return DeleteAgreementAdditionResponse
     */
    public function agreementApiDeleteAgreementAddition(array $arguments = [])
    {
        return $this->setApi('AgreementApi')
                    ->setMethod('DeleteAgreementAddition')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Gets an Agreement WorkType Exclusion by database record id. If no Agreement WorkRole Exclusion exists with the given id, null is returned
     *
     * @param array|null $arguments
     *
     * @return GetAgreementWorkRoleExclusionResponse
     */
    public function agreementApiGetAgreementWorkRoleExclusion(array $arguments = [])
    {
        return $this->setApi('AgreementApi')
                    ->setMethod('GetAgreementWorkRoleExclusion')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Gets an Agreement WorkRole Exclusion by database record id. If no Agreement WorkType Exclusion exists with the given id, null is returned
     *
     * @param array|null $arguments
     *
     * @return GetAgreementWorkTypeExclusionResponse
     */
    public function agreementApiGetAgreementWorkTypeExclusion(array $arguments = [])
    {
        return $this->setApi('AgreementApi')
                    ->setMethod('GetAgreementWorkTypeExclusion')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Returns a list of Agreement Exclusions
     *
     * @param array|null $arguments
     *
     * @return FindAgreementExclusionsResponse
     */
    public function agreementApiFindAgreementExclusions(array $arguments = [])
    {
        return $this->setApi('AgreementApi')
                    ->setMethod('FindAgreementExclusions')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Adds or removes an agreement work type exclusion
     *
     * @param array|null $arguments
     *
     * @return AddOrRemoveAgreementWorkTypeExclusionResponse
     */
    public function agreementApiAddOrRemoveAgreementWorkTypeExclusion(array $arguments = [])
    {
        return $this->setApi('AgreementApi')
                    ->setMethod('AddOrRemoveAgreementWorkTypeExclusion')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Adds or removes an agreement work role exclusion
     *
     * @param array|null $arguments
     *
     * @return AddOrRemoveAgreementWorkRoleExclusionResponse
     */
    public function agreementApiAddOrRemoveAgreementWorkRoleExclusion(array $arguments = [])
    {
        return $this->setApi('AgreementApi')
                    ->setMethod('AddOrRemoveAgreementWorkRoleExclusion')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Gets an agreement board default by database record id. If no agreement board default exists with the given id, null is returned
     *
     * @param array|null $arguments
     *
     * @return GetAgreementBoardDefaultResponse
     */
    public function agreementApiGetAgreementBoardDefault(array $arguments = [])
    {
        return $this->setApi('AgreementApi')
                    ->setMethod('GetAgreementBoardDefault')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Returns a list of Agreement board defaults
     *
     * @param array|null $arguments
     *
     * @return FindAgreementBoardDefaultsResponse
     */
    public function agreementApiFindAgreementBoardDefaults(array $arguments = [])
    {
        return $this->setApi('AgreementApi')
                    ->setMethod('FindAgreementBoardDefaults')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Adds or updates an agreement board default
     *
     * @param array|null $arguments
     *
     * @return AddOrUpdateAgreementBoardDefaultResponse
     */
    public function agreementApiAddOrUpdateAgreementBoardDefault(array $arguments = [])
    {
        return $this->setApi('AgreementApi')
                    ->setMethod('AddOrUpdateAgreementBoardDefault')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Deletes an agreement board default
     *
     * @param array|null $arguments
     *
     * @return DeleteAgreementBoardDefaultResponse
     */
    public function agreementApiDeleteAgreementBoardDefault(array $arguments = [])
    {
        return $this->setApi('AgreementApi')
                    ->setMethod('DeleteAgreementBoardDefault')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Gets a company by database record id. If no company exists with the given id, null is returned.
     *
     * @param array|null $arguments
     *
     * @return GetCompanyResponse
     */
    public function companyApiGetCompany(array $arguments = [])
    {
        return $this->setApi('CompanyApi')
                    ->setMethod('GetCompany')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Gets a company by database record id. If no company exists with the given id, an error is returned.
     *
     * @param array|null $arguments
     *
     * @return LoadCompanyResponse
     */
    public function companyApiLoadCompany(array $arguments = [])
    {
        return $this->setApi('CompanyApi')
                    ->setMethod('LoadCompany')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Adds a new company.
     *
     * @param array|null $arguments
     *
     * @return AddCompanyResponse
     */
    public function companyApiAddCompany(array $arguments = [])
    {
        return $this->setApi('CompanyApi')
                    ->setMethod('AddCompany')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Updates an existing company.
     *
     * @param array|null $arguments
     *
     * @return UpdateCompanyResponse
     */
    public function companyApiUpdateCompany(array $arguments = [])
    {
        return $this->setApi('CompanyApi')
                    ->setMethod('UpdateCompany')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Adds or updates a company. If the company Id is 0, the company is added. If non-zero, the existing company with that Id is updated.
     *
     * @param array|null $arguments
     *
     * @return AddOrUpdateCompanyResponse
     */
    public function companyApiAddOrUpdateCompany(array $arguments = [])
    {
        return $this->setApi('CompanyApi')
                    ->setMethod('AddOrUpdateCompany')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Deletes a company by database record id.
     *
     * @param array|null $arguments
     *
     * @return DeleteCompanyResponse
     */
    public function companyApiDeleteCompany(array $arguments = [])
    {
        return $this->setApi('CompanyApi')
                    ->setMethod('DeleteCompany')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Finds company information by a set of conditions.
     *
     * @param array|null $arguments
     *
     * @return FindCompaniesResponse
     */
    public function companyApiFindCompanies(array $arguments = [])
    {
        return $this->setApi('CompanyApi')
                    ->setMethod('FindCompanies')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Sets an existing contact as the default contact for a company.
     *
     * @param array|null $arguments
     *
     * @return SetCompanyDefaultContactResponse
     */
    public function companyApiSetCompanyDefaultContact(array $arguments = [])
    {
        return $this->setApi('CompanyApi')
                    ->setMethod('SetCompanyDefaultContact')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Gets the company profile for a given company.
     *
     * @param array|null $arguments
     *
     * @return GetCompanyProfileResponse
     */
    public function companyApiGetCompanyProfile(array $arguments = [])
    {
        return $this->setApi('CompanyApi')
                    ->setMethod('GetCompanyProfile')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Updates the company profile for a given company.
     *
     * @param array|null $arguments
     *
     * @return UpdateCompanyProfileResponse
     */
    public function companyApiUpdateCompanyProfile(array $arguments = [])
    {
        return $this->setApi('CompanyApi')
                    ->setMethod('UpdateCompanyProfile')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Obtains all Notes written against a given company.
     *
     * @param array|null $arguments
     *
     * @return GetAllCompanyNotesResponse
     */
    public function companyApiGetAllCompanyNotes(array $arguments = [])
    {
        return $this->setApi('CompanyApi')
                    ->setMethod('GetAllCompanyNotes')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Obtains a specific Note written against a given company.
     *
     * @param array|null $arguments
     *
     * @return GetCompanyNoteResponse
     */
    public function companyApiGetCompanyNote(array $arguments = [])
    {
        return $this->setApi('CompanyApi')
                    ->setMethod('GetCompanyNote')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Updates a specific Note written against a given company. If the Note Id is 0, the note is added. If non-zero, the existing note with that Id is updated.
     *
     * @param array|null $arguments
     *
     * @return AddOrUpdateCompanyNoteResponse
     */
    public function companyApiAddOrUpdateCompanyNote(array $arguments = [])
    {
        return $this->setApi('CompanyApi')
                    ->setMethod('AddOrUpdateCompanyNote')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Deletes a specific Note written against a given company.
     *
     * @param array|null $arguments
     *
     * @return DeleteCompanyNoteResponse
     */
    public function companyApiDeleteCompanyNote(array $arguments = [])
    {
        return $this->setApi('CompanyApi')
                    ->setMethod('DeleteCompanyNote')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Gets a configuration by database record id. If no configuration exists with the given id, null is returned.
     *
     * @param array|null $arguments
     *
     * @return GetConfigurationResponse
     */
    public function configurationApiGetConfiguration(array $arguments = [])
    {
        return $this->setApi('ConfigurationApi')
                    ->setMethod('GetConfiguration')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Gets a configuration by database record id. If no configuration exists with the given id, an error is returned.
     *
     * @param array|null $arguments
     *
     * @return LoadConfigurationResponse
     */
    public function configurationApiLoadConfiguration(array $arguments = [])
    {
        return $this->setApi('ConfigurationApi')
                    ->setMethod('LoadConfiguration')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Gets a configuration by database record id. If no configuration exists with the given id, null is returned.
     *
     * @param array|null $arguments
     *
     * @return FindConfigurationsResponse
     */
    public function configurationApiFindConfigurations(array $arguments = [])
    {
        return $this->setApi('ConfigurationApi')
                    ->setMethod('FindConfigurations')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Gets a count of available configurations.  Optionally filters by the supplied conditions.
     *
     * @param array|null $arguments
     *
     * @return FindConfigurationCountResponse
     */
    public function configurationApiFindConfigurationCount(array $arguments = [])
    {
        return $this->setApi('ConfigurationApi')
                    ->setMethod('FindConfigurationCount')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Add a new Configuration.
     *
     * @param array|null $arguments
     *
     * @return AddConfigurationResponse
     */
    public function configurationApiAddConfiguration(array $arguments = [])
    {
        return $this->setApi('ConfigurationApi')
                    ->setMethod('AddConfiguration')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Update an existing configuration.
     *
     * @param array|null $arguments
     *
     * @return UpdateConfigurationResponse
     */
    public function configurationApiUpdateConfiguration(array $arguments = [])
    {
        return $this->setApi('ConfigurationApi')
                    ->setMethod('UpdateConfiguration')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Adds or Updates a configuration.
     *
     * @param array|null $arguments
     *
     * @return AddOrUpdateConfigurationResponse
     */
    public function configurationApiAddOrUpdateConfiguration(array $arguments = [])
    {
        return $this->setApi('ConfigurationApi')
                    ->setMethod('AddOrUpdateConfiguration')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Delete an existing configuration
     *
     * @param array|null $arguments
     *
     * @return DeleteConfigurationResponse
     */
    public function configurationApiDeleteConfiguration(array $arguments = [])
    {
        return $this->setApi('ConfigurationApi')
                    ->setMethod('DeleteConfiguration')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Finds Configuration Types
     *
     * @param array|null $arguments
     *
     * @return FindConfigurationTypesResponse
     */
    public function configurationApiFindConfigurationTypes(array $arguments = [])
    {
        return $this->setApi('ConfigurationApi')
                    ->setMethod('FindConfigurationTypes')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Gets a configuration type by database record id. If no configuration exists with the given id, null is returned.
     *
     * @param array|null $arguments
     *
     * @return GetConfigurationTypeResponse
     */
    public function configurationApiGetConfigurationType(array $arguments = [])
    {
        return $this->setApi('ConfigurationApi')
                    ->setMethod('GetConfigurationType')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Gets a configuration type by database record id. If no configuration exists with the given id, an error is returned.
     *
     * @param array|null $arguments
     *
     * @return LoadConfigurationTypeResponse
     */
    public function configurationApiLoadConfigurationType(array $arguments = [])
    {
        return $this->setApi('ConfigurationApi')
                    ->setMethod('LoadConfigurationType')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Updates an existing configuration type.
     *
     * @param array|null $arguments
     *
     * @return UpdateConfigurationTypeResponse
     */
    public function configurationApiUpdateConfigurationType(array $arguments = [])
    {
        return $this->setApi('ConfigurationApi')
                    ->setMethod('UpdateConfigurationType')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Adds a new configuration type.
     *
     * @param array|null $arguments
     *
     * @return AddConfigurationTypeResponse
     */
    public function configurationApiAddConfigurationType(array $arguments = [])
    {
        return $this->setApi('ConfigurationApi')
                    ->setMethod('AddConfigurationType')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Adds or Updates a configuration type.
     *
     * @param array|null $arguments
     *
     * @return AddOrUpdateConfigurationTypeResponse
     */
    public function configurationApiAddOrUpdateConfigurationType(array $arguments = [])
    {
        return $this->setApi('ConfigurationApi')
                    ->setMethod('AddOrUpdateConfigurationType')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Deletes an existing configuration type.
     *
     * @param array|null $arguments
     *
     * @return DeleteConfigurationTypeResponse
     */
    public function configurationApiDeleteConfigurationType(array $arguments = [])
    {
        return $this->setApi('ConfigurationApi')
                    ->setMethod('DeleteConfigurationType')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Deletes a question from an existing configuration type.
     *
     * @param array|null $arguments
     *
     * @return DeleteConfigurationTypeQuestionResponse
     */
    public function configurationApiDeleteConfigurationTypeQuestion(array $arguments = [])
    {
        return $this->setApi('ConfigurationApi')
                    ->setMethod('DeleteConfigurationTypeQuestion')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Deletes a possible response from an existing configuration type question.
     *
     * @param array|null $arguments
     *
     * @return DeletePossibleResponseResponse
     */
    public function configurationApiDeletePossibleResponse(array $arguments = [])
    {
        return $this->setApi('ConfigurationApi')
                    ->setMethod('DeletePossibleResponse')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Gets all notes for contact by database record id. If no contact exists with the given id, null is returned.
     *
     * @param array|null $arguments
     *
     * @return GetAllContactNotesResponse
     */
    public function contactApiGetAllContactNotes(array $arguments = [])
    {
        return $this->setApi('ContactApi')
                    ->setMethod('GetAllContactNotes')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Gets a note for contact by database record id. If no contact exists with the given id, null is returned.
     *
     * @param array|null $arguments
     *
     * @return GetContactNoteResponse
     */
    public function contactApiGetContactNote(array $arguments = [])
    {
        return $this->setApi('ContactApi')
                    ->setMethod('GetContactNote')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Adds or updates a contact note. If the note Id is 0, and the contactId is set; the note is added. If non-zero, the existing note with that Id is updated.
     *
     * @param array|null $arguments
     *
     * @return AddOrUpdateContactNoteResponse
     */
    public function contactApiAddOrUpdateContactNote(array $arguments = [])
    {
        return $this->setApi('ContactApi')
                    ->setMethod('AddOrUpdateContactNote')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Deletes a note by database record id.
     *
     * @param array|null $arguments
     *
     * @return DeleteNoteResponse
     */
    public function contactApiDeleteNote(array $arguments = [])
    {
        return $this->setApi('ContactApi')
                    ->setMethod('DeleteNote')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Gets all communication items for contact by database record id. If no contact exists with the given id, null is returned.
     *
     * @param array|null $arguments
     *
     * @return GetAllContactCommunicationItemsResponse
     */
    public function contactApiGetAllContactCommunicationItems(array $arguments = [])
    {
        return $this->setApi('ContactApi')
                    ->setMethod('GetAllContactCommunicationItems')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Gets all communication types and descriptions.
     *
     * @param array|null $arguments
     *
     * @return GetAllCommunicationTypesAndDescriptionResponse
     */
    public function contactApiGetAllCommunicationTypesAndDescription(array $arguments = [])
    {
        return $this->setApi('ContactApi')
                    ->setMethod('GetAllCommunicationTypesAndDescription')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Gets a communication item for contact by database record contactId. If no contact exists with the given id, null is returned.
     *
     * @param array|null $arguments
     *
     * @return GetContactCommunicationItemResponse
     */
    public function contactApiGetContactCommunicationItem(array $arguments = [])
    {
        return $this->setApi('ContactApi')
                    ->setMethod('GetContactCommunicationItem')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Adds or updates a communication item. If the communicationItem Id is 0, the communicationItem is added. If non-zero, the existing communicationItem with that Id is updated.
     *
     * @param array|null $arguments
     *
     * @return AddOrUpdateContactCommunicationItemResponse
     */
    public function contactApiAddOrUpdateContactCommunicationItem(array $arguments = [])
    {
        return $this->setApi('ContactApi')
                    ->setMethod('AddOrUpdateContactCommunicationItem')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Deletes a communication by database record for contactId, communcationType, and communicationDescription.
     *
     * @param array|null $arguments
     *
     * @return DeleteContactCommunicationItemResponse
     */
    public function contactApiDeleteContactCommunicationItem(array $arguments = [])
    {
        return $this->setApi('ContactApi')
                    ->setMethod('DeleteContactCommunicationItem')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Sets the default communicationType for contactId, communcationType, and communicationDescription.
     *
     * @param array|null $arguments
     *
     * @return SetDefaultContactCommunicationItemResponse
     */
    public function contactApiSetDefaultContactCommunicationItem(array $arguments = [])
    {
        return $this->setApi('ContactApi')
                    ->setMethod('SetDefaultContactCommunicationItem')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Gets a contact by database record id. If no contact exists with the given id, null is returned.
     *
     * @param array|null $arguments
     *
     * @return GetContactResponse
     */
    public function contactApiGetContact(array $arguments = [])
    {
        return $this->setApi('ContactApi')
                    ->setMethod('GetContact')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Gets a contact by database record id. If no contact exists with the given id, an error is returned.
     *
     * @param array|null $arguments
     *
     * @return LoadContactResponse
     */
    public function contactApiLoadContact(array $arguments = [])
    {
        return $this->setApi('ContactApi')
                    ->setMethod('LoadContact')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Adds or updates a contact. If the contact Id is 0, the contact is added. If non-zero, the existing contact with that Id is updated.
     *
     * @param array|null $arguments
     *
     * @return AddOrUpdateContactResponse
     */
    public function contactApiAddOrUpdateContact(array $arguments = [])
    {
        return $this->setApi('ContactApi')
                    ->setMethod('AddOrUpdateContact')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Deletes a contact by database record id.
     *
     * @param array|null $arguments
     *
     * @return DeleteContactResponse
     */
    public function contactApiDeleteContact(array $arguments = [])
    {
        return $this->setApi('ContactApi')
                    ->setMethod('DeleteContact')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Finds contact information by a set of conditions.
     *
     * @param array|null $arguments
     *
     * @return FindContactsResponse
     */
    public function contactApiFindContacts(array $arguments = [])
    {
        return $this->setApi('ContactApi')
                    ->setMethod('FindContacts')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Finds a count of available contacts by a set of conditions.
     *
     * @param array|null $arguments
     *
     * @return FindContactCountResponse
     */
    public function contactApiFindContactCount(array $arguments = [])
    {
        return $this->setApi('ContactApi')
                    ->setMethod('FindContactCount')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Adds a contact to a specified group.
     *
     * @param array|null $arguments
     *
     * @return AddContactToGroupResponse
     */
    public function contactApiAddContactToGroup(array $arguments = [])
    {
        return $this->setApi('ContactApi')
                    ->setMethod('AddContactToGroup')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Removes a contact from the specified group.
     *
     * @param array|null $arguments
     *
     * @return RemoveContactFromGroupResponse
     */
    public function contactApiRemoveContactFromGroup(array $arguments = [])
    {
        return $this->setApi('ContactApi')
                    ->setMethod('RemoveContactFromGroup')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Authenticate a contact logging into the portal.
     *
     * @param array|null $arguments
     *
     * @return AuthenticateResponse
     */
    public function contactApiAuthenticate(array $arguments = [])
    {
        return $this->setApi('ContactApi')
                    ->setMethod('Authenticate')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Return the configuration settings for the specified portal.
     *
     * @param array|null $arguments
     *
     * @return GetPortalConfigSettingsResponse
     */
    public function contactApiGetPortalConfigSettings(array $arguments = [])
    {
        return $this->setApi('ContactApi')
                    ->setMethod('GetPortalConfigSettings')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Return the security settings for the contact logged into the portal.
     *
     * @param array|null $arguments
     *
     * @return GetPortalSecurityResponse
     */
    public function contactApiGetPortalSecurity(array $arguments = [])
    {
        return $this->setApi('ContactApi')
                    ->setMethod('GetPortalSecurity')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Get the login page customizations for the specified portal.
     *
     * @param array|null $arguments
     *
     * @return GetPortalLoginCustomizationsResponse
     */
    public function contactApiGetPortalLoginCustomizations(array $arguments = [])
    {
        return $this->setApi('ContactApi')
                    ->setMethod('GetPortalLoginCustomizations')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Runs the "Forgot Password" process on the server.
     *
     * @param array|null $arguments
     *
     * @return RequestPasswordResponse
     */
    public function contactApiRequestPassword(array $arguments = [])
    {
        return $this->setApi('ContactApi')
                    ->setMethod('RequestPassword')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Gets an avatar image from the server.
     *
     * @param array|null $arguments
     *
     * @return GetAvatarImageResponse
     */
    public function contactApiGetAvatarImage(array $arguments = [])
    {
        return $this->setApi('ContactApi')
                    ->setMethod('GetAvatarImage')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Returns the contact presence status
     *
     * @param array|null $arguments
     *
     * @return GetPresenceStatusResponse
     */
    public function contactApiGetPresenceStatus(array $arguments = [])
    {
        return $this->setApi('ContactApi')
                    ->setMethod('GetPresenceStatus')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Updates the contact presence status
     *
     * @param array|null $arguments
     *
     * @return UpdatePresenceStatusResponse
     */
    public function contactApiUpdatePresenceStatus(array $arguments = [])
    {
        return $this->setApi('ContactApi')
                    ->setMethod('UpdatePresenceStatus')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Adds a document to the application
     *
     * @param array|null $arguments
     *
     * @return AddDocumentsResponse
     */
    public function documentApiAddDocuments(array $arguments = [])
    {
        return $this->setApi('DocumentApi')
                    ->setMethod('AddDocuments')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Gets the document for the specified documentId
     *
     * @param array|null $arguments
     *
     * @return GetDocumentResponse
     */
    public function documentApiGetDocument(array $arguments = [])
    {
        return $this->setApi('DocumentApi')
                    ->setMethod('GetDocument')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Deletes a document associated with the objectId and table reference
     *
     * @param array|null $arguments
     *
     * @return DeleteDocumentResponse
     */
    public function documentApiDeleteDocument(array $arguments = [])
    {
        return $this->setApi('DocumentApi')
                    ->setMethod('DeleteDocument')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Returns a List of Documents
     *
     * @param array|null $arguments
     *
     * @return FindDocumentsResponse
     */
    public function documentApiFindDocuments(array $arguments = [])
    {
        return $this->setApi('DocumentApi')
                    ->setMethod('FindDocuments')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Gets an invoice by database record id. If no invoice exists with the given id, null is returned.
     *
     * @param array|null $arguments
     *
     * @return GetInvoiceResponse
     */
    public function invoiceApiGetInvoice(array $arguments = [])
    {
        return $this->setApi('InvoiceApi')
                    ->setMethod('GetInvoice')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Gets an invoice by database record id. If no invoice exists with the given id, an error is returned.
     *
     * @param array|null $arguments
     *
     * @return LoadInvoiceResponse
     */
    public function invoiceApiLoadInvoice(array $arguments = [])
    {
        return $this->setApi('InvoiceApi')
                    ->setMethod('LoadInvoice')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Gets an invoice by database record invoice number. If no invoice exists with the given number, null is returned.
     *
     * @param array|null $arguments
     *
     * @return GetInvoiceByInvoiceNumberResponse
     */
    public function invoiceApiGetInvoiceByInvoiceNumber(array $arguments = [])
    {
        return $this->setApi('InvoiceApi')
                    ->setMethod('GetInvoiceByInvoiceNumber')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Finds invoice information by a set of conditions, filtering by status.
     *
     * @param array|null $arguments
     *
     * @return FindInvoicesResponse
     */
    public function invoiceApiFindInvoices(array $arguments = [])
    {
        return $this->setApi('InvoiceApi')
                    ->setMethod('FindInvoices')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Finds a count of available invoices by a set of conditions.
     *
     * @param array|null $arguments
     *
     * @return FindInvoiceCountResponse
     */
    public function invoiceApiFindInvoiceCount(array $arguments = [])
    {
        return $this->setApi('InvoiceApi')
                    ->setMethod('FindInvoiceCount')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Gets the PDF for the specified Invoice record.  If no pdf is found, null is returned
     *
     * @param array|null $arguments
     *
     * @return GetInvoicePdfResponse
     */
    public function invoiceApiGetInvoicePdf(array $arguments = [])
    {
        return $this->setApi('InvoiceApi')
                    ->setMethod('GetInvoicePdf')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Gets SpecialInvoice for the specified id
     *
     * @param array|null $arguments
     *
     * @return GetSpecialInvoiceResponse
     */
    public function invoiceApiGetSpecialInvoice(array $arguments = [])
    {
        return $this->setApi('InvoiceApi')
                    ->setMethod('GetSpecialInvoice')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Gets SpecialInvoice for the specified invoiceNumber
     *
     * @param array|null $arguments
     *
     * @return GetSpecialInvoiceByInvoiceNumberResponse
     */
    public function invoiceApiGetSpecialInvoiceByInvoiceNumber(array $arguments = [])
    {
        return $this->setApi('InvoiceApi')
                    ->setMethod('GetSpecialInvoiceByInvoiceNumber')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Adds or Updates a SpecialInvoice. If Id is zero, SpecialInvoice is added. If non-zero, SpecialInvoice is updated
     *
     * @param array|null $arguments
     *
     * @return AddOrUpdateSpecialInvoiceResponse
     */
    public function invoiceApiAddOrUpdateSpecialInvoice(array $arguments = [])
    {
        return $this->setApi('InvoiceApi')
                    ->setMethod('AddOrUpdateSpecialInvoice')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Deletes SpecialInvoice for the specified id
     *
     * @param array|null $arguments
     *
     * @return DeleteSpecialInvoiceResponse
     */
    public function invoiceApiDeleteSpecialInvoice(array $arguments = [])
    {
        return $this->setApi('InvoiceApi')
                    ->setMethod('DeleteSpecialInvoice')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Deletes SpecialInvoice for the specified invoiceNumber
     *
     * @param array|null $arguments
     *
     * @return DeleteSpecialInvoiceByInvoiceNumberResponse
     */
    public function invoiceApiDeleteSpecialInvoiceByInvoiceNumber(array $arguments = [])
    {
        return $this->setApi('InvoiceApi')
                    ->setMethod('DeleteSpecialInvoiceByInvoiceNumber')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Gets a list of all of the available ApplyTo for a company
     *
     * @param array|null $arguments
     *
     * @return GetApplyToForCompanyByTypeResponse
     */
    public function invoiceApiGetApplyToForCompanyByType(array $arguments = [])
    {
        return $this->setApi('InvoiceApi')
                    ->setMethod('GetApplyToForCompanyByType')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Finds special invoice information by a set of conditions
     *
     * @param array|null $arguments
     *
     * @return FindSpecialInvoicesResponse
     */
    public function invoiceApiFindSpecialInvoices(array $arguments = [])
    {
        return $this->setApi('InvoiceApi')
                    ->setMethod('FindSpecialInvoices')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Adds or updates a SpecialInvoiceProduct
     *
     * @param array|null $arguments
     *
     * @return AddOrUpdateSpecialInvoiceProductResponse
     */
    public function invoiceApiAddOrUpdateSpecialInvoiceProduct(array $arguments = [])
    {
        return $this->setApi('InvoiceApi')
                    ->setMethod('AddOrUpdateSpecialInvoiceProduct')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Deletes a SpecialInvoiceProduct
     *
     * @param array|null $arguments
     *
     * @return DeleteSpecialInvoiceProductResponse
     */
    public function invoiceApiDeleteSpecialInvoiceProduct(array $arguments = [])
    {
        return $this->setApi('InvoiceApi')
                    ->setMethod('DeleteSpecialInvoiceProduct')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Updates billing parameters for Managed Devices (agreements). Creates and updates Managed Devices (Configurations). Returns the error message
     *
     * @param array|null $arguments
     *
     * @return UpdateManagedDevicesResponse
     */
    public function managedDeviceApiUpdateManagedDevices(array $arguments = [])
    {
        return $this->setApi('ManagedDeviceApi')
                    ->setMethod('UpdateManagedDevices')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Creates or Updates the Management Solution entry for a company. Returns the Id of the saved entry.
     *
     * @param array|null $arguments
     *
     * @return UpdateManagementSolutionResponse
     */
    public function managedDeviceApiUpdateManagementSolution(array $arguments = [])
    {
        return $this->setApi('ManagedDeviceApi')
                    ->setMethod('UpdateManagementSolution')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Gets ManagementITSetup Name. Returns the name of the solution that you've defined in the Management IT setup table.
     *
     * @param array|null $arguments
     *
     * @return GetManagementItSetupsNameResponse
     */
    public function managedDeviceApiGetManagementItSetupsName(array $arguments = [])
    {
        return $this->setApi('ManagedDeviceApi')
                    ->setMethod('GetManagementItSetupsName')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Gets the Managed Group. Returns the groupId and DeviceType of the Managed Group
     *
     * @param array|null $arguments
     *
     * @return GetManagedGroupResponse
     */
    public function managedDeviceApiGetManagedGroup(array $arguments = [])
    {
        return $this->setApi('ManagedDeviceApi')
                    ->setMethod('GetManagedGroup')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Gets the Managed Server. Returns a list of the managed servers associated with the groupId
     *
     * @param array|null $arguments
     *
     * @return GetManagedServersResponse
     */
    public function managedDeviceApiGetManagedServers(array $arguments = [])
    {
        return $this->setApi('ManagedDeviceApi')
                    ->setMethod('GetManagedServers')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Gets the Managed Workstation. Returns a list of the managed workstations associated with the groupId
     *
     * @param array|null $arguments
     *
     * @return GetManagedWorkstationsResponse
     */
    public function managedDeviceApiGetManagedWorkstations(array $arguments = [])
    {
        return $this->setApi('ManagedDeviceApi')
                    ->setMethod('GetManagedWorkstations')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Creates or Updates Managed Servers
     *
     * @param array|null $arguments
     *
     * @return UpdateManagedServersResponse
     */
    public function managedDeviceApiUpdateManagedServers(array $arguments = [])
    {
        return $this->setApi('ManagedDeviceApi')
                    ->setMethod('UpdateManagedServers')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Creates or Updates Managed Workstations
     *
     * @param array|null $arguments
     *
     * @return UpdateManagedWorkstationsResponse
     */
    public function managedDeviceApiUpdateManagedWorkstations(array $arguments = [])
    {
        return $this->setApi('ManagedDeviceApi')
                    ->setMethod('UpdateManagedWorkstations')
                    ->makeFilterBuilder($arguments);
    }

    /**
     *
     *
     * @param array|null $arguments
     *
     * @return UpdateSpamStatsDomainsResponse
     */
    public function managedDeviceApiUpdateSpamStatsDomains(array $arguments = [])
    {
        return $this->setApi('ManagedDeviceApi')
                    ->setMethod('UpdateSpamStatsDomains')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Creates or Updates the Management Summary Respor for a company.
     *
     * @param array|null $arguments
     *
     * @return UpdateManagementSummaryReportsResponse
     */
    public function managedDeviceApiUpdateManagementSummaryReports(array $arguments = [])
    {
        return $this->setApi('ManagedDeviceApi')
                    ->setMethod('UpdateManagementSummaryReports')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Records a campaign impression
     *
     * @param array|null $arguments
     *
     * @return RecordCampaignImpressionResponse
     */
    public function marketingApiRecordCampaignImpression(array $arguments = [])
    {
        return $this->setApi('MarketingApi')
                    ->setMethod('RecordCampaignImpression')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Records email opened
     *
     * @param array|null $arguments
     *
     * @return RecordEmailOpenedResponse
     */
    public function marketingApiRecordEmailOpened(array $arguments = [])
    {
        return $this->setApi('MarketingApi')
                    ->setMethod('RecordEmailOpened')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Records link clicked
     *
     * @param array|null $arguments
     *
     * @return RecordLinkClickedResponse
     */
    public function marketingApiRecordLinkClicked(array $arguments = [])
    {
        return $this->setApi('MarketingApi')
                    ->setMethod('RecordLinkClicked')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Records form submission
     *
     * @param array|null $arguments
     *
     * @return RecordFormSubmissionResponse
     */
    public function marketingApiRecordFormSubmission(array $arguments = [])
    {
        return $this->setApi('MarketingApi')
                    ->setMethod('RecordFormSubmission')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Determines if a given ConnectWise member id and password are valid.
     *
     * @param array|null $arguments
     *
     * @return IsValidMemberIdAndPasswordResponse
     */
    public function memberApiIsValidMemberIdAndPassword(array $arguments = [])
    {
        return $this->setApi('MemberApi')
                    ->setMethod('IsValidMemberIdAndPassword')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Determines if a given ConnectWise member id and session are active.
     *
     * @param array|null $arguments
     *
     * @return AuthenticateSessionResponse
     */
    public function memberApiAuthenticateSession(array $arguments = [])
    {
        return $this->setApi('MemberApi')
                    ->setMethod('AuthenticateSession')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Creates anauthenticated member hash for a given ConnectWise member.
     *
     * @param array|null $arguments
     *
     * @return CreateAuthenticatedMemberHashTokenResponse
     */
    public function memberApiCreateAuthenticatedMemberHashToken(array $arguments = [])
    {
        return $this->setApi('MemberApi')
                    ->setMethod('CreateAuthenticatedMemberHashToken')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Looks up a ConnectWise member id based on a set of remote support package credentials assigned to the member in ConnectWise.
     *
     * @param array|null $arguments
     *
     * @return GetMemberIdByRemoteSupportPackageAuthenticationCredentialsResponse
     */
    public function memberApiGetMemberIdByRemoteSupportPackageAuthenticationCredentials(array $arguments = [])
    {
        return $this->setApi('MemberApi')
                    ->setMethod('GetMemberIdByRemoteSupportPackageAuthenticationCredentials')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Finds ConnectWise members based on a set of conditions.
     *
     * @param array|null $arguments
     *
     * @return FindMembersResponse
     */
    public function memberApiFindMembers(array $arguments = [])
    {
        return $this->setApi('MemberApi')
                    ->setMethod('FindMembers')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Checks ConnectWise authentication credentials
     *
     * @param array|null $arguments
     *
     * @return CheckConnectWiseAuthenticationCredentialsResponse
     */
    public function memberApiCheckConnectWiseAuthenticationCredentials(array $arguments = [])
    {
        return $this->setApi('MemberApi')
                    ->setMethod('CheckConnectWiseAuthenticationCredentials')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Gets an opportunity by database record id. If no opportunity exists with the given id, null is returned.
     *
     * @param array|null $arguments
     *
     * @return GetOpportunityResponse
     */
    public function opportunityApiGetOpportunity(array $arguments = [])
    {
        return $this->setApi('OpportunityApi')
                    ->setMethod('GetOpportunity')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Gets an opportunity by database record id. If no opportunity exists with the given id, an error is returned.
     *
     * @param array|null $arguments
     *
     * @return LoadOpportunityResponse
     */
    public function opportunityApiLoadOpportunity(array $arguments = [])
    {
        return $this->setApi('OpportunityApi')
                    ->setMethod('LoadOpportunity')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Adds a new opportunity.
     *
     * @param array|null $arguments
     *
     * @return AddOpportunityResponse
     */
    public function opportunityApiAddOpportunity(array $arguments = [])
    {
        return $this->setApi('OpportunityApi')
                    ->setMethod('AddOpportunity')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Updates an existing opportunity.
     *
     * @param array|null $arguments
     *
     * @return UpdateOpportunityResponse
     */
    public function opportunityApiUpdateOpportunity(array $arguments = [])
    {
        return $this->setApi('OpportunityApi')
                    ->setMethod('UpdateOpportunity')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Adds or updates an opportunity. If the opportunity Id is 0, the opportunity is added. If non-zero, the existing opportunity with that Id is updated.
     *
     * @param array|null $arguments
     *
     * @return AddOrUpdateOpportunityResponse
     */
    public function opportunityApiAddOrUpdateOpportunity(array $arguments = [])
    {
        return $this->setApi('OpportunityApi')
                    ->setMethod('AddOrUpdateOpportunity')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Deletes an opportunity by database record id.
     *
     * @param array|null $arguments
     *
     * @return DeleteOpportunityResponse
     */
    public function opportunityApiDeleteOpportunity(array $arguments = [])
    {
        return $this->setApi('OpportunityApi')
                    ->setMethod('DeleteOpportunity')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Finds opportunity information by a set of conditions, filtering by status.
     *
     * @param array|null $arguments
     *
     * @return FindOpportunitiesResponse
     */
    public function opportunityApiFindOpportunities(array $arguments = [])
    {
        return $this->setApi('OpportunityApi')
                    ->setMethod('FindOpportunities')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Find the count of available opportunities given the specified set of conditions.
     *
     * @param array|null $arguments
     *
     * @return FindOpportunityCountResponse
     */
    public function opportunityApiFindOpportunityCount(array $arguments = [])
    {
        return $this->setApi('OpportunityApi')
                    ->setMethod('FindOpportunityCount')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Adds a forecast and recurring revenue entry.
     *
     * @param array|null $arguments
     *
     * @return AddForecastAndRecurringRevenueResponse
     */
    public function opportunityApiAddForecastAndRecurringRevenue(array $arguments = [])
    {
        return $this->setApi('OpportunityApi')
                    ->setMethod('AddForecastAndRecurringRevenue')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Updates a forecast and recurring revenue entry.
     *
     * @param array|null $arguments
     *
     * @return UpdateForecastAndRecurringRevenueResponse
     */
    public function opportunityApiUpdateForecastAndRecurringRevenue(array $arguments = [])
    {
        return $this->setApi('OpportunityApi')
                    ->setMethod('UpdateForecastAndRecurringRevenue')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Adds or updates a forecast and recurring revenue entry.
     *
     * @param array|null $arguments
     *
     * @return AddOrUpdateForecastAndRecurringRevenueResponse
     */
    public function opportunityApiAddOrUpdateForecastAndRecurringRevenue(array $arguments = [])
    {
        return $this->setApi('OpportunityApi')
                    ->setMethod('AddOrUpdateForecastAndRecurringRevenue')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Deletes a forecast entry.
     *
     * @param array|null $arguments
     *
     * @return DeleteForecastResponse
     */
    public function opportunityApiDeleteForecast(array $arguments = [])
    {
        return $this->setApi('OpportunityApi')
                    ->setMethod('DeleteForecast')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Deletes a recurring revenue entry.
     *
     * @param array|null $arguments
     *
     * @return DeleteRecurringRevenueResponse
     */
    public function opportunityApiDeleteRecurringRevenue(array $arguments = [])
    {
        return $this->setApi('OpportunityApi')
                    ->setMethod('DeleteRecurringRevenue')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Adds an item to an opportunity.
     *
     * @param array|null $arguments
     *
     * @return AddOpportunityItemResponse
     */
    public function opportunityApiAddOpportunityItem(array $arguments = [])
    {
        return $this->setApi('OpportunityApi')
                    ->setMethod('AddOpportunityItem')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Updates an opportunity item to an opportunity.
     *
     * @param array|null $arguments
     *
     * @return UpdateOpportunityItemResponse
     */
    public function opportunityApiUpdateOpportunityItem(array $arguments = [])
    {
        return $this->setApi('OpportunityApi')
                    ->setMethod('UpdateOpportunityItem')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Adds or updates an item to an opportunity.
     *
     * @param array|null $arguments
     *
     * @return AddOrUpdateOpportunityItemResponse
     */
    public function opportunityApiAddOrUpdateOpportunityItem(array $arguments = [])
    {
        return $this->setApi('OpportunityApi')
                    ->setMethod('AddOrUpdateOpportunityItem')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Deletes an opportunity item.
     *
     * @param array|null $arguments
     *
     * @return DeleteOpportunityItemResponse
     */
    public function opportunityApiDeleteOpportunityItem(array $arguments = [])
    {
        return $this->setApi('OpportunityApi')
                    ->setMethod('DeleteOpportunityItem')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Gets the list of documents attached to an opportunity.
     *
     * @param array|null $arguments
     *
     * @return GetOpportunityDocumentsResponse
     */
    public function opportunityApiGetOpportunityDocuments(array $arguments = [])
    {
        return $this->setApi('OpportunityApi')
                    ->setMethod('GetOpportunityDocuments')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Removes the document from the opportunity.
     *
     * @param array|null $arguments
     *
     * @return DeleteOpportunityDocumentResponse
     */
    public function opportunityApiDeleteOpportunityDocument(array $arguments = [])
    {
        return $this->setApi('OpportunityApi')
                    ->setMethod('DeleteOpportunityDocument')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Removes the note from the opportunity.
     *
     * @param array|null $arguments
     *
     * @return DeleteOpportunityNoteResponse
     */
    public function opportunityApiDeleteOpportunityNote(array $arguments = [])
    {
        return $this->setApi('OpportunityApi')
                    ->setMethod('DeleteOpportunityNote')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Uploads a document to an opportunity
     *
     * @param array|null $arguments
     *
     * @return AddOpportunityDocumentsResponse
     */
    public function opportunityApiAddOpportunityDocuments(array $arguments = [])
    {
        return $this->setApi('OpportunityApi')
                    ->setMethod('AddOpportunityDocuments')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Converts Opportunity into Project
     *
     * @param array|null $arguments
     *
     * @return OpportunityToProjectConversionResponse
     */
    public function opportunityConversionApiOpportunityToProjectConversion(array $arguments = [])
    {
        return $this->setApi('OpportunityConversionApi')
                    ->setMethod('OpportunityToProjectConversion')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Converts Opportunity into new Service Ticket
     *
     * @param array|null $arguments
     *
     * @return OpportunityToTicketConversionResponse
     */
    public function opportunityConversionApiOpportunityToTicketConversion(array $arguments = [])
    {
        return $this->setApi('OpportunityConversionApi')
                    ->setMethod('OpportunityToTicketConversion')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Converts Opportunity into New Sales Order
     *
     * @param array|null $arguments
     *
     * @return OpportunityToSalesOrderConversionResponse
     */
    public function opportunityConversionApiOpportunityToSalesOrderConversion(array $arguments = [])
    {
        return $this->setApi('OpportunityConversionApi')
                    ->setMethod('OpportunityToSalesOrderConversion')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Gets a product by database record id. If no product exists with the given id, null is returned.
     *
     * @param array|null $arguments
     *
     * @return GetProductResponse
     */
    public function productApiGetProduct(array $arguments = [])
    {
        return $this->setApi('ProductApi')
                    ->setMethod('GetProduct')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Gets a product by database record id. If no product exists with the given id, an error is returned.
     *
     * @param array|null $arguments
     *
     * @return LoadProductResponse
     */
    public function productApiLoadProduct(array $arguments = [])
    {
        return $this->setApi('ProductApi')
                    ->setMethod('LoadProduct')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Adds a new product.
     *
     * @param array|null $arguments
     *
     * @return AddProductResponse
     */
    public function productApiAddProduct(array $arguments = [])
    {
        return $this->setApi('ProductApi')
                    ->setMethod('AddProduct')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Updates an existing product.
     *
     * @param array|null $arguments
     *
     * @return UpdateProductResponse
     */
    public function productApiUpdateProduct(array $arguments = [])
    {
        return $this->setApi('ProductApi')
                    ->setMethod('UpdateProduct')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Adds or updates a product. If the product Id is 0, the product is added. If non-zero, the existing product with that Id is updated.
     *
     * @param array|null $arguments
     *
     * @return AddOrUpdateProductResponse
     */
    public function productApiAddOrUpdateProduct(array $arguments = [])
    {
        return $this->setApi('ProductApi')
                    ->setMethod('AddOrUpdateProduct')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Deletes a product by database record id.
     *
     * @param array|null $arguments
     *
     * @return DeleteProductResponse
     */
    public function productApiDeleteProduct(array $arguments = [])
    {
        return $this->setApi('ProductApi')
                    ->setMethod('DeleteProduct')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Finds product information by a set of conditions.
     *
     * @param array|null $arguments
     *
     * @return FindProductsResponse
     */
    public function productApiFindProducts(array $arguments = [])
    {
        return $this->setApi('ProductApi')
                    ->setMethod('FindProducts')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Gets quantity on hand for product
     *
     * @param array|null $arguments
     *
     * @return GetQuantityOnHandResponse
     */
    public function productApiGetQuantityOnHand(array $arguments = [])
    {
        return $this->setApi('ProductApi')
                    ->setMethod('GetQuantityOnHand')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Returns a List of Projects, filtering by the project status.
     *
     * @param array|null $arguments
     *
     * @return FindProjectsResponse
     */
    public function projectApiFindProjects(array $arguments = [])
    {
        return $this->setApi('ProjectApi')
                    ->setMethod('FindProjects')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Returns a count of projects that meet the specified conditions.
     *
     * @param array|null $arguments
     *
     * @return FindProjectCountResponse
     */
    public function projectApiFindProjectCount(array $arguments = [])
    {
        return $this->setApi('ProjectApi')
                    ->setMethod('FindProjectCount')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Gets a project work plan by database project record id. If no project exists with the given id, null is returned.
     *
     * @param array|null $arguments
     *
     * @return GetProjectWorkPlanResponse
     */
    public function projectApiGetProjectWorkPlan(array $arguments = [])
    {
        return $this->setApi('ProjectApi')
                    ->setMethod('GetProjectWorkPlan')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Gets a project work plan by database project record id. If no project exists with the given id, an error is returned.
     *
     * @param array|null $arguments
     *
     * @return LoadProjectWorkPlanResponse
     */
    public function projectApiLoadProjectWorkPlan(array $arguments = [])
    {
        return $this->setApi('ProjectApi')
                    ->setMethod('LoadProjectWorkPlan')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Gets a project by record id. If no project exists with the given id, an error is returned.
     *
     * @param array|null $arguments
     *
     * @return GetProjectResponse
     */
    public function projectApiGetProject(array $arguments = [])
    {
        return $this->setApi('ProjectApi')
                    ->setMethod('GetProject')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Deletes a project
     *
     * @param array|null $arguments
     *
     * @return DeleteProjectResponse
     */
    public function projectApiDeleteProject(array $arguments = [])
    {
        return $this->setApi('ProjectApi')
                    ->setMethod('DeleteProject')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Deletes ticket from project
     *
     * @param array|null $arguments
     *
     * @return DeleteProjectTicketResponse
     */
    public function projectApiDeleteProjectTicket(array $arguments = [])
    {
        return $this->setApi('ProjectApi')
                    ->setMethod('DeleteProjectTicket')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Deletes a project phase
     *
     * @param array|null $arguments
     *
     * @return DeleteProjectPhaseResponse
     */
    public function projectApiDeleteProjectPhase(array $arguments = [])
    {
        return $this->setApi('ProjectApi')
                    ->setMethod('DeleteProjectPhase')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Deletes a project team member from project
     *
     * @param array|null $arguments
     *
     * @return DeleteProjectTeamMemberResponse
     */
    public function projectApiDeleteProjectTeamMember(array $arguments = [])
    {
        return $this->setApi('ProjectApi')
                    ->setMethod('DeleteProjectTeamMember')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Delete a contact from a project
     *
     * @param array|null $arguments
     *
     * @return DeleteProjectContactResponse
     */
    public function projectApiDeleteProjectContact(array $arguments = [])
    {
        return $this->setApi('ProjectApi')
                    ->setMethod('DeleteProjectContact')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Deletes a note from a project
     *
     * @param array|null $arguments
     *
     * @return DeleteProjectNoteResponse
     */
    public function projectApiDeleteProjectNote(array $arguments = [])
    {
        return $this->setApi('ProjectApi')
                    ->setMethod('DeleteProjectNote')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Converts a service ticket into a project ticket
     *
     * @param array|null $arguments
     *
     * @return ConvertServiceTicketToProjectTicketResponse
     */
    public function projectApiConvertServiceTicketToProjectTicket(array $arguments = [])
    {
        return $this->setApi('ProjectApi')
                    ->setMethod('ConvertServiceTicketToProjectTicket')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Adds or Updates a project note
     *
     * @param array|null $arguments
     *
     * @return AddOrUpdateProjectNoteResponse
     */
    public function projectApiAddOrUpdateProjectNote(array $arguments = [])
    {
        return $this->setApi('ProjectApi')
                    ->setMethod('AddOrUpdateProjectNote')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Adds or Updates a project contact
     *
     * @param array|null $arguments
     *
     * @return AddOrUpdateProjectContactResponse
     */
    public function projectApiAddOrUpdateProjectContact(array $arguments = [])
    {
        return $this->setApi('ProjectApi')
                    ->setMethod('AddOrUpdateProjectContact')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Adds or Updates a project team member
     *
     * @param array|null $arguments
     *
     * @return AddOrUpdateProjectTeamMemberResponse
     */
    public function projectApiAddOrUpdateProjectTeamMember(array $arguments = [])
    {
        return $this->setApi('ProjectApi')
                    ->setMethod('AddOrUpdateProjectTeamMember')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Adds or Updates a project
     *
     * @param array|null $arguments
     *
     * @return AddOrUpdateProjectResponse
     */
    public function projectApiAddOrUpdateProject(array $arguments = [])
    {
        return $this->setApi('ProjectApi')
                    ->setMethod('AddOrUpdateProject')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Add or Updates a project phase. No project tickets can be added
     *
     * @param array|null $arguments
     *
     * @return AddOrUpdateProjectPhaseResponse
     */
    public function projectApiAddOrUpdateProjectPhase(array $arguments = [])
    {
        return $this->setApi('ProjectApi')
                    ->setMethod('AddOrUpdateProjectPhase')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Gets a project phase by record id. If no project phase exists with the given id, an error is returned.
     *
     * @param array|null $arguments
     *
     * @return GetProjectPhaseResponse
     */
    public function projectApiGetProjectPhase(array $arguments = [])
    {
        return $this->setApi('ProjectApi')
                    ->setMethod('GetProjectPhase')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Adds or Updates a project ticket/project issue ticket
     *
     * @param array|null $arguments
     *
     * @return AddOrUpdateProjectTicketResponse
     */
    public function projectApiAddOrUpdateProjectTicket(array $arguments = [])
    {
        return $this->setApi('ProjectApi')
                    ->setMethod('AddOrUpdateProjectTicket')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Adds or Updates a project workplan
     *
     * @param array|null $arguments
     *
     * @return AddOrUpdateProjectWorkPlanResponse
     */
    public function projectApiAddOrUpdateProjectWorkPlan(array $arguments = [])
    {
        return $this->setApi('ProjectApi')
                    ->setMethod('AddOrUpdateProjectWorkPlan')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Returns a List of Projects phases
     *
     * @param array|null $arguments
     *
     * @return FindPhasesResponse
     */
    public function projectApiFindPhases(array $arguments = [])
    {
        return $this->setApi('ProjectApi')
                    ->setMethod('FindPhases')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Gets a project note by id. If no id exists with the given id, an error is returned.
     *
     * @param array|null $arguments
     *
     * @return GetProjectNoteResponse
     */
    public function projectApiGetProjectNote(array $arguments = [])
    {
        return $this->setApi('ProjectApi')
                    ->setMethod('GetProjectNote')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Returns a List of Project Notes
     *
     * @param array|null $arguments
     *
     * @return FindProjectNotesResponse
     */
    public function projectApiFindProjectNotes(array $arguments = [])
    {
        return $this->setApi('ProjectApi')
                    ->setMethod('FindProjectNotes')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Gets a project contact by id. If no id exists with the given id, an error is returned.
     *
     * @param array|null $arguments
     *
     * @return GetProjectContactResponse
     */
    public function projectApiGetProjectContact(array $arguments = [])
    {
        return $this->setApi('ProjectApi')
                    ->setMethod('GetProjectContact')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Returns a List of Project Contacts
     *
     * @param array|null $arguments
     *
     * @return FindProjectContactsResponse
     */
    public function projectApiFindProjectContacts(array $arguments = [])
    {
        return $this->setApi('ProjectApi')
                    ->setMethod('FindProjectContacts')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Gets a project team member by id. If no id exists with the given id, an error is returned.
     *
     * @param array|null $arguments
     *
     * @return GetProjectTeamMemberResponse
     */
    public function projectApiGetProjectTeamMember(array $arguments = [])
    {
        return $this->setApi('ProjectApi')
                    ->setMethod('GetProjectTeamMember')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Returns a List of Project team members
     *
     * @param array|null $arguments
     *
     * @return FindProjectTeamMembersResponse
     */
    public function projectApiFindProjectTeamMembers(array $arguments = [])
    {
        return $this->setApi('ProjectApi')
                    ->setMethod('FindProjectTeamMembers')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Gets a project ticket/project issue ticket by id. If no id exists with the given id, an error is returned.
     *
     * @param array|null $arguments
     *
     * @return GetProjectTicketResponse
     */
    public function projectApiGetProjectTicket(array $arguments = [])
    {
        return $this->setApi('ProjectApi')
                    ->setMethod('GetProjectTicket')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Returns a List of Project tickets/Project Issue tickets
     *
     * @param array|null $arguments
     *
     * @return FindProjectTicketsResponse
     */
    public function projectApiFindProjectTickets(array $arguments = [])
    {
        return $this->setApi('ProjectApi')
                    ->setMethod('FindProjectTickets')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Deletes a product from a project
     *
     * @param array|null $arguments
     *
     * @return DeleteProjectProductResponse
     */
    public function projectApiDeleteProjectProduct(array $arguments = [])
    {
        return $this->setApi('ProjectApi')
                    ->setMethod('DeleteProjectProduct')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Gets a purchase order by database record id. If no purchase order exists with the given id, null is returned.
     *
     * @param array|null $arguments
     *
     * @return GetPurchaseOrderResponse
     */
    public function purchasingApiGetPurchaseOrder(array $arguments = [])
    {
        return $this->setApi('PurchasingApi')
                    ->setMethod('GetPurchaseOrder')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Gets a purchase order by database record id. If no purchase order exists with the given id, an error is returned.
     *
     * @param array|null $arguments
     *
     * @return LoadPurchaseOrderResponse
     */
    public function purchasingApiLoadPurchaseOrder(array $arguments = [])
    {
        return $this->setApi('PurchasingApi')
                    ->setMethod('LoadPurchaseOrder')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Adds a new purchase order.
     *
     * @param array|null $arguments
     *
     * @return AddPurchaseOrderResponse
     */
    public function purchasingApiAddPurchaseOrder(array $arguments = [])
    {
        return $this->setApi('PurchasingApi')
                    ->setMethod('AddPurchaseOrder')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Updates an existing purchase order.
     *
     * @param array|null $arguments
     *
     * @return UpdatePurchaseOrderResponse
     */
    public function purchasingApiUpdatePurchaseOrder(array $arguments = [])
    {
        return $this->setApi('PurchasingApi')
                    ->setMethod('UpdatePurchaseOrder')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Adds or updates a purchase order. If the given Id is 0, a purchase order is added. If non-zero, the existing purchase order with that Id is updated.
     *
     * @param array|null $arguments
     *
     * @return AddOrUpdatePurchaseOrderResponse
     */
    public function purchasingApiAddOrUpdatePurchaseOrder(array $arguments = [])
    {
        return $this->setApi('PurchasingApi')
                    ->setMethod('AddOrUpdatePurchaseOrder')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Deletes a purchase order by database record id.
     *
     * @param array|null $arguments
     *
     * @return DeletePurchaseOrderResponse
     */
    public function purchasingApiDeletePurchaseOrder(array $arguments = [])
    {
        return $this->setApi('PurchasingApi')
                    ->setMethod('DeletePurchaseOrder')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Adds a new purchase order line item (one of the entries under the "Products" tab of the purchase order screen in ConnectWise).
     *
     * @param array|null $arguments
     *
     * @return AddPurchaseOrderLineItemResponse
     */
    public function purchasingApiAddPurchaseOrderLineItem(array $arguments = [])
    {
        return $this->setApi('PurchasingApi')
                    ->setMethod('AddPurchaseOrderLineItem')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Updates an existing purchase order line item (one of the entries under the "Products" tab of the purchase order screen in ConnectWise).
     *
     * @param array|null $arguments
     *
     * @return UpdatePurchaseOrderLineItemResponse
     */
    public function purchasingApiUpdatePurchaseOrderLineItem(array $arguments = [])
    {
        return $this->setApi('PurchasingApi')
                    ->setMethod('UpdatePurchaseOrderLineItem')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Adds or updates a purchase order line item (one of the entries under the "Products" tab of the purchase order screen in ConnectWise). If the given Id is 0, a purchase order line item is added. If non-zero, the existing purchase order line item with that Id is updated.
     *
     * @param array|null $arguments
     *
     * @return AddOrUpdatePurchaseOrderLineItemResponse
     */
    public function purchasingApiAddOrUpdatePurchaseOrderLineItem(array $arguments = [])
    {
        return $this->setApi('PurchasingApi')
                    ->setMethod('AddOrUpdatePurchaseOrderLineItem')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Deletes a purchase order line item by database record id.
     *
     * @param array|null $arguments
     *
     * @return DeletePurchaseOrderLineItemResponse
     */
    public function purchasingApiDeletePurchaseOrderLineItem(array $arguments = [])
    {
        return $this->setApi('PurchasingApi')
                    ->setMethod('DeletePurchaseOrderLineItem')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Gets all open product demands throughout the system with the option to include demands which are already fully satisfied by the stock on hand at the warehouse they are scheduled to be shipped to.
     *
     * @param array|null $arguments
     *
     * @return GetAllOpenProductDemandsResponse
     */
    public function purchasingApiGetAllOpenProductDemands(array $arguments = [])
    {
        return $this->setApi('PurchasingApi')
                    ->setMethod('GetAllOpenProductDemands')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Creates a new puchase order from a list of specific open product demands in the system.
     *
     * @param array|null $arguments
     *
     * @return CreatePurchaseOrderFromProductDemandsActionResponse
     */
    public function purchasingApiCreatePurchaseOrderFromProductDemandsAction(array $arguments = [])
    {
        return $this->setApi('PurchasingApi')
                    ->setMethod('CreatePurchaseOrderFromProductDemandsAction')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Finds purchase orders information by a set of conditions.
     *
     * @param array|null $arguments
     *
     * @return FindPurchaseOrdersResponse
     */
    public function purchasingApiFindPurchaseOrders(array $arguments = [])
    {
        return $this->setApi('PurchasingApi')
                    ->setMethod('FindPurchaseOrders')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Gets the list of available reports.
     *
     * @param array|null $arguments
     *
     * @return GetReportsResponse
     */
    public function reportingApiGetReports(array $arguments = [])
    {
        return $this->setApi('ReportingApi')
                    ->setMethod('GetReports')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Gets the list of fields for a particular report.
     *
     * @param array|null $arguments
     *
     * @return GetReportFieldsResponse
     */
    public function reportingApiGetReportFields(array $arguments = [])
    {
        return $this->setApi('ReportingApi')
                    ->setMethod('GetReportFields')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Gets the list of reports accessible via the customer portal.
     *
     * @param array|null $arguments
     *
     * @return GetPortalReportsResponse
     */
    public function reportingApiGetPortalReports(array $arguments = [])
    {
        return $this->setApi('ReportingApi')
                    ->setMethod('GetPortalReports')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Run a protal report with the given set of condiitons.
     *
     * @param array|null $arguments
     *
     * @return RunPortalReportResponse
     */
    public function reportingApiRunPortalReport(array $arguments = [])
    {
        return $this->setApi('ReportingApi')
                    ->setMethod('RunPortalReport')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Runs a particular report with a given set of conditions.
     *
     * @param array|null $arguments
     *
     * @return RunReportQueryResponse
     */
    public function reportingApiRunReportQuery(array $arguments = [])
    {
        return $this->setApi('ReportingApi')
                    ->setMethod('RunReportQuery')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Runs a particular report with a given set of conditions and a set of field filters.
     *
     * @param array|null $arguments
     *
     * @return RunReportQueryWithFiltersResponse
     */
    public function reportingApiRunReportQueryWithFilters(array $arguments = [])
    {
        return $this->setApi('ReportingApi')
                    ->setMethod('RunReportQueryWithFilters')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Runs a particular report with a given set of conditions and pre-defined timeout
     *
     * @param array|null $arguments
     *
     * @return RunReportQueryWithTimeoutResponse
     */
    public function reportingApiRunReportQueryWithTimeout(array $arguments = [])
    {
        return $this->setApi('ReportingApi')
                    ->setMethod('RunReportQueryWithTimeout')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Runs a particular report with a given set of conditions.  Returnss the # of records that would be returned.
     *
     * @param array|null $arguments
     *
     * @return RunReportCountResponse
     */
    public function reportingApiRunReportCount(array $arguments = [])
    {
        return $this->setApi('ReportingApi')
                    ->setMethod('RunReportCount')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Gets a ticket schedule record by database record id. If no schedule exists with the given id, null is returned.
     *
     * @param array|null $arguments
     *
     * @return GetTicketScheduleEntryResponse
     */
    public function schedulingApiGetTicketScheduleEntry(array $arguments = [])
    {
        return $this->setApi('SchedulingApi')
                    ->setMethod('GetTicketScheduleEntry')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Gets an activity schedule record by database record id. If no schedule exists with the given id, null is returned.
     *
     * @param array|null $arguments
     *
     * @return GetActivityScheduleEntryResponse
     */
    public function schedulingApiGetActivityScheduleEntry(array $arguments = [])
    {
        return $this->setApi('SchedulingApi')
                    ->setMethod('GetActivityScheduleEntry')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Gets a misc schedule record by database record id. If no schedule exists with the given id, null is returned.
     *
     * @param array|null $arguments
     *
     * @return GetMiscScheduleEntryResponse
     */
    public function schedulingApiGetMiscScheduleEntry(array $arguments = [])
    {
        return $this->setApi('SchedulingApi')
                    ->setMethod('GetMiscScheduleEntry')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Finds schedule information by a set of conditions.
     *
     * @param array|null $arguments
     *
     * @return FindScheduleEntriesResponse
     */
    public function schedulingApiFindScheduleEntries(array $arguments = [])
    {
        return $this->setApi('SchedulingApi')
                    ->setMethod('FindScheduleEntries')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Adds or Updates a ticket schedule record
     *
     * @param array|null $arguments
     *
     * @return AddOrUpdateTicketScheduleEntryResponse
     */
    public function schedulingApiAddOrUpdateTicketScheduleEntry(array $arguments = [])
    {
        return $this->setApi('SchedulingApi')
                    ->setMethod('AddOrUpdateTicketScheduleEntry')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Deletes a ticket schedule record
     *
     * @param array|null $arguments
     *
     * @return DeleteTicketScheduleEntryResponse
     */
    public function schedulingApiDeleteTicketScheduleEntry(array $arguments = [])
    {
        return $this->setApi('SchedulingApi')
                    ->setMethod('DeleteTicketScheduleEntry')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Add or Updates an activity schedule
     *
     * @param array|null $arguments
     *
     * @return AddOrUpdateActivityScheduleEntryResponse
     */
    public function schedulingApiAddOrUpdateActivityScheduleEntry(array $arguments = [])
    {
        return $this->setApi('SchedulingApi')
                    ->setMethod('AddOrUpdateActivityScheduleEntry')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Deletes an activity schedule
     *
     * @param array|null $arguments
     *
     * @return DeleteActivityScheduleEntryResponse
     */
    public function schedulingApiDeleteActivityScheduleEntry(array $arguments = [])
    {
        return $this->setApi('SchedulingApi')
                    ->setMethod('DeleteActivityScheduleEntry')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Add or Update a miscellaneous schedule entry
     *
     * @param array|null $arguments
     *
     * @return AddOrUpdateMiscScheduleEntryResponse
     */
    public function schedulingApiAddOrUpdateMiscScheduleEntry(array $arguments = [])
    {
        return $this->setApi('SchedulingApi')
                    ->setMethod('AddOrUpdateMiscScheduleEntry')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Deletes a misc schedule entry
     *
     * @param array|null $arguments
     *
     * @return DeleteMiscScheduleEntryResponse
     */
    public function schedulingApiDeleteMiscScheduleEntry(array $arguments = [])
    {
        return $this->setApi('SchedulingApi')
                    ->setMethod('DeleteMiscScheduleEntry')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Gets a service ticket by the ticket Id. If no service ticket exists with the given ticket Id, null is returned.
     *
     * @param array|null $arguments
     *
     * @return GetServiceTicketResponse
     */
    public function serviceTicketApiGetServiceTicket(array $arguments = [])
    {
        return $this->setApi('ServiceTicketApi')
                    ->setMethod('GetServiceTicket')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Gets a service ticket by the ticket Id. If no service ticket exists with the given ticket Id, an error is returned.
     *
     * @param array|null $arguments
     *
     * @return LoadServiceTicketResponse
     */
    public function serviceTicketApiLoadServiceTicket(array $arguments = [])
    {
        return $this->setApi('ServiceTicketApi')
                    ->setMethod('LoadServiceTicket')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Adds a new service ticket for a company identified by managed id.
     *
     * @param array|null $arguments
     *
     * @return AddServiceTicketViaManagedIdentifierResponse
     */
    public function serviceTicketApiAddServiceTicketViaManagedIdentifier(array $arguments = [])
    {
        return $this->setApi('ServiceTicketApi')
                    ->setMethod('AddServiceTicketViaManagedIdentifier')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Updates an existing service ticket for a company identified by managed id.
     *
     * @param array|null $arguments
     *
     * @return UpdateServiceTicketViaManagedIdentifierResponse
     */
    public function serviceTicketApiUpdateServiceTicketViaManagedIdentifier(array $arguments = [])
    {
        return $this->setApi('ServiceTicketApi')
                    ->setMethod('UpdateServiceTicketViaManagedIdentifier')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Adds or updates a service ticket for a company identified by managed id. If the service ticket Id is 0, the service ticket is added. If non-zero, the existing service ticket with that ticket Id is updated.
     *
     * @param array|null $arguments
     *
     * @return AddOrUpdateServiceTicketViaManagedIdentifierResponse
     */
    public function serviceTicketApiAddOrUpdateServiceTicketViaManagedIdentifier(array $arguments = [])
    {
        return $this->setApi('ServiceTicketApi')
                    ->setMethod('AddOrUpdateServiceTicketViaManagedIdentifier')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Adds a new service ticket for a company identified by the text-based company id.
     *
     * @param array|null $arguments
     *
     * @return AddServiceTicketViaCompanyIdentifierResponse
     */
    public function serviceTicketApiAddServiceTicketViaCompanyIdentifier(array $arguments = [])
    {
        return $this->setApi('ServiceTicketApi')
                    ->setMethod('AddServiceTicketViaCompanyIdentifier')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Updates an existing service ticket for a company identified by the text-based company id.
     *
     * @param array|null $arguments
     *
     * @return UpdateServiceTicketViaCompanyIdentifierResponse
     */
    public function serviceTicketApiUpdateServiceTicketViaCompanyIdentifier(array $arguments = [])
    {
        return $this->setApi('ServiceTicketApi')
                    ->setMethod('UpdateServiceTicketViaCompanyIdentifier')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Adds or updates a service ticket for a company identified by the text-based company id. If the service ticket Id is 0, the service ticket is added. If non-zero, the existing service ticket with that ticket Id is updated.
     *
     * @param array|null $arguments
     *
     * @return AddOrUpdateServiceTicketViaCompanyIdentifierResponse
     */
    public function serviceTicketApiAddOrUpdateServiceTicketViaCompanyIdentifier(array $arguments = [])
    {
        return $this->setApi('ServiceTicketApi')
                    ->setMethod('AddOrUpdateServiceTicketViaCompanyIdentifier')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Deletes a service ticket by the ticket Id.
     *
     * @param array|null $arguments
     *
     * @return DeleteServiceTicketResponse
     */
    public function serviceTicketApiDeleteServiceTicket(array $arguments = [])
    {
        return $this->setApi('ServiceTicketApi')
                    ->setMethod('DeleteServiceTicket')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Finds service ticket information by a set of conditions.  If isOpen is set, it will pre-filter by the ticket status.
     *
     * @param array|null $arguments
     *
     * @return FindServiceTicketsResponse
     */
    public function serviceTicketApiFindServiceTickets(array $arguments = [])
    {
        return $this->setApi('ServiceTicketApi')
                    ->setMethod('FindServiceTickets')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Gets the count of service tickets that meet the specified conditions
     *
     * @param array|null $arguments
     *
     * @return FindServiceTicketCountResponse
     */
    public function serviceTicketApiFindServiceTicketCount(array $arguments = [])
    {
        return $this->setApi('ServiceTicketApi')
                    ->setMethod('FindServiceTicketCount')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Gets the list of statuses available to the specified ticket.
     *
     * @param array|null $arguments
     *
     * @return GetServiceStatusesResponse
     */
    public function serviceTicketApiGetServiceStatuses(array $arguments = [])
    {
        return $this->setApi('ServiceTicketApi')
                    ->setMethod('GetServiceStatuses')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Performs a Knowledgebase search using the specified parameters
     *
     * @param array|null $arguments
     *
     * @return SearchKnowledgebaseResponse
     */
    public function serviceTicketApiSearchKnowledgebase(array $arguments = [])
    {
        return $this->setApi('ServiceTicketApi')
                    ->setMethod('SearchKnowledgebase')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Counts the Knowledgebase records that will be returned by performing the associated search.
     *
     * @param array|null $arguments
     *
     * @return SearchKnowledgebaseCountResponse
     */
    public function serviceTicketApiSearchKnowledgebaseCount(array $arguments = [])
    {
        return $this->setApi('ServiceTicketApi')
                    ->setMethod('SearchKnowledgebaseCount')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Removes the document from the ticket
     *
     * @param array|null $arguments
     *
     * @return DeleteTicketDocumentResponse
     */
    public function serviceTicketApiDeleteTicketDocument(array $arguments = [])
    {
        return $this->setApi('ServiceTicketApi')
                    ->setMethod('DeleteTicketDocument')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Get a list of products for the specified ticket
     *
     * @param array|null $arguments
     *
     * @return GetTicketProductListResponse
     */
    public function serviceTicketApiGetTicketProductList(array $arguments = [])
    {
        return $this->setApi('ServiceTicketApi')
                    ->setMethod('GetTicketProductList')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Add a product on a ticket
     *
     * @param array|null $arguments
     *
     * @return AddTicketProductResponse
     */
    public function serviceTicketApiAddTicketProduct(array $arguments = [])
    {
        return $this->setApi('ServiceTicketApi')
                    ->setMethod('AddTicketProduct')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Update a product on a ticket
     *
     * @param array|null $arguments
     *
     * @return UpdateTicketProductResponse
     */
    public function serviceTicketApiUpdateTicketProduct(array $arguments = [])
    {
        return $this->setApi('ServiceTicketApi')
                    ->setMethod('UpdateTicketProduct')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Add or Update a product on a ticket
     *
     * @param array|null $arguments
     *
     * @return AddOrUpdateTicketProductResponse
     */
    public function serviceTicketApiAddOrUpdateTicketProduct(array $arguments = [])
    {
        return $this->setApi('ServiceTicketApi')
                    ->setMethod('AddOrUpdateTicketProduct')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Delete Product from a ticket
     *
     * @param array|null $arguments
     *
     * @return DeleteTicketProductResponse
     */
    public function serviceTicketApiDeleteTicketProduct(array $arguments = [])
    {
        return $this->setApi('ServiceTicketApi')
                    ->setMethod('DeleteTicketProduct')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Gets the documents attached to the specified ticket
     *
     * @param array|null $arguments
     *
     * @return GetTicketDocumentsResponse
     */
    public function serviceTicketApiGetTicketDocuments(array $arguments = [])
    {
        return $this->setApi('ServiceTicketApi')
                    ->setMethod('GetTicketDocuments')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Gets the document for the specified documentId
     *
     * @param array|null $arguments
     *
     * @return GetDocumentResponse
     */
    public function serviceTicketApiGetDocument(array $arguments = [])
    {
        return $this->setApi('ServiceTicketApi')
                    ->setMethod('GetDocument')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Add a new ticket note or update an existing ticket note by service ticket id.
     *
     * @param array|null $arguments
     *
     * @return AddOrUpdateTicketNoteResponse
     */
    public function serviceTicketApiAddOrUpdateTicketNote(array $arguments = [])
    {
        return $this->setApi('ServiceTicketApi')
                    ->setMethod('AddOrUpdateTicketNote')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Add a document to a ticket
     *
     * @param array|null $arguments
     *
     * @return AddTicketDocumentsResponse
     */
    public function serviceTicketApiAddTicketDocuments(array $arguments = [])
    {
        return $this->setApi('ServiceTicketApi')
                    ->setMethod('AddTicketDocuments')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Adds the ticket to Knowledgebase
     *
     * @param array|null $arguments
     *
     * @return AddServiceTicketToKnowledgebaseResponse
     */
    public function serviceTicketApiAddServiceTicketToKnowledgebase(array $arguments = [])
    {
        return $this->setApi('ServiceTicketApi')
                    ->setMethod('AddServiceTicketToKnowledgebase')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Gets the current version of ConnectWise.
     *
     * @param array|null $arguments
     *
     * @return GetConnectWiseVersionResponse
     */
    public function systemApiGetConnectWiseVersion(array $arguments = [])
    {
        return $this->setApi('SystemApi')
                    ->setMethod('GetConnectWiseVersion')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Gets the cloud state of the ConnectWise instance
     *
     * @param array|null $arguments
     *
     * @return IsCloudResponse
     */
    public function systemApiIsCloud(array $arguments = [])
    {
        return $this->setApi('SystemApi')
                    ->setMethod('IsCloud')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Gets all ConnectWise system information
     *
     * @param array|null $arguments
     *
     * @return GetConnectWiseVersionInfoResponse
     */
    public function systemApiGetConnectWiseVersionInfo(array $arguments = [])
    {
        return $this->setApi('SystemApi')
                    ->setMethod('GetConnectWiseVersionInfo')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Gets an time entry by database record id. If no time entry exists with the given id, null is returned.
     *
     * @param array|null $arguments
     *
     * @return GetTimeEntryResponse
     */
    public function timeEntryApiGetTimeEntry(array $arguments = [])
    {
        return $this->setApi('TimeEntryApi')
                    ->setMethod('GetTimeEntry')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Gets an time entry by database record id. If no time entry exists with the given id, an error is returned.
     *
     * @param array|null $arguments
     *
     * @return LoadTimeEntryResponse
     */
    public function timeEntryApiLoadTimeEntry(array $arguments = [])
    {
        return $this->setApi('TimeEntryApi')
                    ->setMethod('LoadTimeEntry')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Adds a new time entry.
     *
     * @param array|null $arguments
     *
     * @return AddTimeEntryResponse
     */
    public function timeEntryApiAddTimeEntry(array $arguments = [])
    {
        return $this->setApi('TimeEntryApi')
                    ->setMethod('AddTimeEntry')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Updates an existing time entry.
     *
     * @param array|null $arguments
     *
     * @return UpdateTimeEntryResponse
     */
    public function timeEntryApiUpdateTimeEntry(array $arguments = [])
    {
        return $this->setApi('TimeEntryApi')
                    ->setMethod('UpdateTimeEntry')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Adds or updates an time entry. If the time entry Id is 0, the time entry is added. If non-zero, the existing time entry with that Id is updated.
     *
     * @param array|null $arguments
     *
     * @return AddOrUpdateTimeEntryResponse
     */
    public function timeEntryApiAddOrUpdateTimeEntry(array $arguments = [])
    {
        return $this->setApi('TimeEntryApi')
                    ->setMethod('AddOrUpdateTimeEntry')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Deletes an time entry by database record id.
     *
     * @param array|null $arguments
     *
     * @return DeleteTimeEntryResponse
     */
    public function timeEntryApiDeleteTimeEntry(array $arguments = [])
    {
        return $this->setApi('TimeEntryApi')
                    ->setMethod('DeleteTimeEntry')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Finds time entry information by a set of conditions.
     *
     * @param array|null $arguments
     *
     * @return FindTimeEntriesResponse
     */
    public function timeEntryApiFindTimeEntries(array $arguments = [])
    {
        return $this->setApi('TimeEntryApi')
                    ->setMethod('FindTimeEntries')
                    ->makeFilterBuilder($arguments);
    }

    /**
     * Register the class' arguments with the container
     */
    public function registerApiBindings()
    {
        $this->add('Spinen\ConnectWise\Library\Api\Generated\ActivityApi')
             ->withArgument($this->getHost())
             ->withArgument($this->getSoapOptions());
        $this->add('Spinen\ConnectWise\Library\Api\Generated\AgreementApi')
             ->withArgument($this->getHost())
             ->withArgument($this->getSoapOptions());
        $this->add('Spinen\ConnectWise\Library\Api\Generated\CompanyApi')
             ->withArgument($this->getHost())
             ->withArgument($this->getSoapOptions());
        $this->add('Spinen\ConnectWise\Library\Api\Generated\ConfigurationApi')
             ->withArgument($this->getHost())
             ->withArgument($this->getSoapOptions());
        $this->add('Spinen\ConnectWise\Library\Api\Generated\ContactApi')
             ->withArgument($this->getHost())
             ->withArgument($this->getSoapOptions());
        $this->add('Spinen\ConnectWise\Library\Api\Generated\DocumentApi')
             ->withArgument($this->getHost())
             ->withArgument($this->getSoapOptions());
        $this->add('Spinen\ConnectWise\Library\Api\Generated\InvoiceApi')
             ->withArgument($this->getHost())
             ->withArgument($this->getSoapOptions());
        $this->add('Spinen\ConnectWise\Library\Api\Generated\ManagedDeviceApi')
             ->withArgument($this->getHost())
             ->withArgument($this->getSoapOptions());
        $this->add('Spinen\ConnectWise\Library\Api\Generated\MarketingApi')
             ->withArgument($this->getHost())
             ->withArgument($this->getSoapOptions());
        $this->add('Spinen\ConnectWise\Library\Api\Generated\MemberApi')
             ->withArgument($this->getHost())
             ->withArgument($this->getSoapOptions());
        $this->add('Spinen\ConnectWise\Library\Api\Generated\OpportunityApi')
             ->withArgument($this->getHost())
             ->withArgument($this->getSoapOptions());
        $this->add('Spinen\ConnectWise\Library\Api\Generated\OpportunityConversionApi')
             ->withArgument($this->getHost())
             ->withArgument($this->getSoapOptions());
        $this->add('Spinen\ConnectWise\Library\Api\Generated\ProductApi')
             ->withArgument($this->getHost())
             ->withArgument($this->getSoapOptions());
        $this->add('Spinen\ConnectWise\Library\Api\Generated\ProjectApi')
             ->withArgument($this->getHost())
             ->withArgument($this->getSoapOptions());
        $this->add('Spinen\ConnectWise\Library\Api\Generated\PurchasingApi')
             ->withArgument($this->getHost())
             ->withArgument($this->getSoapOptions());
        $this->add('Spinen\ConnectWise\Library\Api\Generated\ReportingApi')
             ->withArgument($this->getHost())
             ->withArgument($this->getSoapOptions());
        $this->add('Spinen\ConnectWise\Library\Api\Generated\SchedulingApi')
             ->withArgument($this->getHost())
             ->withArgument($this->getSoapOptions());
        $this->add('Spinen\ConnectWise\Library\Api\Generated\ServiceTicketApi')
             ->withArgument($this->getHost())
             ->withArgument($this->getSoapOptions());
        $this->add('Spinen\ConnectWise\Library\Api\Generated\SystemApi')
             ->withArgument($this->getHost())
             ->withArgument($this->getSoapOptions());
        $this->add('Spinen\ConnectWise\Library\Api\Generated\TimeEntryApi')
             ->withArgument($this->getHost())
             ->withArgument($this->getSoapOptions());
    }
}
