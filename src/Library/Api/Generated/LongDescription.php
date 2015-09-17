<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class LongDescription
{

    /**
     * @var ArrayOfString $LongDesc
     */
    protected $LongDesc = null;

    public function __construct()
    {

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
