<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ArrayOfInt
{

    /**
     * @var int[] $Id
     */
    protected $Id = null;

    /**
     * @param int[] $Id
     */
    public function __construct(array $Id = null)
    {
        $this->Id = $Id;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ArrayOfInt
     */
    public function setId(array $Id)
    {
        $this->Id = $Id;
        return $this;
    }

}
