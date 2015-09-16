<?php

// Pull in packages that were installed by composer
$loader = require __DIR__ .
                  DIRECTORY_SEPARATOR .
                  '..' .
                  DIRECTORY_SEPARATOR .
                  'vendor' .
                  DIRECTORY_SEPARATOR .
                  'autoload.php';

return $loader;
