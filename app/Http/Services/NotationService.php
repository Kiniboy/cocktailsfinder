<?php


namespace App\Http\Services;

use App\Note;

class NotationService
{
    /**
     * @var Note
     */
    private $note;

    /**
     * NotationService constructor.
     * @param Note $note
     */
    public function __construct(Note $note)
    {
        $this->note = $note;
    }

}
