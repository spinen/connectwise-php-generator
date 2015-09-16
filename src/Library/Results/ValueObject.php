<?php

namespace Spinen\ConnectWise\Library\Results;

use Spinen\ConnectWise\Library\Support\Collection as BaseCollection;

class ValueObject extends BaseCollection
{
    /**
     * Get value from getter or from the collection by key.
     *
     * @param  mixed $key
     * @param  mixed $default
     *
     * @return mixed
     */
    public function get($key, $default = null)
    {
        $getter = 'get' . studly_case($key) . 'Attribute';

        if (method_exists($this, $getter)) {
            return $this->{$getter}();
        }

        return parent::get($key, $default);
    }

    /**
     * Get an item at a given offset.
     *
     * @param mixed $key
     *
     * @return mixed
     */
    public function offsetGet($key)
    {
        return $this->get($key);
    }
}
