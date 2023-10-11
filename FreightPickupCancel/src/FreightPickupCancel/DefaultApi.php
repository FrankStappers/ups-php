<?php
/**
 * DefaultApi
 * PHP version 5
 *
 * @category Class
 * @package  UPS\FreightPickupCancel
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Freight Pickup
 *
 * API can be only used by users that plan to ship packages manifested, tendered, and delivered by TForce Freight
 *
 * OpenAPI spec version: 1.0.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.45
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace UPS\FreightPickupCancel\FreightPickupCancel;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use UPS\FreightPickupCancel\ApiException;
use UPS\FreightPickupCancel\Configuration;
use UPS\FreightPickupCancel\HeaderSelector;
use UPS\FreightPickupCancel\ObjectSerializer;

/**
 * DefaultApi Class Doc Comment
 *
 * @category Class
 * @package  UPS\FreightPickupCancel
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DefaultApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation freightCancelPickup_
     *
     * API can be only used by users that plan to ship packages manifested, tendered, and delivered by TForce Freight
     *
     * @param  string $trans_id An identifier unique to the request. Length 32 (required)
     * @param  string $transaction_src An identifier of the client/source application that is making the request.Length 512 (required)
     * @param  string $pickup_request_confirmation_number Confirmation number of the pickup ground freight shipment to cancel. Length 35 (required)
     * @param  string $version Version of the API e.g v1 (required)
     *
     * @throws \UPS\FreightPickupCancel\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \UPS\FreightPickupCancel\FreightPickupCancel\FREIGHTPICKUPResponseWrapper
     */
    public function freightCancelPickup_($trans_id, $transaction_src, $pickup_request_confirmation_number, $version)
    {
        list($response) = $this->freightCancelPickup_WithHttpInfo($trans_id, $transaction_src, $pickup_request_confirmation_number, $version);
        return $response;
    }

    /**
     * Operation freightCancelPickup_WithHttpInfo
     *
     * API can be only used by users that plan to ship packages manifested, tendered, and delivered by TForce Freight
     *
     * @param  string $trans_id An identifier unique to the request. Length 32 (required)
     * @param  string $transaction_src An identifier of the client/source application that is making the request.Length 512 (required)
     * @param  string $pickup_request_confirmation_number Confirmation number of the pickup ground freight shipment to cancel. Length 35 (required)
     * @param  string $version Version of the API e.g v1 (required)
     *
     * @throws \UPS\FreightPickupCancel\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \UPS\FreightPickupCancel\FreightPickupCancel\FREIGHTPICKUPResponseWrapper, HTTP status code, HTTP response headers (array of strings)
     */
    public function freightCancelPickup_WithHttpInfo($trans_id, $transaction_src, $pickup_request_confirmation_number, $version)
    {
        $returnType = '\UPS\FreightPickupCancel\FreightPickupCancel\FREIGHTPICKUPResponseWrapper';
        $request = $this->freightCancelPickup_Request($trans_id, $transaction_src, $pickup_request_confirmation_number, $version);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\UPS\FreightPickupCancel\FreightPickupCancel\FREIGHTPICKUPResponseWrapper',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation freightCancelPickup_Async
     *
     * API can be only used by users that plan to ship packages manifested, tendered, and delivered by TForce Freight
     *
     * @param  string $trans_id An identifier unique to the request. Length 32 (required)
     * @param  string $transaction_src An identifier of the client/source application that is making the request.Length 512 (required)
     * @param  string $pickup_request_confirmation_number Confirmation number of the pickup ground freight shipment to cancel. Length 35 (required)
     * @param  string $version Version of the API e.g v1 (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function freightCancelPickup_Async($trans_id, $transaction_src, $pickup_request_confirmation_number, $version)
    {
        return $this->freightCancelPickup_AsyncWithHttpInfo($trans_id, $transaction_src, $pickup_request_confirmation_number, $version)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation freightCancelPickup_AsyncWithHttpInfo
     *
     * API can be only used by users that plan to ship packages manifested, tendered, and delivered by TForce Freight
     *
     * @param  string $trans_id An identifier unique to the request. Length 32 (required)
     * @param  string $transaction_src An identifier of the client/source application that is making the request.Length 512 (required)
     * @param  string $pickup_request_confirmation_number Confirmation number of the pickup ground freight shipment to cancel. Length 35 (required)
     * @param  string $version Version of the API e.g v1 (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function freightCancelPickup_AsyncWithHttpInfo($trans_id, $transaction_src, $pickup_request_confirmation_number, $version)
    {
        $returnType = '\UPS\FreightPickupCancel\FreightPickupCancel\FREIGHTPICKUPResponseWrapper';
        $request = $this->freightCancelPickup_Request($trans_id, $transaction_src, $pickup_request_confirmation_number, $version);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'freightCancelPickup_'
     *
     * @param  string $trans_id An identifier unique to the request. Length 32 (required)
     * @param  string $transaction_src An identifier of the client/source application that is making the request.Length 512 (required)
     * @param  string $pickup_request_confirmation_number Confirmation number of the pickup ground freight shipment to cancel. Length 35 (required)
     * @param  string $version Version of the API e.g v1 (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function freightCancelPickup_Request($trans_id, $transaction_src, $pickup_request_confirmation_number, $version)
    {
        // verify the required parameter 'trans_id' is set
        if ($trans_id === null || (is_array($trans_id) && count($trans_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $trans_id when calling freightCancelPickup_'
            );
        }
        // verify the required parameter 'transaction_src' is set
        if ($transaction_src === null || (is_array($transaction_src) && count($transaction_src) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $transaction_src when calling freightCancelPickup_'
            );
        }
        // verify the required parameter 'pickup_request_confirmation_number' is set
        if ($pickup_request_confirmation_number === null || (is_array($pickup_request_confirmation_number) && count($pickup_request_confirmation_number) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $pickup_request_confirmation_number when calling freightCancelPickup_'
            );
        }
        // verify the required parameter 'version' is set
        if ($version === null || (is_array($version) && count($version) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $version when calling freightCancelPickup_'
            );
        }

        $resourcePath = '/freight/{version}/pickups';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // header params
        if ($trans_id !== null) {
            $headerParams['transId'] = ObjectSerializer::toHeaderValue($trans_id);
        }
        // header params
        if ($transaction_src !== null) {
            $headerParams['transactionSrc'] = ObjectSerializer::toHeaderValue($transaction_src);
        }
        // header params
        if ($pickup_request_confirmation_number !== null) {
            $headerParams['PickupRequestConfirmationNumber'] = ObjectSerializer::toHeaderValue($pickup_request_confirmation_number);
        }

        // path params
        if ($version !== null) {
            $resourcePath = str_replace(
                '{' . 'version' . '}',
                ObjectSerializer::toPathValue($version),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'DELETE',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
