<?php
/**
 * ClickwrapVersionSummaryResponse
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
 * Elastic signing (also known as DocuSign Click)  lets you capture consent to standard agreement terms with a single click: terms and conditions, terms of service, terms of use, privacy policies, and more. The Click API lets you include this customizable elastic template solution in your DocuSign integrations.
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
 * ClickwrapVersionSummaryResponse Class Doc Comment
 *
 * @category    Class
 * @package     DocuSign\Click
 * @author      Swagger Codegen team <apihelp@docusign.com>
 * @license     The DocuSign PHP Client SDK is licensed under the MIT License.
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ClickwrapVersionSummaryResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'clickwrapVersionSummaryResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'account_id' => '?string',
        'clickwrap_id' => '?string',
        'clickwrap_name' => '?string',
        'clickwrap_version_id' => '?string',
        'created_time' => 'object',
        'data_fields' => '\DocuSign\Click\Model\DataField[]',
        'last_modified' => 'object',
        'last_modified_by' => '?string',
        'owner_user_id' => '?string',
        'require_reacceptance' => '?bool',
        'scheduled_date' => 'object',
        'scheduled_reacceptance' => '\DocuSign\Click\Model\ClickwrapScheduledReacceptance',
        'status' => '?string',
        'version_id' => '?string',
        'version_number' => '?string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'account_id' => null,
        'clickwrap_id' => null,
        'clickwrap_name' => null,
        'clickwrap_version_id' => null,
        'created_time' => null,
        'data_fields' => null,
        'last_modified' => null,
        'last_modified_by' => null,
        'owner_user_id' => null,
        'require_reacceptance' => null,
        'scheduled_date' => null,
        'scheduled_reacceptance' => null,
        'status' => null,
        'version_id' => null,
        'version_number' => null
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
        'account_id' => 'accountId',
        'clickwrap_id' => 'clickwrapId',
        'clickwrap_name' => 'clickwrapName',
        'clickwrap_version_id' => 'clickwrapVersionId',
        'created_time' => 'createdTime',
        'data_fields' => 'dataFields',
        'last_modified' => 'lastModified',
        'last_modified_by' => 'lastModifiedBy',
        'owner_user_id' => 'ownerUserId',
        'require_reacceptance' => 'requireReacceptance',
        'scheduled_date' => 'scheduledDate',
        'scheduled_reacceptance' => 'scheduledReacceptance',
        'status' => 'status',
        'version_id' => 'versionId',
        'version_number' => 'versionNumber'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_id' => 'setAccountId',
        'clickwrap_id' => 'setClickwrapId',
        'clickwrap_name' => 'setClickwrapName',
        'clickwrap_version_id' => 'setClickwrapVersionId',
        'created_time' => 'setCreatedTime',
        'data_fields' => 'setDataFields',
        'last_modified' => 'setLastModified',
        'last_modified_by' => 'setLastModifiedBy',
        'owner_user_id' => 'setOwnerUserId',
        'require_reacceptance' => 'setRequireReacceptance',
        'scheduled_date' => 'setScheduledDate',
        'scheduled_reacceptance' => 'setScheduledReacceptance',
        'status' => 'setStatus',
        'version_id' => 'setVersionId',
        'version_number' => 'setVersionNumber'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_id' => 'getAccountId',
        'clickwrap_id' => 'getClickwrapId',
        'clickwrap_name' => 'getClickwrapName',
        'clickwrap_version_id' => 'getClickwrapVersionId',
        'created_time' => 'getCreatedTime',
        'data_fields' => 'getDataFields',
        'last_modified' => 'getLastModified',
        'last_modified_by' => 'getLastModifiedBy',
        'owner_user_id' => 'getOwnerUserId',
        'require_reacceptance' => 'getRequireReacceptance',
        'scheduled_date' => 'getScheduledDate',
        'scheduled_reacceptance' => 'getScheduledReacceptance',
        'status' => 'getStatus',
        'version_id' => 'getVersionId',
        'version_number' => 'getVersionNumber'
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
        $this->container['account_id'] = isset($data['account_id']) ? $data['account_id'] : null;
        $this->container['clickwrap_id'] = isset($data['clickwrap_id']) ? $data['clickwrap_id'] : null;
        $this->container['clickwrap_name'] = isset($data['clickwrap_name']) ? $data['clickwrap_name'] : null;
        $this->container['clickwrap_version_id'] = isset($data['clickwrap_version_id']) ? $data['clickwrap_version_id'] : null;
        $this->container['created_time'] = isset($data['created_time']) ? $data['created_time'] : null;
        $this->container['data_fields'] = isset($data['data_fields']) ? $data['data_fields'] : null;
        $this->container['last_modified'] = isset($data['last_modified']) ? $data['last_modified'] : null;
        $this->container['last_modified_by'] = isset($data['last_modified_by']) ? $data['last_modified_by'] : null;
        $this->container['owner_user_id'] = isset($data['owner_user_id']) ? $data['owner_user_id'] : null;
        $this->container['require_reacceptance'] = isset($data['require_reacceptance']) ? $data['require_reacceptance'] : null;
        $this->container['scheduled_date'] = isset($data['scheduled_date']) ? $data['scheduled_date'] : null;
        $this->container['scheduled_reacceptance'] = isset($data['scheduled_reacceptance']) ? $data['scheduled_reacceptance'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['version_id'] = isset($data['version_id']) ? $data['version_id'] : null;
        $this->container['version_number'] = isset($data['version_number']) ? $data['version_number'] : null;
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
     * Gets account_id
     *
     * @return ?string
     */
    public function getAccountId()
    {
        return $this->container['account_id'];
    }

    /**
     * Sets account_id
     *
     * @param ?string $account_id The external account number (int) or account ID GUID.
     *
     * @return $this
     */
    public function setAccountId($account_id)
    {
        $this->container['account_id'] = $account_id;

        return $this;
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
     * @param ?string $clickwrap_id The ID of the clickwrap.
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
     * @param ?string $clickwrap_name The name of the clickwrap.
     *
     * @return $this
     */
    public function setClickwrapName($clickwrap_name)
    {
        $this->container['clickwrap_name'] = $clickwrap_name;

        return $this;
    }

    /**
     * Gets clickwrap_version_id
     *
     * @return ?string
     */
    public function getClickwrapVersionId()
    {
        return $this->container['clickwrap_version_id'];
    }

    /**
     * Sets clickwrap_version_id
     *
     * @param ?string $clickwrap_version_id The unique version ID, a GUID, of this clickwrap version.
     *
     * @return $this
     */
    public function setClickwrapVersionId($clickwrap_version_id)
    {
        $this->container['clickwrap_version_id'] = $clickwrap_version_id;

        return $this;
    }

    /**
     * Gets created_time
     *
     * @return object
     */
    public function getCreatedTime()
    {
        return $this->container['created_time'];
    }

    /**
     * Sets created_time
     *
     * @param object $created_time The time that the clickwrap was created.
     *
     * @return $this
     */
    public function setCreatedTime($created_time)
    {
        $this->container['created_time'] = $created_time;

        return $this;
    }

    /**
     * Gets data_fields
     *
     * @return \DocuSign\Click\Model\DataField[]
     */
    public function getDataFields()
    {
        return $this->container['data_fields'];
    }

    /**
     * Sets data_fields
     *
     * @param \DocuSign\Click\Model\DataField[] $data_fields The list of all the data fields available for the clickwrap (custom fields and standard fields).
     *
     * @return $this
     */
    public function setDataFields($data_fields)
    {
        $this->container['data_fields'] = $data_fields;

        return $this;
    }

    /**
     * Gets last_modified
     *
     * @return object
     */
    public function getLastModified()
    {
        return $this->container['last_modified'];
    }

    /**
     * Sets last_modified
     *
     * @param object $last_modified The time that the clickwrap was last modified.
     *
     * @return $this
     */
    public function setLastModified($last_modified)
    {
        $this->container['last_modified'] = $last_modified;

        return $this;
    }

    /**
     * Gets last_modified_by
     *
     * @return ?string
     */
    public function getLastModifiedBy()
    {
        return $this->container['last_modified_by'];
    }

    /**
     * Sets last_modified_by
     *
     * @param ?string $last_modified_by The user ID of the last user who modified this clickwrap.
     *
     * @return $this
     */
    public function setLastModifiedBy($last_modified_by)
    {
        $this->container['last_modified_by'] = $last_modified_by;

        return $this;
    }

    /**
     * Gets owner_user_id
     *
     * @return ?string
     */
    public function getOwnerUserId()
    {
        return $this->container['owner_user_id'];
    }

    /**
     * Sets owner_user_id
     *
     * @param ?string $owner_user_id The user ID of the owner of this clickwrap.
     *
     * @return $this
     */
    public function setOwnerUserId($owner_user_id)
    {
        $this->container['owner_user_id'] = $owner_user_id;

        return $this;
    }

    /**
     * Gets require_reacceptance
     *
     * @return ?bool
     */
    public function getRequireReacceptance()
    {
        return $this->container['require_reacceptance'];
    }

    /**
     * Sets require_reacceptance
     *
     * @param ?bool $require_reacceptance When **true,** requires signers who have previously agreed to this clickwrap to sign again. The version number is incremented.
     *
     * @return $this
     */
    public function setRequireReacceptance($require_reacceptance)
    {
        $this->container['require_reacceptance'] = $require_reacceptance;

        return $this;
    }

    /**
     * Gets scheduled_date
     *
     * @return object
     */
    public function getScheduledDate()
    {
        return $this->container['scheduled_date'];
    }

    /**
     * Sets scheduled_date
     *
     * @param object $scheduled_date The time and date when this clickwrap is activated.
     *
     * @return $this
     */
    public function setScheduledDate($scheduled_date)
    {
        $this->container['scheduled_date'] = $scheduled_date;

        return $this;
    }

    /**
     * Gets scheduled_reacceptance
     *
     * @return \DocuSign\Click\Model\ClickwrapScheduledReacceptance
     */
    public function getScheduledReacceptance()
    {
        return $this->container['scheduled_reacceptance'];
    }

    /**
     * Sets scheduled_reacceptance
     *
     * @param \DocuSign\Click\Model\ClickwrapScheduledReacceptance $scheduled_reacceptance Specifies the interval between reacceptances in days, weeks, months, or years.
     *
     * @return $this
     */
    public function setScheduledReacceptance($scheduled_reacceptance)
    {
        $this->container['scheduled_reacceptance'] = $scheduled_reacceptance;

        return $this;
    }

    /**
     * Gets status
     *
     * @return ?string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param ?string $status Clickwrap status. Possible values:  - `active` - `inactive` - `deleted`
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets version_id
     *
     * @return ?string
     */
    public function getVersionId()
    {
        return $this->container['version_id'];
    }

    /**
     * Sets version_id
     *
     * @param ?string $version_id The ID of the version.
     *
     * @return $this
     */
    public function setVersionId($version_id)
    {
        $this->container['version_id'] = $version_id;

        return $this;
    }

    /**
     * Gets version_number
     *
     * @return ?string
     */
    public function getVersionNumber()
    {
        return $this->container['version_number'];
    }

    /**
     * Sets version_number
     *
     * @param ?string $version_number Version of the clickwrap.
     *
     * @return $this
     */
    public function setVersionNumber($version_number)
    {
        $this->container['version_number'] = $version_number;

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

