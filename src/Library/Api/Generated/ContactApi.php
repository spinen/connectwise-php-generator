<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

/**
 * ConnectWise Contact API
 */
class ContactApi extends \Spinen\ConnectWise\Library\SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array(
        'GetAllContactNotes'                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAllContactNotes',
        'ApiCredentials'                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ApiCredentials',
        'GetAllContactNotesResponse'                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetAllContactNotesResponse',
        'ArrayOfNote'                                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfNote',
        'Note'                                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\Note',
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
        'ArrayOfString'                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfString',
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
        'Address'                                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\Address',
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
    public function __construct($host, array $options = array(), $wsdl = '/v4_6_release/apis/2.0/ContactApi.asmx?wsdl')
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
     * Gets all notes for contact by database record id. If no contact exists with the given id, null is returned.
     *
     * @param GetAllContactNotes $parameters
     * @return GetAllContactNotesResponse
     */
    public function GetAllContactNotes(GetAllContactNotes $parameters)
    {
        return $this->__soapCall('GetAllContactNotes', array($parameters));
    }

    /**
     * Gets a note for contact by database record id. If no contact exists with the given id, null is returned.
     *
     * @param GetContactNote $parameters
     * @return GetContactNoteResponse
     */
    public function GetContactNote(GetContactNote $parameters)
    {
        return $this->__soapCall('GetContactNote', array($parameters));
    }

    /**
     * Adds or updates a contact note. If the note Id is 0, and the contactId is set; the note is added. If non-zero, the existing note with that Id is updated.
     *
     * @param AddOrUpdateContactNote $parameters
     * @return AddOrUpdateContactNoteResponse
     */
    public function AddOrUpdateContactNote(AddOrUpdateContactNote $parameters)
    {
        return $this->__soapCall('AddOrUpdateContactNote', array($parameters));
    }

    /**
     * Deletes a note by database record id.
     *
     * @param DeleteNote $parameters
     * @return DeleteNoteResponse
     */
    public function DeleteNote(DeleteNote $parameters)
    {
        return $this->__soapCall('DeleteNote', array($parameters));
    }

    /**
     * Gets all communication items for contact by database record id. If no contact exists with the given id, null is returned.
     *
     * @param GetAllContactCommunicationItems $parameters
     * @return GetAllContactCommunicationItemsResponse
     */
    public function GetAllContactCommunicationItems(GetAllContactCommunicationItems $parameters)
    {
        return $this->__soapCall('GetAllContactCommunicationItems', array($parameters));
    }

    /**
     * Gets all communication types and descriptions.
     *
     * @param GetAllCommunicationTypesAndDescription $parameters
     * @return GetAllCommunicationTypesAndDescriptionResponse
     */
    public function GetAllCommunicationTypesAndDescription(GetAllCommunicationTypesAndDescription $parameters)
    {
        return $this->__soapCall('GetAllCommunicationTypesAndDescription', array($parameters));
    }

    /**
     * Gets a communication item for contact by database record contactId. If no contact exists with the given id, null is returned.
     *
     * @param GetContactCommunicationItem $parameters
     * @return GetContactCommunicationItemResponse
     */
    public function GetContactCommunicationItem(GetContactCommunicationItem $parameters)
    {
        return $this->__soapCall('GetContactCommunicationItem', array($parameters));
    }

    /**
     * Adds or updates a communication item. If the communicationItem Id is 0, the communicationItem is added. If non-zero, the existing communicationItem with that Id is updated.
     *
     * @param AddOrUpdateContactCommunicationItem $parameters
     * @return AddOrUpdateContactCommunicationItemResponse
     */
    public function AddOrUpdateContactCommunicationItem(AddOrUpdateContactCommunicationItem $parameters)
    {
        return $this->__soapCall('AddOrUpdateContactCommunicationItem', array($parameters));
    }

    /**
     * Deletes a communication by database record for contactId, communcationType, and communicationDescription.
     *
     * @param DeleteContactCommunicationItem $parameters
     * @return DeleteContactCommunicationItemResponse
     */
    public function DeleteContactCommunicationItem(DeleteContactCommunicationItem $parameters)
    {
        return $this->__soapCall('DeleteContactCommunicationItem', array($parameters));
    }

    /**
     * Sets the default communicationType for contactId, communcationType, and communicationDescription.
     *
     * @param SetDefaultContactCommunicationItem $parameters
     * @return SetDefaultContactCommunicationItemResponse
     */
    public function SetDefaultContactCommunicationItem(SetDefaultContactCommunicationItem $parameters)
    {
        return $this->__soapCall('SetDefaultContactCommunicationItem', array($parameters));
    }

    /**
     * Gets a contact by database record id. If no contact exists with the given id, null is returned.
     *
     * @param GetContact $parameters
     * @return GetContactResponse
     */
    public function GetContact(GetContact $parameters)
    {
        return $this->__soapCall('GetContact', array($parameters));
    }

    /**
     * Gets a contact by database record id. If no contact exists with the given id, an error is returned.
     *
     * @param LoadContact $parameters
     * @return LoadContactResponse
     */
    public function LoadContact(LoadContact $parameters)
    {
        return $this->__soapCall('LoadContact', array($parameters));
    }

    /**
     * Adds or updates a contact. If the contact Id is 0, the contact is added. If non-zero, the existing contact with that Id is updated.
     *
     * @param AddOrUpdateContact $parameters
     * @return AddOrUpdateContactResponse
     */
    public function AddOrUpdateContact(AddOrUpdateContact $parameters)
    {
        return $this->__soapCall('AddOrUpdateContact', array($parameters));
    }

    /**
     * Deletes a contact by database record id.
     *
     * @param DeleteContact $parameters
     * @return DeleteContactResponse
     */
    public function DeleteContact(DeleteContact $parameters)
    {
        return $this->__soapCall('DeleteContact', array($parameters));
    }

    /**
     * Finds contact information by a set of conditions.
     *
     * @param FindContacts $parameters
     * @return FindContactsResponse
     */
    public function FindContacts(FindContacts $parameters)
    {
        return $this->__soapCall('FindContacts', array($parameters));
    }

    /**
     * Finds a count of available contacts by a set of conditions.
     *
     * @param FindContactCount $parameters
     * @return FindContactCountResponse
     */
    public function FindContactCount(FindContactCount $parameters)
    {
        return $this->__soapCall('FindContactCount', array($parameters));
    }

    /**
     * Adds a contact to a specified group.
     *
     * @param AddContactToGroup $parameters
     * @return AddContactToGroupResponse
     */
    public function AddContactToGroup(AddContactToGroup $parameters)
    {
        return $this->__soapCall('AddContactToGroup', array($parameters));
    }

    /**
     * Removes a contact from the specified group.
     *
     * @param RemoveContactFromGroup $parameters
     * @return RemoveContactFromGroupResponse
     */
    public function RemoveContactFromGroup(RemoveContactFromGroup $parameters)
    {
        return $this->__soapCall('RemoveContactFromGroup', array($parameters));
    }

    /**
     * Authenticate a contact logging into the portal.
     *
     * @param Authenticate $parameters
     * @return AuthenticateResponse
     */
    public function Authenticate(Authenticate $parameters)
    {
        return $this->__soapCall('Authenticate', array($parameters));
    }

    /**
     * Return the configuration settings for the specified portal.
     *
     * @param GetPortalConfigSettings $parameters
     * @return GetPortalConfigSettingsResponse
     */
    public function GetPortalConfigSettings(GetPortalConfigSettings $parameters)
    {
        return $this->__soapCall('GetPortalConfigSettings', array($parameters));
    }

    /**
     * Return the security settings for the contact logged into the portal.
     *
     * @param GetPortalSecurity $parameters
     * @return GetPortalSecurityResponse
     */
    public function GetPortalSecurity(GetPortalSecurity $parameters)
    {
        return $this->__soapCall('GetPortalSecurity', array($parameters));
    }

    /**
     * Get the login page customizations for the specified portal.
     *
     * @param GetPortalLoginCustomizations $parameters
     * @return GetPortalLoginCustomizationsResponse
     */
    public function GetPortalLoginCustomizations(GetPortalLoginCustomizations $parameters)
    {
        return $this->__soapCall('GetPortalLoginCustomizations', array($parameters));
    }

    /**
     * Runs the "Forgot Password" process on the server.
     *
     * @param RequestPassword $parameters
     * @return RequestPasswordResponse
     */
    public function RequestPassword(RequestPassword $parameters)
    {
        return $this->__soapCall('RequestPassword', array($parameters));
    }

    /**
     * Gets an avatar image from the server.
     *
     * @param GetAvatarImage $parameters
     * @return GetAvatarImageResponse
     */
    public function GetAvatarImage(GetAvatarImage $parameters)
    {
        return $this->__soapCall('GetAvatarImage', array($parameters));
    }

    /**
     * Returns the contact presence status
     *
     * @param GetPresenceStatus $parameters
     * @return GetPresenceStatusResponse
     */
    public function GetPresenceStatus(GetPresenceStatus $parameters)
    {
        return $this->__soapCall('GetPresenceStatus', array($parameters));
    }

    /**
     * Updates the contact presence status
     *
     * @param UpdatePresenceStatus $parameters
     * @return UpdatePresenceStatusResponse
     */
    public function UpdatePresenceStatus(UpdatePresenceStatus $parameters)
    {
        return $this->__soapCall('UpdatePresenceStatus', array($parameters));
    }

}
