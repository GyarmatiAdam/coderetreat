<?php

namespace Bowling\Tests;

use Bowling\Frame;
use Bowling\GameLogic;
use PHPUnit\Framework\TestCase;

class GameTest extends TestCase
{
    /**
     * @test
     */
    public function should_return_score_of_all_frames()
    {
        $frame[] = new Frame();
        $this->game = new GameLogic($frame);
        $this->game->roll(1);

        $score = $this->game->getScore();

        $this->assertEquals($score, 1);
    }

    /**
     * @test
     */
    public function should_return_score_2_after_roll()
    {
        $frameOne = new Frame();
        $frameTwo = new Frame();
        $gameLogic = new GameLogic([$frameOne, $frameTwo]);
        $gameLogic->roll(1);
        $gameLogic->roll(1);

        $totalScore = $gameLogic->getScore();

        $this->assertEquals($totalScore, 2);
    }

    /**
     * @test
     */
    public function should_return_score_3_after_roll()
    {
        $frameOne = new Frame();
        $frameTwo = new Frame();
        $gameLogic = new GameLogic([$frameOne, $frameTwo]);
        $gameLogic->roll(1);
        $gameLogic->roll(1);

        $totalScore = $gameLogic->getScore();

        $this->assertEquals($totalScore, 2);
    }

    /**
     * @test
     */
    public function shouldDoSomething()
    {
        $frameOne = new Frame();
        $frameOne->roll(1);
        $currentFrame = new Frame();
        $currentFrame->roll(2);
        $gameLogic = new GameLogic([$frameOne, $currentFrame]);

        $frame = $gameLogic->getCurrentFrame();

        $this->assertEquals($frame->getScore(), $currentFrame->getScore());
    }
}
