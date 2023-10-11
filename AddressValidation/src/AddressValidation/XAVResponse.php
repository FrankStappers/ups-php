<?php
/**
 * XAVResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  UPS\AddressValidation
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Address Validation - Street Level
 *
 * The Address Validation Street Level API can be used to check addresses against the United States Postal Service database of valid addresses in the U.S. and Puerto Rico.
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

namespace UPS\AddressValidation\AddressValidation;

use \ArrayAccess;
use \UPS\AddressValidation\ObjectSerializer;

/**
 * XAVResponse Class Doc Comment
 *
 * @category Class
 * @description XAV Response Container.
 * @package  UPS\AddressValidation
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class XAVResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'XAVResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'response' => '\UPS\AddressValidation\AddressValidation\XAVResponseResponse',
        'valid_address_indicator' => 'string',
        'ambiguous_address_indicator' => 'string',
        'no_candidates_indicator' => 'string',
        'address_classification' => '\UPS\AddressValidation\AddressValidation\XAVResponseAddressClassification',
        'candidate' => '\UPS\AddressValidation\AddressValidation\XAVResponseCandidate'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'response' => null,
        'valid_address_indicator' => null,
        'ambiguous_address_indicator' => null,
        'no_candidates_indicator' => null,
        'address_classification' => null,
        'candidate' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'response' => 'Response',
        'valid_address_indicator' => 'ValidAddressIndicator',
        'ambiguous_address_indicator' => 'AmbiguousAddressIndicator',
        'no_candidates_indicator' => 'NoCandidatesIndicator',
        'address_classification' => 'AddressClassification',
        'candidate' => 'Candidate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'response' => 'setResponse',
        'valid_address_indicator' => 'setValidAddressIndicator',
        'ambiguous_address_indicator' => 'setAmbiguousAddressIndicator',
        'no_candidates_indicator' => 'setNoCandidatesIndicator',
        'address_classification' => 'setAddressClassification',
        'candidate' => 'setCandidate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'response' => 'getResponse',
        'valid_address_indicator' => 'getValidAddressIndicator',
        'ambiguous_address_indicator' => 'getAmbiguousAddressIndicator',
        'no_candidates_indicator' => 'getNoCandidatesIndicator',
        'address_classification' => 'getAddressClassification',
        'candidate' => 'getCandidate'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }



    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['response'] = isset($data['response']) ? $data['response'] : null;
        $this->container['valid_address_indicator'] = isset($data['valid_address_indicator']) ? $data['valid_address_indicator'] : null;
        $this->container['ambiguous_address_indicator'] = isset($data['ambiguous_address_indicator']) ? $data['ambiguous_address_indicator'] : null;
        $this->container['no_candidates_indicator'] = isset($data['no_candidates_indicator']) ? $data['no_candidates_indicator'] : null;
        $this->container['address_classification'] = isset($data['address_classification']) ? $data['address_classification'] : null;
        $this->container['candidate'] = isset($data['candidate']) ? $data['candidate'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['response'] === null) {
            $invalidProperties[] = "'response' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets response
     *
     * @return \UPS\AddressValidation\AddressValidation\XAVResponseResponse
     */
    public function getResponse()
    {
        return $this->container['response'];
    }

    /**
     * Sets response
     *
     * @param \UPS\AddressValidation\AddressValidation\XAVResponseResponse $response response
     *
     * @return $this
     */
    public function setResponse($response)
    {
        $this->container['response'] = $response;

        return $this;
    }

    /**
     * Gets valid_address_indicator
     *
     * @return string
     */
    public function getValidAddressIndicator()
    {
        return $this->container['valid_address_indicator'];
    }

    /**
     * Sets valid_address_indicator
     *
     * @param string $valid_address_indicator Indicates query found a valid match.
     *
     * @return $this
     */
    public function setValidAddressIndicator($valid_address_indicator)
    {
        $this->container['valid_address_indicator'] = $valid_address_indicator;

        return $this;
    }

    /**
     * Gets ambiguous_address_indicator
     *
     * @return string
     */
    public function getAmbiguousAddressIndicator()
    {
        return $this->container['ambiguous_address_indicator'];
    }

    /**
     * Sets ambiguous_address_indicator
     *
     * @param string $ambiguous_address_indicator Indicates query could not find exact match. Candidate list follows.
     *
     * @return $this
     */
    public function setAmbiguousAddressIndicator($ambiguous_address_indicator)
    {
        $this->container['ambiguous_address_indicator'] = $ambiguous_address_indicator;

        return $this;
    }

    /**
     * Gets no_candidates_indicator
     *
     * @return string
     */
    public function getNoCandidatesIndicator()
    {
        return $this->container['no_candidates_indicator'];
    }

    /**
     * Sets no_candidates_indicator
     *
     * @param string $no_candidates_indicator No Candidate found.
     *
     * @return $this
     */
    public function setNoCandidatesIndicator($no_candidates_indicator)
    {
        $this->container['no_candidates_indicator'] = $no_candidates_indicator;

        return $this;
    }

    /**
     * Gets address_classification
     *
     * @return \UPS\AddressValidation\AddressValidation\XAVResponseAddressClassification
     */
    public function getAddressClassification()
    {
        return $this->container['address_classification'];
    }

    /**
     * Sets address_classification
     *
     * @param \UPS\AddressValidation\AddressValidation\XAVResponseAddressClassification $address_classification address_classification
     *
     * @return $this
     */
    public function setAddressClassification($address_classification)
    {
        $this->container['address_classification'] = $address_classification;

        return $this;
    }

    /**
     * Gets candidate
     *
     * @return \UPS\AddressValidation\AddressValidation\XAVResponseCandidate
     */
    public function getCandidate()
    {
        return $this->container['candidate'];
    }

    /**
     * Sets candidate
     *
     * @param \UPS\AddressValidation\AddressValidation\XAVResponseCandidate $candidate candidate
     *
     * @return $this
     */
    public function setCandidate($candidate)
    {
        $this->container['candidate'] = $candidate;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
