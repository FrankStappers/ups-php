<?php
/**
 * PaymentInformationShipmentCharge
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
 * PaymentInformationShipmentCharge Class Doc Comment
 *
 * @category Class
 * @description Shipment charge container.  If Duty and Tax charges are applicable to a shipment and a payer is not specified, the default payer of Duty and Tax charges is Bill to Receiver.
 * @package  UPS\Shipping
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PaymentInformationShipmentCharge implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PaymentInformation_ShipmentCharge';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'type' => 'string',
        'bill_shipper' => '\UPS\Shipping\Shipping\ShipmentChargeBillShipper',
        'bill_receiver' => '\UPS\Shipping\Shipping\ShipmentChargeBillReceiver',
        'bill_third_party' => '\UPS\Shipping\Shipping\ShipmentChargeBillThirdParty',
        'consignee_billed_indicator' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'type' => null,
        'bill_shipper' => null,
        'bill_receiver' => null,
        'bill_third_party' => null,
        'consignee_billed_indicator' => null
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
        'type' => 'Type',
        'bill_shipper' => 'BillShipper',
        'bill_receiver' => 'BillReceiver',
        'bill_third_party' => 'BillThirdParty',
        'consignee_billed_indicator' => 'ConsigneeBilledIndicator'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'bill_shipper' => 'setBillShipper',
        'bill_receiver' => 'setBillReceiver',
        'bill_third_party' => 'setBillThirdParty',
        'consignee_billed_indicator' => 'setConsigneeBilledIndicator'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'bill_shipper' => 'getBillShipper',
        'bill_receiver' => 'getBillReceiver',
        'bill_third_party' => 'getBillThirdParty',
        'consignee_billed_indicator' => 'getConsigneeBilledIndicator'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['bill_shipper'] = isset($data['bill_shipper']) ? $data['bill_shipper'] : null;
        $this->container['bill_receiver'] = isset($data['bill_receiver']) ? $data['bill_receiver'] : null;
        $this->container['bill_third_party'] = isset($data['bill_third_party']) ? $data['bill_third_party'] : null;
        $this->container['consignee_billed_indicator'] = isset($data['consignee_billed_indicator']) ? $data['consignee_billed_indicator'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
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
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type Valid values:  01 = Transportation 02 = Duties and Taxes 03 = Broker of Choice  A shipment charge type of 01 = Transportation is required.   A shipment charge type of 02 = Duties and Taxes is not required; however, this charge type is invalid for Qualified Domestic Shipments.   A Qualified Domestic Shipment is any shipment in which one of the following applies:   1) The origin and destination country or territory is the same.  2) US to PR shipment.  3) PR to US shipment.  4) The origin and destination country or territory are both European Union countries or territories and the GoodsNotInFreeCirculation indicator is not present.  5) The origin and destination IATA code is the same.                                                                                                                                                                                                                                                                                                                                                                                                                                                      03 = Broker of Choice
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets bill_shipper
     *
     * @return \UPS\Shipping\Shipping\ShipmentChargeBillShipper
     */
    public function getBillShipper()
    {
        return $this->container['bill_shipper'];
    }

    /**
     * Sets bill_shipper
     *
     * @param \UPS\Shipping\Shipping\ShipmentChargeBillShipper $bill_shipper bill_shipper
     *
     * @return $this
     */
    public function setBillShipper($bill_shipper)
    {
        $this->container['bill_shipper'] = $bill_shipper;

        return $this;
    }

    /**
     * Gets bill_receiver
     *
     * @return \UPS\Shipping\Shipping\ShipmentChargeBillReceiver
     */
    public function getBillReceiver()
    {
        return $this->container['bill_receiver'];
    }

    /**
     * Sets bill_receiver
     *
     * @param \UPS\Shipping\Shipping\ShipmentChargeBillReceiver $bill_receiver bill_receiver
     *
     * @return $this
     */
    public function setBillReceiver($bill_receiver)
    {
        $this->container['bill_receiver'] = $bill_receiver;

        return $this;
    }

    /**
     * Gets bill_third_party
     *
     * @return \UPS\Shipping\Shipping\ShipmentChargeBillThirdParty
     */
    public function getBillThirdParty()
    {
        return $this->container['bill_third_party'];
    }

    /**
     * Sets bill_third_party
     *
     * @param \UPS\Shipping\Shipping\ShipmentChargeBillThirdParty $bill_third_party bill_third_party
     *
     * @return $this
     */
    public function setBillThirdParty($bill_third_party)
    {
        $this->container['bill_third_party'] = $bill_third_party;

        return $this;
    }

    /**
     * Gets consignee_billed_indicator
     *
     * @return string
     */
    public function getConsigneeBilledIndicator()
    {
        return $this->container['consignee_billed_indicator'];
    }

    /**
     * Sets consignee_billed_indicator
     *
     * @param string $consignee_billed_indicator Consignee Billing payment option indicator. The presence indicates consignee billing option is selected. The absence indicates one of the other payment options is selected.  This is an empty tag, any value inside is ignored. This element or its sibling element, BillShipper, BillReceiver or BillThirdParty, must be present but no more than one can be present. This billing option is valid for a shipment charge type of Transportation only. Only applies to US/PR and PR/US shipment origins and destination.  This payment method allows you to bill the charges for a specified shipment to a consignee who has agreed to pay the charges. All shipping charges are billed to the consignees UPS account number including the following accessorials: Additional Handling, Delivery Area Surcharges, Delivery Change Requests, Early AM Premium, Early AM Out of Territory, Fuel Surcharge, Hazardous Material Surcharges, Large Package Surcharge, Over Max Limits, and Saturday Delivery.  Declared Value, Delivery Confirmation, On Call Pickup, Remote Area Surcharge, Saturday Pickup of Delivery fees are not passed to the consignee. These charges are billed to the shippers UPS account number.
     *
     * @return $this
     */
    public function setConsigneeBilledIndicator($consignee_billed_indicator)
    {
        $this->container['consignee_billed_indicator'] = $consignee_billed_indicator;

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
