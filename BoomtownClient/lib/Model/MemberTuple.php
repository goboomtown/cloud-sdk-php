<?php
/**
 * MemberTuple
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
/**
 *  Copyright 2016 SmartBear Software
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
/**
 * MemberTuple Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class MemberTuple implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'member' => '\Swagger\Client\Model\Member',
        'member_user' => '\Swagger\Client\Model\MemberUser',
        'member_location' => '\Swagger\Client\Model\MemberLocation'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'member' => 'member',
        'member_user' => 'member_user',
        'member_location' => 'member_location'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'member' => 'setMember',
        'member_user' => 'setMemberUser',
        'member_location' => 'setMemberLocation'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'member' => 'getMember',
        'member_user' => 'getMemberUser',
        'member_location' => 'getMemberLocation'
    );
  
    
    /**
      * $member 
      * @var \Swagger\Client\Model\Member
      */
    protected $member;
    
    /**
      * $member_user 
      * @var \Swagger\Client\Model\MemberUser
      */
    protected $member_user;
    
    /**
      * $member_location 
      * @var \Swagger\Client\Model\MemberLocation
      */
    protected $member_location;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->member = $data["member"];
            $this->member_user = $data["member_user"];
            $this->member_location = $data["member_location"];
        }
    }
    
    /**
     * Gets member
     * @return \Swagger\Client\Model\Member
     */
    public function getMember()
    {
        return $this->member;
    }
  
    /**
     * Sets member
     * @param \Swagger\Client\Model\Member $member 
     * @return $this
     */
    public function setMember($member)
    {
        
        $this->member = $member;
        return $this;
    }
    
    /**
     * Gets member_user
     * @return \Swagger\Client\Model\MemberUser
     */
    public function getMemberUser()
    {
        return $this->member_user;
    }
  
    /**
     * Sets member_user
     * @param \Swagger\Client\Model\MemberUser $member_user 
     * @return $this
     */
    public function setMemberUser($member_user)
    {
        
        $this->member_user = $member_user;
        return $this;
    }
    
    /**
     * Gets member_location
     * @return \Swagger\Client\Model\MemberLocation
     */
    public function getMemberLocation()
    {
        return $this->member_location;
    }
  
    /**
     * Sets member_location
     * @param \Swagger\Client\Model\MemberLocation $member_location 
     * @return $this
     */
    public function setMemberLocation($member_location)
    {
        
        $this->member_location = $member_location;
        return $this;
    }
    
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset 
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }
  
    /**
     * Gets offset.
     * @param  integer $offset Offset 
     * @return mixed 
     */
    public function offsetGet($offset)
    {
        return $this->$offset;
    }
  
    /**
     * Sets value based on offset.
     * @param  integer $offset Offset 
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }
  
    /**
     * Unsets offset.
     * @param  integer $offset Offset 
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }
  
    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
        }
    }
}
