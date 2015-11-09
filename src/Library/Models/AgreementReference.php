<?php

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Spinen\ConnectWise\Library\Models;

use \ArrayAccess;
/**
 * AgreementReference Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Spinen\ConnectWise\Library
 */
class AgreementReference implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    static $swaggerTypes = array(
        'id' => 'int',
        'name' => 'string',
        '_info' => '\Spinen\ConnectWise\Library\Models\Metadata'
    );

    /**
      * Array of attributes where the key is the local name, and the value is the original name
      *
      * @var string[]
      */
    static $attributeMap = array(
        'id' => 'id',
        'name' => 'name',
        '_info' => '_info'
    );

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      *
      * @var string[]
      */
    static $setters = array(
        'id' => 'setId',
        'name' => 'setName',
        '_info' => 'setInfo'
    );

    /**
      * Array of attributes to getter functions (for serialization of requests)
      *
      * @var string[]
      */
    static $getters = array(
        'id' => 'getId',
        'name' => 'getName',
        '_info' => 'getInfo'
    );

    
    /**
      * $id 
      *
      * @var int
      */
    protected $id;
    
    /**
      * $name 
      *
      * @var string
      */
    protected $name;
    
    /**
      * $_info 
      *
      * @var \Spinen\ConnectWise\Library\Models\Metadata
      */
    protected $_info;
    

    /**
     * New instance of AgreementReference.
     *
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->id = $data["id"];
            $this->name = $data["name"];
            $this->_info = $data["_info"];
        }
    }
    
    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets id
     *
     * @param int $id 
     *
     * @return $this
     */
    public function setId($id)
    { 
        $this->id = $id;
        return $this;
    }
    
    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets name
     *
     * @param string $name 
     *
     * @return $this
     */
    public function setName($name)
    { 
        $this->name = $name;
        return $this;
    }
    
    /**
     * Gets _info
     *
     * @return \Spinen\ConnectWise\Library\Models\Metadata
     */
    public function getInfo()
    {
        return $this->_info;
    }

    /**
     * Sets _info
     *
     * @param \Spinen\ConnectWise\Library\Models\Metadata $_info 
     *
     * @return $this
     */
    public function setInfo($_info)
    { 
        $this->_info = $_info;
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
