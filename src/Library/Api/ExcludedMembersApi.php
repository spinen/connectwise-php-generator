<?php

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Spinen\ConnectWise\Library\Api;

use \Spinen\ConnectWise\Library\Configuration;
use \Spinen\ConnectWise\Library\ApiClient;
use \Spinen\ConnectWise\Library\ApiException;
use \Spinen\ConnectWise\Library\ObjectSerializer;

/**
 * ExcludedMembersApi Class Doc Comment
 *
 * @category Class
 * @package  Spinen\ConnectWise\Library
 */
class ExcludedMembersApi
{
    /**
     * API Client
     *
     * @var \Spinen\ConnectWise\Library\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * New instance of ExcludedMembersApi.
     *
     * @param \Spinen\ConnectWise\Library\ApiClient|null $apiClient The api client to use
     */
    function __construct($apiClient = null)
    {
        if ($apiClient == null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('http://api-na.myconnectwise.net/v4_6_release/apis/3.0');
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Spinen\ConnectWise\Library\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Spinen\ConnectWise\Library\ApiClient $apiClient set the API client
     *
     * @return ExcludedMembersApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    
    /**
     * serviceBoardsIdExcludedMembersGet
     *
     * 
     *
     * @param int $id  (required)
     * @param string $conditions  (optional)
     * @param string $order_by  (optional)
     * @param int $page  (optional)
     * @param int $page_size  (optional)
     *
     * @return \Spinen\ConnectWise\Library\Models\ExcludedMember[]
     * @throws \Spinen\ConnectWise\Library\ApiException on non-2xx response
     */
    public function serviceBoardsIdExcludedMembersGet($id, $conditions=null, $order_by=null, $page=null, $page_size=null)
    {
        
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling serviceBoardsIdExcludedMembersGet');
        }

        // parse inputs
        $resourcePath = "/service/boards/{id}/excludedMembers";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "GET";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());

        // query params
        if ($conditions !== null) {
            $queryParams['conditions'] = $this->apiClient->getSerializer()->toQueryValue($conditions);
        }// query params
        if ($order_by !== null) {
            $queryParams['orderBy'] = $this->apiClient->getSerializer()->toQueryValue($order_by);
        }// query params
        if ($page !== null) {
            $queryParams['page'] = $this->apiClient->getSerializer()->toQueryValue($page);
        }// query params
        if ($page_size !== null) {
            $queryParams['pageSize'] = $this->apiClient->getSerializer()->toQueryValue($page_size);
        }
        
        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        
        

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } else if (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        $headerParams['Authorization'] = 'Basic '.base64_encode($this->apiClient->getConfig()->getUsername().":".$this->apiClient->getConfig()->getPassword());
        
        
        // make the API Call
        try
        {
            list($response, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, $method,
                $queryParams, $httpBody,
                $headerParams, '\Spinen\ConnectWise\Library\Models\ExcludedMember[]'
            );
            
            if (!$response) {
                return null;
            }

            return $this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Library\Models\ExcludedMember[]', $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Library\Models\ExcludedMember[]', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            case 401:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Library\Models\Error', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }

            throw $e;
        }
        
        return null;
        
    }
    
    /**
     * serviceBoardsIdExcludedMembersPost
     *
     * 
     *
     * @param int $id  (required)
     * @param \Spinen\ConnectWise\Library\Models\ExcludedMember $excluded_member  (required)
     *
     * @return \Spinen\ConnectWise\Library\Models\ExcludedMember
     * @throws \Spinen\ConnectWise\Library\ApiException on non-2xx response
     */
    public function serviceBoardsIdExcludedMembersPost($id, $excluded_member)
    {
        
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling serviceBoardsIdExcludedMembersPost');
        }
        // verify the required parameter 'excluded_member' is set
        if ($excluded_member === null) {
            throw new \InvalidArgumentException('Missing the required parameter $excluded_member when calling serviceBoardsIdExcludedMembersPost');
        }

        // parse inputs
        $resourcePath = "/service/boards/{id}/excludedMembers";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "POST";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array('application/json'));

        
        
        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        
        // body params
        $_tempBody = null;
        if (isset($excluded_member)) {
            $_tempBody = $excluded_member;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } else if (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        $headerParams['Authorization'] = 'Basic '.base64_encode($this->apiClient->getConfig()->getUsername().":".$this->apiClient->getConfig()->getPassword());
        
        
        // make the API Call
        try
        {
            list($response, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, $method,
                $queryParams, $httpBody,
                $headerParams, '\Spinen\ConnectWise\Library\Models\ExcludedMember'
            );
            
            if (!$response) {
                return null;
            }

            return $this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Library\Models\ExcludedMember', $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 201:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Library\Models\ExcludedMember', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            case 401:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Library\Models\Error', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }

            throw $e;
        }
        
        return null;
        
    }
    
    /**
     * serviceBoardsIdExcludedMembersCountGet
     *
     * 
     *
     * @param int $id  (required)
     * @param string $conditions  (optional)
     *
     * @return \Spinen\ConnectWise\Library\Models\Count
     * @throws \Spinen\ConnectWise\Library\ApiException on non-2xx response
     */
    public function serviceBoardsIdExcludedMembersCountGet($id, $conditions=null)
    {
        
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling serviceBoardsIdExcludedMembersCountGet');
        }

        // parse inputs
        $resourcePath = "/service/boards/{id}/excludedMembers/count";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "GET";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());

        // query params
        if ($conditions !== null) {
            $queryParams['conditions'] = $this->apiClient->getSerializer()->toQueryValue($conditions);
        }
        
        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        
        

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } else if (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        $headerParams['Authorization'] = 'Basic '.base64_encode($this->apiClient->getConfig()->getUsername().":".$this->apiClient->getConfig()->getPassword());
        
        
        // make the API Call
        try
        {
            list($response, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, $method,
                $queryParams, $httpBody,
                $headerParams, '\Spinen\ConnectWise\Library\Models\Count'
            );
            
            if (!$response) {
                return null;
            }

            return $this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Library\Models\Count', $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Library\Models\Count', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            case 401:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Library\Models\Error', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }

            throw $e;
        }
        
        return null;
        
    }
    
    /**
     * serviceBoardsIdExcludedMembersExcludedMemberIdGet
     *
     * 
     *
     * @param int $id  (required)
     * @param int $excluded_member_id  (required)
     *
     * @return \Spinen\ConnectWise\Library\Models\ExcludedMember
     * @throws \Spinen\ConnectWise\Library\ApiException on non-2xx response
     */
    public function serviceBoardsIdExcludedMembersExcludedMemberIdGet($id, $excluded_member_id)
    {
        
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling serviceBoardsIdExcludedMembersExcludedMemberIdGet');
        }
        // verify the required parameter 'excluded_member_id' is set
        if ($excluded_member_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $excluded_member_id when calling serviceBoardsIdExcludedMembersExcludedMemberIdGet');
        }

        // parse inputs
        $resourcePath = "/service/boards/{id}/excludedMembers/{excludedMemberId}";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "GET";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());

        
        
        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }// path params
        if ($excluded_member_id !== null) {
            $resourcePath = str_replace(
                "{" . "excludedMemberId" . "}",
                $this->apiClient->getSerializer()->toPathValue($excluded_member_id),
                $resourcePath
            );
        }
        
        

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } else if (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        $headerParams['Authorization'] = 'Basic '.base64_encode($this->apiClient->getConfig()->getUsername().":".$this->apiClient->getConfig()->getPassword());
        
        
        // make the API Call
        try
        {
            list($response, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, $method,
                $queryParams, $httpBody,
                $headerParams, '\Spinen\ConnectWise\Library\Models\ExcludedMember'
            );
            
            if (!$response) {
                return null;
            }

            return $this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Library\Models\ExcludedMember', $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Library\Models\ExcludedMember', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            case 401:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Library\Models\Error', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }

            throw $e;
        }
        
        return null;
        
    }
    
    /**
     * serviceBoardsIdExcludedMembersExcludedMemberIdDelete
     *
     * 
     *
     * @param int $id  (required)
     * @param int $excluded_member_id  (required)
     *
     * @return void
     * @throws \Spinen\ConnectWise\Library\ApiException on non-2xx response
     */
    public function serviceBoardsIdExcludedMembersExcludedMemberIdDelete($id, $excluded_member_id)
    {
        
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling serviceBoardsIdExcludedMembersExcludedMemberIdDelete');
        }
        // verify the required parameter 'excluded_member_id' is set
        if ($excluded_member_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $excluded_member_id when calling serviceBoardsIdExcludedMembersExcludedMemberIdDelete');
        }

        // parse inputs
        $resourcePath = "/service/boards/{id}/excludedMembers/{excludedMemberId}";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "DELETE";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array());
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());

        
        
        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }// path params
        if ($excluded_member_id !== null) {
            $resourcePath = str_replace(
                "{" . "excludedMemberId" . "}",
                $this->apiClient->getSerializer()->toPathValue($excluded_member_id),
                $resourcePath
            );
        }
        
        

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } else if (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        $headerParams['Authorization'] = 'Basic '.base64_encode($this->apiClient->getConfig()->getUsername().":".$this->apiClient->getConfig()->getPassword());
        
        
        // make the API Call
        try
        {
            list($response, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, $method,
                $queryParams, $httpBody,
                $headerParams
            );
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 401:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Library\Models\Error', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }

            throw $e;
        }
        
    }
    
}