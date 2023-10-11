<?php
/**
 * FreightRateResponseCommodity
 *
 * PHP version 5
 *
 * @category Class
 * @package  UPS\FreightRating
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Freight Rate
 *
 * The Rating Ground Freight API may only be used by brokers or resellers of transportation services with a current and active UPGF Master Transportation Agreement.
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

namespace UPS\FreightRating\FreightRating;

use \ArrayAccess;
use \UPS\FreightRating\ObjectSerializer;

/**
 * FreightRateResponseCommodity Class Doc Comment
 *
 * @category Class
 * @description Commodity Container.
 * @package  UPS\FreightRating
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FreightRateResponseCommodity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FreightRateResponse_Commodity';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'commodity_id' => 'string',
        'description' => 'string',
        'weight' => '\UPS\FreightRating\FreightRating\CommodityWeight',
        'adjusted_weight' => '\UPS\FreightRating\FreightRating\CommodityAdjustedWeight'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'commodity_id' => null,
        'description' => null,
        'weight' => null,
        'adjusted_weight' => null
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
        'commodity_id' => 'CommodityID',
        'description' => 'Description',
        'weight' => 'Weight',
        'adjusted_weight' => 'AdjustedWeight'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'commodity_id' => 'setCommodityId',
        'description' => 'setDescription',
        'weight' => 'setWeight',
        'adjusted_weight' => 'setAdjustedWeight'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'commodity_id' => 'getCommodityId',
        'description' => 'getDescription',
        'weight' => 'getWeight',
        'adjusted_weight' => 'getAdjustedWeight'
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
        $this->container['commodity_id'] = isset($data['commodity_id']) ? $data['commodity_id'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['weight'] = isset($data['weight']) ? $data['weight'] : null;
        $this->container['adjusted_weight'] = isset($data['adjusted_weight']) ? $data['adjusted_weight'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['weight'] === null) {
            $invalidProperties[] = "'weight' can't be null";
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
     * Gets commodity_id
     *
     * @return string
     */
    public function getCommodityId()
    {
        return $this->container['commodity_id'];
    }

    /**
     * Sets commodity_id
     *
     * @param string $commodity_id Unique identifier for the commodity.
     *
     * @return $this
     */
    public function setCommodityId($commodity_id)
    {
        $this->container['commodity_id'] = $commodity_id;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description Description of the line item.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets weight
     *
     * @return \UPS\FreightRating\FreightRating\CommodityWeight
     */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight
     *
     * @param \UPS\FreightRating\FreightRating\CommodityWeight $weight weight
     *
     * @return $this
     */
    public function setWeight($weight)
    {
        $this->container['weight'] = $weight;

        return $this;
    }

    /**
     * Gets adjusted_weight
     *
     * @return \UPS\FreightRating\FreightRating\CommodityAdjustedWeight
     */
    public function getAdjustedWeight()
    {
        return $this->container['adjusted_weight'];
    }

    /**
     * Sets adjusted_weight
     *
     * @param \UPS\FreightRating\FreightRating\CommodityAdjustedWeight $adjusted_weight adjusted_weight
     *
     * @return $this
     */
    public function setAdjustedWeight($adjusted_weight)
    {
        $this->container['adjusted_weight'] = $adjusted_weight;

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
