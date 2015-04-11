<?php

namespace Tests\Spinen\ConnectWise\Library;

use InvalidArgumentException;
use Spinen\ConnectWise\Library\Validator;
use Tests\Spinen\ConnectWise\BaseTest;

/**
 * Class ValidatorTest
 *
 * @package Tests\Spinen\ConnectWise\Library
 * @group   library
 */
class ValidatorTest extends BaseTest
{

    /**
     * @var Validator
     */
    protected $validator;

    protected function setUp()
    {
        $this->validator = new Validator();
    }

    /**
     * @test
     */
    public function it_can_be_constructed()
    {
        $this->assertInstanceOf('Spinen\ConnectWise\Library\Validator', $this->validator);
    }

    /**
     * @test
     */
    public function it_validates_an_array_of_items_with_an_array_of_rules()
    {
        $options = [
            "property 1" => ["value"],
            "property 2" => "something",
        ];

        $rules = [
            "property 1" => "required|array",
            "property 2" => "required",
        ];

        $this->assertTrue($this->validator->validate($options, $rules));
    }

    /**
     * @test
     */
    public function it_does_not_require_a_property_with_a_rule_that_is_not_required()
    {
        $options = [];

        $rules = [
            "property" => "array",
        ];

        $this->assertTrue($this->validator->validate($options, $rules));
    }

    /**
     * @test
     * @expectedException InvalidArgumentException
     */
    public function it_validates_a_non_required_property_if_it_has_a_rule_and_was_provided()
    {
        $options = [
            "property" => "string",
        ];

        $rules = [
            "property" => "array",
        ];

        $this->assertTrue($this->validator->validate($options, $rules));
    }

    /**
     * @test
     */
    public function it_validates_an_array()
    {
        $this->assertTrue($this->validator->validateArrayProperty("array", ["value"]));
    }

    /**
     * @test
     * @expectedException InvalidArgumentException
     */
    public function it_sqawlks_when_validating_an_array_with_something_other_than_an_array()
    {
        $this->validator->validateArrayProperty("none_array", "string");
    }

    /**
     * @test
     */
    public function it_iterates_over_all_rules_for_a_property()
    {
        $this->assertTrue($this->validator->validateProperty("array", ["value"], ['required', 'array']));
    }

    /**
     * @test
     */
    public function it_validates_required()
    {
        $this->assertTrue($this->validator->validateRequiredProperty("array", ["value"]));
    }

    /**
     * @test
     * @expectedException InvalidArgumentException
     */
    public function it_sqawlks_when_validating_a_required_with_something_missing()
    {
        $this->validator->validateRequiredProperty("string", null);
    }

    /**
     * @test
     */
    public function it_validates_an_url()
    {
        $this->assertTrue($this->validator->validateUrlProperty("url", "https://some.url.tld"));
    }

    /**
     * @test
     * @expectedException InvalidArgumentException
     */
    public function it_sqawlks_when_validating_an_url_with_something_other_than_a_url()
    {
        $this->validator->validateUrlProperty("url", "this.is.not.an/url");
    }

}
