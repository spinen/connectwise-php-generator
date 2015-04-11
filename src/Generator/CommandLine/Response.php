<?php

namespace Spinen\ConnectWise\Generator\CommandLine;

/**
 * Class Response
 *
 * @package Spinen\ConnectWise\Generator\CommandLine
 */
class Response
{

    /**
     * The command that was ran
     *
     * @var string
     */
    protected $command;

    /**
     * Exit code from process
     *
     * @var integer
     */
    protected $exit_code;

    /**
     * Response from the process
     *
     * @var string
     */
    protected $response;

    /**
     * Was process successful
     *
     * @var boolean
     */
    protected $successful;

    /**
     * @param array $response
     */
    public function __construct(array $response)
    {
        $this->processResponse($response);
    }

    /**
     * Get the command property
     *
     * @return string
     */
    public function getCommand()
    {
        return $this->command;
    }

    /**
     * Get the command property
     *
     * @return integer
     */
    public function getExitCode()
    {
        return (int)$this->exit_code;
    }

    /**
     * Get the command property
     *
     * @return string
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * Get the command property
     *
     * @return bool
     */
    public function getSuccessful()
    {
        return (bool)$this->successful;
    }

    /**
     * Process the response
     *
     * Verify that the expected properties were provided as they are set on the object.
     *
     * @param array $response
     */
    private function processResponse(array $response)
    {
        $expected_properties = [
            'command',
            'exit_code',
            'response',
            'successful',
        ];

        foreach ($expected_properties as $property) {
            if (!array_key_exists($property, $response)) {
                throw new MissingPropertyException(sprintf("Missing [%s] from the response.", $property));
            }

            $this->{$property} = $response[$property];
        }
    }

}
