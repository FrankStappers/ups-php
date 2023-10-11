<?php
/**
 * ChemicalDataChemicalDetail
 *
 * PHP version 5
 *
 * @category Class
 * @package  UPS\DangerousGoods
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Dangerous Goods Utility
 *
 * The Dangerous Goods API provides the ability to determine what Dangerous Goods (also known as Hazardous Materials) can be carried by UPS.
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

namespace UPS\DangerousGoods\DangerousGoods;

use \ArrayAccess;
use \UPS\DangerousGoods\ObjectSerializer;

/**
 * ChemicalDataChemicalDetail Class Doc Comment
 *
 * @category Class
 * @description Container to hold Chemical details.
 * @package  UPS\DangerousGoods
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ChemicalDataChemicalDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ChemicalData_ChemicalDetail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'regulation_set' => 'string',
        'id_number' => 'string',
        'hazardous_materials_description' => 'string',
        'class_division_number' => 'string',
        'sub_risk_class' => 'string',
        'packaging_group_type' => 'string',
        'special_permit' => 'string',
        'technical_name_required_indicator' => 'string',
        'additional_shipping_information_required_indicator' => 'string',
        'tunnel_restriction_code' => 'string',
        'transport_category' => 'string',
        'transport_multiplier_quantity' => 'string',
        'channel_tunnel_accepted_indicator' => 'string',
        'chemical_type' => 'string',
        'cato_us_shipment_allowed_indicator' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'regulation_set' => null,
        'id_number' => null,
        'hazardous_materials_description' => null,
        'class_division_number' => null,
        'sub_risk_class' => null,
        'packaging_group_type' => null,
        'special_permit' => null,
        'technical_name_required_indicator' => null,
        'additional_shipping_information_required_indicator' => null,
        'tunnel_restriction_code' => null,
        'transport_category' => null,
        'transport_multiplier_quantity' => null,
        'channel_tunnel_accepted_indicator' => null,
        'chemical_type' => null,
        'cato_us_shipment_allowed_indicator' => null
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
        'regulation_set' => 'RegulationSet',
        'id_number' => 'IDNumber',
        'hazardous_materials_description' => 'HazardousMaterialsDescription',
        'class_division_number' => 'ClassDivisionNumber',
        'sub_risk_class' => 'SubRiskClass',
        'packaging_group_type' => 'PackagingGroupType',
        'special_permit' => 'SpecialPermit',
        'technical_name_required_indicator' => 'TechnicalNameRequiredIndicator',
        'additional_shipping_information_required_indicator' => 'AdditionalShippingInformationRequiredIndicator',
        'tunnel_restriction_code' => 'TunnelRestrictionCode',
        'transport_category' => 'TransportCategory',
        'transport_multiplier_quantity' => 'TransportMultiplierQuantity',
        'channel_tunnel_accepted_indicator' => 'ChannelTunnelAcceptedIndicator',
        'chemical_type' => 'ChemicalType',
        'cato_us_shipment_allowed_indicator' => 'CAToUSShipmentAllowedIndicator'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'regulation_set' => 'setRegulationSet',
        'id_number' => 'setIdNumber',
        'hazardous_materials_description' => 'setHazardousMaterialsDescription',
        'class_division_number' => 'setClassDivisionNumber',
        'sub_risk_class' => 'setSubRiskClass',
        'packaging_group_type' => 'setPackagingGroupType',
        'special_permit' => 'setSpecialPermit',
        'technical_name_required_indicator' => 'setTechnicalNameRequiredIndicator',
        'additional_shipping_information_required_indicator' => 'setAdditionalShippingInformationRequiredIndicator',
        'tunnel_restriction_code' => 'setTunnelRestrictionCode',
        'transport_category' => 'setTransportCategory',
        'transport_multiplier_quantity' => 'setTransportMultiplierQuantity',
        'channel_tunnel_accepted_indicator' => 'setChannelTunnelAcceptedIndicator',
        'chemical_type' => 'setChemicalType',
        'cato_us_shipment_allowed_indicator' => 'setCatoUsShipmentAllowedIndicator'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'regulation_set' => 'getRegulationSet',
        'id_number' => 'getIdNumber',
        'hazardous_materials_description' => 'getHazardousMaterialsDescription',
        'class_division_number' => 'getClassDivisionNumber',
        'sub_risk_class' => 'getSubRiskClass',
        'packaging_group_type' => 'getPackagingGroupType',
        'special_permit' => 'getSpecialPermit',
        'technical_name_required_indicator' => 'getTechnicalNameRequiredIndicator',
        'additional_shipping_information_required_indicator' => 'getAdditionalShippingInformationRequiredIndicator',
        'tunnel_restriction_code' => 'getTunnelRestrictionCode',
        'transport_category' => 'getTransportCategory',
        'transport_multiplier_quantity' => 'getTransportMultiplierQuantity',
        'channel_tunnel_accepted_indicator' => 'getChannelTunnelAcceptedIndicator',
        'chemical_type' => 'getChemicalType',
        'cato_us_shipment_allowed_indicator' => 'getCatoUsShipmentAllowedIndicator'
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
        $this->container['regulation_set'] = isset($data['regulation_set']) ? $data['regulation_set'] : null;
        $this->container['id_number'] = isset($data['id_number']) ? $data['id_number'] : null;
        $this->container['hazardous_materials_description'] = isset($data['hazardous_materials_description']) ? $data['hazardous_materials_description'] : null;
        $this->container['class_division_number'] = isset($data['class_division_number']) ? $data['class_division_number'] : null;
        $this->container['sub_risk_class'] = isset($data['sub_risk_class']) ? $data['sub_risk_class'] : null;
        $this->container['packaging_group_type'] = isset($data['packaging_group_type']) ? $data['packaging_group_type'] : null;
        $this->container['special_permit'] = isset($data['special_permit']) ? $data['special_permit'] : null;
        $this->container['technical_name_required_indicator'] = isset($data['technical_name_required_indicator']) ? $data['technical_name_required_indicator'] : null;
        $this->container['additional_shipping_information_required_indicator'] = isset($data['additional_shipping_information_required_indicator']) ? $data['additional_shipping_information_required_indicator'] : null;
        $this->container['tunnel_restriction_code'] = isset($data['tunnel_restriction_code']) ? $data['tunnel_restriction_code'] : null;
        $this->container['transport_category'] = isset($data['transport_category']) ? $data['transport_category'] : null;
        $this->container['transport_multiplier_quantity'] = isset($data['transport_multiplier_quantity']) ? $data['transport_multiplier_quantity'] : null;
        $this->container['channel_tunnel_accepted_indicator'] = isset($data['channel_tunnel_accepted_indicator']) ? $data['channel_tunnel_accepted_indicator'] : null;
        $this->container['chemical_type'] = isset($data['chemical_type']) ? $data['chemical_type'] : null;
        $this->container['cato_us_shipment_allowed_indicator'] = isset($data['cato_us_shipment_allowed_indicator']) ? $data['cato_us_shipment_allowed_indicator'] : null;
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
     * Gets regulation_set
     *
     * @return string
     */
    public function getRegulationSet()
    {
        return $this->container['regulation_set'];
    }

    /**
     * Sets regulation_set
     *
     * @param string $regulation_set The Regulatory set associated with every regulated shipment.   Possible values are ADR, 49CFR, IATA. It will be returned if applies for a given chemical record.  ADR = Europe to Europe Ground Movement 49CFR = HazMat regulated by US Dept. of Transportation within the U.S. or ground shipments to Canada,   IATA= Worldwide Air movement.
     *
     * @return $this
     */
    public function setRegulationSet($regulation_set)
    {
        $this->container['regulation_set'] = $regulation_set;

        return $this;
    }

    /**
     * Gets id_number
     *
     * @return string
     */
    public function getIdNumber()
    {
        return $this->container['id_number'];
    }

    /**
     * Sets id_number
     *
     * @param string $id_number This is the ID number (UN/NA/ID) for the specified commodity. UN/NA/ID Identification Number assigned to the specified regulated good. (Include the UN/NA/ID as part of the entry).  It will be returned if applies for a given chemical record.
     *
     * @return $this
     */
    public function setIdNumber($id_number)
    {
        $this->container['id_number'] = $id_number;

        return $this;
    }

    /**
     * Gets hazardous_materials_description
     *
     * @return string
     */
    public function getHazardousMaterialsDescription()
    {
        return $this->container['hazardous_materials_description'];
    }

    /**
     * Sets hazardous_materials_description
     *
     * @param string $hazardous_materials_description Free form text containing the full name that are used to describe a regulated chemical record.  It will be returned if applies for a given chemical record.
     *
     * @return $this
     */
    public function setHazardousMaterialsDescription($hazardous_materials_description)
    {
        $this->container['hazardous_materials_description'] = $hazardous_materials_description;

        return $this;
    }

    /**
     * Gets class_division_number
     *
     * @return string
     */
    public function getClassDivisionNumber()
    {
        return $this->container['class_division_number'];
    }

    /**
     * Sets class_division_number
     *
     * @param string $class_division_number This is the hazard class associated to the specified commodity.  It will be returned if applies for a given chemical record.
     *
     * @return $this
     */
    public function setClassDivisionNumber($class_division_number)
    {
        $this->container['class_division_number'] = $class_division_number;

        return $this;
    }

    /**
     * Gets sub_risk_class
     *
     * @return string
     */
    public function getSubRiskClass()
    {
        return $this->container['sub_risk_class'];
    }

    /**
     * Sets sub_risk_class
     *
     * @param string $sub_risk_class Secondary hazardous characteristics of a package. (There can be more than one separate each with a comma).  It will be returned if applies for a given chemical record.
     *
     * @return $this
     */
    public function setSubRiskClass($sub_risk_class)
    {
        $this->container['sub_risk_class'] = $sub_risk_class;

        return $this;
    }

    /**
     * Gets packaging_group_type
     *
     * @return string
     */
    public function getPackagingGroupType()
    {
        return $this->container['packaging_group_type'];
    }

    /**
     * Sets packaging_group_type
     *
     * @param string $packaging_group_type This is the packing group category associated to the specified commodity. This code represents the potential degree of danger represented by a regulated commodity being transported.  It will be returned if applies for a given chemical record.
     *
     * @return $this
     */
    public function setPackagingGroupType($packaging_group_type)
    {
        $this->container['packaging_group_type'] = $packaging_group_type;

        return $this;
    }

    /**
     * Gets special_permit
     *
     * @return string
     */
    public function getSpecialPermit()
    {
        return $this->container['special_permit'];
    }

    /**
     * Sets special_permit
     *
     * @param string $special_permit Indicates whether or not related entity requires special permit in order to transport the chemical.   It will be returned if applies for a given chemical record.  Valid values:  AIR GND BOTH
     *
     * @return $this
     */
    public function setSpecialPermit($special_permit)
    {
        $this->container['special_permit'] = $special_permit;

        return $this;
    }

    /**
     * Gets technical_name_required_indicator
     *
     * @return string
     */
    public function getTechnicalNameRequiredIndicator()
    {
        return $this->container['technical_name_required_indicator'];
    }

    /**
     * Sets technical_name_required_indicator
     *
     * @param string $technical_name_required_indicator Indicates whether TechnicalName is required or not.  It will be returned if applies for a given chemical record.  Y = TechnicalName is required. N = TechnicalName is not required.
     *
     * @return $this
     */
    public function setTechnicalNameRequiredIndicator($technical_name_required_indicator)
    {
        $this->container['technical_name_required_indicator'] = $technical_name_required_indicator;

        return $this;
    }

    /**
     * Gets additional_shipping_information_required_indicator
     *
     * @return string
     */
    public function getAdditionalShippingInformationRequiredIndicator()
    {
        return $this->container['additional_shipping_information_required_indicator'];
    }

    /**
     * Sets additional_shipping_information_required_indicator
     *
     * @param string $additional_shipping_information_required_indicator Indicates whether or not additional text is required for the shipping papers for the related entity.   It will be returned if applies for a given chemical record.  Valid values:  N = No, additional information for the shipping papers are not required. Y = Yes, additional information for the shipping papers are required.
     *
     * @return $this
     */
    public function setAdditionalShippingInformationRequiredIndicator($additional_shipping_information_required_indicator)
    {
        $this->container['additional_shipping_information_required_indicator'] = $additional_shipping_information_required_indicator;

        return $this;
    }

    /**
     * Gets tunnel_restriction_code
     *
     * @return string
     */
    public function getTunnelRestrictionCode()
    {
        return $this->container['tunnel_restriction_code'];
    }

    /**
     * Sets tunnel_restriction_code
     *
     * @param string $tunnel_restriction_code Defines what is restricted to pass through a tunnel.  EXAMPLES OF VALUES: (B),(D),(E),(B/D),(B/E),(C,D),(C/E),(D/E),Blank
     *
     * @return $this
     */
    public function setTunnelRestrictionCode($tunnel_restriction_code)
    {
        $this->container['tunnel_restriction_code'] = $tunnel_restriction_code;

        return $this;
    }

    /**
     * Gets transport_category
     *
     * @return string
     */
    public function getTransportCategory()
    {
        return $this->container['transport_category'];
    }

    /**
     * Sets transport_category
     *
     * @param string $transport_category Code representing a category of transportation, assigned by a regulation set for each regulated commodity. Each value of this category is associated with a multiplier that is used to calculate a value.This value is then used to determine the placarding to be place on the vehicle or container that holds the related regulated commodity  EXAMPLES OF VALUES: 0 = No multiplier - must use placarding 1 = Use a multiplier of 50 2 = Use a multiplier of 3 3 = Use a multiplier of 1 4 = Use a multiplier of 0 - do not apply a placard
     *
     * @return $this
     */
    public function setTransportCategory($transport_category)
    {
        $this->container['transport_category'] = $transport_category;

        return $this;
    }

    /**
     * Gets transport_multiplier_quantity
     *
     * @return string
     */
    public function getTransportMultiplierQuantity()
    {
        return $this->container['transport_multiplier_quantity'];
    }

    /**
     * Sets transport_multiplier_quantity
     *
     * @param string $transport_multiplier_quantity The quantity that represents a multiplication factor used to calculate a value to determine the placarding to be place on the vehicle or container that holds the related regulated commodity. This factor is associated with a code value represented by Regulated Commodity Transport Category Code.   EXAMPLES OF VALUES: 0 = No multiplier - must use placarding 1 = Use a multiplier of 50 2 = Use a multiplier of 3 3 = Use a multiplier of 1 4 = Use a multiplier of 0 - do not apply a placard
     *
     * @return $this
     */
    public function setTransportMultiplierQuantity($transport_multiplier_quantity)
    {
        $this->container['transport_multiplier_quantity'] = $transport_multiplier_quantity;

        return $this;
    }

    /**
     * Gets channel_tunnel_accepted_indicator
     *
     * @return string
     */
    public function getChannelTunnelAcceptedIndicator()
    {
        return $this->container['channel_tunnel_accepted_indicator'];
    }

    /**
     * Sets channel_tunnel_accepted_indicator
     *
     * @param string $channel_tunnel_accepted_indicator ChannelTunnelAcceptedIndicator indicates if the chemical is accepted through channel tunnel or not  Y= Accepted through channel tunnel N=Not accepted through channel tunnel
     *
     * @return $this
     */
    public function setChannelTunnelAcceptedIndicator($channel_tunnel_accepted_indicator)
    {
        $this->container['channel_tunnel_accepted_indicator'] = $channel_tunnel_accepted_indicator;

        return $this;
    }

    /**
     * Gets chemical_type
     *
     * @return string
     */
    public function getChemicalType()
    {
        return $this->container['chemical_type'];
    }

    /**
     * Sets chemical_type
     *
     * @param string $chemical_type A set of chemical records in HMMS that correspond to a sub-set of chemicals for a regulation set, or the entire set of chemicals for a regulation set  EXAMPLES OF VALUES: FREIGHT TDG IATA US DOMESTIC AIR 49CFR ADR IATA INTERNATIONAL AIR
     *
     * @return $this
     */
    public function setChemicalType($chemical_type)
    {
        $this->container['chemical_type'] = $chemical_type;

        return $this;
    }

    /**
     * Gets cato_us_shipment_allowed_indicator
     *
     * @return string
     */
    public function getCatoUsShipmentAllowedIndicator()
    {
        return $this->container['cato_us_shipment_allowed_indicator'];
    }

    /**
     * Sets cato_us_shipment_allowed_indicator
     *
     * @param string $cato_us_shipment_allowed_indicator CAToUSShipmentAllowedIndicator indicates whether this checmical is allowed from CA to US Applicable only for TDG shipments  Y = Permitted from CA to US N = Not Permitted from CA to US
     *
     * @return $this
     */
    public function setCatoUsShipmentAllowedIndicator($cato_us_shipment_allowed_indicator)
    {
        $this->container['cato_us_shipment_allowed_indicator'] = $cato_us_shipment_allowed_indicator;

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
