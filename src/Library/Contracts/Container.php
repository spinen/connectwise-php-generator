<?php

namespace Spinen\ConnectWise\Library\Contracts;

/**
 * Interface Container
 *
 * @package Spinen\ConnectWise\Library\Contracts
 */
interface Container
{
    /**
     * Adds an alias to the container
     *
     * @param string $alias
     * @param null   $concrete
     * @param bool   $singleton
     *
     * @return mixed
     */
    public function add($alias, $concrete = null, $singleton = false);

    /**
     * Adds an alias to the container as a singleton
     *
     * @param string $alias
     * @param null   $concrete
     *
     * @return mixed
     */
    public function singleton($alias, $concrete = null);

    /**
     * Get an item from the container
     *
     * @param string $alias
     * @param array  $args
     *
     * @return mixed
     */
    public function get($alias, array $args = []);
}
