<?php

namespace Spinen\ConnectWise\Library\Results;

class ServiceTicketCollection extends Collection
{

    public function mttr()
    {
        $mttr = [];

        $mttr['total_minutes'] = $this->sum('ResolveMins');
        $mttr['total_tickets'] = $this->count();

        if ($mttr['total_tickets']) {
            $mttr['minutes'] = $mttr['total_minutes'] / $mttr['total_tickets'];
            $mttr['hours'] = $mttr['minutes'] / 60;
        }

        return $mttr;
    }

}
