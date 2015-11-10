<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ApplyTo
{

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var ApplyToType $Type
     */
    protected $Type = null;

    /**
     * @param int $Id
     * @param ApplyToType $Type
     */
    public function __construct($Id = null, ApplyToType $Type = null)
    {
        $this->Id   = $Id;
        $this->Type = $Type;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param int $Id
     * @return \Spinen\ConnectWise\Library\Api\Generated\ApplyTo
     */
    public function setId($Id)
    {
        $this->Id = $Id;
        return $this;
    }

    /**
     * @return ApplyToType
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * @param ApplyToType $Type
     * @return \Spinen\ConnectWise\Library\Api\Generated\ApplyTo
     */
    public function setType(ApplyToType $Type)
    {
        $this->Type = $Type;
        return $this;
    }

}
