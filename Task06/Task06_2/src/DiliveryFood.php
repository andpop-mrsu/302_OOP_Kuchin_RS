<?php

namespace App;

use App\Room;

class DiliveryFood implements Room
{
    protected $room;

    public function __construct(Room $room)
    {
        $this->room = $room;
    }

    public function getTotalPrice(): float
    {
        return $this->room->getTotalPrice() + 300;
    }

    public function getDescription(): string
    {
        return $this->room->getDescription() . ' + доставка еды';
    }
}
