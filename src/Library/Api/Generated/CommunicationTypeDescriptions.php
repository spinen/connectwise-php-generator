<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class CommunicationTypeDescriptions
{

    /**
     * @var CommunicationType $Type
     */
    protected $Type = null;

    /**
     * @var ArrayOfString $Descriptions
     */
    protected $Descriptions = null;

    /**
     * @param CommunicationType $Type
     */
    public function __construct(CommunicationType $Type = null)
    {
        $this->Type = $Type;
    }

    /**
     * @return CommunicationType
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * @param CommunicationType $Type
     * @return \Spinen\ConnectWise\Library\Api\Generated\CommunicationTypeDescriptions
     */
    public function setType(CommunicationType $Type)
    {
        $this->Type = $Type;
        return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getDescriptions()
    {
        return $this->Descriptions;
    }

    /**
     * @param ArrayOfString $Descriptions
     * @return \Spinen\ConnectWise\Library\Api\Generated\CommunicationTypeDescriptions
     */
    public function setDescriptions($Descriptions)
    {
        $this->Descriptions = $Descriptions;
        return $this;
    }

}
