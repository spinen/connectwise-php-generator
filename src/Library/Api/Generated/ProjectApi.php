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
        'FindProjects'                                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindProjects',
        'ApiCredentials'                              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ApiCredentials',
        'ArrayOfString'                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfString',
        'FindProjectsResponse'                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindProjectsResponse',
        'ArrayOfProjectFindResult'                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfProjectFindResult',
        'ProjectFindResult'                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ProjectFindResult',
        'FindProjectCount'                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindProjectCount',
        'FindProjectCountResponse'                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindProjectCountResponse',
        'GetProjectWorkPlan'                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetProjectWorkPlan',
        'GetProjectWorkPlanResponse'                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetProjectWorkPlanResponse',
        'ProjectWorkPlan'                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ProjectWorkPlan',
        'ArrayOfProjectPhase'                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfProjectPhase',
        'ProjectPhase'                                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ProjectPhase',
        'ArrayOfProjectTicket'                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfProjectTicket',
        'ProjectTicket'                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ProjectTicket',
        'ProjectTicketSummaryInfo'                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ProjectTicketSummaryInfo',
        'ProjectPhaseSummaryInfo'                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ProjectPhaseSummaryInfo',
        'LoadProjectWorkPlan'                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\LoadProjectWorkPlan',
        'LoadProjectWorkPlanResponse'                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\LoadProjectWorkPlanResponse',
        'GetProject'                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetProject',
        'GetProjectResponse'                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetProjectResponse',
        'Project'                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\Project',
        'ProjectSummaryInfo'                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ProjectSummaryInfo',
        'DeleteProject'                               => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteProject',
        'DeleteProjectResponse'                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteProjectResponse',
        'DeleteProjectTicket'                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteProjectTicket',
        'DeleteProjectTicketResponse'                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteProjectTicketResponse',
        'DeleteProjectPhase'                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteProjectPhase',
        'DeleteProjectPhaseResponse'                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteProjectPhaseResponse',
        'DeleteProjectTeamMember'                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteProjectTeamMember',
        'DeleteProjectTeamMemberResponse'             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteProjectTeamMemberResponse',
        'DeleteProjectContact'                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteProjectContact',
        'DeleteProjectContactResponse'                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteProjectContactResponse',
        'DeleteProjectNote'                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteProjectNote',
        'DeleteProjectNoteResponse'                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteProjectNoteResponse',
        'ConvertServiceTicketToProjectTicket'         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ConvertServiceTicketToProjectTicket',
        'ConvertServiceTicketToProjectTicketResponse' => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ConvertServiceTicketToProjectTicketResponse',
        'AddOrUpdateProjectNote'                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateProjectNote',
        'ProjectNote'                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ProjectNote',
        'AddOrUpdateProjectNoteResponse'              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateProjectNoteResponse',
        'AddOrUpdateProjectContact'                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateProjectContact',
        'ProjectContact'                              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ProjectContact',
        'AddOrUpdateProjectContactResponse'           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateProjectContactResponse',
        'AddOrUpdateProjectTeamMember'                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateProjectTeamMember',
        'ProjectTeamMember'                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ProjectTeamMember',
        'AddOrUpdateProjectTeamMemberResponse'        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateProjectTeamMemberResponse',
        'AddOrUpdateProject'                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateProject',
        'AddOrUpdateProjectResponse'                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateProjectResponse',
        'AddOrUpdateProjectPhase'                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateProjectPhase',
        'AddOrUpdateProjectPhaseResponse'             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateProjectPhaseResponse',
        'GetProjectPhase'                             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetProjectPhase',
        'GetProjectPhaseResponse'                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetProjectPhaseResponse',
        'AddOrUpdateProjectTicket'                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateProjectTicket',
        'AddOrUpdateProjectTicketResponse'            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateProjectTicketResponse',
        'AddOrUpdateProjectWorkPlan'                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateProjectWorkPlan',
        'AddOrUpdateProjectWorkPlanResponse'          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AddOrUpdateProjectWorkPlanResponse',
        'FindPhases'                                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindPhases',
        'FindPhasesResponse'                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindPhasesResponse',
        'ArrayOfProjectPhaseFindResults'              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfProjectPhaseFindResults',
        'ProjectPhaseFindResults'                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ProjectPhaseFindResults',
        'GetProjectNote'                              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetProjectNote',
        'GetProjectNoteResponse'                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetProjectNoteResponse',
        'FindProjectNotes'                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindProjectNotes',
        'FindProjectNotesResponse'                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindProjectNotesResponse',
        'ArrayOfProjectNoteFindResult'                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfProjectNoteFindResult',
        'ProjectNoteFindResult'                       => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ProjectNoteFindResult',
        'GetProjectContact'                           => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetProjectContact',
        'GetProjectContactResponse'                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetProjectContactResponse',
        'FindProjectContacts'                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindProjectContacts',
        'FindProjectContactsResponse'                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindProjectContactsResponse',
        'ArrayOfProjectContactFindResult'             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfProjectContactFindResult',
        'ProjectContactFindResult'                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ProjectContactFindResult',
        'GetProjectTeamMember'                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetProjectTeamMember',
        'GetProjectTeamMemberResponse'                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetProjectTeamMemberResponse',
        'FindProjectTeamMembers'                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindProjectTeamMembers',
        'FindProjectTeamMembersResponse'              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindProjectTeamMembersResponse',
        'ArrayOfProjectTeamMemberFindResult'          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfProjectTeamMemberFindResult',
        'ProjectTeamMemberFindResult'                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ProjectTeamMemberFindResult',
        'GetProjectTicket'                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetProjectTicket',
        'GetProjectTicketResponse'                    => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetProjectTicketResponse',
        'FindProjectTickets'                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindProjectTickets',
        'FindProjectTicketsResponse'                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindProjectTicketsResponse',
        'ArrayOfProjectTicketFindResult'              => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfProjectTicketFindResult',
        'ProjectTicketFindResult'                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ProjectTicketFindResult',
        'DeleteProjectProduct'                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteProjectProduct',
        'DeleteProjectProductResponse'                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\DeleteProjectProductResponse',
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
