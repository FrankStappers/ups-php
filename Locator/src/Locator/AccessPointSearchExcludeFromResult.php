<?php
/**
 * AccessPointSearchExcludeFromResult
 *
 * PHP version 5
 *
 * @category Class
 * @package  UPS\Locator
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Locator
 *
 * The Locator API provides UPS full-service and self-service locations, hours of operation and pickup times.
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

namespace UPS\Locator\Locator;

use \ArrayAccess;
use \UPS\Locator\ObjectSerializer;

/**
 * AccessPointSearchExcludeFromResult Class Doc Comment
 *
 * @category Class
 * @description This contains elements to exclude from UPS Access Point address or geocode search.
 * @package  UPS\Locator
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AccessPointSearchExcludeFromResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AccessPointSearch_ExcludeFromResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'business_classification_code' => 'string[]',
        'business_name' => 'string',
        'radius' => 'string',
        'postal_code_list' => '\UPS\Locator\Locator\ExcludeFromResultPostalCodeList'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'business_classification_code' => null,
        'business_name' => null,
        'radius' => null,
        'postal_code_list' => null
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
        'business_classification_code' => 'BusinessClassificationCode',
        'business_name' => 'BusinessName',
        'radius' => 'Radius',
        'postal_code_list' => 'PostalCodeList'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'business_classification_code' => 'setBusinessClassificationCode',
        'business_name' => 'setBusinessName',
        'radius' => 'setRadius',
        'postal_code_list' => 'setPostalCodeList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'business_classification_code' => 'getBusinessClassificationCode',
        'business_name' => 'getBusinessName',
        'radius' => 'getRadius',
        'postal_code_list' => 'getPostalCodeList'
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
        $this->container['business_classification_code'] = isset($data['business_classification_code']) ? $data['business_classification_code'] : null;
        $this->container['business_name'] = isset($data['business_name']) ? $data['business_name'] : null;
        $this->container['radius'] = isset($data['radius']) ? $data['radius'] : null;
        $this->container['postal_code_list'] = isset($data['postal_code_list']) ? $data['postal_code_list'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets business_classification_code
     *
     * @return string[]
     */
    public function getBusinessClassificationCode()
    {
        return $this->container['business_classification_code'];
    }

    /**
     * Sets business_classification_code
     *
     * @param string[] $business_classification_code This contains the business classification code to exclude from UPS Access Point Search by address or geocode. Multiple codes can are possible in separate elements. Please refer to Appendix D for detailed business codes.
     *
     * @return $this
     */
    public function setBusinessClassificationCode($business_classification_code)
    {
        $this->container['business_classification_code'] = $business_classification_code;

        return $this;
    }

    /**
     * Gets business_name
     *
     * @return string
     */
    public function getBusinessName()
    {
        return $this->container['business_name'];
    }

    /**
     * Sets business_name
     *
     * @param string $business_name This contains the business name to exclude from UPS Access Point Search by address or geocode. Partial names are accepted.
     *
     * @return $this
     */
    public function setBusinessName($business_name)
    {
        $this->container['business_name'] = $business_name;

        return $this;
    }

    /**
     * Gets radius
     *
     * @return string
     */
    public function getRadius()
    {
        return $this->container['radius'];
    }

    /**
     * Sets radius
     *
     * @param string $radius Public Access points within Radius (in specified Unit of Measure) of any included private access points will be excluded from the results. Valid only if at least one IncludeCriteria/MerchantAccountNumber is provided.
     *
     * @return $this
     */
    public function setRadius($radius)
    {
        $this->container['radius'] = $radius;

        return $this;
    }

    /**
     * Gets postal_code_list
     *
     * @return \UPS\Locator\Locator\ExcludeFromResultPostalCodeList
     */
    public function getPostalCodeList()
    {
        return $this->container['postal_code_list'];
    }

    /**
     * Sets postal_code_list
     *
     * @param \UPS\Locator\Locator\ExcludeFromResultPostalCodeList $postal_code_list postal_code_list
     *
     * @return $this
     */
    public function setPostalCodeList($postal_code_list)
    {
        $this->container['postal_code_list'] = $postal_code_list;

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
