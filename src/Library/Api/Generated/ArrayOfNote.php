<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ArrayOfNote
{

    /**
     * @var Note[] $Note
     */
    protected $Note = null;

    public function __construct()
    {

    }

    /**
     * @return Note[]
     */
    public function getNote()
    {
        return $this->Note;
    }

    /**
     * @param Note[] $Note
     * @return \Spinen\ConnectWise\Library\Api\Generated\ArrayOfNote
     */
    public function setNote(array $Note)
    {
        $this->Note = $Note;
        return $this;
    }

}
