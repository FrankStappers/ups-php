<?php
/**
 * LandedCostRequestQueryRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  UPS\LandedCostQuoting
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Landed Cost
 *
 * Landed Cost provides an all-inclusive cost estimate of international shipments.
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

namespace UPS\LandedCostQuoting\LandedCostQuoting;

use \ArrayAccess;
use \UPS\LandedCostQuoting\ObjectSerializer;

/**
 * LandedCostRequestQueryRequest Class Doc Comment
 *
 * @category Class
 * @description Container for the billing and shipment data. Should be in the first round request of LandedCost. It cannot co-exist with EstimateRequest. If EstimateRequest is not present, this tag must be present.
 * @package  UPS\LandedCostQuoting
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LandedCostRequestQueryRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LandedCostRequest_QueryRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'shipment' => '\UPS\LandedCostQuoting\LandedCostQuoting\QueryRequestShipment',
        'transaction_reference_id' => 'string',
        'suppress_question_indicator' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'shipment' => null,
        'transaction_reference_id' => null,
        'suppress_question_indicator' => null
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
        'shipment' => 'Shipment',
        'transaction_reference_id' => 'TransactionReferenceID',
        'suppress_question_indicator' => 'SuppressQuestionIndicator'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'shipment' => 'setShipment',
        'transaction_reference_id' => 'setTransactionReferenceId',
        'suppress_question_indicator' => 'setSuppressQuestionIndicator'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'shipment' => 'getShipment',
        'transaction_reference_id' => 'getTransactionReferenceId',
        'suppress_question_indicator' => 'getSuppressQuestionIndicator'
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
        $this->container['shipment'] = isset($data['shipment']) ? $data['shipment'] : null;
        $this->container['transaction_reference_id'] = isset($data['transaction_reference_id']) ? $data['transaction_reference_id'] : null;
        $this->container['suppress_question_indicator'] = isset($data['suppress_question_indicator']) ? $data['suppress_question_indicator'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['shipment'] === null) {
            $invalidProperties[] = "'shipment' can't be null";
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
     * Gets shipment
     *
     * @return \UPS\LandedCostQuoting\LandedCostQuoting\QueryRequestShipment
     */
    public function getShipment()
    {
        return $this->container['shipment'];
    }

    /**
     * Sets shipment
     *
     * @param \UPS\LandedCostQuoting\LandedCostQuoting\QueryRequestShipment $shipment shipment
     *
     * @return $this
     */
    public function setShipment($shipment)
    {
        $this->container['shipment'] = $shipment;

        return $this;
    }

    /**
     * Gets transaction_reference_id
     *
     * @return string
     */
    public function getTransactionReferenceId()
    {
        return $this->container['transaction_reference_id'];
    }

    /**
     * Sets transaction_reference_id
     *
     * @param string $transaction_reference_id User reference ID.
     *
     * @return $this
     */
    public function setTransactionReferenceId($transaction_reference_id)
    {
        $this->container['transaction_reference_id'] = $transaction_reference_id;

        return $this;
    }

    /**
     * Gets suppress_question_indicator
     *
     * @return string
     */
    public function getSuppressQuestionIndicator()
    {
        return $this->container['suppress_question_indicator'];
    }

    /**
     * Sets suppress_question_indicator
     *
     * @param string $suppress_question_indicator Contains the indicator to suppress questions Y-Yes (suppress questions) N-No (do not suppress questions) If not set, defaults to �N�
     *
     * @return $this
     */
    public function setSuppressQuestionIndicator($suppress_question_indicator)
    {
        $this->container['suppress_question_indicator'] = $suppress_question_indicator;

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
