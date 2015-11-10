<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ResultRow
{

    /**
     * @var FieldValue[] $Value
     */
    protected $Value = null;

    /**
     * @var int $Number
     */
    protected $Number = null;

    /**
     * @param FieldValue[] $Value
     * @param int $Number
     */
    public function __construct(array $Value = null, $Number = null)
    {
        $this->Value  = $Value;
        $this->Number = $Number;
    }

    /**
     * @return FieldValue[]
     */
    public function getValue()
    {
        return $this->Value;
    }

    /**
     * @param FieldValue[] $Value
     * @return \Spinen\ConnectWise\Library\Api\Generated\ResultRow
     */
    public function setValue(array $Value)
    {
        $this->Value = $Value;
        return $this;
    }

    /**
     * @return int
     */
    public function getNumber()
    {
        return $this->Number;
    }

    /**
     * @param int $Number
     * @return \Spinen\ConnectWise\Library\Api\Generated\ResultRow
     */
    public function setNumber($Number)
    {
        $this->Number = $Number;
        return $this;
    }

}
