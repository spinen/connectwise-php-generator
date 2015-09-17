<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

/**
 * ConnectWise Agreement API
 */
class AgreementApi extends \Spinen\ConnectWise\Library\SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array(
        'GetAgreementSite'                              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAgreementSite',
        'ApiCredentials'                                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ApiCredentials',
        'GetAgreementSiteResponse'                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAgreementSiteResponse',
        'AgreementSite'                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AgreementSite',
        'AddOrUpdateAgreementSite'                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateAgreementSite',
        'AddOrUpdateAgreementSiteResponse'              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateAgreementSiteResponse',
        'FindAgreementSites'                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindAgreementSites',
        'ArrayOfString'                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfString',
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
    public function __construct($host, array $options = array(), $wsdl = '/v4_6_release/apis/2.0/AgreementApi.asmx?wsdl')
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
     * Gets an agreement site by database record id. If no agreement site exists with the given id, null is returned.
     *
     * @param GetAgreementSite $parameters
     * @return GetAgreementSiteResponse
     */
    public function GetAgreementSite(GetAgreementSite $parameters)
    {
        return $this->__soapCall('GetAgreementSite', array($parameters));
    }

    /**
     * Adds or updates an agreement site
     *
     * @param AddOrUpdateAgreementSite $parameters
     * @return AddOrUpdateAgreementSiteResponse
     */
    public function AddOrUpdateAgreementSite(AddOrUpdateAgreementSite $parameters)
    {
        return $this->__soapCall('AddOrUpdateAgreementSite', array($parameters));
    }

    /**
     * Returns a list of Agreement Sites
     *
     * @param FindAgreementSites $parameters
     * @return FindAgreementSitesResponse
     */
    public function FindAgreementSites(FindAgreementSites $parameters)
    {
        return $this->__soapCall('FindAgreementSites', array($parameters));
    }

    /**
     * Deletes an agreement site from agreement
     *
     * @param DeleteAgreementSite $parameters
     * @return DeleteAgreementSiteResponse
     */
    public function DeleteAgreementSite(DeleteAgreementSite $parameters)
    {
        return $this->__soapCall('DeleteAgreementSite', array($parameters));
    }

    /**
     * Gets an agreement work type by database record id. If no agreement work type exists with the given id, null is returned.
     *
     * @param GetAgreementWorkType $parameters
     * @return GetAgreementWorkTypeResponse
     */
    public function GetAgreementWorkType(GetAgreementWorkType $parameters)
    {
        return $this->__soapCall('GetAgreementWorkType', array($parameters));
    }

    /**
     * Adds or updates an agreement worktype
     *
     * @param AddOrUpdateAgreementWorkType $parameters
     * @return AddOrUpdateAgreementWorkTypeResponse
     */
    public function AddOrUpdateAgreementWorkType(AddOrUpdateAgreementWorkType $parameters)
    {
        return $this->__soapCall('AddOrUpdateAgreementWorkType', array($parameters));
    }

    /**
     * Returns a list of Agreement WorkTypes
     *
     * @param FindAgreementWorkTypes $parameters
     * @return FindAgreementWorkTypesResponse
     */
    public function FindAgreementWorkTypes(FindAgreementWorkTypes $parameters)
    {
        return $this->__soapCall('FindAgreementWorkTypes', array($parameters));
    }

    /**
     * Deletes an agreement worktype from agreement
     *
     * @param DeleteAgreementWorkType $parameters
     * @return DeleteAgreementWorkTypeResponse
     */
    public function DeleteAgreementWorkType(DeleteAgreementWorkType $parameters)
    {
        return $this->__soapCall('DeleteAgreementWorkType', array($parameters));
    }

    /**
     * Gets an agreement work role by database record id. If no agreement work role exists with the given id, null is returned.
     *
     * @param GetAgreementWorkRole $parameters
     * @return GetAgreementWorkRoleResponse
     */
    public function GetAgreementWorkRole(GetAgreementWorkRole $parameters)
    {
        return $this->__soapCall('GetAgreementWorkRole', array($parameters));
    }

    /**
     * Adds or updates an agreement workrole
     *
     * @param AddOrUpdateAgreementWorkRole $parameters
     * @return AddOrUpdateAgreementWorkRoleResponse
     */
    public function AddOrUpdateAgreementWorkRole(AddOrUpdateAgreementWorkRole $parameters)
    {
        return $this->__soapCall('AddOrUpdateAgreementWorkRole', array($parameters));
    }

    /**
     * Returns a list of Agreement WorkRoles
     *
     * @param FindAgreementWorkRoles $parameters
     * @return FindAgreementWorkRolesResponse
     */
    public function FindAgreementWorkRoles(FindAgreementWorkRoles $parameters)
    {
        return $this->__soapCall('FindAgreementWorkRoles', array($parameters));
    }

    /**
     * Deletes an agreement workrole from agreement
     *
     * @param DeleteAgreementWorkRole $parameters
     * @return DeleteAgreementWorkRoleResponse
     */
    public function DeleteAgreementWorkRole(DeleteAgreementWorkRole $parameters)
    {
        return $this->__soapCall('DeleteAgreementWorkRole', array($parameters));
    }

    /**
     * Gets an agreement adjustment by database record id. If no agreement adjustment exists with the given id, null is returned.
     *
     * @param GetAgreementAdjustment $parameters
     * @return GetAgreementAdjustmentResponse
     */
    public function GetAgreementAdjustment(GetAgreementAdjustment $parameters)
    {
        return $this->__soapCall('GetAgreementAdjustment', array($parameters));
    }

    /**
     * Adds or updates an agreement adjustment
     *
     * @param AddOrUpdateAgreementAdjustment $parameters
     * @return AddOrUpdateAgreementAdjustmentResponse
     */
    public function AddOrUpdateAgreementAdjustment(AddOrUpdateAgreementAdjustment $parameters)
    {
        return $this->__soapCall('AddOrUpdateAgreementAdjustment', array($parameters));
    }

    /**
     * Returns a list of Agreement Adjustment
     *
     * @param FindAgreementAdjustments $parameters
     * @return FindAgreementAdjustmentsResponse
     */
    public function FindAgreementAdjustments(FindAgreementAdjustments $parameters)
    {
        return $this->__soapCall('FindAgreementAdjustments', array($parameters));
    }

    /**
     * Deletes an agreement adjustment
     *
     * @param DeleteAgreementAdjustment $parameters
     * @return DeleteAgreementAdjustmentResponse
     */
    public function DeleteAgreementAdjustment(DeleteAgreementAdjustment $parameters)
    {
        return $this->__soapCall('DeleteAgreementAdjustment', array($parameters));
    }

    /**
     * Gets an agreement by database record id. If no agreement exists with the given id, null is returned.
     *
     * @param GetAgreement $parameters
     * @return GetAgreementResponse
     */
    public function GetAgreement(GetAgreement $parameters)
    {
        return $this->__soapCall('GetAgreement', array($parameters));
    }

    /**
     * Deletes an agreement
     *
     * @param DeleteAgreement $parameters
     * @return DeleteAgreementResponse
     */
    public function DeleteAgreement(DeleteAgreement $parameters)
    {
        return $this->__soapCall('DeleteAgreement', array($parameters));
    }

    /**
     * Returns a list of Agreements
     *
     * @param FindAgreements $parameters
     * @return FindAgreementsResponse
     */
    public function FindAgreements(FindAgreements $parameters)
    {
        return $this->__soapCall('FindAgreements', array($parameters));
    }

    /**
     * Adds or updates an agreement
     *
     * @param AddOrUpdateAgreement $parameters
     * @return AddOrUpdateAgreementResponse
     */
    public function AddOrUpdateAgreement(AddOrUpdateAgreement $parameters)
    {
        return $this->__soapCall('AddOrUpdateAgreement', array($parameters));
    }

    /**
     * Gets an agreement addition by database record id. If no agreement addition exists with the given id, null is returned.
     *
     * @param GetAgreementAddition $parameters
     * @return GetAgreementAdditionResponse
     */
    public function GetAgreementAddition(GetAgreementAddition $parameters)
    {
        return $this->__soapCall('GetAgreementAddition', array($parameters));
    }

    /**
     * Adds or updates an agreement
     *
     * @param AddOrUpdateAgreementAddition $parameters
     * @return AddOrUpdateAgreementAdditionResponse
     */
    public function AddOrUpdateAgreementAddition(AddOrUpdateAgreementAddition $parameters)
    {
        return $this->__soapCall('AddOrUpdateAgreementAddition', array($parameters));
    }

    /**
     * Returns a list of Agreement Additions
     *
     * @param FindAgreementAdditions $parameters
     * @return FindAgreementAdditionsResponse
     */
    public function FindAgreementAdditions(FindAgreementAdditions $parameters)
    {
        return $this->__soapCall('FindAgreementAdditions', array($parameters));
    }

    /**
     * Deletes an agreement addition
     *
     * @param DeleteAgreementAddition $parameters
     * @return DeleteAgreementAdditionResponse
     */
    public function DeleteAgreementAddition(DeleteAgreementAddition $parameters)
    {
        return $this->__soapCall('DeleteAgreementAddition', array($parameters));
    }

    /**
     * Gets an Agreement WorkType Exclusion by database record id. If no Agreement WorkRole Exclusion exists with the given id, null is returned
     *
     * @param GetAgreementWorkRoleExclusion $parameters
     * @return GetAgreementWorkRoleExclusionResponse
     */
    public function GetAgreementWorkRoleExclusion(GetAgreementWorkRoleExclusion $parameters)
    {
        return $this->__soapCall('GetAgreementWorkRoleExclusion', array($parameters));
    }

    /**
     * Gets an Agreement WorkRole Exclusion by database record id. If no Agreement WorkType Exclusion exists with the given id, null is returned
     *
     * @param GetAgreementWorkTypeExclusion $parameters
     * @return GetAgreementWorkTypeExclusionResponse
     */
    public function GetAgreementWorkTypeExclusion(GetAgreementWorkTypeExclusion $parameters)
    {
        return $this->__soapCall('GetAgreementWorkTypeExclusion', array($parameters));
    }

    /**
     * Returns a list of Agreement Exclusions
     *
     * @param FindAgreementExclusions $parameters
     * @return FindAgreementExclusionsResponse
     */
    public function FindAgreementExclusions(FindAgreementExclusions $parameters)
    {
        return $this->__soapCall('FindAgreementExclusions', array($parameters));
    }

    /**
     * Adds or removes an agreement work type exclusion
     *
     * @param AddOrRemoveAgreementWorkTypeExclusion $parameters
     * @return AddOrRemoveAgreementWorkTypeExclusionResponse
     */
    public function AddOrRemoveAgreementWorkTypeExclusion(AddOrRemoveAgreementWorkTypeExclusion $parameters)
    {
        return $this->__soapCall('AddOrRemoveAgreementWorkTypeExclusion', array($parameters));
    }

    /**
     * Adds or removes an agreement work role exclusion
     *
     * @param AddOrRemoveAgreementWorkRoleExclusion $parameters
     * @return AddOrRemoveAgreementWorkRoleExclusionResponse
     */
    public function AddOrRemoveAgreementWorkRoleExclusion(AddOrRemoveAgreementWorkRoleExclusion $parameters)
    {
        return $this->__soapCall('AddOrRemoveAgreementWorkRoleExclusion', array($parameters));
    }

    /**
     * Gets an agreement board default by database record id. If no agreement board default exists with the given id, null is returned
     *
     * @param GetAgreementBoardDefault $parameters
     * @return GetAgreementBoardDefaultResponse
     */
    public function GetAgreementBoardDefault(GetAgreementBoardDefault $parameters)
    {
        return $this->__soapCall('GetAgreementBoardDefault', array($parameters));
    }

    /**
     * Returns a list of Agreement board defaults
     *
     * @param FindAgreementBoardDefaults $parameters
     * @return FindAgreementBoardDefaultsResponse
     */
    public function FindAgreementBoardDefaults(FindAgreementBoardDefaults $parameters)
    {
        return $this->__soapCall('FindAgreementBoardDefaults', array($parameters));
    }

    /**
     * Adds or updates an agreement board default
     *
     * @param AddOrUpdateAgreementBoardDefault $parameters
     * @return AddOrUpdateAgreementBoardDefaultResponse
     */
    public function AddOrUpdateAgreementBoardDefault(AddOrUpdateAgreementBoardDefault $parameters)
    {
        return $this->__soapCall('AddOrUpdateAgreementBoardDefault', array($parameters));
    }

    /**
     * Deletes an agreement board default
     *
     * @param DeleteAgreementBoardDefault $parameters
     * @return DeleteAgreementBoardDefaultResponse
     */
    public function DeleteAgreementBoardDefault(DeleteAgreementBoardDefault $parameters)
    {
        return $this->__soapCall('DeleteAgreementBoardDefault', array($parameters));
    }

}
