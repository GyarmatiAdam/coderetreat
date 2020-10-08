<?php

namespace Bowling;

class GameLogic
{
    private $frames;
    private $executedRolls = 0;

    public function __construct(Array $frames)
    {
        $this->frames = $frames;
    }

    public function roll(int $fallenPins)
    {
        if ($this->executedRolls === (count($this->frames) * 2)){
            throw new GameException();
        }
        $this->frames[0]->roll($fallenPins);
        $this->executedRolls ++;
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
