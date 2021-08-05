<?php
/**
 * LicenseExtendedLicense
 *
 * PHP version 5
 *
 * @category Class
 * @package  Openprovider\Api\Rest\Client\License
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * License
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0.0-beta
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.0.3
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Openprovider\Api\Rest\Client\License\Model;

use \ArrayAccess;
use Openprovider\Api\Rest\Client\Base\ObjectSerializer;
use Openprovider\Api\Rest\Client\Base\ModelInterface;

/**
 * LicenseExtendedLicense Class Doc Comment
 *
 * @category Class
 * @package  Openprovider\Api\Rest\Client\License
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class LicenseExtendedLicense implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'licenseExtendedLicense';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'activation_code' => 'string',
        'billing_type' => 'string',
        'comment' => 'string',
        'contract' => 'string',
        'expiration_date' => 'string',
        'extensions' => '\Openprovider\Api\Rest\Client\License\Model\LicenseExtendedLicense[]',
        'features' => '\Openprovider\Api\Rest\Client\License\Model\LicenseLicenseItem[]',
        'ip_address_binding' => 'string',
        'items' => 'string[]',
        'key' => '\Openprovider\Api\Rest\Client\License\Model\LicenseKey',
        'key_id' => 'int',
        'key_number' => 'string',
        'order_date' => 'string',
        'parent_key_id' => 'int',
        'period' => 'int',
        'product' => 'string',
        'sku_values' => 'map[string,bool]',
        'status' => 'string',
        'title' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'activation_code' => null,
        'billing_type' => null,
        'comment' => null,
        'contract' => null,
        'expiration_date' => null,
        'extensions' => null,
        'features' => null,
        'ip_address_binding' => null,
        'items' => null,
        'key' => null,
        'key_id' => 'int32',
        'key_number' => null,
        'order_date' => null,
        'parent_key_id' => 'int32',
        'period' => 'int32',
        'product' => null,
        'sku_values' => 'boolean',
        'status' => null,
        'title' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'activation_code' => 'activation_code',
        'billing_type' => 'billing_type',
        'comment' => 'comment',
        'contract' => 'contract',
        'expiration_date' => 'expiration_date',
        'extensions' => 'extensions',
        'features' => 'features',
        'ip_address_binding' => 'ip_address_binding',
        'items' => 'items',
        'key' => 'key',
        'key_id' => 'key_id',
        'key_number' => 'key_number',
        'order_date' => 'order_date',
        'parent_key_id' => 'parent_key_id',
        'period' => 'period',
        'product' => 'product',
        'sku_values' => 'sku_values',
        'status' => 'status',
        'title' => 'title'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'activation_code' => 'setActivationCode',
        'billing_type' => 'setBillingType',
        'comment' => 'setComment',
        'contract' => 'setContract',
        'expiration_date' => 'setExpirationDate',
        'extensions' => 'setExtensions',
        'features' => 'setFeatures',
        'ip_address_binding' => 'setIpAddressBinding',
        'items' => 'setItems',
        'key' => 'setKey',
        'key_id' => 'setKeyId',
        'key_number' => 'setKeyNumber',
        'order_date' => 'setOrderDate',
        'parent_key_id' => 'setParentKeyId',
        'period' => 'setPeriod',
        'product' => 'setProduct',
        'sku_values' => 'setSkuValues',
        'status' => 'setStatus',
        'title' => 'setTitle'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'activation_code' => 'getActivationCode',
        'billing_type' => 'getBillingType',
        'comment' => 'getComment',
        'contract' => 'getContract',
        'expiration_date' => 'getExpirationDate',
        'extensions' => 'getExtensions',
        'features' => 'getFeatures',
        'ip_address_binding' => 'getIpAddressBinding',
        'items' => 'getItems',
        'key' => 'getKey',
        'key_id' => 'getKeyId',
        'key_number' => 'getKeyNumber',
        'order_date' => 'getOrderDate',
        'parent_key_id' => 'getParentKeyId',
        'period' => 'getPeriod',
        'product' => 'getProduct',
        'sku_values' => 'getSkuValues',
        'status' => 'getStatus',
        'title' => 'getTitle'
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
        return self::$openAPIModelName;
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
        $this->container['activation_code'] = isset($data['activation_code']) ? $data['activation_code'] : null;
        $this->container['billing_type'] = isset($data['billing_type']) ? $data['billing_type'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['contract'] = isset($data['contract']) ? $data['contract'] : null;
        $this->container['expiration_date'] = isset($data['expiration_date']) ? $data['expiration_date'] : null;
        $this->container['extensions'] = isset($data['extensions']) ? $data['extensions'] : null;
        $this->container['features'] = isset($data['features']) ? $data['features'] : null;
        $this->container['ip_address_binding'] = isset($data['ip_address_binding']) ? $data['ip_address_binding'] : null;
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
        $this->container['key'] = isset($data['key']) ? $data['key'] : null;
        $this->container['key_id'] = isset($data['key_id']) ? $data['key_id'] : null;
        $this->container['key_number'] = isset($data['key_number']) ? $data['key_number'] : null;
        $this->container['order_date'] = isset($data['order_date']) ? $data['order_date'] : null;
        $this->container['parent_key_id'] = isset($data['parent_key_id']) ? $data['parent_key_id'] : null;
        $this->container['period'] = isset($data['period']) ? $data['period'] : null;
        $this->container['product'] = isset($data['product']) ? $data['product'] : null;
        $this->container['sku_values'] = isset($data['sku_values']) ? $data['sku_values'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
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
     * Gets activation_code
     *
     * @return string|null
     */
    public function getActivationCode()
    {
        return $this->container['activation_code'];
    }

    /**
     * Sets activation_code
     *
     * @param string|null $activation_code activation_code
     *
     * @return $this
     */
    public function setActivationCode($activation_code)
    {
        $this->container['activation_code'] = $activation_code;

        return $this;
    }

    /**
     * Gets billing_type
     *
     * @return string|null
     */
    public function getBillingType()
    {
        return $this->container['billing_type'];
    }

    /**
     * Sets billing_type
     *
     * @param string|null $billing_type billing_type
     *
     * @return $this
     */
    public function setBillingType($billing_type)
    {
        $this->container['billing_type'] = $billing_type;

        return $this;
    }

    /**
     * Gets comment
     *
     * @return string|null
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     *
     * @param string|null $comment comment
     *
     * @return $this
     */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Gets contract
     *
     * @return string|null
     */
    public function getContract()
    {
        return $this->container['contract'];
    }

    /**
     * Sets contract
     *
     * @param string|null $contract contract
     *
     * @return $this
     */
    public function setContract($contract)
    {
        $this->container['contract'] = $contract;

        return $this;
    }

    /**
     * Gets expiration_date
     *
     * @return string|null
     */
    public function getExpirationDate()
    {
        return $this->container['expiration_date'];
    }

    /**
     * Sets expiration_date
     *
     * @param string|null $expiration_date expiration_date
     *
     * @return $this
     */
    public function setExpirationDate($expiration_date)
    {
        $this->container['expiration_date'] = $expiration_date;

        return $this;
    }

    /**
     * Gets extensions
     *
     * @return \Openprovider\Api\Rest\Client\License\Model\LicenseExtendedLicense[]|null
     */
    public function getExtensions()
    {
        return $this->container['extensions'];
    }

    /**
     * Sets extensions
     *
     * @param \Openprovider\Api\Rest\Client\License\Model\LicenseExtendedLicense[]|null $extensions extensions
     *
     * @return $this
     */
    public function setExtensions($extensions)
    {
        $this->container['extensions'] = $extensions;

        return $this;
    }

    /**
     * Gets features
     *
     * @return \Openprovider\Api\Rest\Client\License\Model\LicenseLicenseItem[]|null
     */
    public function getFeatures()
    {
        return $this->container['features'];
    }

    /**
     * Sets features
     *
     * @param \Openprovider\Api\Rest\Client\License\Model\LicenseLicenseItem[]|null $features features
     *
     * @return $this
     */
    public function setFeatures($features)
    {
        $this->container['features'] = $features;

        return $this;
    }

    /**
     * Gets ip_address_binding
     *
     * @return string|null
     */
    public function getIpAddressBinding()
    {
        return $this->container['ip_address_binding'];
    }

    /**
     * Sets ip_address_binding
     *
     * @param string|null $ip_address_binding ip_address_binding
     *
     * @return $this
     */
    public function setIpAddressBinding($ip_address_binding)
    {
        $this->container['ip_address_binding'] = $ip_address_binding;

        return $this;
    }

    /**
     * Gets items
     *
     * @return string[]|null
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param string[]|null $items items
     *
     * @return $this
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets key
     *
     * @return \Openprovider\Api\Rest\Client\License\Model\LicenseKey|null
     */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
     * Sets key
     *
     * @param \Openprovider\Api\Rest\Client\License\Model\LicenseKey|null $key key
     *
     * @return $this
     */
    public function setKey($key)
    {
        $this->container['key'] = $key;

        return $this;
    }

    /**
     * Gets key_id
     *
     * @return int|null
     */
    public function getKeyId()
    {
        return $this->container['key_id'];
    }

    /**
     * Sets key_id
     *
     * @param int|null $key_id key_id
     *
     * @return $this
     */
    public function setKeyId($key_id)
    {
        $this->container['key_id'] = $key_id;

        return $this;
    }

    /**
     * Gets key_number
     *
     * @return string|null
     */
    public function getKeyNumber()
    {
        return $this->container['key_number'];
    }

    /**
     * Sets key_number
     *
     * @param string|null $key_number key_number
     *
     * @return $this
     */
    public function setKeyNumber($key_number)
    {
        $this->container['key_number'] = $key_number;

        return $this;
    }

    /**
     * Gets order_date
     *
     * @return string|null
     */
    public function getOrderDate()
    {
        return $this->container['order_date'];
    }

    /**
     * Sets order_date
     *
     * @param string|null $order_date order_date
     *
     * @return $this
     */
    public function setOrderDate($order_date)
    {
        $this->container['order_date'] = $order_date;

        return $this;
    }

    /**
     * Gets parent_key_id
     *
     * @return int|null
     */
    public function getParentKeyId()
    {
        return $this->container['parent_key_id'];
    }

    /**
     * Sets parent_key_id
     *
     * @param int|null $parent_key_id parent_key_id
     *
     * @return $this
     */
    public function setParentKeyId($parent_key_id)
    {
        $this->container['parent_key_id'] = $parent_key_id;

        return $this;
    }

    /**
     * Gets period
     *
     * @return int|null
     */
    public function getPeriod()
    {
        return $this->container['period'];
    }

    /**
     * Sets period
     *
     * @param int|null $period period
     *
     * @return $this
     */
    public function setPeriod($period)
    {
        $this->container['period'] = $period;

        return $this;
    }

    /**
     * Gets product
     *
     * @return string|null
     */
    public function getProduct()
    {
        return $this->container['product'];
    }

    /**
     * Sets product
     *
     * @param string|null $product product
     *
     * @return $this
     */
    public function setProduct($product)
    {
        $this->container['product'] = $product;

        return $this;
    }

    /**
     * Gets sku_values
     *
     * @return map[string,bool]|null
     */
    public function getSkuValues()
    {
        return $this->container['sku_values'];
    }

    /**
     * Sets sku_values
     *
     * @param map[string,bool]|null $sku_values sku_values
     *
     * @return $this
     */
    public function setSkuValues($sku_values)
    {
        $this->container['sku_values'] = $sku_values;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
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
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


