<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ArrayOfComponent
{

    /**
     * @var Component[] $Component
     */
    protected $Component = null;

    public function __construct()
    {

    }

    /**
     * @return Component[]
     */
    public function getComponent()
    {
        return $this->Component;
    }

    /**
     * @param Component[] $Component
     * @return \Spinen\ConnectWise\Library\Api\Generated\ArrayOfComponent
     */
    public function setComponent(array $Component = null)
    {
        $this->Component = $Component;
        return $this;
    }

}
