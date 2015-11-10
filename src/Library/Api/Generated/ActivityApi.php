<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

/**
 * ConnectWise Activity API
 */
class ActivityApi extends \Spinen\ConnectWise\Library\SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array(
        'GetActivity'                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetActivity',
        'ApiCredentials'              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ApiCredentials',
        'GetActivityResponse'         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetActivityResponse',
        'Activity'                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\Activity',
        'ActivityDuration'            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ActivityDuration',
        'ContactInformation'          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ContactInformation',
        'LoadActivity'                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\LoadActivity',
        'LoadActivityResponse'        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\LoadActivityResponse',
        'AddActivity'                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddActivity',
        'AddActivityResponse'         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddActivityResponse',
        'UpdateActivity'              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateActivity',
        'UpdateActivityResponse'      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateActivityResponse',
        'AddOrUpdateActivity'         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateActivity',
        'AddOrUpdateActivityResponse' => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateActivityResponse',
        'DeleteActivity'              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteActivity',
        'DeleteActivityResponse'      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteActivityResponse',
        'FindActivities'              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindActivities',
        'ArrayOfString'               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfString',
        'FindActivitiesResponse'      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindActivitiesResponse',
        'ArrayOfActivityFindResult'   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfActivityFindResult',
        'ActivityFindResult'          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ActivityFindResult',
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
    public function __construct($host, array $options = array(), $wsdl = '/v4_6_release/apis/2.0/ActivityApi.asmx?wsdl')
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
     * Gets an activity by database record id. If no activity exists with the given id, null is returned.
     *
     * @param GetActivity $parameters
     * @return GetActivityResponse
     */
    public function GetActivity(GetActivity $parameters)
    {
        return $this->__soapCall('GetActivity', array($parameters));
    }

    /**
     * Gets an activity by database record id. If no activity exists with the given id, an error is returned.
     *
     * @param LoadActivity $parameters
     * @return LoadActivityResponse
     */
    public function LoadActivity(LoadActivity $parameters)
    {
        return $this->__soapCall('LoadActivity', array($parameters));
    }

    /**
     * Adds a new activity.
     *
     * @param AddActivity $parameters
     * @return AddActivityResponse
     */
    public function AddActivity(AddActivity $parameters)
    {
        return $this->__soapCall('AddActivity', array($parameters));
    }

    /**
     * Updates an existing activity.
     *
     * @param UpdateActivity $parameters
     * @return UpdateActivityResponse
     */
    public function UpdateActivity(UpdateActivity $parameters)
    {
        return $this->__soapCall('UpdateActivity', array($parameters));
    }

    /**
     * Adds or updates an activity. If the activity Id is 0, the activity is added. If non-zero, the existing activity with that Id is updated.
     *
     * @param AddOrUpdateActivity $parameters
     * @return AddOrUpdateActivityResponse
     */
    public function AddOrUpdateActivity(AddOrUpdateActivity $parameters)
    {
        return $this->__soapCall('AddOrUpdateActivity', array($parameters));
    }

    /**
     * Deletes an activity by database record id.
     *
     * @param DeleteActivity $parameters
     * @return DeleteActivityResponse
     */
    public function DeleteActivity(DeleteActivity $parameters)
    {
        return $this->__soapCall('DeleteActivity', array($parameters));
    }

    /**
     * Finds activity information by a set of conditions.
     *
     * @param FindActivities $parameters
     * @return FindActivitiesResponse
     */
    public function FindActivities(FindActivities $parameters)
    {
        return $this->__soapCall('FindActivities', array($parameters));
    }

}
