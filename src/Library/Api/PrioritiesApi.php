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
 * PrioritiesApi Class Doc Comment
 *
 * @category Class
 * @package  Spinen\ConnectWise\Library
 */
class PrioritiesApi
{
    /**
     * API Client
     *
     * @var \Spinen\ConnectWise\Library\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * New instance of PrioritiesApi.
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
     * @return PrioritiesApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    
    /**
     * servicePrioritiesGet
     *
     * 
     *
     * @param string $conditions  (optional)
     * @param string $order_by  (optional)
     * @param int $page  (optional)
     * @param int $page_size  (optional)
     *
     * @return \Spinen\ConnectWise\Library\Models\Priority[]
     * @throws \Spinen\ConnectWise\Library\ApiException on non-2xx response
     */
    public function servicePrioritiesGet($conditions=null, $order_by=null, $page=null, $page_size=null)
    {
        

        // parse inputs
        $resourcePath = "/service/priorities";
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
                $headerParams, '\Spinen\ConnectWise\Library\Models\Priority[]'
            );
            
            if (!$response) {
                return null;
            }

            return $this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Library\Models\Priority[]', $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Library\Models\Priority[]', $e->getResponseHeaders());
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
     * servicePrioritiesPost
     *
     * 
     *
     * @param \Spinen\ConnectWise\Library\Models\Priority $priority  (required)
     *
     * @return \Spinen\ConnectWise\Library\Models\Priority
     * @throws \Spinen\ConnectWise\Library\ApiException on non-2xx response
     */
    public function servicePrioritiesPost($priority)
    {
        
        // verify the required parameter 'priority' is set
        if ($priority === null) {
            throw new \InvalidArgumentException('Missing the required parameter $priority when calling servicePrioritiesPost');
        }

        // parse inputs
        $resourcePath = "/service/priorities";
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

        
        
        
        
        // body params
        $_tempBody = null;
        if (isset($priority)) {
            $_tempBody = $priority;
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
                $headerParams, '\Spinen\ConnectWise\Library\Models\Priority'
            );
            
            if (!$response) {
                return null;
            }

            return $this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Library\Models\Priority', $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 201:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Library\Models\Priority', $e->getResponseHeaders());
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
     * servicePrioritiesCountGet
     *
     * 
     *
     * @param string $conditions  (optional)
     *
     * @return \Spinen\ConnectWise\Library\Models\Count
     * @throws \Spinen\ConnectWise\Library\ApiException on non-2xx response
     */
    public function servicePrioritiesCountGet($conditions=null)
    {
        

        // parse inputs
        $resourcePath = "/service/priorities/count";
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
     * servicePrioritiesIdGet
     *
     * 
     *
     * @param int $id  (required)
     *
     * @return \Spinen\ConnectWise\Library\Models\Priority
     * @throws \Spinen\ConnectWise\Library\ApiException on non-2xx response
     */
    public function servicePrioritiesIdGet($id)
    {
        
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling servicePrioritiesIdGet');
        }

        // parse inputs
        $resourcePath = "/service/priorities/{id}";
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
                $headerParams, '\Spinen\ConnectWise\Library\Models\Priority'
            );
            
            if (!$response) {
                return null;
            }

            return $this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Library\Models\Priority', $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Library\Models\Priority', $e->getResponseHeaders());
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
     * servicePrioritiesIdPut
     *
     * 
     *
     * @param int $id  (required)
     * @param \Spinen\ConnectWise\Library\Models\Priority $priority  (required)
     *
     * @return \Spinen\ConnectWise\Library\Models\Priority
     * @throws \Spinen\ConnectWise\Library\ApiException on non-2xx response
     */
    public function servicePrioritiesIdPut($id, $priority)
    {
        
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling servicePrioritiesIdPut');
        }
        // verify the required parameter 'priority' is set
        if ($priority === null) {
            throw new \InvalidArgumentException('Missing the required parameter $priority when calling servicePrioritiesIdPut');
        }

        // parse inputs
        $resourcePath = "/service/priorities/{id}";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "PUT";
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
        if (isset($priority)) {
            $_tempBody = $priority;
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
                $headerParams, '\Spinen\ConnectWise\Library\Models\Priority'
            );
            
            if (!$response) {
                return null;
            }

            return $this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Library\Models\Priority', $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Library\Models\Priority', $e->getResponseHeaders());
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
     * servicePrioritiesIdDelete
     *
     * 
     *
     * @param int $id  (required)
     *
     * @return void
     * @throws \Spinen\ConnectWise\Library\ApiException on non-2xx response
     */
    public function servicePrioritiesIdDelete($id)
    {
        
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling servicePrioritiesIdDelete');
        }

        // parse inputs
        $resourcePath = "/service/priorities/{id}";
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
    
    /**
     * servicePrioritiesIdPatch
     *
     * 
     *
     * @param int $id  (required)
     * @param \Spinen\ConnectWise\Library\Models\PatchOperation $operations  (required)
     *
     * @return \Spinen\ConnectWise\Library\Models\Priority
     * @throws \Spinen\ConnectWise\Library\ApiException on non-2xx response
     */
    public function servicePrioritiesIdPatch($id, $operations)
    {
        
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling servicePrioritiesIdPatch');
        }
        // verify the required parameter 'operations' is set
        if ($operations === null) {
            throw new \InvalidArgumentException('Missing the required parameter $operations when calling servicePrioritiesIdPatch');
        }

        // parse inputs
        $resourcePath = "/service/priorities/{id}";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "PATCH";
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
        if (isset($operations)) {
            $_tempBody = $operations;
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
                $headerParams, '\Spinen\ConnectWise\Library\Models\Priority'
            );
            
            if (!$response) {
                return null;
            }

            return $this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Library\Models\Priority', $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Library\Models\Priority', $e->getResponseHeaders());
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
     * servicePrioritiesIdImageGet
     *
     * 
     *
     * @param int $id  (required)
     * @param bool $use_default_flag  (optional)
     * @param string $lm  (optional)
     *
     * @return void
     * @throws \Spinen\ConnectWise\Library\ApiException on non-2xx response
     */
    public function servicePrioritiesIdImageGet($id, $use_default_flag=null, $lm=null)
    {
        
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling servicePrioritiesIdImageGet');
        }

        // parse inputs
        $resourcePath = "/service/priorities/{id}/image";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "GET";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/octet-stream'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());

        // query params
        if ($use_default_flag !== null) {
            $queryParams['useDefaultFlag'] = $this->apiClient->getSerializer()->toQueryValue($use_default_flag);
        }// query params
        if ($lm !== null) {
            $queryParams['lm'] = $this->apiClient->getSerializer()->toQueryValue($lm);
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