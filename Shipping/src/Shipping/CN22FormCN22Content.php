<?php
/**
 * CN22FormCN22Content
 *
 * PHP version 5
 *
 * @category Class
 * @package  UPS\Shipping
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Ship
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * 
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.45
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace UPS\Shipping\Shipping;

use \ArrayAccess;
use \UPS\Shipping\ObjectSerializer;

/**
 * CN22FormCN22Content Class Doc Comment
 *
 * @category Class
 * @description Container for CN22 content.  Required if the CN22 form container is present.  Note: The maximum number of goods printed on the CN22 form when a combined MI package and CN22 form label is requested is 30.
 * @package  UPS\Shipping
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CN22FormCN22Content implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CN22Form_CN22Content';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'cn22_content_quantity' => 'string',
        'cn22_content_description' => 'string',
        'cn22_content_weight' => '\UPS\Shipping\Shipping\CN22ContentCN22ContentWeight',
        'cn22_content_total_value' => 'string',
        'cn22_content_currency_code' => 'string',
        'cn22_content_country_of_origin' => 'string',
        'cn22_content_tariff_number' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'cn22_content_quantity' => null,
        'cn22_content_description' => null,
        'cn22_content_weight' => null,
        'cn22_content_total_value' => null,
        'cn22_content_currency_code' => null,
        'cn22_content_country_of_origin' => null,
        'cn22_content_tariff_number' => null
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
        'cn22_content_quantity' => 'CN22ContentQuantity',
        'cn22_content_description' => 'CN22ContentDescription',
        'cn22_content_weight' => 'CN22ContentWeight',
        'cn22_content_total_value' => 'CN22ContentTotalValue',
        'cn22_content_currency_code' => 'CN22ContentCurrencyCode',
        'cn22_content_country_of_origin' => 'CN22ContentCountryOfOrigin',
        'cn22_content_tariff_number' => 'CN22ContentTariffNumber'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cn22_content_quantity' => 'setCn22ContentQuantity',
        'cn22_content_description' => 'setCn22ContentDescription',
        'cn22_content_weight' => 'setCn22ContentWeight',
        'cn22_content_total_value' => 'setCn22ContentTotalValue',
        'cn22_content_currency_code' => 'setCn22ContentCurrencyCode',
        'cn22_content_country_of_origin' => 'setCn22ContentCountryOfOrigin',
        'cn22_content_tariff_number' => 'setCn22ContentTariffNumber'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cn22_content_quantity' => 'getCn22ContentQuantity',
        'cn22_content_description' => 'getCn22ContentDescription',
        'cn22_content_weight' => 'getCn22ContentWeight',
        'cn22_content_total_value' => 'getCn22ContentTotalValue',
        'cn22_content_currency_code' => 'getCn22ContentCurrencyCode',
        'cn22_content_country_of_origin' => 'getCn22ContentCountryOfOrigin',
        'cn22_content_tariff_number' => 'getCn22ContentTariffNumber'
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
        $this->container['cn22_content_quantity'] = isset($data['cn22_content_quantity']) ? $data['cn22_content_quantity'] : null;
        $this->container['cn22_content_description'] = isset($data['cn22_content_description']) ? $data['cn22_content_description'] : null;
        $this->container['cn22_content_weight'] = isset($data['cn22_content_weight']) ? $data['cn22_content_weight'] : null;
        $this->container['cn22_content_total_value'] = isset($data['cn22_content_total_value']) ? $data['cn22_content_total_value'] : null;
        $this->container['cn22_content_currency_code'] = isset($data['cn22_content_currency_code']) ? $data['cn22_content_currency_code'] : null;
        $this->container['cn22_content_country_of_origin'] = isset($data['cn22_content_country_of_origin']) ? $data['cn22_content_country_of_origin'] : null;
        $this->container['cn22_content_tariff_number'] = isset($data['cn22_content_tariff_number']) ? $data['cn22_content_tariff_number'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['cn22_content_quantity'] === null) {
            $invalidProperties[] = "'cn22_content_quantity' can't be null";
        }
        if ($this->container['cn22_content_description'] === null) {
            $invalidProperties[] = "'cn22_content_description' can't be null";
        }
        if ($this->container['cn22_content_weight'] === null) {
            $invalidProperties[] = "'cn22_content_weight' can't be null";
        }
        if ($this->container['cn22_content_total_value'] === null) {
            $invalidProperties[] = "'cn22_content_total_value' can't be null";
        }
        if ($this->container['cn22_content_currency_code'] === null) {
            $invalidProperties[] = "'cn22_content_currency_code' can't be null";
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
     * Gets cn22_content_quantity
     *
     * @return string
     */
    public function getCn22ContentQuantity()
    {
        return $this->container['cn22_content_quantity'];
    }

    /**
     * Sets cn22_content_quantity
     *
     * @param string $cn22_content_quantity Total number of items associated with this content.  Required if the CN22 form container is present.
     *
     * @return $this
     */
    public function setCn22ContentQuantity($cn22_content_quantity)
    {
        $this->container['cn22_content_quantity'] = $cn22_content_quantity;

        return $this;
    }

    /**
     * Gets cn22_content_description
     *
     * @return string
     */
    public function getCn22ContentDescription()
    {
        return $this->container['cn22_content_description'];
    }

    /**
     * Sets cn22_content_description
     *
     * @param string $cn22_content_description Detailed description of the content.  If the combined MI package and CN22 label is requested, only the first 30 characters will appear on the combined label.  Required if the CN22 form container is present.
     *
     * @return $this
     */
    public function setCn22ContentDescription($cn22_content_description)
    {
        $this->container['cn22_content_description'] = $cn22_content_description;

        return $this;
    }

    /**
     * Gets cn22_content_weight
     *
     * @return \UPS\Shipping\Shipping\CN22ContentCN22ContentWeight
     */
    public function getCn22ContentWeight()
    {
        return $this->container['cn22_content_weight'];
    }

    /**
     * Sets cn22_content_weight
     *
     * @param \UPS\Shipping\Shipping\CN22ContentCN22ContentWeight $cn22_content_weight cn22_content_weight
     *
     * @return $this
     */
    public function setCn22ContentWeight($cn22_content_weight)
    {
        $this->container['cn22_content_weight'] = $cn22_content_weight;

        return $this;
    }

    /**
     * Gets cn22_content_total_value
     *
     * @return string
     */
    public function getCn22ContentTotalValue()
    {
        return $this->container['cn22_content_total_value'];
    }

    /**
     * Sets cn22_content_total_value
     *
     * @param string $cn22_content_total_value Total value of the items associated with this content.  Required if the CN22 form container is present.
     *
     * @return $this
     */
    public function setCn22ContentTotalValue($cn22_content_total_value)
    {
        $this->container['cn22_content_total_value'] = $cn22_content_total_value;

        return $this;
    }

    /**
     * Gets cn22_content_currency_code
     *
     * @return string
     */
    public function getCn22ContentCurrencyCode()
    {
        return $this->container['cn22_content_currency_code'];
    }

    /**
     * Sets cn22_content_currency_code
     *
     * @param string $cn22_content_currency_code Currently only USD is supported.  Required if the CN22 form container is present.
     *
     * @return $this
     */
    public function setCn22ContentCurrencyCode($cn22_content_currency_code)
    {
        $this->container['cn22_content_currency_code'] = $cn22_content_currency_code;

        return $this;
    }

    /**
     * Gets cn22_content_country_of_origin
     *
     * @return string
     */
    public function getCn22ContentCountryOfOrigin()
    {
        return $this->container['cn22_content_country_of_origin'];
    }

    /**
     * Sets cn22_content_country_of_origin
     *
     * @param string $cn22_content_country_of_origin Country or Territory of Origin from where the CN22 contents originated.
     *
     * @return $this
     */
    public function setCn22ContentCountryOfOrigin($cn22_content_country_of_origin)
    {
        $this->container['cn22_content_country_of_origin'] = $cn22_content_country_of_origin;

        return $this;
    }

    /**
     * Gets cn22_content_tariff_number
     *
     * @return string
     */
    public function getCn22ContentTariffNumber()
    {
        return $this->container['cn22_content_tariff_number'];
    }

    /**
     * Sets cn22_content_tariff_number
     *
     * @param string $cn22_content_tariff_number The tariff number associated with the CN22 contents.
     *
     * @return $this
     */
    public function setCn22ContentTariffNumber($cn22_content_tariff_number)
    {
        $this->container['cn22_content_tariff_number'] = $cn22_content_tariff_number;

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
