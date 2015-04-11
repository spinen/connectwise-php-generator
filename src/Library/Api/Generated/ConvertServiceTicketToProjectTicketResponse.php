<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ConvertServiceTicketToProjectTicketResponse
{

    /**
     * @var ConvertServiceTicketToProjectTicket $ConvertServiceTicketToProjectTicketResult
     */
    protected $ConvertServiceTicketToProjectTicketResult = null;

    /**
     * @param ConvertServiceTicketToProjectTicket $ConvertServiceTicketToProjectTicketResult
     */
    public function __construct(ConvertServiceTicketToProjectTicket $ConvertServiceTicketToProjectTicketResult = null)
    {
        $this->ConvertServiceTicketToProjectTicketResult = $ConvertServiceTicketToProjectTicketResult;
    }

    /**
     * @return ConvertServiceTicketToProjectTicket
     */
    public function getConvertServiceTicketToProjectTicketResult()
    {
        return $this->ConvertServiceTicketToProjectTicketResult;
    }

    /**
     * @param ConvertServiceTicketToProjectTicket $ConvertServiceTicketToProjectTicketResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\ConvertServiceTicketToProjectTicketResponse
     */
    public function setConvertServiceTicketToProjectTicketResult(ConvertServiceTicketToProjectTicket $ConvertServiceTicketToProjectTicketResult)
    {
        $this->ConvertServiceTicketToProjectTicketResult = $ConvertServiceTicketToProjectTicketResult;
        return $this;
    }

}
