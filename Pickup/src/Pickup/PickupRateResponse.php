<?php
/**
 * PickupRateResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  UPS\Pickup
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Pickup
 *
 * Using the Pickup API, applications can schedule pickups, manage previously scheduled pickups, or cancel previously scheduled pickups.
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

namespace UPS\Pickup\Pickup;

use \ArrayAccess;
use \UPS\Pickup\ObjectSerializer;

/**
 * PickupRateResponse Class Doc Comment
 *
 * @category Class
 * @description The response of rating on-callpickup.
 * @package  UPS\Pickup
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PickupRateResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PickupRateResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'response' => '\UPS\Pickup\Pickup\PickupRateResponseResponse',
        'rate_result' => '\UPS\Pickup\Pickup\PickupRateResponseRateResult',
        'weekend_service_territory_indicator' => 'string',
        'weekend_service_territory' => '\UPS\Pickup\Pickup\PickupRateResponseWeekendServiceTerritory'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'response' => null,
        'rate_result' => null,
        'weekend_service_territory_indicator' => null,
        'weekend_service_territory' => null
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
        'rate_result' => 'RateResult',
        'weekend_service_territory_indicator' => 'WeekendServiceTerritoryIndicator',
        'weekend_service_territory' => 'WeekendServiceTerritory'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'response' => 'setResponse',
        'rate_result' => 'setRateResult',
        'weekend_service_territory_indicator' => 'setWeekendServiceTerritoryIndicator',
        'weekend_service_territory' => 'setWeekendServiceTerritory'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'response' => 'getResponse',
        'rate_result' => 'getRateResult',
        'weekend_service_territory_indicator' => 'getWeekendServiceTerritoryIndicator',
        'weekend_service_territory' => 'getWeekendServiceTerritory'
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
        $this->container['rate_result'] = isset($data['rate_result']) ? $data['rate_result'] : null;
        $this->container['weekend_service_territory_indicator'] = isset($data['weekend_service_territory_indicator']) ? $data['weekend_service_territory_indicator'] : null;
        $this->container['weekend_service_territory'] = isset($data['weekend_service_territory']) ? $data['weekend_service_territory'] : null;
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
        if ($this->container['rate_result'] === null) {
            $invalidProperties[] = "'rate_result' can't be null";
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
     * @return \UPS\Pickup\Pickup\PickupRateResponseResponse
     */
    public function getResponse()
    {
        return $this->container['response'];
    }

    /**
     * Sets response
     *
     * @param \UPS\Pickup\Pickup\PickupRateResponseResponse $response response
     *
     * @return $this
     */
    public function setResponse($response)
    {
        $this->container['response'] = $response;

        return $this;
    }

    /**
     * Gets rate_result
     *
     * @return \UPS\Pickup\Pickup\PickupRateResponseRateResult
     */
    public function getRateResult()
    {
        return $this->container['rate_result'];
    }

    /**
     * Sets rate_result
     *
     * @param \UPS\Pickup\Pickup\PickupRateResponseRateResult $rate_result rate_result
     *
     * @return $this
     */
    public function setRateResult($rate_result)
    {
        $this->container['rate_result'] = $rate_result;

        return $this;
    }

    /**
     * Gets weekend_service_territory_indicator
     *
     * @return string
     */
    public function getWeekendServiceTerritoryIndicator()
    {
        return $this->container['weekend_service_territory_indicator'];
    }

    /**
     * Sets weekend_service_territory_indicator
     *
     * @param string $weekend_service_territory_indicator Indicates if the pickup address qualifies for WST (Weekend Service Territory). Returned if the pickup date is Saturday and subversion greater or equal to 1607.                                                                                                                                                                                                                          Valid Values:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    Y = WST N = Non-WST
     *
     * @return $this
     */
    public function setWeekendServiceTerritoryIndicator($weekend_service_territory_indicator)
    {
        $this->container['weekend_service_territory_indicator'] = $weekend_service_territory_indicator;

        return $this;
    }

    /**
     * Gets weekend_service_territory
     *
     * @return \UPS\Pickup\Pickup\PickupRateResponseWeekendServiceTerritory
     */
    public function getWeekendServiceTerritory()
    {
        return $this->container['weekend_service_territory'];
    }

    /**
     * Sets weekend_service_territory
     *
     * @param \UPS\Pickup\Pickup\PickupRateResponseWeekendServiceTerritory $weekend_service_territory weekend_service_territory
     *
     * @return $this
     */
    public function setWeekendServiceTerritory($weekend_service_territory)
    {
        $this->container['weekend_service_territory'] = $weekend_service_territory;

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
