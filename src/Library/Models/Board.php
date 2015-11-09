<?php

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Spinen\ConnectWise\Library\Models;

use \ArrayAccess;
/**
 * Board Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Spinen\ConnectWise\Library
 */
class Board implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    static $swaggerTypes = array(
        'id' => 'int',
        'name' => 'string',
        'location_id' => 'int',
        'business_unit_id' => 'int',
        'inactive' => 'bool',
        'sign_off_template_id' => 'int',
        'send_to_contact' => 'bool',
        'contact_template_id' => 'int',
        'send_to_resource' => 'bool',
        'resource_template_id' => 'int',
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
        'location_id' => 'locationId',
        'business_unit_id' => 'businessUnitId',
        'inactive' => 'inactive',
        'sign_off_template_id' => 'signOffTemplateId',
        'send_to_contact' => 'sendToContact',
        'contact_template_id' => 'contactTemplateId',
        'send_to_resource' => 'sendToResource',
        'resource_template_id' => 'resourceTemplateId',
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
        'location_id' => 'setLocationId',
        'business_unit_id' => 'setBusinessUnitId',
        'inactive' => 'setInactive',
        'sign_off_template_id' => 'setSignOffTemplateId',
        'send_to_contact' => 'setSendToContact',
        'contact_template_id' => 'setContactTemplateId',
        'send_to_resource' => 'setSendToResource',
        'resource_template_id' => 'setResourceTemplateId',
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
        'location_id' => 'getLocationId',
        'business_unit_id' => 'getBusinessUnitId',
        'inactive' => 'getInactive',
        'sign_off_template_id' => 'getSignOffTemplateId',
        'send_to_contact' => 'getSendToContact',
        'contact_template_id' => 'getContactTemplateId',
        'send_to_resource' => 'getSendToResource',
        'resource_template_id' => 'getResourceTemplateId',
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
      * $inactive 
      *
      * @var bool
      */
    protected $inactive;
    
    /**
      * $sign_off_template_id 
      *
      * @var int
      */
    protected $sign_off_template_id;
    
    /**
      * $send_to_contact 
      *
      * @var bool
      */
    protected $send_to_contact;
    
    /**
      * $contact_template_id 
      *
      * @var int
      */
    protected $contact_template_id;
    
    /**
      * $send_to_resource 
      *
      * @var bool
      */
    protected $send_to_resource;
    
    /**
      * $resource_template_id 
      *
      * @var int
      */
    protected $resource_template_id;
    
    /**
      * $_info 
      *
      * @var \Spinen\ConnectWise\Library\Models\Metadata
      */
    protected $_info;
    

    /**
     * New instance of Board.
     *
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->id = $data["id"];
            $this->name = $data["name"];
            $this->location_id = $data["location_id"];
            $this->business_unit_id = $data["business_unit_id"];
            $this->inactive = $data["inactive"];
            $this->sign_off_template_id = $data["sign_off_template_id"];
            $this->send_to_contact = $data["send_to_contact"];
            $this->contact_template_id = $data["contact_template_id"];
            $this->send_to_resource = $data["send_to_resource"];
            $this->resource_template_id = $data["resource_template_id"];
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
     * Gets sign_off_template_id
     *
     * @return int
     */
    public function getSignOffTemplateId()
    {
        return $this->sign_off_template_id;
    }

    /**
     * Sets sign_off_template_id
     *
     * @param int $sign_off_template_id 
     *
     * @return $this
     */
    public function setSignOffTemplateId($sign_off_template_id)
    { 
        $this->sign_off_template_id = $sign_off_template_id;
        return $this;
    }
    
    /**
     * Gets send_to_contact
     *
     * @return bool
     */
    public function getSendToContact()
    {
        return $this->send_to_contact;
    }

    /**
     * Sets send_to_contact
     *
     * @param bool $send_to_contact 
     *
     * @return $this
     */
    public function setSendToContact($send_to_contact)
    { 
        $this->send_to_contact = $send_to_contact;
        return $this;
    }
    
    /**
     * Gets contact_template_id
     *
     * @return int
     */
    public function getContactTemplateId()
    {
        return $this->contact_template_id;
    }

    /**
     * Sets contact_template_id
     *
     * @param int $contact_template_id 
     *
     * @return $this
     */
    public function setContactTemplateId($contact_template_id)
    { 
        $this->contact_template_id = $contact_template_id;
        return $this;
    }
    
    /**
     * Gets send_to_resource
     *
     * @return bool
     */
    public function getSendToResource()
    {
        return $this->send_to_resource;
    }

    /**
     * Sets send_to_resource
     *
     * @param bool $send_to_resource 
     *
     * @return $this
     */
    public function setSendToResource($send_to_resource)
    { 
        $this->send_to_resource = $send_to_resource;
        return $this;
    }
    
    /**
     * Gets resource_template_id
     *
     * @return int
     */
    public function getResourceTemplateId()
    {
        return $this->resource_template_id;
    }

    /**
     * Sets resource_template_id
     *
     * @param int $resource_template_id 
     *
     * @return $this
     */
    public function setResourceTemplateId($resource_template_id)
    { 
        $this->resource_template_id = $resource_template_id;
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