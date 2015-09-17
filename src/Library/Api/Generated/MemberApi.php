<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

/**
 * ConnectWise Member API
 */
class MemberApi extends \Spinen\ConnectWise\Library\SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array(
        'IsValidMemberIdAndPassword'                                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\IsValidMemberIdAndPassword',
        'ApiCredentials'                                                     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ApiCredentials',
        'IsValidMemberIdAndPasswordResponse'                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\IsValidMemberIdAndPasswordResponse',
        'AuthenticateSession'                                                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AuthenticateSession',
        'AuthenticateSessionResponse'                                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\AuthenticateSessionResponse',
        'CreateAuthenticatedMemberHashToken'                                 => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\CreateAuthenticatedMemberHashToken',
        'CreateAuthenticatedMemberHashTokenResponse'                         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\CreateAuthenticatedMemberHashTokenResponse',
        'GetMemberIdByRemoteSupportPackageAuthenticationCredentials'         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetMemberIdByRemoteSupportPackageAuthenticationCredentials',
        'GetMemberIdByRemoteSupportPackageAuthenticationCredentialsResponse' => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\GetMemberIdByRemoteSupportPackageAuthenticationCredentialsResponse',
        'FindMembers'                                                        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindMembers',
        'ArrayOfString'                                                      => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfString',
        'FindMembersResponse'                                                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\FindMembersResponse',
        'ArrayOfMemberFindResult'                                            => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ArrayOfMemberFindResult',
        'MemberFindResult'                                                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\MemberFindResult',
        'CheckConnectWiseAuthenticationCredentials'                          => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\CheckConnectWiseAuthenticationCredentials',
        'CheckConnectWiseAuthenticationCredentialsResponse'                  => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\CheckConnectWiseAuthenticationCredentialsResponse',
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
    public function __construct($host, array $options = array(), $wsdl = '/v4_6_release/apis/2.0/MemberApi.asmx?wsdl')
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
     * Determines if a given ConnectWise member id and password are valid.
     *
     * @param IsValidMemberIdAndPassword $parameters
     * @return IsValidMemberIdAndPasswordResponse
     */
    public function IsValidMemberIdAndPassword(IsValidMemberIdAndPassword $parameters)
    {
        return $this->__soapCall('IsValidMemberIdAndPassword', array($parameters));
    }

    /**
     * Determines if a given ConnectWise member id and session are active.
     *
     * @param AuthenticateSession $parameters
     * @return AuthenticateSessionResponse
     */
    public function AuthenticateSession(AuthenticateSession $parameters)
    {
        return $this->__soapCall('AuthenticateSession', array($parameters));
    }

    /**
     * Creates anauthenticated member hash for a given ConnectWise member.
     *
     * @param CreateAuthenticatedMemberHashToken $parameters
     * @return CreateAuthenticatedMemberHashTokenResponse
     */
    public function CreateAuthenticatedMemberHashToken(CreateAuthenticatedMemberHashToken $parameters)
    {
        return $this->__soapCall('CreateAuthenticatedMemberHashToken', array($parameters));
    }

    /**
     * Looks up a ConnectWise member id based on a set of remote support package credentials assigned to the member in ConnectWise.
     *
     * @param GetMemberIdByRemoteSupportPackageAuthenticationCredentials $parameters
     * @return GetMemberIdByRemoteSupportPackageAuthenticationCredentialsResponse
     */
    public function GetMemberIdByRemoteSupportPackageAuthenticationCredentials(GetMemberIdByRemoteSupportPackageAuthenticationCredentials $parameters)
    {
        return $this->__soapCall('GetMemberIdByRemoteSupportPackageAuthenticationCredentials', array($parameters));
    }

    /**
     * Finds ConnectWise members based on a set of conditions.
     *
     * @param FindMembers $parameters
     * @return FindMembersResponse
     */
    public function FindMembers(FindMembers $parameters)
    {
        return $this->__soapCall('FindMembers', array($parameters));
    }

    /**
     * Checks ConnectWise authentication credentials
     *
     * @param CheckConnectWiseAuthenticationCredentials $parameters
     * @return CheckConnectWiseAuthenticationCredentialsResponse
     */
    public function CheckConnectWiseAuthenticationCredentials(CheckConnectWiseAuthenticationCredentials $parameters)
    {
        return $this->__soapCall('CheckConnectWiseAuthenticationCredentials', array($parameters));
    }

}
