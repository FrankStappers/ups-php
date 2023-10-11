<?php
/**
 * LocatorRequestLocationSearchCriteria
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
 * LocatorRequestLocationSearchCriteria Class Doc Comment
 *
 * @category Class
 * @description The Location search criteria container allows the user to further define the basis to which they wish to receive the UPS locations.  Only relevant when the user requests a Location search (request option 1).
 * @package  UPS\Locator
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LocatorRequestLocationSearchCriteria implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LocatorRequest_LocationSearchCriteria';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'search_option' => '\UPS\Locator\Locator\LocationSearchCriteriaSearchOption[]',
        'maximum_list_size' => 'string',
        'search_radius' => 'string',
        'service_search' => '\UPS\Locator\Locator\LocationSearchCriteriaServiceSearch',
        'freight_will_call_search' => '\UPS\Locator\Locator\LocationSearchCriteriaFreightWillCallSearch',
        'access_point_search' => '\UPS\Locator\Locator\LocationSearchCriteriaAccessPointSearch',
        'open_time_criteria' => '\UPS\Locator\Locator\LocationSearchCriteriaOpenTimeCriteria',
        'brexit_filter' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'search_option' => null,
        'maximum_list_size' => null,
        'search_radius' => null,
        'service_search' => null,
        'freight_will_call_search' => null,
        'access_point_search' => null,
        'open_time_criteria' => null,
        'brexit_filter' => null
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
        'search_option' => 'SearchOption',
        'maximum_list_size' => 'MaximumListSize',
        'search_radius' => 'SearchRadius',
        'service_search' => 'ServiceSearch',
        'freight_will_call_search' => 'FreightWillCallSearch',
        'access_point_search' => 'AccessPointSearch',
        'open_time_criteria' => 'OpenTimeCriteria',
        'brexit_filter' => 'BrexitFilter'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'search_option' => 'setSearchOption',
        'maximum_list_size' => 'setMaximumListSize',
        'search_radius' => 'setSearchRadius',
        'service_search' => 'setServiceSearch',
        'freight_will_call_search' => 'setFreightWillCallSearch',
        'access_point_search' => 'setAccessPointSearch',
        'open_time_criteria' => 'setOpenTimeCriteria',
        'brexit_filter' => 'setBrexitFilter'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'search_option' => 'getSearchOption',
        'maximum_list_size' => 'getMaximumListSize',
        'search_radius' => 'getSearchRadius',
        'service_search' => 'getServiceSearch',
        'freight_will_call_search' => 'getFreightWillCallSearch',
        'access_point_search' => 'getAccessPointSearch',
        'open_time_criteria' => 'getOpenTimeCriteria',
        'brexit_filter' => 'getBrexitFilter'
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
        $this->container['search_option'] = isset($data['search_option']) ? $data['search_option'] : null;
        $this->container['maximum_list_size'] = isset($data['maximum_list_size']) ? $data['maximum_list_size'] : null;
        $this->container['search_radius'] = isset($data['search_radius']) ? $data['search_radius'] : null;
        $this->container['service_search'] = isset($data['service_search']) ? $data['service_search'] : null;
        $this->container['freight_will_call_search'] = isset($data['freight_will_call_search']) ? $data['freight_will_call_search'] : null;
        $this->container['access_point_search'] = isset($data['access_point_search']) ? $data['access_point_search'] : null;
        $this->container['open_time_criteria'] = isset($data['open_time_criteria']) ? $data['open_time_criteria'] : null;
        $this->container['brexit_filter'] = isset($data['brexit_filter']) ? $data['brexit_filter'] : null;
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
     * Gets search_option
     *
     * @return \UPS\Locator\Locator\LocationSearchCriteriaSearchOption[]
     */
    public function getSearchOption()
    {
        return $this->container['search_option'];
    }

    /**
     * Sets search_option
     *
     * @param \UPS\Locator\Locator\LocationSearchCriteriaSearchOption[] $search_option search_option
     *
     * @return $this
     */
    public function setSearchOption($search_option)
    {
        $this->container['search_option'] = $search_option;

        return $this;
    }

    /**
     * Gets maximum_list_size
     *
     * @return string
     */
    public function getMaximumListSize()
    {
        return $this->container['maximum_list_size'];
    }

    /**
     * Sets maximum_list_size
     *
     * @param string $maximum_list_size If present, indicates the maximum number of locations the client wishes to receive in response; ranges from 1 to 50 with a default value of 5.
     *
     * @return $this
     */
    public function setMaximumListSize($maximum_list_size)
    {
        $this->container['maximum_list_size'] = $maximum_list_size;

        return $this;
    }

    /**
     * Gets search_radius
     *
     * @return string
     */
    public function getSearchRadius()
    {
        return $this->container['search_radius'];
    }

    /**
     * Sets search_radius
     *
     * @param string $search_radius Defines the maximum radius the user wishes to search for a UPS location. If the user does not specify, the default value is 100 miles. Whole numbers only.   Valid values are: 5-100 for UnitOfMeasure MI 5-150 for UnitOfMesaure KM
     *
     * @return $this
     */
    public function setSearchRadius($search_radius)
    {
        $this->container['search_radius'] = $search_radius;

        return $this;
    }

    /**
     * Gets service_search
     *
     * @return \UPS\Locator\Locator\LocationSearchCriteriaServiceSearch
     */
    public function getServiceSearch()
    {
        return $this->container['service_search'];
    }

    /**
     * Sets service_search
     *
     * @param \UPS\Locator\Locator\LocationSearchCriteriaServiceSearch $service_search service_search
     *
     * @return $this
     */
    public function setServiceSearch($service_search)
    {
        $this->container['service_search'] = $service_search;

        return $this;
    }

    /**
     * Gets freight_will_call_search
     *
     * @return \UPS\Locator\Locator\LocationSearchCriteriaFreightWillCallSearch
     */
    public function getFreightWillCallSearch()
    {
        return $this->container['freight_will_call_search'];
    }

    /**
     * Sets freight_will_call_search
     *
     * @param \UPS\Locator\Locator\LocationSearchCriteriaFreightWillCallSearch $freight_will_call_search freight_will_call_search
     *
     * @return $this
     */
    public function setFreightWillCallSearch($freight_will_call_search)
    {
        $this->container['freight_will_call_search'] = $freight_will_call_search;

        return $this;
    }

    /**
     * Gets access_point_search
     *
     * @return \UPS\Locator\Locator\LocationSearchCriteriaAccessPointSearch
     */
    public function getAccessPointSearch()
    {
        return $this->container['access_point_search'];
    }

    /**
     * Sets access_point_search
     *
     * @param \UPS\Locator\Locator\LocationSearchCriteriaAccessPointSearch $access_point_search access_point_search
     *
     * @return $this
     */
    public function setAccessPointSearch($access_point_search)
    {
        $this->container['access_point_search'] = $access_point_search;

        return $this;
    }

    /**
     * Gets open_time_criteria
     *
     * @return \UPS\Locator\Locator\LocationSearchCriteriaOpenTimeCriteria
     */
    public function getOpenTimeCriteria()
    {
        return $this->container['open_time_criteria'];
    }

    /**
     * Sets open_time_criteria
     *
     * @param \UPS\Locator\Locator\LocationSearchCriteriaOpenTimeCriteria $open_time_criteria open_time_criteria
     *
     * @return $this
     */
    public function setOpenTimeCriteria($open_time_criteria)
    {
        $this->container['open_time_criteria'] = $open_time_criteria;

        return $this;
    }

    /**
     * Gets brexit_filter
     *
     * @return string
     */
    public function getBrexitFilter()
    {
        return $this->container['brexit_filter'];
    }

    /**
     * Sets brexit_filter
     *
     * @param string $brexit_filter Brexit Filter. Applicable for country code GB; Pass the PostalCode for the address in the location search if Brexit functionality is desired. UAPs with postal code starts with BT returned when brexit filter starts with BT, else UAPs returned with non BT postal code. Applicable for UAP and Proximal building search.
     *
     * @return $this
     */
    public function setBrexitFilter($brexit_filter)
    {
        $this->container['brexit_filter'] = $brexit_filter;

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
