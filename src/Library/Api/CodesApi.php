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
 * CodesApi Class Doc Comment
 *
 * @category Class
 * @package  Spinen\ConnectWise\Library
 */
class CodesApi
{
    /**
     * API Client
     *
     * @var \Spinen\ConnectWise\Library\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * New instance of CodesApi.
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
     * @return CodesApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    
    /**
     * serviceCodesGet
     *
     * 
     *
     * @param string $conditions  (optional)
     * @param string $order_by  (optional)
     * @param int $page  (optional)
     * @param int $page_size  (optional)
     *
     * @return \Spinen\ConnectWise\Library\Models\Code[]
     * @throws \Spinen\ConnectWise\Library\ApiException on non-2xx response
     */
    public function serviceCodesGet($conditions=null, $order_by=null, $page=null, $page_size=null)
    {
        

        // parse inputs
        $resourcePath = "/service/codes";
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
                $headerParams, '\Spinen\ConnectWise\Library\Models\Code[]'
            );
            
            if (!$response) {
                return null;
            }

            return $this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Library\Models\Code[]', $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Library\Models\Code[]', $e->getResponseHeaders());
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
     * serviceCodesPost
     *
     * 
     *
     * @param \Spinen\ConnectWise\Library\Models\Code $code  (required)
     *
     * @return \Spinen\ConnectWise\Library\Models\Code
     * @throws \Spinen\ConnectWise\Library\ApiException on non-2xx response
     */
    public function serviceCodesPost($code)
    {
        
        // verify the required parameter 'code' is set
        if ($code === null) {
            throw new \InvalidArgumentException('Missing the required parameter $code when calling serviceCodesPost');
        }

        // parse inputs
        $resourcePath = "/service/codes";
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
        if (isset($code)) {
            $_tempBody = $code;
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
                $headerParams, '\Spinen\ConnectWise\Library\Models\Code'
            );
            
            if (!$response) {
                return null;
            }

            return $this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Library\Models\Code', $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 201:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Library\Models\Code', $e->getResponseHeaders());
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
     * serviceCodesCountGet
     *
     * 
     *
     * @param string $conditions  (optional)
     *
     * @return \Spinen\ConnectWise\Library\Models\Count
     * @throws \Spinen\ConnectWise\Library\ApiException on non-2xx response
     */
    public function serviceCodesCountGet($conditions=null)
    {
        

        // parse inputs
        $resourcePath = "/service/codes/count";
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
     * serviceCodesIdGet
     *
     * 
     *
     * @param int $id  (required)
     *
     * @return \Spinen\ConnectWise\Library\Models\Code
     * @throws \Spinen\ConnectWise\Library\ApiException on non-2xx response
     */
    public function serviceCodesIdGet($id)
    {
        
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling serviceCodesIdGet');
        }

        // parse inputs
        $resourcePath = "/service/codes/{id}";
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
                $headerParams, '\Spinen\ConnectWise\Library\Models\Code'
            );
            
            if (!$response) {
                return null;
            }

            return $this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Library\Models\Code', $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Library\Models\Code', $e->getResponseHeaders());
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
     * serviceCodesIdPut
     *
     * 
     *
     * @param int $id  (required)
     * @param \Spinen\ConnectWise\Library\Models\Code $code  (required)
     *
     * @return \Spinen\ConnectWise\Library\Models\Code
     * @throws \Spinen\ConnectWise\Library\ApiException on non-2xx response
     */
    public function serviceCodesIdPut($id, $code)
    {
        
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling serviceCodesIdPut');
        }
        // verify the required parameter 'code' is set
        if ($code === null) {
            throw new \InvalidArgumentException('Missing the required parameter $code when calling serviceCodesIdPut');
        }

        // parse inputs
        $resourcePath = "/service/codes/{id}";
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
        if (isset($code)) {
            $_tempBody = $code;
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
                $headerParams, '\Spinen\ConnectWise\Library\Models\Code'
            );
            
            if (!$response) {
                return null;
            }

            return $this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Library\Models\Code', $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Library\Models\Code', $e->getResponseHeaders());
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
     * serviceCodesIdDelete
     *
     * 
     *
     * @param int $id  (required)
     *
     * @return void
     * @throws \Spinen\ConnectWise\Library\ApiException on non-2xx response
     */
    public function serviceCodesIdDelete($id)
    {
        
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling serviceCodesIdDelete');
        }

        // parse inputs
        $resourcePath = "/service/codes/{id}";
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
     * serviceCodesIdPatch
     *
     * 
     *
     * @param int $id  (required)
     * @param \Spinen\ConnectWise\Library\Models\PatchOperation $operations  (required)
     *
     * @return \Spinen\ConnectWise\Library\Models\Code
     * @throws \Spinen\ConnectWise\Library\ApiException on non-2xx response
     */
    public function serviceCodesIdPatch($id, $operations)
    {
        
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling serviceCodesIdPatch');
        }
        // verify the required parameter 'operations' is set
        if ($operations === null) {
            throw new \InvalidArgumentException('Missing the required parameter $operations when calling serviceCodesIdPatch');
        }

        // parse inputs
        $resourcePath = "/service/codes/{id}";
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
                $headerParams, '\Spinen\ConnectWise\Library\Models\Code'
            );
            
            if (!$response) {
                return null;
            }

            return $this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Library\Models\Code', $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Library\Models\Code', $e->getResponseHeaders());
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
    
}
