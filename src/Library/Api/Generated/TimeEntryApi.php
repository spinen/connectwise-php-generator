<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

/**
 * ConnectWise TimeEntry API
 */
class TimeEntryApi extends \Spinen\ConnectWise\Library\SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array(
        'GetTimeEntry'                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetTimeEntry',
        'ApiCredentials'               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ApiCredentials',
        'GetTimeEntryResponse'         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetTimeEntryResponse',
        'TimeEntry'                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\TimeEntry',
        'LoadTimeEntry'                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\LoadTimeEntry',
        'LoadTimeEntryResponse'        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\LoadTimeEntryResponse',
        'AddTimeEntry'                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddTimeEntry',
        'AddTimeEntryResponse'         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddTimeEntryResponse',
        'UpdateTimeEntry'              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateTimeEntry',
        'UpdateTimeEntryResponse'      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\UpdateTimeEntryResponse',
        'AddOrUpdateTimeEntry'         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateTimeEntry',
        'AddOrUpdateTimeEntryResponse' => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateTimeEntryResponse',
        'DeleteTimeEntry'              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteTimeEntry',
        'DeleteTimeEntryResponse'      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteTimeEntryResponse',
        'FindTimeEntries'              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindTimeEntries',
        'ArrayOfString'                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfString',
        'FindTimeEntriesResponse'      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindTimeEntriesResponse',
        'ArrayOfTimeEntryFindResult'   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfTimeEntryFindResult',
        'TimeEntryFindResult'          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\TimeEntryFindResult',
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
    public function __construct($host, array $options = array(), $wsdl = '/v4_6_release/apis/2.0/TimeEntryApi.asmx?wsdl')
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
     * Gets an time entry by database record id. If no time entry exists with the given id, null is returned.
     *
     * @param GetTimeEntry $parameters
     * @return GetTimeEntryResponse
     */
    public function GetTimeEntry(GetTimeEntry $parameters)
    {
        return $this->__soapCall('GetTimeEntry', array($parameters));
    }

    /**
     * Gets an time entry by database record id. If no time entry exists with the given id, an error is returned.
     *
     * @param LoadTimeEntry $parameters
     * @return LoadTimeEntryResponse
     */
    public function LoadTimeEntry(LoadTimeEntry $parameters)
    {
        return $this->__soapCall('LoadTimeEntry', array($parameters));
    }

    /**
     * Adds a new time entry.
     *
     * @param AddTimeEntry $parameters
     * @return AddTimeEntryResponse
     */
    public function AddTimeEntry(AddTimeEntry $parameters)
    {
        return $this->__soapCall('AddTimeEntry', array($parameters));
    }

    /**
     * Updates an existing time entry.
     *
     * @param UpdateTimeEntry $parameters
     * @return UpdateTimeEntryResponse
     */
    public function UpdateTimeEntry(UpdateTimeEntry $parameters)
    {
        return $this->__soapCall('UpdateTimeEntry', array($parameters));
    }

    /**
     * Adds or updates an time entry. If the time entry Id is 0, the time entry is added. If non-zero, the existing time entry with that Id is updated.
     *
     * @param AddOrUpdateTimeEntry $parameters
     * @return AddOrUpdateTimeEntryResponse
     */
    public function AddOrUpdateTimeEntry(AddOrUpdateTimeEntry $parameters)
    {
        return $this->__soapCall('AddOrUpdateTimeEntry', array($parameters));
    }

    /**
     * Deletes an time entry by database record id.
     *
     * @param DeleteTimeEntry $parameters
     * @return DeleteTimeEntryResponse
     */
    public function DeleteTimeEntry(DeleteTimeEntry $parameters)
    {
        return $this->__soapCall('DeleteTimeEntry', array($parameters));
    }

    /**
     * Finds time entry information by a set of conditions.
     *
     * @param FindTimeEntries $parameters
     * @return FindTimeEntriesResponse
     */
    public function FindTimeEntries(FindTimeEntries $parameters)
    {
        return $this->__soapCall('FindTimeEntries', array($parameters));
    }

}
