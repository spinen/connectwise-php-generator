<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

/**
 * ConnectWise Scheduling API
 */
class SchedulingApi extends \Spinen\ConnectWise\Library\SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array(
        'GetTicketScheduleEntry'                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetTicketScheduleEntry',
        'ApiCredentials'                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ApiCredentials',
        'GetTicketScheduleEntryResponse'           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetTicketScheduleEntryResponse',
        'TicketScheduleEntry'                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\TicketScheduleEntry',
        'GetActivityScheduleEntry'                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetActivityScheduleEntry',
        'GetActivityScheduleEntryResponse'         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetActivityScheduleEntryResponse',
        'ActivityScheduleEntry'                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ActivityScheduleEntry',
        'GetMiscScheduleEntry'                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetMiscScheduleEntry',
        'GetMiscScheduleEntryResponse'             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetMiscScheduleEntryResponse',
        'MiscScheduleEntry'                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\MiscScheduleEntry',
        'FindScheduleEntries'                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindScheduleEntries',
        'ArrayOfString'                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfString',
        'FindScheduleEntriesResponse'              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindScheduleEntriesResponse',
        'ArrayOfScheduleEntryFindResult'           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfScheduleEntryFindResult',
        'ScheduleEntryFindResult'                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ScheduleEntryFindResult',
        'AddOrUpdateTicketScheduleEntry'           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateTicketScheduleEntry',
        'AddOrUpdateTicketScheduleEntryResponse'   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateTicketScheduleEntryResponse',
        'DeleteTicketScheduleEntry'                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteTicketScheduleEntry',
        'DeleteTicketScheduleEntryResponse'        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteTicketScheduleEntryResponse',
        'AddOrUpdateActivityScheduleEntry'         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateActivityScheduleEntry',
        'AddOrUpdateActivityScheduleEntryResponse' => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateActivityScheduleEntryResponse',
        'DeleteActivityScheduleEntry'              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteActivityScheduleEntry',
        'DeleteActivityScheduleEntryResponse'      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteActivityScheduleEntryResponse',
        'AddOrUpdateMiscScheduleEntry'             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateMiscScheduleEntry',
        'AddOrUpdateMiscScheduleEntryResponse'     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateMiscScheduleEntryResponse',
        'DeleteMiscScheduleEntry'                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteMiscScheduleEntry',
        'DeleteMiscScheduleEntryResponse'          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteMiscScheduleEntryResponse',
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
    public function __construct($host, array $options = array(), $wsdl = '/v4_6_release/apis/2.0/SchedulingApi.asmx?wsdl')
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
     * Gets a ticket schedule record by database record id. If no schedule exists with the given id, null is returned.
     *
     * @param GetTicketScheduleEntry $parameters
     * @return GetTicketScheduleEntryResponse
     */
    public function GetTicketScheduleEntry(GetTicketScheduleEntry $parameters)
    {
        return $this->__soapCall('GetTicketScheduleEntry', array($parameters));
    }

    /**
     * Gets an activity schedule record by database record id. If no schedule exists with the given id, null is returned.
     *
     * @param GetActivityScheduleEntry $parameters
     * @return GetActivityScheduleEntryResponse
     */
    public function GetActivityScheduleEntry(GetActivityScheduleEntry $parameters)
    {
        return $this->__soapCall('GetActivityScheduleEntry', array($parameters));
    }

    /**
     * Gets a misc schedule record by database record id. If no schedule exists with the given id, null is returned.
     *
     * @param GetMiscScheduleEntry $parameters
     * @return GetMiscScheduleEntryResponse
     */
    public function GetMiscScheduleEntry(GetMiscScheduleEntry $parameters)
    {
        return $this->__soapCall('GetMiscScheduleEntry', array($parameters));
    }

    /**
     * Finds schedule information by a set of conditions.
     *
     * @param FindScheduleEntries $parameters
     * @return FindScheduleEntriesResponse
     */
    public function FindScheduleEntries(FindScheduleEntries $parameters)
    {
        return $this->__soapCall('FindScheduleEntries', array($parameters));
    }

    /**
     * Adds or Updates a ticket schedule record
     *
     * @param AddOrUpdateTicketScheduleEntry $parameters
     * @return AddOrUpdateTicketScheduleEntryResponse
     */
    public function AddOrUpdateTicketScheduleEntry(AddOrUpdateTicketScheduleEntry $parameters)
    {
        return $this->__soapCall('AddOrUpdateTicketScheduleEntry', array($parameters));
    }

    /**
     * Deletes a ticket schedule record
     *
     * @param DeleteTicketScheduleEntry $parameters
     * @return DeleteTicketScheduleEntryResponse
     */
    public function DeleteTicketScheduleEntry(DeleteTicketScheduleEntry $parameters)
    {
        return $this->__soapCall('DeleteTicketScheduleEntry', array($parameters));
    }

    /**
     * Add or Updates an activity schedule
     *
     * @param AddOrUpdateActivityScheduleEntry $parameters
     * @return AddOrUpdateActivityScheduleEntryResponse
     */
    public function AddOrUpdateActivityScheduleEntry(AddOrUpdateActivityScheduleEntry $parameters)
    {
        return $this->__soapCall('AddOrUpdateActivityScheduleEntry', array($parameters));
    }

    /**
     * Deletes an activity schedule
     *
     * @param DeleteActivityScheduleEntry $parameters
     * @return DeleteActivityScheduleEntryResponse
     */
    public function DeleteActivityScheduleEntry(DeleteActivityScheduleEntry $parameters)
    {
        return $this->__soapCall('DeleteActivityScheduleEntry', array($parameters));
    }

    /**
     * Add or Update a miscellaneous schedule entry
     *
     * @param AddOrUpdateMiscScheduleEntry $parameters
     * @return AddOrUpdateMiscScheduleEntryResponse
     */
    public function AddOrUpdateMiscScheduleEntry(AddOrUpdateMiscScheduleEntry $parameters)
    {
        return $this->__soapCall('AddOrUpdateMiscScheduleEntry', array($parameters));
    }

    /**
     * Deletes a misc schedule entry
     *
     * @param DeleteMiscScheduleEntry $parameters
     * @return DeleteMiscScheduleEntryResponse
     */
    public function DeleteMiscScheduleEntry(DeleteMiscScheduleEntry $parameters)
    {
        return $this->__soapCall('DeleteMiscScheduleEntry', array($parameters));
    }

}
