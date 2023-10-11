<?php
/**
 * LabelResultsMailInnovationsLabelImage
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
 * LabelResultsMailInnovationsLabelImage Class Doc Comment
 *
 * @category Class
 * @description Container to hold Mail Innovations shipments label. The elements needed to render a label on a printer or in a browser. Specifies the format in which GraphicImage is represented. If LabelImageFormat is GIF, LabelImage contains GraphicImage and HTMLImage. Otherwise, it contains only GraphicImage.   Applicable for Single Mail Innovations Returns and Dual Mail Innovations Returns shipment. Returned only if MailInnovationsTrackingNumber is provided in request. If LabelImageFormat requested was PDF and TrackingNumber was present along with MailInnovationsTrackingNumber in the request, only LabelImage container is returned. MailInnovationsLabelImage will not be returned. In that case, the labels for Small Package Tracking Number and Mail Innovations Tracking Number will be stitched in single PDF file.
 * @package  UPS\Shipping
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LabelResultsMailInnovationsLabelImage implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LabelResults_MailInnovationsLabelImage';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'label_image_format' => '\UPS\Shipping\Shipping\MailInnovationsLabelImageLabelImageFormat',
        'graphic_image' => 'string',
        'html_image' => 'string',
        'pdf417' => 'string',
        'international_signature_graphic_image' => 'string',
        'url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'label_image_format' => null,
        'graphic_image' => null,
        'html_image' => null,
        'pdf417' => null,
        'international_signature_graphic_image' => null,
        'url' => null
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
        'label_image_format' => 'LabelImageFormat',
        'graphic_image' => 'GraphicImage',
        'html_image' => 'HTMLImage',
        'pdf417' => 'PDF417',
        'international_signature_graphic_image' => 'InternationalSignatureGraphicImage',
        'url' => 'URL'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'label_image_format' => 'setLabelImageFormat',
        'graphic_image' => 'setGraphicImage',
        'html_image' => 'setHtmlImage',
        'pdf417' => 'setPdf417',
        'international_signature_graphic_image' => 'setInternationalSignatureGraphicImage',
        'url' => 'setUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'label_image_format' => 'getLabelImageFormat',
        'graphic_image' => 'getGraphicImage',
        'html_image' => 'getHtmlImage',
        'pdf417' => 'getPdf417',
        'international_signature_graphic_image' => 'getInternationalSignatureGraphicImage',
        'url' => 'getUrl'
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
        $this->container['label_image_format'] = isset($data['label_image_format']) ? $data['label_image_format'] : null;
        $this->container['graphic_image'] = isset($data['graphic_image']) ? $data['graphic_image'] : null;
        $this->container['html_image'] = isset($data['html_image']) ? $data['html_image'] : null;
        $this->container['pdf417'] = isset($data['pdf417']) ? $data['pdf417'] : null;
        $this->container['international_signature_graphic_image'] = isset($data['international_signature_graphic_image']) ? $data['international_signature_graphic_image'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['label_image_format'] === null) {
            $invalidProperties[] = "'label_image_format' can't be null";
        }
        if ($this->container['graphic_image'] === null) {
            $invalidProperties[] = "'graphic_image' can't be null";
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
     * Gets label_image_format
     *
     * @return \UPS\Shipping\Shipping\MailInnovationsLabelImageLabelImageFormat
     */
    public function getLabelImageFormat()
    {
        return $this->container['label_image_format'];
    }

    /**
     * Sets label_image_format
     *
     * @param \UPS\Shipping\Shipping\MailInnovationsLabelImageLabelImageFormat $label_image_format label_image_format
     *
     * @return $this
     */
    public function setLabelImageFormat($label_image_format)
    {
        $this->container['label_image_format'] = $label_image_format;

        return $this;
    }

    /**
     * Gets graphic_image
     *
     * @return string
     */
    public function getGraphicImage()
    {
        return $this->container['graphic_image'];
    }

    /**
     * Sets graphic_image
     *
     * @param string $graphic_image Base 64 encoded graphic image.
     *
     * @return $this
     */
    public function setGraphicImage($graphic_image)
    {
        $this->container['graphic_image'] = $graphic_image;

        return $this;
    }

    /**
     * Gets html_image
     *
     * @return string
     */
    public function getHtmlImage()
    {
        return $this->container['html_image'];
    }

    /**
     * Sets html_image
     *
     * @param string $html_image Base 64 encoded html browser image rendering software. This is only returned for GIF image formats.
     *
     * @return $this
     */
    public function setHtmlImage($html_image)
    {
        $this->container['html_image'] = $html_image;

        return $this;
    }

    /**
     * Gets pdf417
     *
     * @return string
     */
    public function getPdf417()
    {
        return $this->container['pdf417'];
    }

    /**
     * Sets pdf417
     *
     * @param string $pdf417 PDF-417 is a two-dimensional barcode, which can store up to about 1,800 printable ASCII characters or 1,100 binary characters per symbol. The symbol is rectangular. The PDF417 image will be returned when the shipment is trans-border and the service option is one of the following: Standard, Express Saver or Express Plus.  The image is Base 64 encoded and only returned for GIF image format
     *
     * @return $this
     */
    public function setPdf417($pdf417)
    {
        $this->container['pdf417'] = $pdf417;

        return $this;
    }

    /**
     * Gets international_signature_graphic_image
     *
     * @return string
     */
    public function getInternationalSignatureGraphicImage()
    {
        return $this->container['international_signature_graphic_image'];
    }

    /**
     * Sets international_signature_graphic_image
     *
     * @param string $international_signature_graphic_image Base 64 encoded graphic image of the Warsaw text and signature box.  EPL2, ZPL and SPL labels. The image will be returned for non-US based shipments. One image will be given per shipment and it will be in the first PackageResults container.
     *
     * @return $this
     */
    public function setInternationalSignatureGraphicImage($international_signature_graphic_image)
    {
        $this->container['international_signature_graphic_image'] = $international_signature_graphic_image;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url This is only returned if the label link is requested to be returned and only at the first package result  Applicable for following types of shipments: Print/Electronic Return Label
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

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
