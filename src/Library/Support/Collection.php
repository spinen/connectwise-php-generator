<?php

namespace Spinen\ConnectWise\Library\Support;

use Illuminate\Support\Collection as IlluminateCollection;

class Collection extends IlluminateCollection
{

    public function average($value)
    {
        $count = $this->count();

        if ($count) {
            return $this->sum($this->valueRetriever($value)) / $count;
        }

        return;
    }

}
