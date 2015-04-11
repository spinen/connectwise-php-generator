<?php

namespace Tests\Spinen\ConnectWise\Generator\Commands;

use Mockery;
use Spinen\ConnectWise\Generator\Commands\BuildSignatures;
use Tests\Spinen\ConnectWise\TestFactory;

/**
 * Class BuildSignaturesTest
 *
 * @package Tests\Spinen\ConnectWise\Generator\Commands
 * @group   generator
 * @group   commands
 */
class BuildSignaturesTest extends BaseTest
{

    /**
     * @var Mockery\Mock
     */
    protected $code_formatter_mock;

    /**
     * @var Mockery\Mock
     */
    protected $extractor_mock;

    /**
     * @var Mockery\Mock
     */
    protected $files_mock;

    protected function setUp()
    {
        parent::setUp();

        $this->setUpMocks();

        $this->command = new BuildSignatures($this->generator_mock, null, $this->extractor_mock, $this->files_mock,
            $this->code_formatter_mock);
    }

    private function setUpMocks()
    {
        $this->extractor_mock = TestFactory::mockExtractSignatures();

        $this->files_mock = TestFactory::mockFilesystem();

        $this->code_formatter_mock = TestFactory::mockFormatCode();

        $this->generator_mock->shouldReceive('apiDirectory')
                             ->with(null, false, true)
                             ->andReturn('mocked/directory')
                             ->once();

        $this->generator_mock->shouldReceive('get')
                             ->with('config')
                             ->andReturn(['signature_file_name' => 'SignatureFile'])
                             ->once();

        $this->generator_mock->shouldReceive('apiDirectory')
                             ->with('SignatureFile.php', false, true)
                             ->andReturn('mocked/directory/SignatureFile.php')
                             ->once();
    }


    private function buildTraitHeader()
    {
        return <<< 'EOD'
<?php

namespace Mocked\Namespace;

/**
 * Class SignatureFile
 *
 * @package Mocked\Namespace
 */
trait SignatureFile
{


EOD;
    }

    private function buildTraitMethod()
    {
        return <<< 'EOD'
    /**
     * This is the short description.
     *
     * This is the long description.
     *
     * @param array|null $arguments
     * @return MethodOneResponse
     */
    public function someClassMethodOne(array $arguments = []) {
        return $this->execute('SomeClass', 'MethodOne', $arguments);
    }


EOD;
    }

    private function buildTraitRegister()
    {
        return <<< 'EOD'
    /**
     * Register the class' arguments with the container
     */
    public function registerApiBindings()
    {
        $this->add('Mocked\Namespace\Generated\SomeClass')->withArgument($this->getHost())->withArgument($this->getSoapOptions());
    }


EOD;
    }

    /**
     * @test
     */
    public function it_can_be_constructed()
    {
        $this->assertInstanceOf('Spinen\\ConnectWise\\Generator\\Commands\\BuildSignatures', $this->command);
    }

    /**
     * @test
     */
    public function it_processes_the_api_files_correctly()
    {
        // execute()
        $this->output_mock->shouldReceive('writeln')
                          ->with("<info>Extracting public methods...</info>")
                          ->once();

        $this->input_mock->shouldReceive('getOption')
                         ->with('directory')
                         ->andReturn('api/folder');

        $this->generator_mock->shouldReceive('setAndMakeApiDirectory')
                             ->with('api/folder', false, $this->output_mock)
                             ->andReturnSelf()
                             ->once();

        // extractSignatures()
        $this->generator_mock->shouldReceive('generatedDirectory')
                             ->with('*Api.php', false)
                             ->andReturn('/path/to/api/folder/Generated/*Api.php')
                             ->once();

        $this->files_mock->shouldReceive('glob')
                         ->with('/path/to/api/folder/Generated/*Api.php')
                         ->andReturn([
                             '/path/to/api/folder/Generated/FileApi.php',
                         ])
                         ->once();

        $this->output_mock->shouldReceive('writeln')
                          ->with("<comment>Building method signature(s) for /path/to/api/folder/Generated/FileApi.php</comment>")
                          ->once();

        $this->files_mock->shouldReceive('get')
                         ->with('/path/to/api/folder/Generated/FileApi.php')
                         ->andReturn("this is the contents of a file")
                         ->once();

        $this->extractor_mock->shouldReceive('process')
                             ->with("this is the contents of a file")
                             ->andReturn([
                                 'someClassMethodOne' => [
                                     'class'  => 'SomeClass',
                                     'method' => 'MethodOne',
                                     'doc'    => [
                                         'long'  => [
                                             "This is the long description.",
                                         ],
                                         'short' => "This is the short description.",
                                         'tags'  => [
                                             '@param'  => [
                                                 '$parameters' => "MethodOne",
                                             ],
                                             '@return' => [
                                                 '' => 'MethodOneResponse',
                                             ],
                                         ],
                                     ],
                                 ],
                             ])
                             ->once();

        // writeSignatureFile()
        $this->generator_mock->shouldReceive('get')
                             ->with('config')
                             ->andReturn(["signature_file_name" => "SignatureFile"]);

        $this->generator_mock->shouldReceive('apiDirectory')
                             ->withArgs(['SignatureFile.php', false])
                             ->andReturn('/path/to/api/folder/SignatureFile.php')
                             ->twice();
        // startTraitFile()
        $this->files_mock->shouldReceive('put')
                         ->withArgs([
                             '/path/to/api/folder/SignatureFile.php',
                             $this->buildTraitHeader()
                         ])
                         ->once();

        $this->generator_mock->shouldReceive('apiNamespace')
                             ->withNoArgs()
                             ->andReturn('Mocked\\Namespace');

        // signature_file_name from above

        // appendTraitFile()
        $this->files_mock->shouldReceive('append')
                         ->withArgs([
                             '/path/to/api/folder/SignatureFile.php',
                             $this->buildTraitMethod()
                         ])
                         ->once();

        // registerClassArguments()
        $this->generator_mock->shouldReceive('generatedNamespace')
                             ->with('SomeClass')
                             ->andReturn('Mocked\\Namespace\\Generated\\SomeClass');

        $this->files_mock->shouldReceive('append')
                         ->withArgs([
                             '/path/to/api/folder/SignatureFile.php',
                             $this->buildTraitRegister()
                         ])
                         ->once();

        // endTraitFile()
        $this->files_mock->shouldReceive('append')
                         ->withArgs([
                             '/path/to/api/folder/SignatureFile.php',
                             '}'
                         ])
                         ->once();

        // formatSignaturesFile()

        // signature file from above

        // apiDirectpry from above

        $this->input_mock->shouldReceive('setOption')
                         ->with('file', '/path/to/api/folder/SignatureFile.php')
                         ->once();

        $this->code_formatter_mock->shouldReceive('execute')
                                  ->with($this->input_mock, $this->output_mock)
                                  ->once();

        $this->command->execute($this->input_mock, $this->output_mock);
    }

    /**
     * @test
     */
    public function it_does_not_try_to_write_to_file_if_there_are_no_signatures()
    {
        // execute()
        $this->output_mock->shouldReceive('writeln')
                          ->with("<info>Extracting public methods...</info>")
                          ->once();

        $this->input_mock->shouldReceive('getOption')
                         ->with('directory')
                         ->andReturn('api/folder');

        $this->generator_mock->shouldReceive('setAndMakeApiDirectory')
                             ->with('api/folder', false, $this->output_mock)
                             ->andReturnSelf()
                             ->once();

        // extractSignatures()
        $this->generator_mock->shouldReceive('generatedDirectory')
                             ->with('*Api.php', false)
                             ->andReturn('/path/to/api/folder/Generated/*Api.php')
                             ->once();

        $this->files_mock->shouldReceive('glob')
                         ->with('/path/to/api/folder/Generated/*Api.php')
                         ->andReturn([
                             '/path/to/api/folder/Generated/FileApi.php',
                         ])
                         ->once();

        $this->output_mock->shouldReceive('writeln')
                          ->with("<comment>Building method signature(s) for /path/to/api/folder/Generated/FileApi.php</comment>")
                          ->once();

        $this->files_mock->shouldReceive('get')
                         ->with('/path/to/api/folder/Generated/FileApi.php')
                         ->andReturn("this is the contents of a file")
                         ->once();

        $this->extractor_mock->shouldReceive('process')
                             ->with("this is the contents of a file")
                             ->andReturn([])
                             ->once();

        // From here down, there just does not need to be any working with the file
        $this->generator_mock->shouldReceive('get')
                             ->with('config')
                             ->never();

        $this->files_mock->shouldReceive('put')
                         ->withAnyArgs()
                         ->never();

        $this->files_mock->shouldReceive('append')
                         ->withAnyArgs()
                         ->never();

        $this->input_mock->shouldReceive('setOption')
                         ->withAnyArgs()
                         ->never();

        $this->code_formatter_mock->shouldReceive('execute')
                                  ->withAnyArgs()
                                  ->never();

        $this->command->execute($this->input_mock, $this->output_mock);
    }

    /**
     * @test
     */
    public function it_does_not_try_to_write_to_file_if_there_are_no_api_files()
    {// execute()
        $this->output_mock->shouldReceive('writeln')
                          ->with("<info>Extracting public methods...</info>")
                          ->once();

        $this->input_mock->shouldReceive('getOption')
                         ->with('directory')
                         ->andReturn('api/folder');

        $this->generator_mock->shouldReceive('setAndMakeApiDirectory')
                             ->with('api/folder', false, $this->output_mock)
                             ->andReturnSelf()
                             ->once();

        // extractSignatures()
        $this->generator_mock->shouldReceive('generatedDirectory')
                             ->with('*Api.php', false)
                             ->andReturn('/path/to/api/folder/Generated/*Api.php')
                             ->once();

        $this->files_mock->shouldReceive('glob')
                         ->with('/path/to/api/folder/Generated/*Api.php')
                         ->andReturn([])
                         ->once();

        // From here down, there just does not need to be any working with the file
        $this->output_mock->shouldReceive('writeln')
                          ->with("<comment>Building method signature(s) for /path/to/api/folder/Generated/FileApi.php</comment>")
                          ->never();

        $this->files_mock->shouldReceive('get')
                         ->withAnyArgs()
                         ->never();

        $this->extractor_mock->shouldReceive('process')
                             ->withAnyArgs()
                             ->never();

        $this->generator_mock->shouldReceive('get')
                             ->with('config')
                             ->never();

        $this->files_mock->shouldReceive('put')
                         ->withAnyArgs()
                         ->never();

        $this->files_mock->shouldReceive('append')
                         ->withAnyArgs()
                         ->never();

        $this->input_mock->shouldReceive('setOption')
                         ->withAnyArgs()
                         ->never();

        $this->code_formatter_mock->shouldReceive('execute')
                                  ->withAnyArgs()
                                  ->never();

        $this->command->execute($this->input_mock, $this->output_mock);
    }

}
