<?php

use Spinen\ConnectWise\BaseTest;

/**
 * Class helperTest
 *
 * @group helper
 */
class helperTest extends BaseTest
{
    /**
     * @test
     */
    public function if_builds_the_expected_path_from_an_array()
    {
        $expected = "directory" . DIRECTORY_SEPARATOR . "file.php";

        $this->assertEquals($expected, build_path(["directory", "file.php"]));
    }

    /**
     * @test
     */
    public function it_takes_second_parameter_as_realpath_trigger()
    {
        $this->assertFalse(build_path(["no", "real", "file.php"], true));
    }

    /**
     * @test
     */
    public function it_takes_third_parameter_for_seperator()
    {
        $expected = "one|two|three";

        $this->assertEquals($expected, build_path(["one", "two", "three"], false, "|"));
    }

    /**
     * @test
     */
    public function it_gets_value_from_environment()
    {
        putenv("TEST_ENV=test value");

        $this->assertEquals("test value", env_value('TEST_ENV'));
    }

    /**
     * @test
     */
    public function it_gets_returns_boolean_true_for_string_true_from_environment()
    {
        putenv("TEST_BOOL_TRUE=true");

        $this->assertTrue(env_value('TEST_BOOL_TRUE'));

        putenv("TEST_BOOL_TRUE=True");

        $this->assertTrue(env_value('TEST_BOOL_TRUE'));

        putenv("TEST_BOOL_TRUE=TRUE");

        $this->assertTrue(env_value('TEST_BOOL_TRUE'));
    }

    /**
     * @test
     */
    public function it_gets_returns_boolean_false_for_string_false_from_environment()
    {
        putenv("TEST_BOOL_FALSE=false");

        $this->assertFalse(env_value('TEST_BOOL_FALSE'));

        putenv("TEST_BOOL_FALSE=False");

        $this->assertFalse(env_value('TEST_BOOL_FALSE'));

        putenv("TEST_BOOL_FALSE=FALSE");

        $this->assertFalse(env_value('TEST_BOOL_FALSE'));
    }
}
