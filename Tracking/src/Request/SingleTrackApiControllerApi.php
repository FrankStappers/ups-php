<?php
/**
 * SingleTrackApiControllerApi
 * PHP version 5
 *
 * @category Class
 * @package  UPS\Tracking
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * TrackService API
 *
 * This service is used to retrieve  package information
 *
 * OpenAPI spec version: 0.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.45
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace UPS\Tracking\Request;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use UPS\Tracking\ApiException;
use UPS\Tracking\Configuration;
use UPS\Tracking\HeaderSelector;
use UPS\Tracking\ObjectSerializer;

/**
 * SingleTrackApiControllerApi Class Doc Comment
 *
 * @category Class
 * @package  UPS\Tracking
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SingleTrackApiControllerApi
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
     * Operation getSingleTrackResponseUsingGET
     *
     * gets single track API details
     *
     * @param  string $inquiry_number Inquiry Number (required)
     * @param  string $trans_id transId (required)
     * @param  string $transaction_src transactionSrc (required)
     * @param  string $locale locale (optional, default to en_US)
     * @param  string $return_signature returnSignature (optional, default to false)
     *
     * @throws \UPS\Tracking\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \UPS\Tracking\Tracking\TrackApiResponse
     */
    public function getSingleTrackResponseUsingGET($inquiry_number, $trans_id, $transaction_src, $locale = 'en_US', $return_signature = 'false')
    {
        list($response) = $this->getSingleTrackResponseUsingGETWithHttpInfo($inquiry_number, $trans_id, $transaction_src, $locale, $return_signature);
        return $response;
    }

    /**
     * Operation getSingleTrackResponseUsingGETWithHttpInfo
     *
     * gets single track API details
     *
     * @param  string $inquiry_number Inquiry Number (required)
     * @param  string $trans_id transId (required)
     * @param  string $transaction_src transactionSrc (required)
     * @param  string $locale locale (optional, default to en_US)
     * @param  string $return_signature returnSignature (optional, default to false)
     *
     * @throws \UPS\Tracking\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \UPS\Tracking\Tracking\TrackApiResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getSingleTrackResponseUsingGETWithHttpInfo($inquiry_number, $trans_id, $transaction_src, $locale = 'en_US', $return_signature = 'false')
    {
        $returnType = '\UPS\Tracking\Tracking\TrackApiResponse';
        $request = $this->getSingleTrackResponseUsingGETRequest($inquiry_number, $trans_id, $transaction_src, $locale, $return_signature);

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
                        '\UPS\Tracking\Tracking\TrackApiResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 207:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\UPS\Tracking\Tracking\Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\UPS\Tracking\Tracking\Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\UPS\Tracking\Tracking\Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\UPS\Tracking\Tracking\Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\UPS\Tracking\Tracking\Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getSingleTrackResponseUsingGETAsync
     *
     * gets single track API details
     *
     * @param  string $inquiry_number Inquiry Number (required)
     * @param  string $trans_id transId (required)
     * @param  string $transaction_src transactionSrc (required)
     * @param  string $locale locale (optional, default to en_US)
     * @param  string $return_signature returnSignature (optional, default to false)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getSingleTrackResponseUsingGETAsync($inquiry_number, $trans_id, $transaction_src, $locale = 'en_US', $return_signature = 'false')
    {
        return $this->getSingleTrackResponseUsingGETAsyncWithHttpInfo($inquiry_number, $trans_id, $transaction_src, $locale, $return_signature)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getSingleTrackResponseUsingGETAsyncWithHttpInfo
     *
     * gets single track API details
     *
     * @param  string $inquiry_number Inquiry Number (required)
     * @param  string $trans_id transId (required)
     * @param  string $transaction_src transactionSrc (required)
     * @param  string $locale locale (optional, default to en_US)
     * @param  string $return_signature returnSignature (optional, default to false)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getSingleTrackResponseUsingGETAsyncWithHttpInfo($inquiry_number, $trans_id, $transaction_src, $locale = 'en_US', $return_signature = 'false')
    {
        $returnType = '\UPS\Tracking\Tracking\TrackApiResponse';
        $request = $this->getSingleTrackResponseUsingGETRequest($inquiry_number, $trans_id, $transaction_src, $locale, $return_signature);

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
     * Create request for operation 'getSingleTrackResponseUsingGET'
     *
     * @param  string $inquiry_number Inquiry Number (required)
     * @param  string $trans_id transId (required)
     * @param  string $transaction_src transactionSrc (required)
     * @param  string $locale locale (optional, default to en_US)
     * @param  string $return_signature returnSignature (optional, default to false)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getSingleTrackResponseUsingGETRequest($inquiry_number, $trans_id, $transaction_src, $locale = 'en_US', $return_signature = 'false')
    {
        // verify the required parameter 'inquiry_number' is set
        if ($inquiry_number === null || (is_array($inquiry_number) && count($inquiry_number) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $inquiry_number when calling getSingleTrackResponseUsingGET'
            );
        }
        // verify the required parameter 'trans_id' is set
        if ($trans_id === null || (is_array($trans_id) && count($trans_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $trans_id when calling getSingleTrackResponseUsingGET'
            );
        }
        // verify the required parameter 'transaction_src' is set
        if ($transaction_src === null || (is_array($transaction_src) && count($transaction_src) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $transaction_src when calling getSingleTrackResponseUsingGET'
            );
        }

        $resourcePath = '/track/v1/details/{inquiryNumber}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($locale !== null) {
            $queryParams['locale'] = ObjectSerializer::toQueryValue($locale, null);
        }
        // query params
        if ($return_signature !== null) {
            $queryParams['returnSignature'] = ObjectSerializer::toQueryValue($return_signature, null);
        }
        // header params
        if ($trans_id !== null) {
            $headerParams['transId'] = ObjectSerializer::toHeaderValue($trans_id);
        }
        // header params
        if ($transaction_src !== null) {
            $headerParams['transactionSrc'] = ObjectSerializer::toHeaderValue($transaction_src);
        }

        // path params
        if ($inquiry_number !== null) {
            $resourcePath = str_replace(
                '{' . 'inquiryNumber' . '}',
                ObjectSerializer::toPathValue($inquiry_number),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*'],
                ['application/json']
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
            'GET',
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
