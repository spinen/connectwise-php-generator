<?php

namespace Spinen\ConnectWise\Library;

use League\Container\Container as LeagueContainer;
use Spinen\ConnectWise\Library\Contracts\Container as ContainerInterface;

/**
 * Class Container
 *
 * @package Spinen\ConnectWise\Library
 */
class Container extends LeagueContainer implements ContainerInterface
{
    /**
     * Default items to register with the container
     *
     * @var array
     */
    private $default_services = [
        'validator' => 'Spinen\\ConnectWise\\Library\\Validator',
    ];

    /**
     * Core items to register with the container
     *
     * @var array
     */
    protected $core_services = [];

    /**
     * This
     *
     * @var Container
     */
    protected static $instance;

    /**
     * Required properties when initializing
     *
     * @var array
     */
    protected $rules = [];

    /**
     * @param array $options
     */
    public function __construct(array $options = [])
    {
        parent::__construct(['di' => $this->buildDi((array)array_pull($options, 'di'))]);

        $this->registerInstance($this);

        $this->validate($options);

        $this->registerConfig($options);
    }

    /**
     * Getter to allow property like getting of keys
     *
     * @param $name
     *
     * @return mixed
     */
    public function __get($name)
    {
        return $this->get($name);
    }

    /**
     * Merge core services & ser validation rules
     *
     * @param array $di
     *
     * @return array
     */
    private function buildDi(array $di)
    {
        // Lay down defaults, then core, and then instantiated values
        return array_merge_recursive((array)$this->default_services, (array)$this->core_services, $di);
    }

    /**
     * Expose the container
     *
     * Going to allow static calls to get the instance
     *
     * @return Container
     */
    public static function getInstance()
    {
        return static::$instance;
    }

    /**
     * Add the config to the config key
     *
     * @param $config
     */
    private function registerConfig($config)
    {
        $this->add('config', $this->get('Spinen\\ConnectWise\\Library\\Config', [$config]), true);
    }

    /**
     * Register the container to allow it to be retrieved statically
     *
     * @param Container $instance
     */
    private function registerInstance(Container $instance)
    {
        $this->add(get_class($instance), $instance);

        static::$instance = $instance;
    }

    /**
     * Trigger the validator on the options
     *
     * @param array $options
     */
    private function validate(array $options)
    {
        $this->get('validator')
             ->validate($options, (array)$this->rules);
    }
}
