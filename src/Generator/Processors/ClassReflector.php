<?php

namespace Spinen\ConnectWise\Generator\Processors;

use InvalidArgumentException;
use ReflectionClass;

/**
 * Class ClassReflector
 *
 * @package Spinen\ConnectWise\Generator\Processors
 */
class ClassReflector implements ProcessorInterface
{

    /**
     * Build a Reflection of the class
     *
     * @param string $class
     *
     * @return ReflectionClass
     * @throws InvalidArgumentException
     */
    public function process($class)
    {
        if (!is_string($class)) {
            throw new InvalidArgumentException("process expects a string to work with.");
        }

        return (new ReflectionClass($class));
    }

}
