<?php
/**
 * PackageServiceOptionsHazMat
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
 * PackageServiceOptionsHazMat Class Doc Comment
 *
 * @category Class
 * @description Container to hold HazMat Chemical Records.
 * @package  UPS\Shipping
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PackageServiceOptionsHazMat implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PackageServiceOptions_HazMat';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'packaging_type_quantity' => 'string',
        'record_identifier1' => 'string',
        'record_identifier2' => 'string',
        'record_identifier3' => 'string',
        'sub_risk_class' => 'string',
        'a_dr_item_number' => 'string',
        'a_dr_packing_group_letter' => 'string',
        'technical_name' => 'string',
        'hazard_label_required' => 'string',
        'class_division_number' => 'string',
        'reference_number' => 'string',
        'quantity' => 'string',
        'uom' => 'string',
        'packaging_type' => 'string',
        'id_number' => 'string',
        'proper_shipping_name' => 'string',
        'additional_description' => 'string',
        'packaging_group_type' => 'string',
        'packaging_instruction_code' => 'string',
        'emergency_phone' => 'string',
        'emergency_contact' => 'string',
        'reportable_quantity' => 'string',
        'regulation_set' => 'string',
        'transportation_mode' => 'string',
        'commodity_regulated_level_code' => 'string',
        'transport_category' => 'string',
        'tunnel_restriction_code' => 'string',
        'chemical_record_identifier' => 'string',
        'local_technical_name' => 'string',
        'local_proper_shipping_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'packaging_type_quantity' => null,
        'record_identifier1' => null,
        'record_identifier2' => null,
        'record_identifier3' => null,
        'sub_risk_class' => null,
        'a_dr_item_number' => null,
        'a_dr_packing_group_letter' => null,
        'technical_name' => null,
        'hazard_label_required' => null,
        'class_division_number' => null,
        'reference_number' => null,
        'quantity' => null,
        'uom' => null,
        'packaging_type' => null,
        'id_number' => null,
        'proper_shipping_name' => null,
        'additional_description' => null,
        'packaging_group_type' => null,
        'packaging_instruction_code' => null,
        'emergency_phone' => null,
        'emergency_contact' => null,
        'reportable_quantity' => null,
        'regulation_set' => null,
        'transportation_mode' => null,
        'commodity_regulated_level_code' => null,
        'transport_category' => null,
        'tunnel_restriction_code' => null,
        'chemical_record_identifier' => null,
        'local_technical_name' => null,
        'local_proper_shipping_name' => null
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
        'packaging_type_quantity' => 'PackagingTypeQuantity',
        'record_identifier1' => 'RecordIdentifier1',
        'record_identifier2' => 'RecordIdentifier2',
        'record_identifier3' => 'RecordIdentifier3',
        'sub_risk_class' => 'SubRiskClass',
        'a_dr_item_number' => 'aDRItemNumber',
        'a_dr_packing_group_letter' => 'aDRPackingGroupLetter',
        'technical_name' => 'TechnicalName',
        'hazard_label_required' => 'HazardLabelRequired',
        'class_division_number' => 'ClassDivisionNumber',
        'reference_number' => 'ReferenceNumber',
        'quantity' => 'Quantity',
        'uom' => 'UOM',
        'packaging_type' => 'PackagingType',
        'id_number' => 'IDNumber',
        'proper_shipping_name' => 'ProperShippingName',
        'additional_description' => 'AdditionalDescription',
        'packaging_group_type' => 'PackagingGroupType',
        'packaging_instruction_code' => 'PackagingInstructionCode',
        'emergency_phone' => 'EmergencyPhone',
        'emergency_contact' => 'EmergencyContact',
        'reportable_quantity' => 'ReportableQuantity',
        'regulation_set' => 'RegulationSet',
        'transportation_mode' => 'TransportationMode',
        'commodity_regulated_level_code' => 'CommodityRegulatedLevelCode',
        'transport_category' => 'TransportCategory',
        'tunnel_restriction_code' => 'TunnelRestrictionCode',
        'chemical_record_identifier' => 'ChemicalRecordIdentifier',
        'local_technical_name' => 'LocalTechnicalName',
        'local_proper_shipping_name' => 'LocalProperShippingName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'packaging_type_quantity' => 'setPackagingTypeQuantity',
        'record_identifier1' => 'setRecordIdentifier1',
        'record_identifier2' => 'setRecordIdentifier2',
        'record_identifier3' => 'setRecordIdentifier3',
        'sub_risk_class' => 'setSubRiskClass',
        'a_dr_item_number' => 'setADrItemNumber',
        'a_dr_packing_group_letter' => 'setADrPackingGroupLetter',
        'technical_name' => 'setTechnicalName',
        'hazard_label_required' => 'setHazardLabelRequired',
        'class_division_number' => 'setClassDivisionNumber',
        'reference_number' => 'setReferenceNumber',
        'quantity' => 'setQuantity',
        'uom' => 'setUom',
        'packaging_type' => 'setPackagingType',
        'id_number' => 'setIdNumber',
        'proper_shipping_name' => 'setProperShippingName',
        'additional_description' => 'setAdditionalDescription',
        'packaging_group_type' => 'setPackagingGroupType',
        'packaging_instruction_code' => 'setPackagingInstructionCode',
        'emergency_phone' => 'setEmergencyPhone',
        'emergency_contact' => 'setEmergencyContact',
        'reportable_quantity' => 'setReportableQuantity',
        'regulation_set' => 'setRegulationSet',
        'transportation_mode' => 'setTransportationMode',
        'commodity_regulated_level_code' => 'setCommodityRegulatedLevelCode',
        'transport_category' => 'setTransportCategory',
        'tunnel_restriction_code' => 'setTunnelRestrictionCode',
        'chemical_record_identifier' => 'setChemicalRecordIdentifier',
        'local_technical_name' => 'setLocalTechnicalName',
        'local_proper_shipping_name' => 'setLocalProperShippingName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'packaging_type_quantity' => 'getPackagingTypeQuantity',
        'record_identifier1' => 'getRecordIdentifier1',
        'record_identifier2' => 'getRecordIdentifier2',
        'record_identifier3' => 'getRecordIdentifier3',
        'sub_risk_class' => 'getSubRiskClass',
        'a_dr_item_number' => 'getADrItemNumber',
        'a_dr_packing_group_letter' => 'getADrPackingGroupLetter',
        'technical_name' => 'getTechnicalName',
        'hazard_label_required' => 'getHazardLabelRequired',
        'class_division_number' => 'getClassDivisionNumber',
        'reference_number' => 'getReferenceNumber',
        'quantity' => 'getQuantity',
        'uom' => 'getUom',
        'packaging_type' => 'getPackagingType',
        'id_number' => 'getIdNumber',
        'proper_shipping_name' => 'getProperShippingName',
        'additional_description' => 'getAdditionalDescription',
        'packaging_group_type' => 'getPackagingGroupType',
        'packaging_instruction_code' => 'getPackagingInstructionCode',
        'emergency_phone' => 'getEmergencyPhone',
        'emergency_contact' => 'getEmergencyContact',
        'reportable_quantity' => 'getReportableQuantity',
        'regulation_set' => 'getRegulationSet',
        'transportation_mode' => 'getTransportationMode',
        'commodity_regulated_level_code' => 'getCommodityRegulatedLevelCode',
        'transport_category' => 'getTransportCategory',
        'tunnel_restriction_code' => 'getTunnelRestrictionCode',
        'chemical_record_identifier' => 'getChemicalRecordIdentifier',
        'local_technical_name' => 'getLocalTechnicalName',
        'local_proper_shipping_name' => 'getLocalProperShippingName'
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
        $this->container['packaging_type_quantity'] = isset($data['packaging_type_quantity']) ? $data['packaging_type_quantity'] : null;
        $this->container['record_identifier1'] = isset($data['record_identifier1']) ? $data['record_identifier1'] : null;
        $this->container['record_identifier2'] = isset($data['record_identifier2']) ? $data['record_identifier2'] : null;
        $this->container['record_identifier3'] = isset($data['record_identifier3']) ? $data['record_identifier3'] : null;
        $this->container['sub_risk_class'] = isset($data['sub_risk_class']) ? $data['sub_risk_class'] : null;
        $this->container['a_dr_item_number'] = isset($data['a_dr_item_number']) ? $data['a_dr_item_number'] : null;
        $this->container['a_dr_packing_group_letter'] = isset($data['a_dr_packing_group_letter']) ? $data['a_dr_packing_group_letter'] : null;
        $this->container['technical_name'] = isset($data['technical_name']) ? $data['technical_name'] : null;
        $this->container['hazard_label_required'] = isset($data['hazard_label_required']) ? $data['hazard_label_required'] : null;
        $this->container['class_division_number'] = isset($data['class_division_number']) ? $data['class_division_number'] : null;
        $this->container['reference_number'] = isset($data['reference_number']) ? $data['reference_number'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['uom'] = isset($data['uom']) ? $data['uom'] : null;
        $this->container['packaging_type'] = isset($data['packaging_type']) ? $data['packaging_type'] : null;
        $this->container['id_number'] = isset($data['id_number']) ? $data['id_number'] : null;
        $this->container['proper_shipping_name'] = isset($data['proper_shipping_name']) ? $data['proper_shipping_name'] : null;
        $this->container['additional_description'] = isset($data['additional_description']) ? $data['additional_description'] : null;
        $this->container['packaging_group_type'] = isset($data['packaging_group_type']) ? $data['packaging_group_type'] : null;
        $this->container['packaging_instruction_code'] = isset($data['packaging_instruction_code']) ? $data['packaging_instruction_code'] : null;
        $this->container['emergency_phone'] = isset($data['emergency_phone']) ? $data['emergency_phone'] : null;
        $this->container['emergency_contact'] = isset($data['emergency_contact']) ? $data['emergency_contact'] : null;
        $this->container['reportable_quantity'] = isset($data['reportable_quantity']) ? $data['reportable_quantity'] : null;
        $this->container['regulation_set'] = isset($data['regulation_set']) ? $data['regulation_set'] : null;
        $this->container['transportation_mode'] = isset($data['transportation_mode']) ? $data['transportation_mode'] : null;
        $this->container['commodity_regulated_level_code'] = isset($data['commodity_regulated_level_code']) ? $data['commodity_regulated_level_code'] : null;
        $this->container['transport_category'] = isset($data['transport_category']) ? $data['transport_category'] : null;
        $this->container['tunnel_restriction_code'] = isset($data['tunnel_restriction_code']) ? $data['tunnel_restriction_code'] : null;
        $this->container['chemical_record_identifier'] = isset($data['chemical_record_identifier']) ? $data['chemical_record_identifier'] : null;
        $this->container['local_technical_name'] = isset($data['local_technical_name']) ? $data['local_technical_name'] : null;
        $this->container['local_proper_shipping_name'] = isset($data['local_proper_shipping_name']) ? $data['local_proper_shipping_name'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['proper_shipping_name'] === null) {
            $invalidProperties[] = "'proper_shipping_name' can't be null";
        }
        if ($this->container['regulation_set'] === null) {
            $invalidProperties[] = "'regulation_set' can't be null";
        }
        if ($this->container['transportation_mode'] === null) {
            $invalidProperties[] = "'transportation_mode' can't be null";
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
     * Gets packaging_type_quantity
     *
     * @return string
     */
    public function getPackagingTypeQuantity()
    {
        return $this->container['packaging_type_quantity'];
    }

    /**
     * Sets packaging_type_quantity
     *
     * @param string $packaging_type_quantity The number of pieces of the specific commodity. Required if CommodityRegulatedLevelCode = LQ or FR.  Valid values are 1 to 999.
     *
     * @return $this
     */
    public function setPackagingTypeQuantity($packaging_type_quantity)
    {
        $this->container['packaging_type_quantity'] = $packaging_type_quantity;

        return $this;
    }

    /**
     * Gets record_identifier1
     *
     * @return string
     */
    public function getRecordIdentifier1()
    {
        return $this->container['record_identifier1'];
    }

    /**
     * Sets record_identifier1
     *
     * @param string $record_identifier1 Reserved for future use.
     *
     * @return $this
     */
    public function setRecordIdentifier1($record_identifier1)
    {
        $this->container['record_identifier1'] = $record_identifier1;

        return $this;
    }

    /**
     * Gets record_identifier2
     *
     * @return string
     */
    public function getRecordIdentifier2()
    {
        return $this->container['record_identifier2'];
    }

    /**
     * Sets record_identifier2
     *
     * @param string $record_identifier2 Reserved for future use.
     *
     * @return $this
     */
    public function setRecordIdentifier2($record_identifier2)
    {
        $this->container['record_identifier2'] = $record_identifier2;

        return $this;
    }

    /**
     * Gets record_identifier3
     *
     * @return string
     */
    public function getRecordIdentifier3()
    {
        return $this->container['record_identifier3'];
    }

    /**
     * Sets record_identifier3
     *
     * @param string $record_identifier3 Reserved for future use.
     *
     * @return $this
     */
    public function setRecordIdentifier3($record_identifier3)
    {
        $this->container['record_identifier3'] = $record_identifier3;

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
     * @param string $sub_risk_class Recommended if CommodityRegulatedLevelCode = LQ or FR and if the field applies to the material by regulation.   Secondary hazardous characteristics of a package. (There can be more than one separate each with a comma).
     *
     * @return $this
     */
    public function setSubRiskClass($sub_risk_class)
    {
        $this->container['sub_risk_class'] = $sub_risk_class;

        return $this;
    }

    /**
     * Gets a_dr_item_number
     *
     * @return string
     */
    public function getADrItemNumber()
    {
        return $this->container['a_dr_item_number'];
    }

    /**
     * Sets a_dr_item_number
     *
     * @param string $a_dr_item_number The type of regulated good for an ADR package where ADR is for Europe to Europe ground movement.
     *
     * @return $this
     */
    public function setADrItemNumber($a_dr_item_number)
    {
        $this->container['a_dr_item_number'] = $a_dr_item_number;

        return $this;
    }

    /**
     * Gets a_dr_packing_group_letter
     *
     * @return string
     */
    public function getADrPackingGroupLetter()
    {
        return $this->container['a_dr_packing_group_letter'];
    }

    /**
     * Sets a_dr_packing_group_letter
     *
     * @param string $a_dr_packing_group_letter Required if the field applies to the material by regulation. Field input is Arabic numerals, output is Roman numerals. Will be shown in Roman Numerals.  Valid values:  1 = I,  2 = II,  3 = III,  and blank.
     *
     * @return $this
     */
    public function setADrPackingGroupLetter($a_dr_packing_group_letter)
    {
        $this->container['a_dr_packing_group_letter'] = $a_dr_packing_group_letter;

        return $this;
    }

    /**
     * Gets technical_name
     *
     * @return string
     */
    public function getTechnicalName()
    {
        return $this->container['technical_name'];
    }

    /**
     * Sets technical_name
     *
     * @param string $technical_name The technical name (when required) for the specified commodity. Recommended if CommodityRegulatedLevelCode = LQ or FR and if the field applies to the material by regulation.
     *
     * @return $this
     */
    public function setTechnicalName($technical_name)
    {
        $this->container['technical_name'] = $technical_name;

        return $this;
    }

    /**
     * Gets hazard_label_required
     *
     * @return string
     */
    public function getHazardLabelRequired()
    {
        return $this->container['hazard_label_required'];
    }

    /**
     * Sets hazard_label_required
     *
     * @param string $hazard_label_required Defines the type of label that is required on the package for the commodity.   Not applicable if CommodityRegulatedLevelCode = LR or EQ.
     *
     * @return $this
     */
    public function setHazardLabelRequired($hazard_label_required)
    {
        $this->container['hazard_label_required'] = $hazard_label_required;

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
     * @param string $class_division_number This is the hazard class associated to the specified commodity.   Required if CommodityRegulatedLevelCode is 'EQ', 'LQ' or 'FR'
     *
     * @return $this
     */
    public function setClassDivisionNumber($class_division_number)
    {
        $this->container['class_division_number'] = $class_division_number;

        return $this;
    }

    /**
     * Gets reference_number
     *
     * @return string
     */
    public function getReferenceNumber()
    {
        return $this->container['reference_number'];
    }

    /**
     * Sets reference_number
     *
     * @param string $reference_number Optional reference number. It will be displayed only on label.
     *
     * @return $this
     */
    public function setReferenceNumber($reference_number)
    {
        $this->container['reference_number'] = $reference_number;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return string
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param string $quantity Required if CommodityRegulatedLevelCode = EQ, LQ or FR. The numerical value of the mass capacity of the regulated good.  Should be more than 0.0. Valid characters are 0-9 and \".\" (Decimal point). Limit to 1 digit after the decimal. The maximum length of the field is 5 including \".\" (Decimal point) and can hold up to 1 decimal place.
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets uom
     *
     * @return string
     */
    public function getUom()
    {
        return $this->container['uom'];
    }

    /**
     * Sets uom
     *
     * @param string $uom Required if CommodityRegulatedLevelCode = LQ, EQ or FR. The unit of measure used for the mass capacity of the regulated good.   For Example: ml, L, g, mg, kg, cylinder, pound, pint, quart, gallon, ounce etc.
     *
     * @return $this
     */
    public function setUom($uom)
    {
        $this->container['uom'] = $uom;

        return $this;
    }

    /**
     * Gets packaging_type
     *
     * @return string
     */
    public function getPackagingType()
    {
        return $this->container['packaging_type'];
    }

    /**
     * Sets packaging_type
     *
     * @param string $packaging_type The type of package used to contain the regulated good. (Ex: Fiberboard Box). Required if CommodityRegulatedLevelCode = LQ or FR.   Ex. FIBERBOARD BOX, WOOD(EN) BOX, PLASTIC JERRICAN, METAL BOX, STEEL DRUM, OTHER, PLASTIC BOX, PLASTIC DRUM, STYROFOAM BOX, CYLINDERS, ENVIROTAINER, PLYWOOD BOX, ALUMINUM DRUM, ALUMINUM CYLINDERS, PLASTIC PAIL, PLYWOOD DRUM, FIBER DRUM, STEEL JERRICAN, ALUMINUM JERRICAN, STEEL BOX, CARTON, ALUMINUM BOX
     *
     * @return $this
     */
    public function setPackagingType($packaging_type)
    {
        $this->container['packaging_type'] = $packaging_type;

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
     * @param string $id_number This is the ID number (UN/NA/ID) for the specified commodity.  Required if CommodityRegulatedLevelCode = LR, LQ or FR and if the field applies to the material by regulation.  UN/NA/ID Identification Number assigned to the specified regulated good. (Include the UN/NA/ID as part of the entry).
     *
     * @return $this
     */
    public function setIdNumber($id_number)
    {
        $this->container['id_number'] = $id_number;

        return $this;
    }

    /**
     * Gets proper_shipping_name
     *
     * @return string
     */
    public function getProperShippingName()
    {
        return $this->container['proper_shipping_name'];
    }

    /**
     * Sets proper_shipping_name
     *
     * @param string $proper_shipping_name The Proper Shipping Name assigned by ADR, CFR or IATA. Required if CommodityRegulatedLevelCode = LR, LQ or FR.
     *
     * @return $this
     */
    public function setProperShippingName($proper_shipping_name)
    {
        $this->container['proper_shipping_name'] = $proper_shipping_name;

        return $this;
    }

    /**
     * Gets additional_description
     *
     * @return string
     */
    public function getAdditionalDescription()
    {
        return $this->container['additional_description'];
    }

    /**
     * Sets additional_description
     *
     * @param string $additional_description Additional remarks or special provision information. Recommended if CommodityRegulatedLevelCode = LQ or FR and if the field applies to the material by regulation.  Additional information that may be required by regulation about a hazardous material, such as, 'Limited Quantity', DOT-SP numbers, EX numbers.
     *
     * @return $this
     */
    public function setAdditionalDescription($additional_description)
    {
        $this->container['additional_description'] = $additional_description;

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
     * @param string $packaging_group_type This is the packing group category associated to the specified commodity. Recommended if CommodityRegulatedLevelCode = LQ or FR and if the field applies to the material by regulation. Must be shown in Roman Numerals.   Valid values: I II III blank
     *
     * @return $this
     */
    public function setPackagingGroupType($packaging_group_type)
    {
        $this->container['packaging_group_type'] = $packaging_group_type;

        return $this;
    }

    /**
     * Gets packaging_instruction_code
     *
     * @return string
     */
    public function getPackagingInstructionCode()
    {
        return $this->container['packaging_instruction_code'];
    }

    /**
     * Sets packaging_instruction_code
     *
     * @param string $packaging_instruction_code The packing instructions related to the chemical record. Required if CommodityRegulatedLevelCode = LQ or FR and if the field applies to the material by regulation.
     *
     * @return $this
     */
    public function setPackagingInstructionCode($packaging_instruction_code)
    {
        $this->container['packaging_instruction_code'] = $packaging_instruction_code;

        return $this;
    }

    /**
     * Gets emergency_phone
     *
     * @return string
     */
    public function getEmergencyPhone()
    {
        return $this->container['emergency_phone'];
    }

    /**
     * Sets emergency_phone
     *
     * @param string $emergency_phone 24 Hour Emergency Phone Number of the shipper. Valid values for this field are (0) through (9) with trailing blanks. For numbers within the U.S., the layout is 1, area code, 7-digit number. For all other countries or territories the layout is country or territory code, area code, number.                        The following are restricted in the phone number   period '.', dash '-', plus sign '+' and conventional parentheses '(' and ')', 'EXT' or 'OPT'
     *
     * @return $this
     */
    public function setEmergencyPhone($emergency_phone)
    {
        $this->container['emergency_phone'] = $emergency_phone;

        return $this;
    }

    /**
     * Gets emergency_contact
     *
     * @return string
     */
    public function getEmergencyContact()
    {
        return $this->container['emergency_contact'];
    }

    /**
     * Sets emergency_contact
     *
     * @param string $emergency_contact The emergency information, contact name and/or contract number, required to be communicated when a call is placed to the EmergencyPhoneNumber. The information is required if there is a value in the EmergencyPhoneNumber field above and the shipment is with a US50 or PR origin and/or destination and the RegulationSet is IATA.
     *
     * @return $this
     */
    public function setEmergencyContact($emergency_contact)
    {
        $this->container['emergency_contact'] = $emergency_contact;

        return $this;
    }

    /**
     * Gets reportable_quantity
     *
     * @return string
     */
    public function getReportableQuantity()
    {
        return $this->container['reportable_quantity'];
    }

    /**
     * Sets reportable_quantity
     *
     * @param string $reportable_quantity Recommended if CommodityRegulatedLevelCode = LQ or FR and if the field applies to the material by regulation. If reportable quantity is met, 'RQ' should be entered.
     *
     * @return $this
     */
    public function setReportableQuantity($reportable_quantity)
    {
        $this->container['reportable_quantity'] = $reportable_quantity;

        return $this;
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
     * @param string $regulation_set The Regulatory set associated with every regulated shipment. It must be same across the shipment.  Valid values:  ADR = Europe to Europe Ground Movement  CFR = HazMat regulated by US Dept. of Transportation within the U.S. or ground shipments to Canada  IATA= Worldwide Air movement  TDG= Canada to Canada ground movement or Canada to U.S. standard movement.  Valid values are ADR, CFR, IATA and TDG. For multiple Chemical Records per package or multiple packages containing different RegulationSet, RegulationSet of first Chemical Record would be considered for validating and rating the entire shipment.
     *
     * @return $this
     */
    public function setRegulationSet($regulation_set)
    {
        $this->container['regulation_set'] = $regulation_set;

        return $this;
    }

    /**
     * Gets transportation_mode
     *
     * @return string
     */
    public function getTransportationMode()
    {
        return $this->container['transportation_mode'];
    }

    /**
     * Sets transportation_mode
     *
     * @param string $transportation_mode Not applicable for ADR regulation set. Required for any other regulation set. Declares that a package was prepared according to ground passenger aircraft or cargo aircraft only.  Valid values:  Highway=Highway  Ground=Ground  PAX=Passenger Aircraft  Passenger Aircraft=Passenger Aircraft  CAO=Cargo Aircraft Only  Cargo Aircraft Only=Cargo Aircraft Only  Valid entries include: Highway, Ground, PAX, Passenger Aircraft, CAO and Cargo Aircraft Only.
     *
     * @return $this
     */
    public function setTransportationMode($transportation_mode)
    {
        $this->container['transportation_mode'] = $transportation_mode;

        return $this;
    }

    /**
     * Gets commodity_regulated_level_code
     *
     * @return string
     */
    public function getCommodityRegulatedLevelCode()
    {
        return $this->container['commodity_regulated_level_code'];
    }

    /**
     * Sets commodity_regulated_level_code
     *
     * @param string $commodity_regulated_level_code Indicates the type of commodity - Fully Regulated (FR), Limited Quantity (LQ), Excepted Quantity (EQ) or Lightly Regulated (LR).  Valid values are LR, FR, LQ and EQ. Required for subversion 1701 or greater. LR and EQ are validated if subversion is 1701 or greater. FR, LQ will be validated if subversion is 1807 or greater
     *
     * @return $this
     */
    public function setCommodityRegulatedLevelCode($commodity_regulated_level_code)
    {
        $this->container['commodity_regulated_level_code'] = $commodity_regulated_level_code;

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
     * @param string $transport_category Transport Category.  Valid values are 0 to 4.
     *
     * @return $this
     */
    public function setTransportCategory($transport_category)
    {
        $this->container['transport_category'] = $transport_category;

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
     * @param string $tunnel_restriction_code Defines what is restricted to pass through a tunnel.
     *
     * @return $this
     */
    public function setTunnelRestrictionCode($tunnel_restriction_code)
    {
        $this->container['tunnel_restriction_code'] = $tunnel_restriction_code;

        return $this;
    }

    /**
     * Gets chemical_record_identifier
     *
     * @return string
     */
    public function getChemicalRecordIdentifier()
    {
        return $this->container['chemical_record_identifier'];
    }

    /**
     * Sets chemical_record_identifier
     *
     * @param string $chemical_record_identifier Identifies the Chemical Record.  Required if SubVersion is greater than or equal to 1701.
     *
     * @return $this
     */
    public function setChemicalRecordIdentifier($chemical_record_identifier)
    {
        $this->container['chemical_record_identifier'] = $chemical_record_identifier;

        return $this;
    }

    /**
     * Gets local_technical_name
     *
     * @return string
     */
    public function getLocalTechnicalName()
    {
        return $this->container['local_technical_name'];
    }

    /**
     * Sets local_technical_name
     *
     * @param string $local_technical_name Technical name in local language.
     *
     * @return $this
     */
    public function setLocalTechnicalName($local_technical_name)
    {
        $this->container['local_technical_name'] = $local_technical_name;

        return $this;
    }

    /**
     * Gets local_proper_shipping_name
     *
     * @return string
     */
    public function getLocalProperShippingName()
    {
        return $this->container['local_proper_shipping_name'];
    }

    /**
     * Sets local_proper_shipping_name
     *
     * @param string $local_proper_shipping_name Proper shipping name in local langauge.
     *
     * @return $this
     */
    public function setLocalProperShippingName($local_proper_shipping_name)
    {
        $this->container['local_proper_shipping_name'] = $local_proper_shipping_name;

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
