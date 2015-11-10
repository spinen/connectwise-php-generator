<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ArrayOfApplyTo
{

    /**
     * @var ApplyTo[] $ApplyTo
     */
    protected $ApplyTo = null;

    public function __construct()
    {

    }

    /**
     * @return ApplyTo[]
     */
    public function getApplyTo()
    {
        return $this->ApplyTo;
    }

    /**
     * @param ApplyTo[] $ApplyTo
     * @return \Spinen\ConnectWise\Library\Api\Generated\ArrayOfApplyTo
     */
    public function setApplyTo(array $ApplyTo)
    {
        $this->ApplyTo = $ApplyTo;
        return $this;
    }

}
