<?php

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Spinen\ConnectWise\Library\Models;

use \ArrayAccess;
/**
 * Count Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Spinen\ConnectWise\Library
 */
class Count implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    static $swaggerTypes = array(
        'count' => 'int'
    );

    /**
      * Array of attributes where the key is the local name, and the value is the original name
      *
      * @var string[]
      */
    static $attributeMap = array(
        'count' => 'count'
    );

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      *
      * @var string[]
      */
    static $setters = array(
        'count' => 'setCount'
    );

    /**
      * Array of attributes to getter functions (for serialization of requests)
      *
      * @var string[]
      */
    static $getters = array(
        'count' => 'getCount'
    );

    
    /**
      * $count 
      *
      * @var int
      */
    protected $count;
    

    /**
     * New instance of Count.
     *
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->count = $data["count"];
        }
    }
    
    /**
     * Gets count
     *
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Sets count
     *
     * @param int $count 
     *
     * @return $this
     */
    public function setCount($count)
    { 
        $this->count = $count;
        return $this;
    }
    
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param  integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }

    /**
     * Gets offset.
     *
     * @param  integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return $this->$offset;
    }

    /**
     * Sets value based on offset.
     *
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }

    /**
     * Unsets offset.
     *
     * @param  integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(get_object_vars($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(get_object_vars($this));
        }
    }
}
