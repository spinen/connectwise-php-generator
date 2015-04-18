<?php

namespace Spinen\ConnectWise\Library\Contracts;

/**
 * Interface Signature
 *
 * @package Spinen\ConnectWise\Library\Contracts
 */
interface Signature
{

    /**
     * Resolve the item from the IoC & execute the method on it
     *
     * @param array  $arguments
     *
     * @return mixed
     */
    public function execute(array $arguments = []);

    /**
     * Get the FQDN to the cw host with optional uri
     *
     * @param string|null $path
     *
     * @return string
     */
    public function getHost($path = null);

    /**
     * Returns the options for the Soap Class
     *
     * @return array
     */
    public function getSoapOptions();

    /**
     * Set the Api
     *
     * @param string $api
     *
     * @return $this
     */
    public function setApi($api);

    /**
     * Set the method
     *
     * @param string $method
     *
     * @return $this
     */
    public function setMethod($method);

}
