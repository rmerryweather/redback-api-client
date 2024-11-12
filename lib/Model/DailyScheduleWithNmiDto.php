<?php
/**
 * DailyScheduleWithNmiDto
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
 * DailyScheduleWithNmiDto Class Doc Comment
 *
 * @category Class
 * @description Daily Schedules
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DailyScheduleWithNmiDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DailyScheduleWithNmiDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'site_id' => 'string',
        'start_time' => 'string',
        'duration' => 'string',
        'days_active' => 'AllOfDailyScheduleWithNmiDtoDaysActive',
        'timezone_iana' => 'string',
        'desired_mode' => 'AllOfDailyScheduleWithNmiDtoDesiredMode',
        'nmi' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'site_id' => null,
        'start_time' => 'time-span',
        'duration' => 'time-span',
        'days_active' => null,
        'timezone_iana' => null,
        'desired_mode' => null,
        'nmi' => null
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
        'site_id' => 'SiteId',
        'start_time' => 'StartTime',
        'duration' => 'Duration',
        'days_active' => 'DaysActive',
        'timezone_iana' => 'TimezoneIANA',
        'desired_mode' => 'DesiredMode',
        'nmi' => 'Nmi'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'site_id' => 'setSiteId',
        'start_time' => 'setStartTime',
        'duration' => 'setDuration',
        'days_active' => 'setDaysActive',
        'timezone_iana' => 'setTimezoneIana',
        'desired_mode' => 'setDesiredMode',
        'nmi' => 'setNmi'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'site_id' => 'getSiteId',
        'start_time' => 'getStartTime',
        'duration' => 'getDuration',
        'days_active' => 'getDaysActive',
        'timezone_iana' => 'getTimezoneIana',
        'desired_mode' => 'getDesiredMode',
        'nmi' => 'getNmi'
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
        $this->container['site_id'] = isset($data['site_id']) ? $data['site_id'] : null;
        $this->container['start_time'] = isset($data['start_time']) ? $data['start_time'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['days_active'] = isset($data['days_active']) ? $data['days_active'] : null;
        $this->container['timezone_iana'] = isset($data['timezone_iana']) ? $data['timezone_iana'] : null;
        $this->container['desired_mode'] = isset($data['desired_mode']) ? $data['desired_mode'] : null;
        $this->container['nmi'] = isset($data['nmi']) ? $data['nmi'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['start_time'] === null) {
            $invalidProperties[] = "'start_time' can't be null";
        }
        if ($this->container['duration'] === null) {
            $invalidProperties[] = "'duration' can't be null";
        }
        if ($this->container['days_active'] === null) {
            $invalidProperties[] = "'days_active' can't be null";
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
     * Gets site_id
     *
     * @return string
     */
    public function getSiteId()
    {
        return $this->container['site_id'];
    }

    /**
     * Sets site_id
     *
     * @param string $site_id SiteId
     *
     * @return $this
     */
    public function setSiteId($site_id)
    {
        $this->container['site_id'] = $site_id;

        return $this;
    }

    /**
     * Gets start_time
     *
     * @return string
     */
    public function getStartTime()
    {
        return $this->container['start_time'];
    }

    /**
     * Sets start_time
     *
     * @param string $start_time Start Time
     *
     * @return $this
     */
    public function setStartTime($start_time)
    {
        $this->container['start_time'] = $start_time;

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
     * Gets days_active
     *
     * @return AllOfDailyScheduleWithNmiDtoDaysActive
     */
    public function getDaysActive()
    {
        return $this->container['days_active'];
    }

    /**
     * Sets days_active
     *
     * @param AllOfDailyScheduleWithNmiDtoDaysActive $days_active Days Active
     *
     * @return $this
     */
    public function setDaysActive($days_active)
    {
        $this->container['days_active'] = $days_active;

        return $this;
    }

    /**
     * Gets timezone_iana
     *
     * @return string
     */
    public function getTimezoneIana()
    {
        return $this->container['timezone_iana'];
    }

    /**
     * Sets timezone_iana
     *
     * @param string $timezone_iana Timezone IANA
     *
     * @return $this
     */
    public function setTimezoneIana($timezone_iana)
    {
        $this->container['timezone_iana'] = $timezone_iana;

        return $this;
    }

    /**
     * Gets desired_mode
     *
     * @return AllOfDailyScheduleWithNmiDtoDesiredMode
     */
    public function getDesiredMode()
    {
        return $this->container['desired_mode'];
    }

    /**
     * Sets desired_mode
     *
     * @param AllOfDailyScheduleWithNmiDtoDesiredMode $desired_mode Desired Mode
     *
     * @return $this
     */
    public function setDesiredMode($desired_mode)
    {
        $this->container['desired_mode'] = $desired_mode;

        return $this;
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
     * @param string $nmi Nmi for a site
     *
     * @return $this
     */
    public function setNmi($nmi)
    {
        $this->container['nmi'] = $nmi;

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
