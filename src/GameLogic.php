<?php

namespace Bowling;

class GameLogic
{
    private $frames;

    public function __construct(Array $frames)
    {
        $this->frames = $frames;
    }

    public function roll(int $fallenPins)
    {
        $this->frames[0]->roll($fallenPins);
    }

    public function getScore() : int
    {
        $totalScore = 0;
        foreach ($this->frames as $frame){
            $totalScore+= $frame->getScore();
        }
        return $totalScore;
    }

    public function getCurrentFrame()
    {
        return $this->frames[1];
    }
}
