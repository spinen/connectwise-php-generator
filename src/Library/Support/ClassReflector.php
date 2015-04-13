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
     * @param string $class
     *
     * @return ReflectionClass
     * @throws InvalidArgumentException
     */
    public function reflect($class)
    {
        if (!is_string($class)) {
            throw new InvalidArgumentException("process expects a string to work with.");
        }

        return new ReflectionClass($class);
    }

}
