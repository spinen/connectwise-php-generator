<?php

namespace Tests\Spinen\ConnectWise\Generator;

use League\Container\Exception\ReflectionException;
use Mockery;
use RuntimeException;
use Spinen\ConnectWise\Generator\Generator;
use Tests\Spinen\ConnectWise\BaseTest;
use Tests\Spinen\ConnectWise\TestFactory;

/**
 * Class GeneratorTest
 *
 * @package Tests\Spinen\ConnectWise\Generator
 * @group   generator
 */
class GeneratorTest extends BaseTest
{

    /**
     * @var \Spinen\ConnectWise\Generator\Generator
     */
    protected $generator;

    /**
     * @var Mockery\Mock
     */
    protected $files_mock;

    protected function setUp()
    {
        $this->files_mock = TestFactory::mockFilesystem();

        $this->generator = new Generator($this->buildConfig(), $this->files_mock);
    }


    private function buildConfig()
    {
        return [
            'connectwise'    => [
                'host'     => 'https://some.host',
                'company'  => 'Company',
                'username' => 'Username',
                'password' => 'Password',
            ],
            'generated_name' => 'Generated',
            'key'            => 'value',
            'paths'          => [
                'directory'      => [
                    'api'        => 'Stubs' . DIRECTORY_SEPARATOR . 'Api',
                    // NOTE: Real folder in the test directory to allow some of the realpath stuff be OK
                    'commands'   => 'Stubs' . DIRECTORY_SEPARATOR . 'Commands',
                    'generated'  => 'Stubs' . DIRECTORY_SEPARATOR . 'Api' . DIRECTORY_SEPARATOR . 'Generated',
                    'client'     => 'No real value, just here to let validation pass',
                    'config'     => 'No real value, just here to let validation pass',
                    'generator'  => 'No real value, just here to let validation pass',
                    'library'    => 'No real value, just here to let validation pass',
                    'processors' => 'No real value, just here to let validation pass',
                    'source'     => 'No real value, just here to let validation pass',
                    'vendor'     => 'No real value, just here to let validation pass',
                ],
                'namespace'      => [
                    // NOTE: Real folder in the test directory to allow some of the realpath stuff be OK
                    'commands'   => 'Stubs\\Commands',
                    'api'        => 'No real value, just here to let validation pass',
                    'client'     => 'No real value, just here to let validation pass',
                    'generated'  => 'No real value, just here to let validation pass',
                    'generator'  => 'No real value, just here to let validation pass',
                    'library'    => 'No real value, just here to let validation pass',
                    'processors' => 'No real value, just here to let validation pass',
                ],
                'namespace_root' => 'Tests\\Spinen\\ConnectWise\\Generator',
                // NOTE: Real path in the test directory to allow some of the realpath stuff be OK
                'project_root'   => __DIR__,
            ],
            'signature_file_name' => 'No real value, just here to let validation pass',
            'wsdls'               => [],
        ];
    }

    /**
     * @test
     */
    public function it_can_be_constructed()
    {
        $this->assertInstanceOf('Spinen\\ConnectWise\\Generator\\Generator', $this->generator);
    }

    /**
     * @test
     */
    public function it_returns_a_string_for_the_description()
    {
        $this->assertTrue(is_string($this->generator->description()));
    }

    /**
     * @test
     */
    public function it_builds_a_config_object_from_the_array()
    {
        $this->assertInstanceOf('Spinen\\ConnectWise\\Library\\Config', $this->generator->get('config'));
    }

    /**
     * @test
     */
    public function it_builds_directory_path_from_project_root()
    {
        $this->assertEquals(__DIR__, $this->generator->directoryPath());
    }

    /**
     * @test
     */
    public function it_builds_directory_path_from_project_root_with_a_passed_in_file()
    {
        $this->assertEquals(__DIR__ . DIRECTORY_SEPARATOR . "GeneratorTest.php",
            $this->generator->directoryPath("GeneratorTest.php"));
    }

    /**
     * @test
     */
    public function it_builds_directory_path_from_project_root_with_a_passed_in_array()
    {
        $expected =
            __DIR__ .
            DIRECTORY_SEPARATOR .
            "Stubs" .
            DIRECTORY_SEPARATOR .
            "Commands" .
            DIRECTORY_SEPARATOR .
            "Stub.php";

        $this->assertEquals($expected, $this->generator->directoryPath(["Stubs", "Commands", "Stub.php"]));
    }

    /**
     * @test
     */
    public function it_returns_false_from_directory_path_with_invalid_file()
    {
        $this->assertFalse($this->generator->directoryPath("NoRealFile.php"));
    }

    /**
     * @test
     */
    public function it_builds_directory_path_from_project_root_with_an_invalid_in_file_when_second_parameter_false()
    {
        $this->assertEquals(__DIR__ . DIRECTORY_SEPARATOR . "NoRealFile.php",
            $this->generator->directoryPath("NoRealFile.php", false));
    }

    /**
     * @test
     */
    public function it_gets_values_from_the_container()
    {
        $this->assertEquals("value", $this->generator->get("config")["key"]);
    }

    /**
     * @test
     * @expectedException ReflectionException
     */
    public function it_squawks_when_getting_a_value_from_the_container_when_key_does_not_exist()
    {
        $this->generator->get("nonkey");
    }

    /**
     * @test
     */
    public function it_builds_path_to_connectwise_host()
    {
        $this->assertEquals("https://some.host", $this->generator->hostPath());
    }

    /**
     * @test
     */
    public function it_builds_path_to_resource_on_connectwise_host()
    {
        $this->assertEquals("https://some.host/path", $this->generator->hostPath("path"));
    }

    /**
     * @test
     */
    public function it_makes_the_api_directory_and_does_not_try_to_clean_it()
    {
        $path = __DIR__ . DIRECTORY_SEPARATOR . 'Stubs' . DIRECTORY_SEPARATOR . 'Api';

        $this->files_mock->shouldReceive('isDirectory')
                         ->with($path)
                         ->andReturn(false)
                         ->once();

        $this->files_mock->shouldReceive('makeDirectory')
                         ->with($path)
                         ->andReturn(false)
                         ->once();

        $this->files_mock->shouldReceive('deleteDirectory')
                         ->with($path, true)
                         ->never();

        $path .= DIRECTORY_SEPARATOR . 'Generated';

        $this->files_mock->shouldReceive('isDirectory')
                         ->with($path)
                         ->andReturn(false)
                         ->once();

        $this->files_mock->shouldReceive('makeDirectory')
                         ->with($path)
                         ->andReturn(false)
                         ->once();

        $this->assertEquals($this->generator, $this->generator->makeApiDirectory());
    }

    /**
     * @test
     */
    public function it_makes_the_api_directory_and_trys_to_clean_it_if_first_param_is_true()
    {
        $path = __DIR__ . DIRECTORY_SEPARATOR . 'Stubs' . DIRECTORY_SEPARATOR . 'Api';

        $this->files_mock->shouldReceive('isDirectory')
                         ->with($path)
                         ->andReturn(false)
                         ->once();

        $this->files_mock->shouldReceive('makeDirectory')
                         ->with($path)
                         ->andReturn(false)
                         ->once();

        $this->files_mock->shouldReceive('deleteDirectory')
                         ->with($path, true)
                         ->andReturn(true)
                         ->once();

        $path .= DIRECTORY_SEPARATOR . 'Generated';

        $this->files_mock->shouldReceive('isDirectory')
                         ->with($path)
                         ->andReturn(false)
                         ->once();

        $this->files_mock->shouldReceive('makeDirectory')
                         ->with($path)
                         ->andReturn(false)
                         ->once();

        $this->assertEquals($this->generator, $this->generator->makeApiDirectory(true));
    }

    /**
     * @test
     */
    public function it_makes_the_api_directory_and_writes_to_output_if_second_parameter_is_passed()
    {
        $path = __DIR__ . DIRECTORY_SEPARATOR . 'Stubs' . DIRECTORY_SEPARATOR . 'Api';

        $this->files_mock->shouldReceive('isDirectory')
                         ->with($path)
                         ->andReturn(false)
                         ->once();

        $this->files_mock->shouldReceive('makeDirectory')
                         ->with($path)
                         ->andReturn(false)
                         ->once();

        $this->files_mock->shouldReceive('deleteDirectory')
                         ->with($path, true)
                         ->never();

        $path .= DIRECTORY_SEPARATOR . 'Generated';

        $this->files_mock->shouldReceive('isDirectory')
                         ->with($path)
                         ->andReturn(false)
                         ->once();

        $this->files_mock->shouldReceive('makeDirectory')
                         ->with($path)
                         ->andReturn(false)
                         ->once();

        $output_mock = TestFactory::mockOutputConsole();

        $output_mock->shouldReceive('writeln')
                    ->withAnyArgs()
                    ->andReturnNull()
                    ->times(4);

        $this->assertEquals($this->generator, $this->generator->makeApiDirectory(false, $output_mock));
    }

    /**
     * @test
     */
    public function it_returns_an_array_of_commands_to_register()
    {
        $path = __DIR__ . DIRECTORY_SEPARATOR . 'Stubs' . DIRECTORY_SEPARATOR . 'Commands' . DIRECTORY_SEPARATOR;

        $this->files_mock->shouldReceive('glob')
                         ->with($path . '*.php')
                         ->andReturn([
                             $path . 'One.php',
                             $path . 'Base.php',
                             $path . 'Interface.php',
                             $path . 'Two.php',
                         ])
                         ->once();

        $expected = [
            'one' => 'Tests\\Spinen\\ConnectWise\\Generator\\Stubs\\Commands\\One',
            'two' => 'Tests\\Spinen\\ConnectWise\\Generator\\Stubs\\Commands\\Two',
        ];

        $this->assertEquals($expected, $this->generator->getRegisterCommands());
    }

    /**
     * @test
     */
    public function it_returns_a_cached_array_of_commands_to_register()
    {
        $path = __DIR__ . DIRECTORY_SEPARATOR . 'Stubs' . DIRECTORY_SEPARATOR . 'Commands' . DIRECTORY_SEPARATOR;

        $this->files_mock->shouldReceive('glob')
                         ->with($path . '*.php')
                         ->andReturn([
                             $path . 'One.php',
                         ])
                         ->once();

        $this->generator->getRegisterCommands();

        // Second call, so should hit cache, and the assertion of once on the glob should be OK
        $this->generator->getRegisterCommands();
    }

    /**
     * @test
     */
    public function it_builds_directory_path_from_namespace_root()
    {
        $this->assertEquals('Tests\\Spinen\\ConnectWise\\Generator', $this->generator->namespacePath());
    }

    /**
     * @test
     */
    public function it_builds_directory_path_from_namespace_root_with_a_passed_in_class()
    {
        $this->assertEquals('Tests\\Spinen\\ConnectWise\\Generator\\Class', $this->generator->namespacePath("Class"));
    }

    /**
     * @test
     */
    public function test_it_catches_calls_on_star_Directory_and_star_Namespace()
    {
        $this->assertNotNull($this->generator->__call('commandsDirectory', []));
    }

    /**
     * @test
     * @expectedException RuntimeException
     */
    public function it_squawks_when_calling_a_method_that_does_not_match_star_Directory_or_star_Namespace()
    {
        $this->generator->__call('noneMethod', []);
    }

    /**
     * @test
     */
    public function it_allows_for_magic_method_to_match_directory_lockups()
    {
        $this->assertEquals(__DIR__ . DIRECTORY_SEPARATOR . "Stubs" . DIRECTORY_SEPARATOR . "Commands",
            $this->generator->commandsDirectory());
    }

    /**
     * @test
     * @expectedException RuntimeException
     */
    public function it_squawks_when_no_path_defined_for_directory_when_calling_magic_method()
    {
        $this->generator->noDirectory();
    }

    /**
     * @test
     */
    public function it_allows_for_magic_method_to_match_namespace_lockups()
    {
        $this->assertEquals('Tests\\Spinen\\ConnectWise\\Generator\\Stubs\\Commands',
            $this->generator->commandsNamespace());
    }

    /**
     * @test
     * @expectedException RuntimeException
     */
    public function it_squawks_when_no_path_defined_for_namespace_when_calling_magic_method()
    {
        $this->generator->noNamespace();
    }

    /**
     * @test
     */
    public function it_registers_the_commands_with_the_application()
    {
        $path = __DIR__ . DIRECTORY_SEPARATOR . 'Stubs' . DIRECTORY_SEPARATOR . 'Commands' . DIRECTORY_SEPARATOR;

        $this->files_mock->shouldReceive('glob')
                         ->with($path . '*.php')
                         ->andReturn([
                             $path . 'Stub.php',
                         ])
                         ->once();

        $application_mock = TestFactory::mockApplication();

        $application_mock->shouldReceive('add')
                         ->withAnyArgs()
                         ->once();

        $this->assertEquals($application_mock, $this->generator->registerCommandsWithApplication($application_mock));
    }

    /**
     * @test
     */
    public function it_registers_an_array_of_commands_with_the_application()
    {
        $application_mock = TestFactory::mockApplication();

        $application_mock->shouldReceive('add')
                         ->withAnyArgs()
                         ->once();

        $this->assertEquals($application_mock, $this->generator->registerCommandsWithApplication($application_mock,
            ['Tests\\Spinen\\ConnectWise\\Generator\\Stubs\\Commands\\Stub']));
    }

    /**
     * @test
     */
    public function it_sets_the_api_directory()
    {
        $path = 'Stubs' . DIRECTORY_SEPARATOR . 'NewApi';

        $this->generator->setApiDirectory($path);

        $this->assertEquals($path, $this->generator->apiDirectory(null, false, true));

        $path .= DIRECTORY_SEPARATOR . 'Generated';

        $this->assertEquals($path, $this->generator->generatedDirectory(null, false, true));
    }

    /**
     * @test
     */
    public function it_does_not_set_the_api_directory_if_passed_in_directory_the_same()
    {
        $path = 'Stubs' . DIRECTORY_SEPARATOR . 'Api';

        // Set the generated path, so that if the paths were created it would have this sting
        $this->generator->get('config')['generated_name'] = 'SomethingElse';

        $this->generator->setApiDirectory($path);

        $this->assertNotContains('SomethingElse', $this->generator->generatedDirectory(null, false, true));
    }

    /**
     * @test
     */
    public function it_set_and_makes_the_api_dir_in_single_call()
    {
        $path = 'Stubs' . DIRECTORY_SEPARATOR . 'NewApi';

        $full_path = __DIR__ . DIRECTORY_SEPARATOR . $path;

        $this->files_mock->shouldReceive('isDirectory')
                         ->with($full_path)
                         ->andReturn(false)
                         ->once();

        $this->files_mock->shouldReceive('makeDirectory')
                         ->with($full_path)
                         ->andReturn(false)
                         ->once();

        $this->files_mock->shouldReceive('deleteDirectory')
                         ->with($full_path, true)
                         ->never();

        $full_path .= DIRECTORY_SEPARATOR . 'Generated';

        $this->files_mock->shouldReceive('isDirectory')
                         ->with($full_path)
                         ->andReturn(false)
                         ->once();

        $this->files_mock->shouldReceive('makeDirectory')
                         ->with($full_path)
                         ->andReturn(false)
                         ->once();

        $this->assertEquals($this->generator, $this->generator->setAndMakeApiDirectory($path));
    }

    /**
     * @test
     */
    public function it_sets_the_loader()
    {
        $loader_mock = TestFactory::mockClassLoader();

        $this->assertEquals($this->generator, $this->generator->setLoader($loader_mock));

        $this->assertInstanceOf('Composer\\Autoload\\ClassLoader', $this->generator->get('loader'));
    }

    /**
     * @test
     */
    public function it_returns_the_version_from_the_VERSION_file()
    {
        $this->files_mock->shouldReceive('get')
                         ->with(__DIR__ . DIRECTORY_SEPARATOR . "VERSION")
                         ->andReturn('TestVersion')
                         ->once();

        $version = $this->generator->version();

        $this->assertEquals('TestVersion', $version);

        $this->assertTrue(is_string($version));
    }

    /**
     * @test
     */
    public function it_returns_UNDEFINED_for_the_version_when_there_is_not_a_VERSION_file()
    {
        $this->files_mock->shouldReceive('get')
                         ->with(__DIR__ . DIRECTORY_SEPARATOR . "VERSION")
                         ->andThrow('Illuminate\Contracts\Filesystem\FileNotFoundException')
                         ->once();

        $version = $this->generator->version();

        $this->assertEquals('UNDEFINED', $version);

        $this->assertTrue(is_string($version));
    }

}
