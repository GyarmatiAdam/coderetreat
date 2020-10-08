<?php

namespace Bowling;

class Frame
{
    private $rolls = [];

    public function roll(int $fallenPins)
    {
        $this->rolls[] = $fallenPins;
    }

    public function getScore()
    {
        return array_sum($this->rolls);
    }
}
