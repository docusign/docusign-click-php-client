<?php
/**
 * ClickwrapVersionsDeleteResponse
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  DocuSign\Click
 * @author   Swagger Codegen team <apihelp@docusign.com>
 * @license  The DocuSign PHP Client SDK is licensed under the MIT License.
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * DocuSign Click API
 *
 * DocuSign Click lets you capture consent to standard agreement terms with a single click: terms and conditions, terms of service, terms of use, privacy policies, and more. The Click API lets you include this customizable clickwrap solution in your DocuSign integrations.
 *
 * OpenAPI spec version: v1
 * Contact: devcenter@docusign.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.21-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace DocuSign\Click\Model;

use \ArrayAccess;
use DocuSign\Click\ObjectSerializer;

/**
 * ClickwrapVersionsDeleteResponse Class Doc Comment
 *
 * @category    Class
 * @package     DocuSign\Click
 * @author      Swagger Codegen team <apihelp@docusign.com>
 * @license     The DocuSign PHP Client SDK is licensed under the MIT License.
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ClickwrapVersionsDeleteResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'clickwrapVersionsDeleteResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'clickwrap_id' => '?string',
        'clickwrap_name' => '?string',
        'versions' => '\DocuSign\Click\Model\ClickwrapVersionDeleteResponse[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'clickwrap_id' => null,
        'clickwrap_name' => null,
        'versions' => null
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
        'clickwrap_id' => 'clickwrapId',
        'clickwrap_name' => 'clickwrapName',
        'versions' => 'versions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'clickwrap_id' => 'setClickwrapId',
        'clickwrap_name' => 'setClickwrapName',
        'versions' => 'setVersions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'clickwrap_id' => 'getClickwrapId',
        'clickwrap_name' => 'getClickwrapName',
        'versions' => 'getVersions'
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
        $this->container['clickwrap_id'] = isset($data['clickwrap_id']) ? $data['clickwrap_id'] : null;
        $this->container['clickwrap_name'] = isset($data['clickwrap_name']) ? $data['clickwrap_name'] : null;
        $this->container['versions'] = isset($data['versions']) ? $data['versions'] : null;
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
     * Gets clickwrap_id
     *
     * @return ?string
     */
    public function getClickwrapId()
    {
        return $this->container['clickwrap_id'];
    }

    /**
     * Sets clickwrap_id
     *
     * @param ?string $clickwrap_id 
     *
     * @return $this
     */
    public function setClickwrapId($clickwrap_id)
    {
        $this->container['clickwrap_id'] = $clickwrap_id;

        return $this;
    }

    /**
     * Gets clickwrap_name
     *
     * @return ?string
     */
    public function getClickwrapName()
    {
        return $this->container['clickwrap_name'];
    }

    /**
     * Sets clickwrap_name
     *
     * @param ?string $clickwrap_name 
     *
     * @return $this
     */
    public function setClickwrapName($clickwrap_name)
    {
        $this->container['clickwrap_name'] = $clickwrap_name;

        return $this;
    }

    /**
     * Gets versions
     *
     * @return \DocuSign\Click\Model\ClickwrapVersionDeleteResponse[]
     */
    public function getVersions()
    {
        return $this->container['versions'];
    }

    /**
     * Sets versions
     *
     * @param \DocuSign\Click\Model\ClickwrapVersionDeleteResponse[] $versions 
     *
     * @return $this
     */
    public function setVersions($versions)
    {
        $this->container['versions'] = $versions;

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
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

