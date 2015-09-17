<?php

namespace Spinen\ConnectWise\Generator\Processors;

use InvalidArgumentException;
use RuntimeException;
use Spinen\ConnectWise\Library\Contracts\Processor;

/**
 * Class GetClassName
 *
 * @package Spinen\ConnectWise\Generator\Processors
 */
class GetClassName implements Processor
{
    // NOTE: Order is important as we are going to concatenate them as a string in the order they are in
    /**
     * Parts of the file that are need to be found
     *
     * @var array
     */
    private $parts = [
        'namespace' => [
            'default' => null,
            'filter'  => "^namespace\\s+[^;]+",
            'map'     => [
                'pattern' => "^namespace\\s+([^;]+).*",
                'return'  => "$1",
            ],
        ],
        'class'     => [
            'filter' => "^class\\s+[^\\s]+\\s*",
            'map'    => [
                'pattern' => "^class\\s+([^\\s]+)\\s*.*",
                'return'  => "$1",
            ],
        ],
    ];

    /**
     * Filter through the content to pull of the need part.
     *
     * @param array  $contents
     * @param string $part
     *
     * @return mixed
     * @throws RuntimeException
     */
    private function extract(array $contents, $part)
    {
        // Get lines that start with class
        $contents = array_filter($contents, function ($line) use ($part) {
            return preg_match("/" . $this->parts[$part]['filter'] . "/u", $line);
        });

        // Pull the class name out
        $contents = array_map(function ($line) use ($part) {
            return preg_replace("/" . $this->parts[$part]['map']['pattern'] . "/u",
                $this->parts[$part]['map']['return'], $line);
        }, $contents);

        // Assumes that there is only one class per file
        if (count($contents) > 1) {
            throw new RuntimeException(sprintf("File has more than one %s.", $part));
        }

        // Found the item to return
        if (count($contents) === 1) {
            // Reindex & return the class
            return array_values($contents)[0];
        }

        // No item, but have a default set
        if (array_key_exists('default', $this->parts[$part])) {
            return $this->parts[$part]['default'];
        }

        // Required items, so exception
        throw new RuntimeException(sprintf("Could not find [%s] in the contents.", $part));
    }

    /**
     * Build up the Fully Qualified Class Name out of a file
     *
     * @param $contents
     *
     * @return string
     * @throws InvalidArgumentException
     */
    public function process($contents)
    {
        // NOTE: since this is adhering to an interface that takes different parameters, cannot typecast to array
        if (!is_array($contents)) {
            throw new InvalidArgumentException("process expects an array to work with.");
        }

        $found_parts = [];

        foreach (array_keys($this->parts) as $part) {
            $found_parts[] = $this->extract($contents, $part);
        }

        return implode('\\', array_filter($found_parts));
    }
}
