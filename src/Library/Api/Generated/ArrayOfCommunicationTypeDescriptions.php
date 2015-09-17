<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ArrayOfCommunicationTypeDescriptions
{

    /**
     * @var CommunicationTypeDescriptions[] $CommunicationTypeDescriptions
     */
    protected $CommunicationTypeDescriptions = null;

    public function __construct()
    {

    }

    /**
     * @return CommunicationTypeDescriptions[]
     */
    public function getCommunicationTypeDescriptions()
    {
        return $this->CommunicationTypeDescriptions;
    }

    /**
     * @param CommunicationTypeDescriptions[] $CommunicationTypeDescriptions
     * @return \Spinen\ConnectWise\Library\Api\Generated\ArrayOfCommunicationTypeDescriptions
     */
    public function setCommunicationTypeDescriptions(array $CommunicationTypeDescriptions = null)
    {
        $this->CommunicationTypeDescriptions = $CommunicationTypeDescriptions;
        return $this;
    }

}
