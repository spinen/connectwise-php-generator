<?php

namespace Spinen\ConnectWise\Library;

use ArrayAccess;

/**
 * Class Config
 *
 * @package Spinen\ConnectWise\Library
 */
class Config implements ArrayAccess
{
    /**
     * Array to contain configuration items.
     *
     * @var array
     */
    private $configs = [];

    /**
     * Build a Config with passed in config items.
     *
     * @param array $configs
     */
    public function __construct(array $configs = [])
    {
        $this->configs = $configs;
    }

    /**
     * Magic method to get config property.
     *
     * @param $name
     *
     * @return mixed
     */
    public function __get($name)
    {
        return $this->offsetGet($name);
    }

    /**
     * Magic method to set config property.
     *
     * @param $name
     * @param $value
     */
    public function __set($name, $value)
    {
        $this->offsetSet($name, $value);
    }

    /**
     * Magic method to verify config property is set.
     *
     * @param $name
     *
     * @return bool
     */
    public function __isset($name)
    {
        return $this->offsetExists($name);
    }

    /**
     * Magic method to delete config property.
     *
     * @param $name
     */
    public function __unset($name)
    {
        $this->offsetUnset($name);
    }

    /**
     * Check to see if config has key set
     *
     * @param string $name
     *
     * @return bool
     */
    public function has($name)
    {
        return isset($this->configs[$name]);
    }

    /**
     * ArrayAccess method to verify config property is set.
     *
     * @param mixed $offset
     *
     * @return bool
     */
    public function offsetExists($offset)
    {
        return isset($this->configs[$offset]);
    }

    /**
     * ArrayAccess method to get config property.
     *
     * @param mixed $offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return $this->configs[$offset];
    }

    /**
     * ArrayAccess method to verify config property is set.
     *
     * @param mixed $offset
     * @param mixed $value
     */
    public function offsetSet($offset, $value)
    {
        $this->configs[$offset] = $value;
    }

    /**
     * ArrayAccess method to delete config property.
     *
     * @param mixed $offset
     */
    public function offsetUnset($offset)
    {
        unset($this->configs[$offset]);
    }
}
