<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class LongDescription
{

    /**
     * @var ArrayOfString $LongDesc
     */
    protected $LongDesc = null;

    /**
     * @param ArrayOfString $LongDesc
     */
    public function __construct($LongDesc = null)
    {
        $this->LongDesc = $LongDesc;
    }

    /**
     * @return ArrayOfString
     */
    public function getLongDesc()
    {
        return $this->LongDesc;
    }

    /**
     * @param ArrayOfString $LongDesc
     * @return \Spinen\ConnectWise\Library\Api\Generated\LongDescription
     */
    public function setLongDesc($LongDesc)
    {
        $this->LongDesc = $LongDesc;
        return $this;
    }

}
