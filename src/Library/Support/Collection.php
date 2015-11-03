<?php

namespace Spinen\ConnectWise\Library\Support;

use Illuminate\Support\Collection as IlluminateCollection;
use InvalidArgumentException;

/**
 * Class Collection
 *
 * @package Spinen\ConnectWise\Library\Support
 */
class Collection extends IlluminateCollection
{
    /**
     * Getter to make the object fell more like an object
     *
     * @param string $name
     *
     * @return mixed
     */
    function __get($name)
    {
        if ($this->has($name)) {
            return $this->get($name);
        }

        throw new InvalidArgumentException(sprintf("Undefined property: %s", $name));
    }
}
