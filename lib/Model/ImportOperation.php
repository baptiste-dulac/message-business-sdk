<?php
/**
 * ImportOperation
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Message Business API
 *
 * REST API allowing you to interact with your message business account.
 *
 * OpenAPI spec version: v4
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * ImportOperation Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ImportOperation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ImportOperation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'name' => 'string',
        'start_date' => 'string',
        'status' => 'string',
        'link' => 'string',
        'line_read' => 'int',
        'line_duplicate' => 'int',
        'line_add' => 'int',
        'line_update' => 'int',
        'line_import' => 'int',
        'line_error' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
        'name' => null,
        'start_date' => null,
        'status' => null,
        'link' => null,
        'line_read' => 'int32',
        'line_duplicate' => 'int32',
        'line_add' => 'int32',
        'line_update' => 'int32',
        'line_import' => 'int32',
        'line_error' => 'int32'
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
        'id' => 'Id',
        'name' => 'Name',
        'start_date' => 'StartDate',
        'status' => 'Status',
        'link' => 'Link',
        'line_read' => 'LineRead',
        'line_duplicate' => 'LineDuplicate',
        'line_add' => 'LineAdd',
        'line_update' => 'LineUpdate',
        'line_import' => 'LineImport',
        'line_error' => 'LineError'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'start_date' => 'setStartDate',
        'status' => 'setStatus',
        'link' => 'setLink',
        'line_read' => 'setLineRead',
        'line_duplicate' => 'setLineDuplicate',
        'line_add' => 'setLineAdd',
        'line_update' => 'setLineUpdate',
        'line_import' => 'setLineImport',
        'line_error' => 'setLineError'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'start_date' => 'getStartDate',
        'status' => 'getStatus',
        'link' => 'getLink',
        'line_read' => 'getLineRead',
        'line_duplicate' => 'getLineDuplicate',
        'line_add' => 'getLineAdd',
        'line_update' => 'getLineUpdate',
        'line_import' => 'getLineImport',
        'line_error' => 'getLineError'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['link'] = isset($data['link']) ? $data['link'] : null;
        $this->container['line_read'] = isset($data['line_read']) ? $data['line_read'] : null;
        $this->container['line_duplicate'] = isset($data['line_duplicate']) ? $data['line_duplicate'] : null;
        $this->container['line_add'] = isset($data['line_add']) ? $data['line_add'] : null;
        $this->container['line_update'] = isset($data['line_update']) ? $data['line_update'] : null;
        $this->container['line_import'] = isset($data['line_import']) ? $data['line_import'] : null;
        $this->container['line_error'] = isset($data['line_error']) ? $data['line_error'] : null;
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

        return true;
    }


    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets start_date
     *
     * @return string
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param string $start_date start_date
     *
     * @return $this
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets link
     *
     * @return string
     */
    public function getLink()
    {
        return $this->container['link'];
    }

    /**
     * Sets link
     *
     * @param string $link link
     *
     * @return $this
     */
    public function setLink($link)
    {
        $this->container['link'] = $link;

        return $this;
    }

    /**
     * Gets line_read
     *
     * @return int
     */
    public function getLineRead()
    {
        return $this->container['line_read'];
    }

    /**
     * Sets line_read
     *
     * @param int $line_read line_read
     *
     * @return $this
     */
    public function setLineRead($line_read)
    {
        $this->container['line_read'] = $line_read;

        return $this;
    }

    /**
     * Gets line_duplicate
     *
     * @return int
     */
    public function getLineDuplicate()
    {
        return $this->container['line_duplicate'];
    }

    /**
     * Sets line_duplicate
     *
     * @param int $line_duplicate line_duplicate
     *
     * @return $this
     */
    public function setLineDuplicate($line_duplicate)
    {
        $this->container['line_duplicate'] = $line_duplicate;

        return $this;
    }

    /**
     * Gets line_add
     *
     * @return int
     */
    public function getLineAdd()
    {
        return $this->container['line_add'];
    }

    /**
     * Sets line_add
     *
     * @param int $line_add line_add
     *
     * @return $this
     */
    public function setLineAdd($line_add)
    {
        $this->container['line_add'] = $line_add;

        return $this;
    }

    /**
     * Gets line_update
     *
     * @return int
     */
    public function getLineUpdate()
    {
        return $this->container['line_update'];
    }

    /**
     * Sets line_update
     *
     * @param int $line_update line_update
     *
     * @return $this
     */
    public function setLineUpdate($line_update)
    {
        $this->container['line_update'] = $line_update;

        return $this;
    }

    /**
     * Gets line_import
     *
     * @return int
     */
    public function getLineImport()
    {
        return $this->container['line_import'];
    }

    /**
     * Sets line_import
     *
     * @param int $line_import line_import
     *
     * @return $this
     */
    public function setLineImport($line_import)
    {
        $this->container['line_import'] = $line_import;

        return $this;
    }

    /**
     * Gets line_error
     *
     * @return int
     */
    public function getLineError()
    {
        return $this->container['line_error'];
    }

    /**
     * Sets line_error
     *
     * @param int $line_error line_error
     *
     * @return $this
     */
    public function setLineError($line_error)
    {
        $this->container['line_error'] = $line_error;

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


