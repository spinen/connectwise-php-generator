<?php

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Spinen\ConnectWise\Library\Models;

use \ArrayAccess;
/**
 * PatchOperation Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Spinen\ConnectWise\Library
 */
class PatchOperation implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    static $swaggerTypes = array(
        'op' => 'string',
        'path' => 'string',
        'value' => 'string'
    );

    /**
      * Array of attributes where the key is the local name, and the value is the original name
      *
      * @var string[]
      */
    static $attributeMap = array(
        'op' => 'op',
        'path' => 'path',
        'value' => 'value'
    );

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      *
      * @var string[]
      */
    static $setters = array(
        'op' => 'setOp',
        'path' => 'setPath',
        'value' => 'setValue'
    );

    /**
      * Array of attributes to getter functions (for serialization of requests)
      *
      * @var string[]
      */
    static $getters = array(
        'op' => 'getOp',
        'path' => 'getPath',
        'value' => 'getValue'
    );

    
    /**
      * $op 
      *
      * @var string
      */
    protected $op;
    
    /**
      * $path 
      *
      * @var string
      */
    protected $path;
    
    /**
      * $value 
      *
      * @var string
      */
    protected $value;
    

    /**
     * New instance of PatchOperation.
     *
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->op = $data["op"];
            $this->path = $data["path"];
            $this->value = $data["value"];
        }
    }
    
    /**
     * Gets op
     *
     * @return string
     */
    public function getOp()
    {
        return $this->op;
    }

    /**
     * Sets op
     *
     * @param string $op 
     *
     * @return $this
     */
    public function setOp($op)
    { 
        $this->op = $op;
        return $this;
    }
    
    /**
     * Gets path
     *
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Sets path
     *
     * @param string $path 
     *
     * @return $this
     */
    public function setPath($path)
    { 
        $this->path = $path;
        return $this;
    }
    
    /**
     * Gets value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets value
     *
     * @param string $value 
     *
     * @return $this
     */
    public function setValue($value)
    { 
        $this->value = $value;
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
