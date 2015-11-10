<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ArrayOfInt1
{

    /**
     * @var int[] $Id
     */
    protected $Id = null;

    public function __construct()
    {

    }

    /**
     * @return int[]
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param int[] $Id
     * @return \Spinen\ConnectWise\Library\Api\Generated\ArrayOfInt1
     */
    public function setId(array $Id)
    {
        $this->Id = $Id;
        return $this;
    }

}
