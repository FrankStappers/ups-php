<?php
/**
 * ContactsProducer
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
 * ContactsProducer Class Doc Comment
 *
 * @category Class
 * @description Information of the producer. The NAFTA Certificate of Origin must be completed, signed, and dated by the exporter.  When the Certificate is completed by the producer for use by the exporter, it must be completed, signed, and dated by the producer. The date must be the date the Certificate was completed and signed.  Applies to NAFTA CO.  Required for NAFTA CO forms.
 * @package  UPS\Shipping
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ContactsProducer implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Contacts_Producer';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'option' => 'string',
        'company_name' => 'string',
        'tax_identification_number' => 'string',
        'address' => '\UPS\Shipping\Shipping\ProducerAddress',
        'attention_name' => 'string',
        'phone' => '\UPS\Shipping\Shipping\ProducerPhone',
        'e_mail_address' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'option' => null,
        'company_name' => null,
        'tax_identification_number' => null,
        'address' => null,
        'attention_name' => null,
        'phone' => null,
        'e_mail_address' => null
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
        'option' => 'Option',
        'company_name' => 'CompanyName',
        'tax_identification_number' => 'TaxIdentificationNumber',
        'address' => 'Address',
        'attention_name' => 'AttentionName',
        'phone' => 'Phone',
        'e_mail_address' => 'EMailAddress'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'option' => 'setOption',
        'company_name' => 'setCompanyName',
        'tax_identification_number' => 'setTaxIdentificationNumber',
        'address' => 'setAddress',
        'attention_name' => 'setAttentionName',
        'phone' => 'setPhone',
        'e_mail_address' => 'setEMailAddress'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'option' => 'getOption',
        'company_name' => 'getCompanyName',
        'tax_identification_number' => 'getTaxIdentificationNumber',
        'address' => 'getAddress',
        'attention_name' => 'getAttentionName',
        'phone' => 'getPhone',
        'e_mail_address' => 'getEMailAddress'
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
        $this->container['option'] = isset($data['option']) ? $data['option'] : null;
        $this->container['company_name'] = isset($data['company_name']) ? $data['company_name'] : null;
        $this->container['tax_identification_number'] = isset($data['tax_identification_number']) ? $data['tax_identification_number'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['attention_name'] = isset($data['attention_name']) ? $data['attention_name'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['e_mail_address'] = isset($data['e_mail_address']) ? $data['e_mail_address'] : null;
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
     * Gets option
     *
     * @return string
     */
    public function getOption()
    {
        return $this->container['option'];
    }

    /**
     * Sets option
     *
     * @param string $option The text associated with the code will be printed in the producer section instead of producer contact information.  Use attached List if more than one producer's good is included on the Certificate, attach a list of additional producers, including the legal name, address (including country or territory), and legal tax identification number, cross-referenced to the goods described in the Description of Goods field.  Applies to NAFTA CO.   Valid values:  01 - AVAILABLE TO CUSTOMS UPON REQUEST 02 - SAME AS EXPORTER 03 - ATTACHED LIST 04 - UNKNOWN
     *
     * @return $this
     */
    public function setOption($option)
    {
        $this->container['option'] = $option;

        return $this;
    }

    /**
     * Gets company_name
     *
     * @return string
     */
    public function getCompanyName()
    {
        return $this->container['company_name'];
    }

    /**
     * Sets company_name
     *
     * @param string $company_name Company Name or the Individual name of the Producer.  Applies to NAFTA CO.  Only applicable when producer option is empty or not present. Conditionally required for: NAFTA CO, when Producer option is not specified.
     *
     * @return $this
     */
    public function setCompanyName($company_name)
    {
        $this->container['company_name'] = $company_name;

        return $this;
    }

    /**
     * Gets tax_identification_number
     *
     * @return string
     */
    public function getTaxIdentificationNumber()
    {
        return $this->container['tax_identification_number'];
    }

    /**
     * Sets tax_identification_number
     *
     * @param string $tax_identification_number Tax ID of the Producer.  Applies to NAFTA CO. Only applicable when producer option is empty or not present
     *
     * @return $this
     */
    public function setTaxIdentificationNumber($tax_identification_number)
    {
        $this->container['tax_identification_number'] = $tax_identification_number;

        return $this;
    }

    /**
     * Gets address
     *
     * @return \UPS\Shipping\Shipping\ProducerAddress
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \UPS\Shipping\Shipping\ProducerAddress $address address
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets attention_name
     *
     * @return string
     */
    public function getAttentionName()
    {
        return $this->container['attention_name'];
    }

    /**
     * Sets attention_name
     *
     * @param string $attention_name Contact name at the Producer location.  Applies to NAFTA CO.
     *
     * @return $this
     */
    public function setAttentionName($attention_name)
    {
        $this->container['attention_name'] = $attention_name;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return \UPS\Shipping\Shipping\ProducerPhone
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param \UPS\Shipping\Shipping\ProducerPhone $phone phone
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets e_mail_address
     *
     * @return string
     */
    public function getEMailAddress()
    {
        return $this->container['e_mail_address'];
    }

    /**
     * Sets e_mail_address
     *
     * @param string $e_mail_address Producer email address.  Applies to NAFTA CO.
     *
     * @return $this
     */
    public function setEMailAddress($e_mail_address)
    {
        $this->container['e_mail_address'] = $e_mail_address;

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
