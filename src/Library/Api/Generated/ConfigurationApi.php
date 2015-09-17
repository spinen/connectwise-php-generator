<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

/**
 * ConnectWise Configuration API
 */
class ConfigurationApi extends \Spinen\ConnectWise\Library\SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array(
        'GetConfiguration'                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetConfiguration',
        'ApiCredentials'                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ApiCredentials',
        'GetConfigurationResponse'                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetConfigurationResponse',
        'Configuration'                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\Configuration',
        'ArrayOfConfigurationQuestion'            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfConfigurationQuestion',
        'ConfigurationQuestion'                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ConfigurationQuestion',
        'VendorCompany'                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\VendorCompany',
        'ManufacturerCompany'                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ManufacturerCompany',
        'LoadConfiguration'                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\LoadConfiguration',
        'LoadConfigurationResponse'               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\LoadConfigurationResponse',
        'FindConfigurations'                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindConfigurations',
        'ArrayOfString'                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfString',
        'FindConfigurationsResponse'              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindConfigurationsResponse',
        'ArrayOfConfigurationFindResult'          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfConfigurationFindResult',
        'ConfigurationFindResult'                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ConfigurationFindResult',
        'FindConfigurationCount'                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindConfigurationCount',
        'FindConfigurationCountResponse'          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindConfigurationCountResponse',
        'AddConfiguration'                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddConfiguration',
        'AddConfigurationResponse'                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddConfigurationResponse',
        'UpdateConfiguration'                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateConfiguration',
        'UpdateConfigurationResponse'             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateConfigurationResponse',
        'AddOrUpdateConfiguration'                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateConfiguration',
        'AddOrUpdateConfigurationResponse'        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateConfigurationResponse',
        'DeleteConfiguration'                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteConfiguration',
        'DeleteConfigurationResponse'             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteConfigurationResponse',
        'FindConfigurationTypes'                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindConfigurationTypes',
        'FindConfigurationTypesResponse'          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindConfigurationTypesResponse',
        'ArrayOfConfigurationTypeFindResult'      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfConfigurationTypeFindResult',
        'ConfigurationTypeFindResult'             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ConfigurationTypeFindResult',
        'GetConfigurationType'                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetConfigurationType',
        'GetConfigurationTypeResponse'            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetConfigurationTypeResponse',
        'ConfigurationType'                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ConfigurationType',
        'ArrayOfConfigurationTypeQuestion'        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfConfigurationTypeQuestion',
        'ConfigurationTypeQuestion'               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ConfigurationTypeQuestion',
        'ArrayOfPossibleResponse'                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfPossibleResponse',
        'PossibleResponse'                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\PossibleResponse',
        'LoadConfigurationType'                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\LoadConfigurationType',
        'LoadConfigurationTypeResponse'           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\LoadConfigurationTypeResponse',
        'UpdateConfigurationType'                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateConfigurationType',
        'UpdateConfigurationTypeResponse'         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateConfigurationTypeResponse',
        'AddConfigurationType'                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddConfigurationType',
        'AddConfigurationTypeResponse'            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddConfigurationTypeResponse',
        'AddOrUpdateConfigurationType'            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateConfigurationType',
        'AddOrUpdateConfigurationTypeResponse'    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateConfigurationTypeResponse',
        'DeleteConfigurationType'                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteConfigurationType',
        'DeleteConfigurationTypeResponse'         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteConfigurationTypeResponse',
        'DeleteConfigurationTypeQuestion'         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteConfigurationTypeQuestion',
        'DeleteConfigurationTypeQuestionResponse' => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteConfigurationTypeQuestionResponse',
        'DeletePossibleResponse'                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeletePossibleResponse',
        'DeletePossibleResponseResponse'          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeletePossibleResponseResponse',
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
    public function __construct($host, array $options = array(), $wsdl = '/v4_6_release/apis/2.0/ConfigurationAPI.asmx?wsdl')
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
     * Gets a configuration by database record id. If no configuration exists with the given id, null is returned.
     *
     * @param GetConfiguration $parameters
     * @return GetConfigurationResponse
     */
    public function GetConfiguration(GetConfiguration $parameters)
    {
        return $this->__soapCall('GetConfiguration', array($parameters));
    }

    /**
     * Gets a configuration by database record id. If no configuration exists with the given id, an error is returned.
     *
     * @param LoadConfiguration $parameters
     * @return LoadConfigurationResponse
     */
    public function LoadConfiguration(LoadConfiguration $parameters)
    {
        return $this->__soapCall('LoadConfiguration', array($parameters));
    }

    /**
     * Gets a configuration by database record id. If no configuration exists with the given id, null is returned.
     *
     * @param FindConfigurations $parameters
     * @return FindConfigurationsResponse
     */
    public function FindConfigurations(FindConfigurations $parameters)
    {
        return $this->__soapCall('FindConfigurations', array($parameters));
    }

    /**
     * Gets a count of available configurations.  Optionally filters by the supplied conditions.
     *
     * @param FindConfigurationCount $parameters
     * @return FindConfigurationCountResponse
     */
    public function FindConfigurationCount(FindConfigurationCount $parameters)
    {
        return $this->__soapCall('FindConfigurationCount', array($parameters));
    }

    /**
     * Add a new Configuration.
     *
     * @param AddConfiguration $parameters
     * @return AddConfigurationResponse
     */
    public function AddConfiguration(AddConfiguration $parameters)
    {
        return $this->__soapCall('AddConfiguration', array($parameters));
    }

    /**
     * Update an existing configuration.
     *
     * @param UpdateConfiguration $parameters
     * @return UpdateConfigurationResponse
     */
    public function UpdateConfiguration(UpdateConfiguration $parameters)
    {
        return $this->__soapCall('UpdateConfiguration', array($parameters));
    }

    /**
     * Adds or Updates a configuration.
     *
     * @param AddOrUpdateConfiguration $parameters
     * @return AddOrUpdateConfigurationResponse
     */
    public function AddOrUpdateConfiguration(AddOrUpdateConfiguration $parameters)
    {
        return $this->__soapCall('AddOrUpdateConfiguration', array($parameters));
    }

    /**
     * Delete an existing configuration
     *
     * @param DeleteConfiguration $parameters
     * @return DeleteConfigurationResponse
     */
    public function DeleteConfiguration(DeleteConfiguration $parameters)
    {
        return $this->__soapCall('DeleteConfiguration', array($parameters));
    }

    /**
     * Finds Configuration Types
     *
     * @param FindConfigurationTypes $parameters
     * @return FindConfigurationTypesResponse
     */
    public function FindConfigurationTypes(FindConfigurationTypes $parameters)
    {
        return $this->__soapCall('FindConfigurationTypes', array($parameters));
    }

    /**
     * Gets a configuration type by database record id. If no configuration exists with the given id, null is returned.
     *
     * @param GetConfigurationType $parameters
     * @return GetConfigurationTypeResponse
     */
    public function GetConfigurationType(GetConfigurationType $parameters)
    {
        return $this->__soapCall('GetConfigurationType', array($parameters));
    }

    /**
     * Gets a configuration type by database record id. If no configuration exists with the given id, an error is returned.
     *
     * @param LoadConfigurationType $parameters
     * @return LoadConfigurationTypeResponse
     */
    public function LoadConfigurationType(LoadConfigurationType $parameters)
    {
        return $this->__soapCall('LoadConfigurationType', array($parameters));
    }

    /**
     * Updates an existing configuration type.
     *
     * @param UpdateConfigurationType $parameters
     * @return UpdateConfigurationTypeResponse
     */
    public function UpdateConfigurationType(UpdateConfigurationType $parameters)
    {
        return $this->__soapCall('UpdateConfigurationType', array($parameters));
    }

    /**
     * Adds a new configuration type.
     *
     * @param AddConfigurationType $parameters
     * @return AddConfigurationTypeResponse
     */
    public function AddConfigurationType(AddConfigurationType $parameters)
    {
        return $this->__soapCall('AddConfigurationType', array($parameters));
    }

    /**
     * Adds or Updates a configuration type.
     *
     * @param AddOrUpdateConfigurationType $parameters
     * @return AddOrUpdateConfigurationTypeResponse
     */
    public function AddOrUpdateConfigurationType(AddOrUpdateConfigurationType $parameters)
    {
        return $this->__soapCall('AddOrUpdateConfigurationType', array($parameters));
    }

    /**
     * Deletes an existing configuration type.
     *
     * @param DeleteConfigurationType $parameters
     * @return DeleteConfigurationTypeResponse
     */
    public function DeleteConfigurationType(DeleteConfigurationType $parameters)
    {
        return $this->__soapCall('DeleteConfigurationType', array($parameters));
    }

    /**
     * Deletes a question from an existing configuration type.
     *
     * @param DeleteConfigurationTypeQuestion $parameters
     * @return DeleteConfigurationTypeQuestionResponse
     */
    public function DeleteConfigurationTypeQuestion(DeleteConfigurationTypeQuestion $parameters)
    {
        return $this->__soapCall('DeleteConfigurationTypeQuestion', array($parameters));
    }

    /**
     * Deletes a possible response from an existing configuration type question.
     *
     * @param DeletePossibleResponse $parameters
     * @return DeletePossibleResponseResponse
     */
    public function DeletePossibleResponse(DeletePossibleResponse $parameters)
    {
        return $this->__soapCall('DeletePossibleResponse', array($parameters));
    }

}
