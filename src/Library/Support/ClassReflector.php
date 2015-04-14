<?php

namespace Spinen\ConnectWise\Library\Support;

use InvalidArgumentException;
use ReflectionClass;

/**
 * Class ClassReflector
 *
 * @package Spinen\ConnectWise\Library\Support
 */
class ClassReflector
{

    /**
     * Build a Reflection of the class
     *
     * @param mixed $class
     *
     * @return ReflectionClass
     * @throws InvalidArgumentException
     */
    public function reflect($class)
    {
        if (!(is_string($class)) && !(is_object($class))) {
            throw new InvalidArgumentException("ClassReflector expects a string or object to work with.");
        }

        return new ReflectionClass($class);
    }

}
