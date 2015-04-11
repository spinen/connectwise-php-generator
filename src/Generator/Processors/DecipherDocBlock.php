<?php

namespace Spinen\ConnectWise\Generator\Processors;

use InvalidArgumentException;

/**
 * Class DecipherDocBlock
 *
 * @package Spinen\ConnectWise\Generator\Processors
 */
class DecipherDocBlock implements ProcessorInterface
{

    /**
     * Gets the short description
     *
     * @param array $comments
     *
     * @return null
     */
    public function getShortDescription(array $comments)
    {
        if (count($comments) < 1) {
            return null;
        }

        return $comments[0];
    }

    /**
     * Gets the long description with each line being an array
     *
     * @param array $comments
     *
     * @return array
     */
    public function getLongDescription(array $comments)
    {
        if (count($comments) <= 1) {
            return [];
        }

        array_shift($comments);

        return $comments;
    }

    /**
     * Gets the tags as an associative array
     *
     * @param array $tags
     *
     * @return array
     */
    public function getTags(array $tags)
    {
        if (count($tags) < 1) {
            return [];
        }

        $tags_array = [];

        foreach ($tags as $tag) {
            // The return tag only has 2 elements, so make sure that we always have 3 by padding
            list($tag, $type, $variable) = array_pad(explode(" ", $tag), 3, null);

            $tags_array[$tag][$variable] =  $type;
        }

        return $tags_array;
    }

    /**
     * Break a doc block into an array
     *
     * @param string $doc
     *
     * @return array
     * @throws InvalidArgumentException
     */
    public function process($doc)
    {
        if (!is_string($doc)) {
            throw new InvalidArgumentException("process expects a string to work with.");
        }

        $raw_doc = explode("\n", $doc);

        $doc = [];

        $comments = array_values(array_filter($raw_doc, function ($line) {
            return (preg_match("/^\\s*\\*\\s+[^@]+/u", $line));
        }));

        $comments = $this->trimLeadingMarkers($comments);

        $tags = array_values(array_filter($raw_doc, function ($line) {
            return (preg_match("/^\\s*\\*\\s+@.*/u", $line));
        }));

        $tags = $this->trimLeadingMarkers($tags);

        $doc['short'] = $this->getShortDescription($comments);

        $doc['long'] = $this->getLongDescription($comments);

        $doc['tags'] = $this->getTags($tags);

        return $doc;
    }

    /**
     * Remove the leading '<space>*<space' from the lines
     *
     * @param array $lines
     *
     * @return array
     */
    private function trimLeadingMarkers(array $lines)
    {
        return array_map(function ($line) {
            return (preg_replace("/^\\s*\\*\\s+(.*)/u", "$1", $line));
        }, $lines);
    }

}
