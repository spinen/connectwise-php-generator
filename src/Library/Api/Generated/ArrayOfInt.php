<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ArrayOfInt
{

    /**
     * @var int[] $int
     */
    protected $int = null;

    public function __construct()
    {

    }

    /**
     * @return int[]
     */
    public function getInt()
    {
        return $this->int;
    }

    /**
     * @param int[] $int
     * @return \Spinen\ConnectWise\Library\Api\Generated\ArrayOfInt
     */
    public function setInt(array $int = null)
    {
        $this->int = $int;
        return $this;
    }

}
