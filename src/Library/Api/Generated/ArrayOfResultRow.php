<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ArrayOfResultRow
{

    /**
     * @var ResultRow[] $ResultRow
     */
    protected $ResultRow = null;

    public function __construct()
    {

    }

    /**
     * @return ResultRow[]
     */
    public function getResultRow()
    {
        return $this->ResultRow;
    }

    /**
     * @param ResultRow[] $ResultRow
     * @return \Spinen\ConnectWise\Library\Api\Generated\ArrayOfResultRow
     */
    public function setResultRow(array $ResultRow)
    {
        $this->ResultRow = $ResultRow;
        return $this;
    }

}
