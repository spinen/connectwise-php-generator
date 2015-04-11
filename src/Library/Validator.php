<?php

namespace Spinen\ConnectWise\Library;

use InvalidArgumentException;

/**
 * Class Validator
 *
 * @package Spinen\ConnectWise\Library
 */
class Validator
{

    /**
     * Checks to see if a property needs to ne validated
     *
     * @param array  $options
     * @param array  $rules
     * @param string $property
     *
     * @return bool
     */
    private function needsValidation(array $options, array $rules, $property)
    {
        return (in_array('required', $rules)) || (array_key_exists($property, $options));
    }

    /**
     * Loop through the properties to run their rules
     *
     * @param array $options
     * @param array $rule_collection
     *
     * @return bool
     */
    public function validate(array $options, array $rule_collection)
    {
        foreach (array_dot($rule_collection) as $property => $rules) {
            $rules = explode("|", $rules);

            if ($this->needsValidation($options, $rules, $property)) {
                $this->validateProperty($property, array_get($options, $property, null), $rules);
            }
        }

        return true;
    }

    /**
     * Validator for an array property
     *
     * @param string $property
     * @param string $value
     *
     * @return bool
     * @throws InvalidArgumentException
     */
    public function validateArrayProperty($property, $value)
    {
        if (!is_array($value)) {
            throw new InvalidArgumentException(sprintf("Property [%s] must be of type [ARRAY]", $property));
        }

        return true;
    }

    /**
     * Run the validation rules over the property
     *
     * @param string     $property
     * @param string     $value
     * @param array|null $rules
     *
     * @return bool
     */
    public function validateProperty($property, $value, array $rules = [])
    {
        foreach ($rules as $rule) {
            $validator = "validate" . studly_case($rule) . "Property";

            $this->{$validator}($property, $value);
        }

        return true;
    }

    /**
     * Validator for a required property
     *
     * @param string $property
     * @param string $value
     *
     * @return bool
     * @throws InvalidArgumentException
     */
    public function validateRequiredProperty($property, $value)
    {
        if (is_null($value)) {
            throw new InvalidArgumentException(sprintf("Missing required property [%s]", $property));
        }

        return true;
    }

    /**
     * Validator for the host property
     *
     * @param string $property
     * @param string $value
     *
     * @return bool
     * @throws InvalidArgumentException
     */
    public function validateUrlProperty($property, $value)
    {
        if (!filter_var($value, FILTER_VALIDATE_URL)) {
            throw new InvalidArgumentException(sprintf("Property [%s] must be of type [FILTER_VALIDATE_URL]",
                $property));
        }

        return true;
    }

}
