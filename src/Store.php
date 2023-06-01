<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Testing\petstore;

class Store 
{

	// SDK private variables namespaced with _ to avoid conflicts with API models
	private \GuzzleHttp\ClientInterface $_defaultClient;
	private \GuzzleHttp\ClientInterface $_securityClient;
	private string $_serverUrl;
	private string $_language;
	private string $_sdkVersion;
	private string $_genVersion;	

	/**
	 * @param \GuzzleHttp\ClientInterface $defaultClient
	 * @param \GuzzleHttp\ClientInterface $securityClient
	 * @param string $serverUrl
	 * @param string $language
	 * @param string $sdkVersion
	 * @param string $genVersion
	 */
	public function __construct(\GuzzleHttp\ClientInterface $defaultClient, \GuzzleHttp\ClientInterface $securityClient, string $serverUrl, string $language, string $sdkVersion, string $genVersion)
	{
		$this->_defaultClient = $defaultClient;
		$this->_securityClient = $securityClient;
		$this->_serverUrl = $serverUrl;
		$this->_language = $language;
		$this->_sdkVersion = $sdkVersion;
		$this->_genVersion = $genVersion;
	}
	
    /**
     * Delete purchase order by ID
     * 
     * For valid response try integer IDs with value < 1000. Anything above 1000 or nonintegers will generate API errors
     * 
     * @param \Testing\petstore\Models\Operations\DeleteOrderRequest $request
     * @return \Testing\petstore\Models\Operations\DeleteOrderResponse
     */
	public function deleteOrder(
        \Testing\petstore\Models\Operations\DeleteOrderRequest $request,
    ): \Testing\petstore\Models\Operations\DeleteOrderResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/store/order/{orderId}', \Testing\petstore\Models\Operations\DeleteOrderRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = '*/*';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s', $this->_language, $this->_sdkVersion, $this->_genVersion);
        
        $httpResponse = $this->_defaultClient->request('DELETE', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Testing\petstore\Models\Operations\DeleteOrderResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 400 or $httpResponse->getStatusCode() === 404) {
        }

        return $response;
    }
	
    /**
     * Returns pet inventories by status
     * 
     * Returns a map of status codes to quantities
     * 
     * @param \Testing\petstore\Models\Operations\GetInventorySecurity $security
     * @return \Testing\petstore\Models\Operations\GetInventoryResponse
     */
	public function getInventory(
        \Testing\petstore\Models\Operations\GetInventorySecurity $security,
    ): \Testing\petstore\Models\Operations\GetInventoryResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/store/inventory');
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s', $this->_language, $this->_sdkVersion, $this->_genVersion);
        
        $client = Utils\Utils::configureSecurityClient($this->_defaultClient, $security);
        $httpResponse = $client->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Testing\petstore\Models\Operations\GetInventoryResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->getInventory200ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'array<string, int>', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Find purchase order by ID
     * 
     * For valid response try integer IDs with value <= 5 or > 10. Other values will generate exceptions.
     * 
     * @param \Testing\petstore\Models\Operations\GetOrderByIdRequest $request
     * @return \Testing\petstore\Models\Operations\GetOrderByIdResponse
     */
	public function getOrderById(
        \Testing\petstore\Models\Operations\GetOrderByIdRequest $request,
    ): \Testing\petstore\Models\Operations\GetOrderByIdResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/store/order/{orderId}', \Testing\petstore\Models\Operations\GetOrderByIdRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json;q=1, application/xml;q=0';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s', $this->_language, $this->_sdkVersion, $this->_genVersion);
        
        $httpResponse = $this->_defaultClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Testing\petstore\Models\Operations\GetOrderByIdResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->order = $serializer->deserialize((string)$httpResponse->getBody(), 'Testing\petstore\Models\Shared\Order', 'json');
            }
            if (Utils\Utils::matchContentType($contentType, 'application/xml')) {
                $response->body = $httpResponse->getBody()->getContents();
            }
        }
        else if ($httpResponse->getStatusCode() === 400 or $httpResponse->getStatusCode() === 404) {
        }

        return $response;
    }
	
    /**
     * Place an order for a pet
     * 
     * Place a new order in the store
     * 
     * @param \Testing\petstore\Models\Shared\Order $request
     * @return \Testing\petstore\Models\Operations\PlaceOrderFormResponse
     */
	public function placeOrderForm(
        \Testing\petstore\Models\Shared\Order $request,
    ): \Testing\petstore\Models\Operations\PlaceOrderFormResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/store/order');
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "request", "form");
        $options = array_merge_recursive($options, $body);
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s', $this->_language, $this->_sdkVersion, $this->_genVersion);
        
        $httpResponse = $this->_defaultClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Testing\petstore\Models\Operations\PlaceOrderFormResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->order = $serializer->deserialize((string)$httpResponse->getBody(), 'Testing\petstore\Models\Shared\Order', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 405) {
        }

        return $response;
    }
	
    /**
     * Place an order for a pet
     * 
     * Place a new order in the store
     * 
     * @param \Testing\petstore\Models\Shared\Order $request
     * @return \Testing\petstore\Models\Operations\PlaceOrderJsonResponse
     */
	public function placeOrderJson(
        \Testing\petstore\Models\Shared\Order $request,
    ): \Testing\petstore\Models\Operations\PlaceOrderJsonResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/store/order');
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "request", "json");
        $options = array_merge_recursive($options, $body);
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s', $this->_language, $this->_sdkVersion, $this->_genVersion);
        
        $httpResponse = $this->_defaultClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Testing\petstore\Models\Operations\PlaceOrderJsonResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->order = $serializer->deserialize((string)$httpResponse->getBody(), 'Testing\petstore\Models\Shared\Order', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 405) {
        }

        return $response;
    }
	
    /**
     * Place an order for a pet
     * 
     * Place a new order in the store
     * 
     * @param string $request
     * @return \Testing\petstore\Models\Operations\PlaceOrderRawResponse
     */
	public function placeOrderRaw(
        string $request,
    ): \Testing\petstore\Models\Operations\PlaceOrderRawResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/store/order');
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "request", "raw");
        $options = array_merge_recursive($options, $body);
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s', $this->_language, $this->_sdkVersion, $this->_genVersion);
        
        $httpResponse = $this->_defaultClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Testing\petstore\Models\Operations\PlaceOrderRawResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->order = $serializer->deserialize((string)$httpResponse->getBody(), 'Testing\petstore\Models\Shared\Order', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 405) {
        }

        return $response;
    }
}