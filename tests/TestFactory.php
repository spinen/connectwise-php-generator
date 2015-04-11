<?php

namespace Tests\Spinen\ConnectWise;

use Mockery;

/**
 * Class TestFactory
 *
 * @package Tests\Spinen\ConnectWise
 */
class TestFactory
{

    /**
     * @param array      $properties
     * @param array|null $methods
     *
     * @return Mockery\Mock
     */
    public static function makeClass(array $properties, array $methods = [])
    {
        $class = Mockery::mock('stdClass');

        foreach ($properties as $property => $value) {
            $class->{$property} = $value;
        }

        if (!empty($methods)) {
            foreach ($methods as $method => $return) {
                $class->shouldReceive($method)
                      ->andReturn($return);
            }
        }

        return $class;
    }

    /**
     * @return Mockery\Mock
     */
    public static function mockAddTypeHints()
    {
        return Mockery::mock('Spinen\\ConnectWise\\Generator\\Processors\\AddTypeHints');
    }

    /**
     * @return Mockery\Mock
     */
    public static function mockApplication()
    {
        return Mockery::mock('Symfony\\Component\\Console\\Application');
    }

    /**
     * @return Mockery\Mock
     */
    public static function mockBuildSignatures()
    {
        return Mockery::mock('Spinen\\ConnectWise\\Generator\\Commands\\BuildSignatures');
    }

    /**
     * @return Mockery\Mock
     */
    public static function mockClassLoader()
    {
        return Mockery::mock('Composer\\Autoload\\ClassLoader');
    }

    /**
     * @return Mockery\Mock
     */
    public static function mockClassReflector()
    {
        return Mockery::mock('Spinen\\ConnectWise\\Generator\\Processors\\ClassReflector');
    }

    /**
     * @return Mockery\Mock
     */
    public static function mockDecipherDocBlock()
    {
        return Mockery::mock('Spinen\\ConnectWise\\Generator\\Processors\\DecipherDocBlock');
    }

    /**
     * @return Mockery\Mock
     */
    public static function mockExtractSignatures()
    {
        return Mockery::mock('Spinen\\ConnectWise\\Generator\\Processors\\ExtractSignatures');
    }

    /**
     * @return Mockery\Mock
     */
    public static function mockFilesystem()
    {
        return Mockery::mock('Illuminate\\Filesystem\\Filesystem');
    }

    /**
     * @return Mockery\Mock
     */
    public static function mockFormatCode()
    {
        return Mockery::mock('Spinen\\ConnectWise\\Generator\\Commands\\FormatCode');
    }

    /**
     * @return Mockery\Mock
     */
    public static function mockGenerator()
    {
        return Mockery::mock('Spinen\\ConnectWise\\Generator\\Generator');
    }

    /**
     * @return Mockery\Mock
     */
    public static function mockGetClassName()
    {
        return Mockery::mock('Spinen\\ConnectWise\\Generator\\Processors\\GetClassName');
    }

    /**
     * @return Mockery\Mock
     */
    public static function mockInputArray()
    {
        return Mockery::mock('Symfony\\Component\\Console\\Input\\ArrayInput');
    }

    /**
     * @return Mockery\Mock
     */
    public static function mockInsertTypeHints()
    {
        return Mockery::mock('Spinen\\ConnectWise\\Generator\\Commands\\InsertTypeHints');
    }

    /**
     * @return Mockery\Mock
     */
    public static function mockOutputConsole()
    {
        return Mockery::mock('Symfony\\Component\\Console\\Output\\ConsoleOutput');
    }

    /**
     * @return Mockery\Mock
     */
    public static function mockProcess()
    {
        $process_mock = Mockery::mock('Symfony\\Component\\Process\\Process');

        // When the process gets torn down, stop always gets called behind the scenes, so go ahead & set it up
        $process_mock->shouldReceive('stop')
                     ->withAnyArgs()
                     ->zeroOrMoreTimes();

        return $process_mock;
    }

    /**
     * @return Mockery\Mock
     */
    public static function mockRefactorCode()
    {
        return Mockery::mock('Spinen\\ConnectWise\\Generator\\Commands\\RefactorCode');
    }

    /**
     * @return Mockery\Mock
     */
    public static function mockReflectionClass()
    {
        return Mockery::mock('ReflectionClass');
    }

    /**
     * @return Mockery\Mock
     */
    public static function mockReflectionMethod()
    {
        return Mockery::mock('ReflectionMethod');
    }

    /**
     * @return Mockery\Mock
     */
    public static function mockResponse()
    {
        return Mockery::mock('Spinen\\ConnectWise\\Generator\\CommandLine\\Response');
    }

    /**
     * @return Mockery\Mock
     */
    public static function mockRequest()
    {
        return Mockery::mock('Spinen\\ConnectWise\\Generator\\CommandLine\\Request');
    }

    /**
     * @return Mockery\Mock
     */
    public static function mockWsdlGenerator()
    {
        return Mockery::mock('Wsdl2PhpGenerator\\Generator');
    }

}
