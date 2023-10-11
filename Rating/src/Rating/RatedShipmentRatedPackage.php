<?php
/**
 * RatedShipmentRatedPackage
 *
 * PHP version 5
 *
 * @category Class
 * @package  UPS\Rating
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Rate
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

namespace UPS\Rating\Rating;

use \ArrayAccess;
use \UPS\Rating\ObjectSerializer;

/**
 * RatedShipmentRatedPackage Class Doc Comment
 *
 * @category Class
 * @description Rated Package Container.
 * @package  UPS\Rating
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RatedShipmentRatedPackage implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RatedShipment_RatedPackage';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'base_service_charge' => '\UPS\Rating\Rating\RatedPackageBaseServiceCharge',
        'transportation_charges' => '\UPS\Rating\Rating\RatedPackageTransportationCharges',
        'service_options_charges' => '\UPS\Rating\Rating\RatedPackageServiceOptionsCharges',
        'total_charges' => '\UPS\Rating\Rating\RatedPackageTotalCharges',
        'weight' => 'string',
        'billing_weight' => '\UPS\Rating\Rating\RatedPackageBillingWeight',
        'accessorial' => '\UPS\Rating\Rating\RatedPackageAccessorial[]',
        'itemized_charges' => '\UPS\Rating\Rating\RatedPackageItemizedCharges[]',
        'negotiated_charges' => '\UPS\Rating\Rating\RatedPackageNegotiatedCharges',
        'simple_rate' => '\UPS\Rating\Rating\RatedPackageSimpleRate',
        'rate_modifier' => '\UPS\Rating\Rating\RatedPackageRateModifier[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'base_service_charge' => null,
        'transportation_charges' => null,
        'service_options_charges' => null,
        'total_charges' => null,
        'weight' => null,
        'billing_weight' => null,
        'accessorial' => null,
        'itemized_charges' => null,
        'negotiated_charges' => null,
        'simple_rate' => null,
        'rate_modifier' => null
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
        'base_service_charge' => 'BaseServiceCharge',
        'transportation_charges' => 'TransportationCharges',
        'service_options_charges' => 'ServiceOptionsCharges',
        'total_charges' => 'TotalCharges',
        'weight' => 'Weight',
        'billing_weight' => 'BillingWeight',
        'accessorial' => 'Accessorial',
        'itemized_charges' => 'ItemizedCharges',
        'negotiated_charges' => 'NegotiatedCharges',
        'simple_rate' => 'SimpleRate',
        'rate_modifier' => 'RateModifier'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'base_service_charge' => 'setBaseServiceCharge',
        'transportation_charges' => 'setTransportationCharges',
        'service_options_charges' => 'setServiceOptionsCharges',
        'total_charges' => 'setTotalCharges',
        'weight' => 'setWeight',
        'billing_weight' => 'setBillingWeight',
        'accessorial' => 'setAccessorial',
        'itemized_charges' => 'setItemizedCharges',
        'negotiated_charges' => 'setNegotiatedCharges',
        'simple_rate' => 'setSimpleRate',
        'rate_modifier' => 'setRateModifier'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'base_service_charge' => 'getBaseServiceCharge',
        'transportation_charges' => 'getTransportationCharges',
        'service_options_charges' => 'getServiceOptionsCharges',
        'total_charges' => 'getTotalCharges',
        'weight' => 'getWeight',
        'billing_weight' => 'getBillingWeight',
        'accessorial' => 'getAccessorial',
        'itemized_charges' => 'getItemizedCharges',
        'negotiated_charges' => 'getNegotiatedCharges',
        'simple_rate' => 'getSimpleRate',
        'rate_modifier' => 'getRateModifier'
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
        $this->container['base_service_charge'] = isset($data['base_service_charge']) ? $data['base_service_charge'] : null;
        $this->container['transportation_charges'] = isset($data['transportation_charges']) ? $data['transportation_charges'] : null;
        $this->container['service_options_charges'] = isset($data['service_options_charges']) ? $data['service_options_charges'] : null;
        $this->container['total_charges'] = isset($data['total_charges']) ? $data['total_charges'] : null;
        $this->container['weight'] = isset($data['weight']) ? $data['weight'] : null;
        $this->container['billing_weight'] = isset($data['billing_weight']) ? $data['billing_weight'] : null;
        $this->container['accessorial'] = isset($data['accessorial']) ? $data['accessorial'] : null;
        $this->container['itemized_charges'] = isset($data['itemized_charges']) ? $data['itemized_charges'] : null;
        $this->container['negotiated_charges'] = isset($data['negotiated_charges']) ? $data['negotiated_charges'] : null;
        $this->container['simple_rate'] = isset($data['simple_rate']) ? $data['simple_rate'] : null;
        $this->container['rate_modifier'] = isset($data['rate_modifier']) ? $data['rate_modifier'] : null;
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
     * Gets base_service_charge
     *
     * @return \UPS\Rating\Rating\RatedPackageBaseServiceCharge
     */
    public function getBaseServiceCharge()
    {
        return $this->container['base_service_charge'];
    }

    /**
     * Sets base_service_charge
     *
     * @param \UPS\Rating\Rating\RatedPackageBaseServiceCharge $base_service_charge base_service_charge
     *
     * @return $this
     */
    public function setBaseServiceCharge($base_service_charge)
    {
        $this->container['base_service_charge'] = $base_service_charge;

        return $this;
    }

    /**
     * Gets transportation_charges
     *
     * @return \UPS\Rating\Rating\RatedPackageTransportationCharges
     */
    public function getTransportationCharges()
    {
        return $this->container['transportation_charges'];
    }

    /**
     * Sets transportation_charges
     *
     * @param \UPS\Rating\Rating\RatedPackageTransportationCharges $transportation_charges transportation_charges
     *
     * @return $this
     */
    public function setTransportationCharges($transportation_charges)
    {
        $this->container['transportation_charges'] = $transportation_charges;

        return $this;
    }

    /**
     * Gets service_options_charges
     *
     * @return \UPS\Rating\Rating\RatedPackageServiceOptionsCharges
     */
    public function getServiceOptionsCharges()
    {
        return $this->container['service_options_charges'];
    }

    /**
     * Sets service_options_charges
     *
     * @param \UPS\Rating\Rating\RatedPackageServiceOptionsCharges $service_options_charges service_options_charges
     *
     * @return $this
     */
    public function setServiceOptionsCharges($service_options_charges)
    {
        $this->container['service_options_charges'] = $service_options_charges;

        return $this;
    }

    /**
     * Gets total_charges
     *
     * @return \UPS\Rating\Rating\RatedPackageTotalCharges
     */
    public function getTotalCharges()
    {
        return $this->container['total_charges'];
    }

    /**
     * Sets total_charges
     *
     * @param \UPS\Rating\Rating\RatedPackageTotalCharges $total_charges total_charges
     *
     * @return $this
     */
    public function setTotalCharges($total_charges)
    {
        $this->container['total_charges'] = $total_charges;

        return $this;
    }

    /**
     * Gets weight
     *
     * @return string
     */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight
     *
     * @param string $weight The weight of the package in the rated Package.
     *
     * @return $this
     */
    public function setWeight($weight)
    {
        $this->container['weight'] = $weight;

        return $this;
    }

    /**
     * Gets billing_weight
     *
     * @return \UPS\Rating\Rating\RatedPackageBillingWeight
     */
    public function getBillingWeight()
    {
        return $this->container['billing_weight'];
    }

    /**
     * Sets billing_weight
     *
     * @param \UPS\Rating\Rating\RatedPackageBillingWeight $billing_weight billing_weight
     *
     * @return $this
     */
    public function setBillingWeight($billing_weight)
    {
        $this->container['billing_weight'] = $billing_weight;

        return $this;
    }

    /**
     * Gets accessorial
     *
     * @return \UPS\Rating\Rating\RatedPackageAccessorial[]
     */
    public function getAccessorial()
    {
        return $this->container['accessorial'];
    }

    /**
     * Sets accessorial
     *
     * @param \UPS\Rating\Rating\RatedPackageAccessorial[] $accessorial accessorial
     *
     * @return $this
     */
    public function setAccessorial($accessorial)
    {
        $this->container['accessorial'] = $accessorial;

        return $this;
    }

    /**
     * Gets itemized_charges
     *
     * @return \UPS\Rating\Rating\RatedPackageItemizedCharges[]
     */
    public function getItemizedCharges()
    {
        return $this->container['itemized_charges'];
    }

    /**
     * Sets itemized_charges
     *
     * @param \UPS\Rating\Rating\RatedPackageItemizedCharges[] $itemized_charges itemized_charges
     *
     * @return $this
     */
    public function setItemizedCharges($itemized_charges)
    {
        $this->container['itemized_charges'] = $itemized_charges;

        return $this;
    }

    /**
     * Gets negotiated_charges
     *
     * @return \UPS\Rating\Rating\RatedPackageNegotiatedCharges
     */
    public function getNegotiatedCharges()
    {
        return $this->container['negotiated_charges'];
    }

    /**
     * Sets negotiated_charges
     *
     * @param \UPS\Rating\Rating\RatedPackageNegotiatedCharges $negotiated_charges negotiated_charges
     *
     * @return $this
     */
    public function setNegotiatedCharges($negotiated_charges)
    {
        $this->container['negotiated_charges'] = $negotiated_charges;

        return $this;
    }

    /**
     * Gets simple_rate
     *
     * @return \UPS\Rating\Rating\RatedPackageSimpleRate
     */
    public function getSimpleRate()
    {
        return $this->container['simple_rate'];
    }

    /**
     * Sets simple_rate
     *
     * @param \UPS\Rating\Rating\RatedPackageSimpleRate $simple_rate simple_rate
     *
     * @return $this
     */
    public function setSimpleRate($simple_rate)
    {
        $this->container['simple_rate'] = $simple_rate;

        return $this;
    }

    /**
     * Gets rate_modifier
     *
     * @return \UPS\Rating\Rating\RatedPackageRateModifier[]
     */
    public function getRateModifier()
    {
        return $this->container['rate_modifier'];
    }

    /**
     * Sets rate_modifier
     *
     * @param \UPS\Rating\Rating\RatedPackageRateModifier[] $rate_modifier rate_modifier
     *
     * @return $this
     */
    public function setRateModifier($rate_modifier)
    {
        $this->container['rate_modifier'] = $rate_modifier;

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
