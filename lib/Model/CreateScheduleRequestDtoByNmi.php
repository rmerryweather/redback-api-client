<?php
/**
 * CreateScheduleRequestDtoByNmi
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Redback API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: v2
 * Contact: ITOps@redbacktech.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.64
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
 * CreateScheduleRequestDtoByNmi Class Doc Comment
 *
 * @category Class
 * @description Create Schedule Request By Nmi
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CreateScheduleRequestDtoByNmi implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CreateScheduleRequestDtoByNmi';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'nmi' => 'string',
        'user_notes' => 'string',
        'start_time_utc' => '\DateTime',
        'duration' => 'string',
        'desired_mode' => 'AllOfCreateScheduleRequestDtoByNmiDesiredMode'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'nmi' => null,
        'user_notes' => null,
        'start_time_utc' => 'date-time',
        'duration' => 'time-span',
        'desired_mode' => null
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
        'nmi' => 'Nmi',
        'user_notes' => 'UserNotes',
        'start_time_utc' => 'StartTimeUtc',
        'duration' => 'Duration',
        'desired_mode' => 'DesiredMode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'nmi' => 'setNmi',
        'user_notes' => 'setUserNotes',
        'start_time_utc' => 'setStartTimeUtc',
        'duration' => 'setDuration',
        'desired_mode' => 'setDesiredMode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'nmi' => 'getNmi',
        'user_notes' => 'getUserNotes',
        'start_time_utc' => 'getStartTimeUtc',
        'duration' => 'getDuration',
        'desired_mode' => 'getDesiredMode'
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
        $this->container['nmi'] = isset($data['nmi']) ? $data['nmi'] : null;
        $this->container['user_notes'] = isset($data['user_notes']) ? $data['user_notes'] : null;
        $this->container['start_time_utc'] = isset($data['start_time_utc']) ? $data['start_time_utc'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['desired_mode'] = isset($data['desired_mode']) ? $data['desired_mode'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['start_time_utc'] === null) {
            $invalidProperties[] = "'start_time_utc' can't be null";
        }
        if ($this->container['duration'] === null) {
            $invalidProperties[] = "'duration' can't be null";
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
     * Gets nmi
     *
     * @return string
     */
    public function getNmi()
    {
        return $this->container['nmi'];
    }

    /**
     * Sets nmi
     *
     * @param string $nmi NMI
     *
     * @return $this
     */
    public function setNmi($nmi)
    {
        $this->container['nmi'] = $nmi;

        return $this;
    }

    /**
     * Gets user_notes
     *
     * @return string
     */
    public function getUserNotes()
    {
        return $this->container['user_notes'];
    }

    /**
     * Sets user_notes
     *
     * @param string $user_notes User Notes
     *
     * @return $this
     */
    public function setUserNotes($user_notes)
    {
        $this->container['user_notes'] = $user_notes;

        return $this;
    }

    /**
     * Gets start_time_utc
     *
     * @return \DateTime
     */
    public function getStartTimeUtc()
    {
        return $this->container['start_time_utc'];
    }

    /**
     * Sets start_time_utc
     *
     * @param \DateTime $start_time_utc Start Time Utc
     *
     * @return $this
     */
    public function setStartTimeUtc($start_time_utc)
    {
        $this->container['start_time_utc'] = $start_time_utc;

        return $this;
    }

    /**
     * Gets duration
     *
     * @return string
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     *
     * @param string $duration Duration
     *
     * @return $this
     */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets desired_mode
     *
     * @return AllOfCreateScheduleRequestDtoByNmiDesiredMode
     */
    public function getDesiredMode()
    {
        return $this->container['desired_mode'];
    }

    /**
     * Sets desired_mode
     *
     * @param AllOfCreateScheduleRequestDtoByNmiDesiredMode $desired_mode Desired Mode
     *
     * @return $this
     */
    public function setDesiredMode($desired_mode)
    {
        $this->container['desired_mode'] = $desired_mode;

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
