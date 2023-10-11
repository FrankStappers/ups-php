<?php
/**
 * EEIFilingOptionShipperFiled
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
 * EEIFilingOptionShipperFiled Class Doc Comment
 *
 * @category Class
 * @description Indicates the EEI Shipper Filed option or AES Direct. (Option 1 or 2).  Applicable for EEI form.
 * @package  UPS\Shipping
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EEIFilingOptionShipperFiled implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'EEIFilingOption_ShipperFiled';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'code' => 'string',
        'description' => 'string',
        'pre_departure_itn_number' => 'string',
        'exemption_legend' => 'string',
        'eei_shipment_reference_number' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'code' => null,
        'description' => null,
        'pre_departure_itn_number' => null,
        'exemption_legend' => null,
        'eei_shipment_reference_number' => null
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
        'code' => 'Code',
        'description' => 'Description',
        'pre_departure_itn_number' => 'PreDepartureITNNumber',
        'exemption_legend' => 'ExemptionLegend',
        'eei_shipment_reference_number' => 'EEIShipmentReferenceNumber'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'code' => 'setCode',
        'description' => 'setDescription',
        'pre_departure_itn_number' => 'setPreDepartureItnNumber',
        'exemption_legend' => 'setExemptionLegend',
        'eei_shipment_reference_number' => 'setEeiShipmentReferenceNumber'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'code' => 'getCode',
        'description' => 'getDescription',
        'pre_departure_itn_number' => 'getPreDepartureItnNumber',
        'exemption_legend' => 'getExemptionLegend',
        'eei_shipment_reference_number' => 'getEeiShipmentReferenceNumber'
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
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['pre_departure_itn_number'] = isset($data['pre_departure_itn_number']) ? $data['pre_departure_itn_number'] : null;
        $this->container['exemption_legend'] = isset($data['exemption_legend']) ? $data['exemption_legend'] : null;
        $this->container['eei_shipment_reference_number'] = isset($data['eei_shipment_reference_number']) ? $data['eei_shipment_reference_number'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['code'] === null) {
            $invalidProperties[] = "'code' can't be null";
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
     * Gets code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string $code Indicates the EEI Shipper sub option.  Applicable for EEI form and is required. Valid value is: A- requires the ITN; B- requires the Exemption Legend; C- requires the post departure filing citation.
     *
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

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
     * @param string $description Description of ShipperFiled Code.  Applicable for EEI form.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets pre_departure_itn_number
     *
     * @return string
     */
    public function getPreDepartureItnNumber()
    {
        return $this->container['pre_departure_itn_number'];
    }

    /**
     * Sets pre_departure_itn_number
     *
     * @param string $pre_departure_itn_number Input for Shipper Filed option A and AES Direct. The format is available from AESDirect website.  Valid and Required for Shipper Filed option A. EEI form only.
     *
     * @return $this
     */
    public function setPreDepartureItnNumber($pre_departure_itn_number)
    {
        $this->container['pre_departure_itn_number'] = $pre_departure_itn_number;

        return $this;
    }

    /**
     * Gets exemption_legend
     *
     * @return string
     */
    public function getExemptionLegend()
    {
        return $this->container['exemption_legend'];
    }

    /**
     * Sets exemption_legend
     *
     * @param string $exemption_legend Input for Shipper Filed option B. 30.2(d)(2), 30.26(a), 30.36, 30.37(a), 30.37(b), 30.37(c), 30.37(d), 30.37(e), 30.37(f), 30.37(h), 30.37(i), 30.30(j), 30.37(k), 30.37(i), 30.37(j), 30.37(k), 30.37(l), 30.37(m), 30.37(n), 30.37(o), 30.37(p), 30.37(q), 30.37(r), 30.37(s), 30.37(t), 30.37(u), 30.37(x), 30.37(y)(1), 30.37(y)(2), 30.37(y)(3), 30.37(y)(4), 30.37(y)(5), 30.37(y)(6), 30.39, 30.40(a), 30.40(b), 30.40(c), 30.40(d), 30.8(b)  Valid and Required for Shipper Filed option B. EEI form only.
     *
     * @return $this
     */
    public function setExemptionLegend($exemption_legend)
    {
        $this->container['exemption_legend'] = $exemption_legend;

        return $this;
    }

    /**
     * Gets eei_shipment_reference_number
     *
     * @return string
     */
    public function getEeiShipmentReferenceNumber()
    {
        return $this->container['eei_shipment_reference_number'];
    }

    /**
     * Sets eei_shipment_reference_number
     *
     * @param string $eei_shipment_reference_number Shipment Reference Number for use during interaction with AES. Valid for EEI form for Shipper Filed option 'C' and AES Direct Filed.
     *
     * @return $this
     */
    public function setEeiShipmentReferenceNumber($eei_shipment_reference_number)
    {
        $this->container['eei_shipment_reference_number'] = $eei_shipment_reference_number;

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
