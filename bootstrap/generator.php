<?php

date_default_timezone_set('UTC');

// If there is an env file, then load it, so that the configs can use them
if (build_path([
    __DIR__,
    '..',
    '.env',
], true)) {
    Dotenv::load(build_path([__DIR__, '..']));
}

// Path to config file
$config_file = build_path([
    __DIR__,
    '..',
    'config',
    'generator.php',
], true);

// Read the config file if there is one, otherwise set to empty array
$config = (array)(($config_file) ? require $config_file : []);

// Return a new generator
return new Spinen\ConnectWise\Generator\Generator($config);
