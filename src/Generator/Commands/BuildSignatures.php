<?php

namespace Spinen\ConnectWise\Generator\Commands;

use Illuminate\Filesystem\Filesystem;
use Spinen\ConnectWise\Generator\Generator;
use Spinen\ConnectWise\Generator\Processors\ExtractSignatures;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class BuildSignatures
 *
 * @package Spinen\ConnectWise\Generator\Commands
 */
class BuildSignatures extends Base implements CommandInterface
{

    /**
     * @var FormatCode
     */
    private $code_formatter;

    /**
     * Processor that extracts the public methods
     *
     * @var ExtractSignatures
     */
    protected $extractor;

    /**
     * Used to interact with the filesystem
     *
     * @var Filesystem
     */
    protected $files;

    /**
     * @param Generator         $generator
     * @param string|null       $name
     * @param ExtractSignatures $extractor
     * @param Filesystem        $files
     * @param FormatCode        $code_formatter
     */
    public function __construct(
        Generator $generator,
        $name = null,
        ExtractSignatures $extractor,
        Filesystem $files,
        FormatCode $code_formatter
    ) {
        $this->extractor = $extractor;
        $this->files = $files;
        $this->code_formatter = $code_formatter;

        parent::__construct($generator, $name);
    }

    /**
     * Append data to the signature file
     *
     * @param string $file
     * @param string $contents
     */
    private function appendTraitFile($file, $contents)
    {
        $this->files->append($file, $contents);
    }

    /**
     * Setup the configuration values for the command
     */
    public function configure()
    {
        $this->setName('buildSignatures')
             ->setDescription('Runs through the generated library to generate the signature file')
             ->addOption("directory", null, InputOption::VALUE_OPTIONAL,
                 "Directory where the files are to build the signature.",
                 $this->generator->apiDirectory(null, false, true))
             ->addOption("file", null, InputOption::VALUE_OPTIONAL, "Signature file.",
                 $this->generator->apiDirectory($this->generator->get('config')['signature_file_name'] . ".php", false,
                     true));
    }

    /**
     * Write the footer to the signature file
     *
     * @param string $file
     */
    private function endTraitFile($file)
    {
        $this->files->append($file, '}');
    }

    /**
     * Write the signature method to the signature file
     *
     * @param string $method
     * @param array  $properties
     *
     * @return string
     */
    private function makeSignatureBlock($method, array $properties)
    {
        $contents = "    /**" . PHP_EOL;
        $contents .= "     * " . $properties['doc']['short'] . PHP_EOL;

        if (count($properties['doc']['long']) > 0) {
            $contents .= "     *" . PHP_EOL;

            foreach ($properties['doc']['long'] as $line) {
                $contents .= "     * " . $line . PHP_EOL;
            }
        }

        $contents .= "     *" . PHP_EOL;
        $contents .= "     * @param array|null \$arguments" . PHP_EOL;

        if (count($properties['doc']['tags']) > 0) {
            foreach ($properties['doc']['tags'] as $tag => $tags) {
                foreach ($tags as $variable => $type) {
                    if ($variable !== '$parameters') {
                        $contents .= "     * " . $tag;

                        $contents .= ((empty($type)) ? null : " ") . $type;

                        $contents .= ((empty($variable)) ? null : " ") . $variable;

                        $contents .= PHP_EOL;
                    }
                }
            }
        }

        $contents .= "     */" . PHP_EOL;

        $contents .= "    public function " . $method . "(array \$arguments = []) {" . PHP_EOL;
        $contents .=
            "        return \$this->execute('" .
            $properties['class'] .
            "', '" .
            $properties['method'] .
            "', \$arguments);" .
            PHP_EOL;
        $contents .= "    }" . PHP_EOL . PHP_EOL;

        return $contents;
    }

    /**
     * Runs through the files int the API src dir, and pulls the public methods out
     *
     * @param InputInterface  $input
     * @param OutputInterface $output
     *
     * @return int|null|void
     */
    public function execute(InputInterface $input, OutputInterface $output)
    {
        $this->setInputOutput($input, $output);

        $this->output->writeln("<info>Extracting public methods...</info>");

        $this->generator->setAndMakeApiDirectory($this->input->getOption('directory'), false, $this->output);

        $signatures = $this->extractSignatures();

        if (count($signatures) > 0) {
            $this->writeSignatureFile($signatures);

            $this->formatSignaturesFile();
        }
    }

    /**
     * Pull the signatures from the files
     *
     * @return array
     * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
     */
    private function extractSignatures()
    {
        $signatures = [];

        foreach ($this->files->glob($this->generator->generatedDirectory('*Api.php', false)) as $file) {
            $this->output->writeln("<comment>Building method signature(s) for $file</comment>");
            $signatures += $this->extractor->process($this->files->get($file));
        }

        // Filter out nulls
        $signatures = array_filter($signatures);

        return $signatures;
    }

    /**
     * Format the generated file to standards
     */
    private function formatSignaturesFile()
    {
        $this->input->setOption('file',
            $this->generator->apiDirectory($this->generator->get('config')['signature_file_name'] . ".php", false));

        $this->code_formatter->execute($this->input, $this->output);
    }

    /**
     * Registers the Api classes with the container to inject the host as the first parameter
     *
     * @param string $file
     * @param array  $classes
     */
    private function registerClassArguments($file, array $classes)
    {
        // Only need 1 copy of the class name
        $classes = array_unique($classes);

        $contents = "    /**" . PHP_EOL;
        $contents .= "     * Register the class' arguments with the container" . PHP_EOL;
        $contents .= "     */" . PHP_EOL;
        $contents .= "    public function registerApiBindings()" . PHP_EOL;
        $contents .= "    {" . PHP_EOL;

        foreach ($classes as $class) {
            $contents .=
                "        \$this->add('" .
                $this->generator->generatedNamespace($class) .
                "')->withArgument(\$this->getHost())->withArgument(\$this->getSoapOptions());" .
                PHP_EOL;
        }

        $contents .= "    }" . PHP_EOL . PHP_EOL;

        $this->files->append($file, $contents);
    }

    /**
     * Writes the header to the trait file
     *
     * @param string $file
     */
    private function startTraitFile($file)
    {
        $contents = '<?php' . PHP_EOL . PHP_EOL;
        $contents .= "namespace " . $this->generator->apiNamespace() . ";" . PHP_EOL . PHP_EOL;
        $contents .= "/**" . PHP_EOL;
        $contents .= " * Class " . $this->generator->get('config')['signature_file_name'] . PHP_EOL;
        $contents .= " *" . PHP_EOL;
        $contents .= " * @package " . $this->generator->apiNamespace() . PHP_EOL;
        $contents .= " */" . PHP_EOL;
        $contents .= "trait " . $this->generator->get('config')['signature_file_name'] . PHP_EOL;
        $contents .= "{" . PHP_EOL . PHP_EOL;

        $this->files->put($file, $contents);
    }

    /**
     * Write the signature file to disk
     *
     * @param $signatures
     */
    private function writeSignatureFile($signatures)
    {
        $file = $this->generator->apiDirectory($this->generator->get('config')['signature_file_name'] . ".php", false);

        $this->startTraitFile($file);

        // Save the class to build the bindings
        $classes = [];

        foreach ($signatures as $method => $properties) {
            $classes[] = $properties['class'];

            $contents = $this->makeSignatureBlock($method, $properties);

            $this->appendTraitFile($file, $contents);
        }

        $this->registerClassArguments($file, $classes);

        $this->endTraitFile($file);
    }

}
