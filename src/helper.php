<?php

if (!function_exists('build_path')) {

    /**
     * Takes the array of parts and makes them into a path by concatenating them with a separator
     *
     * @param array       $parts
     * @param bool|null   $realpath
     * @param string|null $separator
     *
     * @return string
     */
    function build_path(array $parts, $realpath = false, $separator = DIRECTORY_SEPARATOR)
    {
        $path = implode($separator, $parts);

        return (($realpath) ? realpath($path) : $path);
    }
}

if (!function_exists('env_value')) {

    /**
     * See if there is an ENV for variable set, if not, then return 2nd param
     *
     * @param      $variable
     * @param null $default
     *
     * @return mixed
     */
    function env_value($variable, $default = null)
    {
        if (getenv($variable)) {
            switch (strtolower(getenv($variable))) {
                case 'true':
                    return true;

                case 'false':
                    return false;
            }

            return getenv($variable);
        }

        return $default;
    }

}
