<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class DeleteTicketProduct
{

    /**
     * @var ApiCredentials $credentials
     */
    protected $credentials = null;

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var int $ticketId
     */
    protected $ticketId = null;

    /**
     * @param ApiCredentials $credentials
     * @param int $id
     * @param int $ticketId
     */
    public function __construct(ApiCredentials $credentials = null, $id = null, $ticketId = null)
    {
        $this->credentials = $credentials;
        $this->id          = $id;
        $this->ticketId    = $ticketId;
    }

    /**
     * @return ApiCredentials
     */
    public function getCredentials()
    {
        return $this->credentials;
    }

    /**
     * @param ApiCredentials $credentials
     * @return \Spinen\ConnectWise\Library\Api\Generated\DeleteTicketProduct
     */
    public function setCredentials(ApiCredentials $credentials)
    {
        $this->credentials = $credentials;
        return $this;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return \Spinen\ConnectWise\Library\Api\Generated\DeleteTicketProduct
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return int
     */
    public function getTicketId()
    {
        return $this->ticketId;
    }

    /**
     * @param int $ticketId
     * @return \Spinen\ConnectWise\Library\Api\Generated\DeleteTicketProduct
     */
    public function setTicketId($ticketId)
    {
        $this->ticketId = $ticketId;
        return $this;
    }

}
