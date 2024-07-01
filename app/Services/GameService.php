<?php

namespace App\Services;

class GameService
{

    private readonly int $number;

    public function __construct()
    {}

    public function rollNumber() : int
    {
        $this->setNumber(mt_rand(0, 1000));
        return $this->number;
    }

    public function setNumber(int $number) : void
    {
        $this->number = $number;
    }

    public function getScore() : float
    {
        //Если число нечетное, то это проигрыш
        if ($this->number % 2 == 1) {
            return 0;
        }

        //Если число четное, то согласно ТЗ
        $modifier = match (true) {
            $this->number > 900 => 0.7,
            $this->number > 600 => 0.5,
            $this->number > 300 => 0.3,
            default => 0.1
        };

        return $modifier *  $this->number;
    }


}
