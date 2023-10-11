<?php
/**
 * ShipmentShipmentRatingOptions
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
 * ShipmentShipmentRatingOptions Class Doc Comment
 *
 * @category Class
 * @description ShipmentRatingOptions container.
 * @package  UPS\Shipping
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ShipmentShipmentRatingOptions implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Shipment_ShipmentRatingOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'negotiated_rates_indicator' => 'string',
        'frs_shipment_indicator' => 'string',
        'rate_chart_indicator' => 'string',
        'tpfc_negotiated_rates_indicator' => 'string',
        'user_level_discount_indicator' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'negotiated_rates_indicator' => null,
        'frs_shipment_indicator' => null,
        'rate_chart_indicator' => null,
        'tpfc_negotiated_rates_indicator' => null,
        'user_level_discount_indicator' => null
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
        'negotiated_rates_indicator' => 'NegotiatedRatesIndicator',
        'frs_shipment_indicator' => 'FRSShipmentIndicator',
        'rate_chart_indicator' => 'RateChartIndicator',
        'tpfc_negotiated_rates_indicator' => 'TPFCNegotiatedRatesIndicator',
        'user_level_discount_indicator' => 'UserLevelDiscountIndicator'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'negotiated_rates_indicator' => 'setNegotiatedRatesIndicator',
        'frs_shipment_indicator' => 'setFrsShipmentIndicator',
        'rate_chart_indicator' => 'setRateChartIndicator',
        'tpfc_negotiated_rates_indicator' => 'setTpfcNegotiatedRatesIndicator',
        'user_level_discount_indicator' => 'setUserLevelDiscountIndicator'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'negotiated_rates_indicator' => 'getNegotiatedRatesIndicator',
        'frs_shipment_indicator' => 'getFrsShipmentIndicator',
        'rate_chart_indicator' => 'getRateChartIndicator',
        'tpfc_negotiated_rates_indicator' => 'getTpfcNegotiatedRatesIndicator',
        'user_level_discount_indicator' => 'getUserLevelDiscountIndicator'
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
        $this->container['negotiated_rates_indicator'] = isset($data['negotiated_rates_indicator']) ? $data['negotiated_rates_indicator'] : null;
        $this->container['frs_shipment_indicator'] = isset($data['frs_shipment_indicator']) ? $data['frs_shipment_indicator'] : null;
        $this->container['rate_chart_indicator'] = isset($data['rate_chart_indicator']) ? $data['rate_chart_indicator'] : null;
        $this->container['tpfc_negotiated_rates_indicator'] = isset($data['tpfc_negotiated_rates_indicator']) ? $data['tpfc_negotiated_rates_indicator'] : null;
        $this->container['user_level_discount_indicator'] = isset($data['user_level_discount_indicator']) ? $data['user_level_discount_indicator'] : null;
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
     * Gets negotiated_rates_indicator
     *
     * @return string
     */
    public function getNegotiatedRatesIndicator()
    {
        return $this->container['negotiated_rates_indicator'];
    }

    /**
     * Sets negotiated_rates_indicator
     *
     * @param string $negotiated_rates_indicator Negotiated Rates option indicator. If the indicator is present and the Shipper is authorized then Negotiated Rates should be returned in the response.  Negotiated Rates are of two types Account Based Rates (ABR) and Web Discount Rates. Negotiated Rates are only returned for qualified Shipper Account Numbers.   Eligibility is determined using the combination of UserId and the Shipper's Shipper Account Number. If the user is qualified, both Published rates and Negotiated rates are returned to the user. If the UserId and Shipper Account   Number are not qualified for Negotiated rates, a warning message is returned that indicates ineligibility and only the Published rates are returned in the response. As per discount eligibility of user, negotiated rates in the response may contain ABR or Web discount rates.
     *
     * @return $this
     */
    public function setNegotiatedRatesIndicator($negotiated_rates_indicator)
    {
        $this->container['negotiated_rates_indicator'] = $negotiated_rates_indicator;

        return $this;
    }

    /**
     * Gets frs_shipment_indicator
     *
     * @return string
     */
    public function getFrsShipmentIndicator()
    {
        return $this->container['frs_shipment_indicator'];
    }

    /**
     * Sets frs_shipment_indicator
     *
     * @param string $frs_shipment_indicator Ground Freight Pricing Rates option indicator. If the Ground Freight Pricing Shipment indicator is enabled and Shipper number is authorized then Ground Freight Pricing rates should be returned in the response.  The Shipper account number must be qualified to receive Ground Freight Pricing Density Based Shipment rates. Only the Shipper account number taken from /ShipmentRequest/Shipment/FRSPaymentInformation/AccountNumber is used when checking qualification for Ground Freight Pricing Density Based rates.
     *
     * @return $this
     */
    public function setFrsShipmentIndicator($frs_shipment_indicator)
    {
        $this->container['frs_shipment_indicator'] = $frs_shipment_indicator;

        return $this;
    }

    /**
     * Gets rate_chart_indicator
     *
     * @return string
     */
    public function getRateChartIndicator()
    {
        return $this->container['rate_chart_indicator'];
    }

    /**
     * Sets rate_chart_indicator
     *
     * @param string $rate_chart_indicator RateChartIndicator, if present in request, response will contain RateChart element.
     *
     * @return $this
     */
    public function setRateChartIndicator($rate_chart_indicator)
    {
        $this->container['rate_chart_indicator'] = $rate_chart_indicator;

        return $this;
    }

    /**
     * Gets tpfc_negotiated_rates_indicator
     *
     * @return string
     */
    public function getTpfcNegotiatedRatesIndicator()
    {
        return $this->container['tpfc_negotiated_rates_indicator'];
    }

    /**
     * Sets tpfc_negotiated_rates_indicator
     *
     * @param string $tpfc_negotiated_rates_indicator This indicator applies for a third party (3P) / Freight collect (FC) shipment only.   For 3P/FC shipment if the shipper wishes to request for the negotiated rates of the third party then this indicator should be included in the request.   If authorized the 3P/FC negotiated rates will be applied to the shipment and rates will be returned in response.
     *
     * @return $this
     */
    public function setTpfcNegotiatedRatesIndicator($tpfc_negotiated_rates_indicator)
    {
        $this->container['tpfc_negotiated_rates_indicator'] = $tpfc_negotiated_rates_indicator;

        return $this;
    }

    /**
     * Gets user_level_discount_indicator
     *
     * @return string
     */
    public function getUserLevelDiscountIndicator()
    {
        return $this->container['user_level_discount_indicator'];
    }

    /**
     * Sets user_level_discount_indicator
     *
     * @param string $user_level_discount_indicator If this indicator is present user level discount will be applied to rates if applicable  Conditions checked: This indicator should be present Shipper number should not be present User should be eligible for user level discount
     *
     * @return $this
     */
    public function setUserLevelDiscountIndicator($user_level_discount_indicator)
    {
        $this->container['user_level_discount_indicator'] = $user_level_discount_indicator;

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
