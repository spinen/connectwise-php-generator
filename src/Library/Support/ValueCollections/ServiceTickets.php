<?php

namespace Spinen\ConnectWise\Library\Support\ValueCollections;

class ServiceTickets extends Collection
{

    public function mttr()
    {
        $mttr = [];

        $mttr['total_minutes'] = $this->sum('ResolveMins');
        $mttr['total_tickets'] = $this->count();
        $mttr['minutes'] = $mttr['total_minutes'] / $mttr['total_tickets'];
        $mttr['hours'] = $mttr['minutes'] / 60;

        return $mttr;
    }

}
