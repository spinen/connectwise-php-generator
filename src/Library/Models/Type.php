<?php

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Spinen\ConnectWise\Library\Models;

use \ArrayAccess;
/**
 * Type Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Spinen\ConnectWise\Library
 */
class Type implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    static $swaggerTypes = array(
        'id' => 'int',
        'name' => 'string',
        'category' => 'string',
        'default_flag' => 'bool',
        'inactive' => 'bool',
        'request_for_change' => 'bool',
        'board_id' => 'int',
        'location_id' => 'int',
        'business_unit_id' => 'int',
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
        'category' => 'category',
        'default_flag' => 'defaultFlag',
        'inactive' => 'inactive',
        'request_for_change' => 'requestForChange',
        'board_id' => 'boardId',
        'location_id' => 'locationId',
        'business_unit_id' => 'businessUnitId',
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
        'category' => 'setCategory',
        'default_flag' => 'setDefaultFlag',
        'inactive' => 'setInactive',
        'request_for_change' => 'setRequestForChange',
        'board_id' => 'setBoardId',
        'location_id' => 'setLocationId',
        'business_unit_id' => 'setBusinessUnitId',
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
        'category' => 'getCategory',
        'default_flag' => 'getDefaultFlag',
        'inactive' => 'getInactive',
        'request_for_change' => 'getRequestForChange',
        'board_id' => 'getBoardId',
        'location_id' => 'getLocationId',
        'business_unit_id' => 'getBusinessUnitId',
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
      * $category 
      *
      * @var string
      */
    protected $category;
    
    /**
      * $default_flag 
      *
      * @var bool
      */
    protected $default_flag;
    
    /**
      * $inactive 
      *
      * @var bool
      */
    protected $inactive;
    
    /**
      * $request_for_change 
      *
      * @var bool
      */
    protected $request_for_change;
    
    /**
      * $board_id 
      *
      * @var int
      */
    protected $board_id;
    
    /**
      * $location_id 
      *
      * @var int
      */
    protected $location_id;
    
    /**
      * $business_unit_id 
      *
      * @var int
      */
    protected $business_unit_id;
    
    /**
      * $_info 
      *
      * @var \Spinen\ConnectWise\Library\Models\Metadata
      */
    protected $_info;
    

    /**
     * New instance of Type.
     *
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->id = $data["id"];
            $this->name = $data["name"];
            $this->category = $data["category"];
            $this->default_flag = $data["default_flag"];
            $this->inactive = $data["inactive"];
            $this->request_for_change = $data["request_for_change"];
            $this->board_id = $data["board_id"];
            $this->location_id = $data["location_id"];
            $this->business_unit_id = $data["business_unit_id"];
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
     * Gets category
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Sets category
     *
     * @param string $category 
     *
     * @return $this
     */
    public function setCategory($category)
    { 
        $allowed_values = array("Reactive", "Proactive");
        if (!in_array($category, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'category', must be one of 'Reactive', 'Proactive'");
        }
        $this->category = $category;
        return $this;
    }
    
    /**
     * Gets default_flag
     *
     * @return bool
     */
    public function getDefaultFlag()
    {
        return $this->default_flag;
    }

    /**
     * Sets default_flag
     *
     * @param bool $default_flag 
     *
     * @return $this
     */
    public function setDefaultFlag($default_flag)
    { 
        $this->default_flag = $default_flag;
        return $this;
    }
    
    /**
     * Gets inactive
     *
     * @return bool
     */
    public function getInactive()
    {
        return $this->inactive;
    }

    /**
     * Sets inactive
     *
     * @param bool $inactive 
     *
     * @return $this
     */
    public function setInactive($inactive)
    { 
        $this->inactive = $inactive;
        return $this;
    }
    
    /**
     * Gets request_for_change
     *
     * @return bool
     */
    public function getRequestForChange()
    {
        return $this->request_for_change;
    }

    /**
     * Sets request_for_change
     *
     * @param bool $request_for_change 
     *
     * @return $this
     */
    public function setRequestForChange($request_for_change)
    { 
        $this->request_for_change = $request_for_change;
        return $this;
    }
    
    /**
     * Gets board_id
     *
     * @return int
     */
    public function getBoardId()
    {
        return $this->board_id;
    }

    /**
     * Sets board_id
     *
     * @param int $board_id 
     *
     * @return $this
     */
    public function setBoardId($board_id)
    { 
        $this->board_id = $board_id;
        return $this;
    }
    
    /**
     * Gets location_id
     *
     * @return int
     */
    public function getLocationId()
    {
        return $this->location_id;
    }

    /**
     * Sets location_id
     *
     * @param int $location_id 
     *
     * @return $this
     */
    public function setLocationId($location_id)
    { 
        $this->location_id = $location_id;
        return $this;
    }
    
    /**
     * Gets business_unit_id
     *
     * @return int
     */
    public function getBusinessUnitId()
    {
        return $this->business_unit_id;
    }

    /**
     * Sets business_unit_id
     *
     * @param int $business_unit_id 
     *
     * @return $this
     */
    public function setBusinessUnitId($business_unit_id)
    { 
        $this->business_unit_id = $business_unit_id;
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