<?php

namespace Bowling\Tests;

use Bowling\FrameLogic;
use Bowling\GameLogic;
use PHPUnit\Framework\TestCase;

class GameTest extends TestCase
{
    /**
     * @test
     */
    public function should_return_score_of_all_frames()
    {
        $frame[] = new FrameLogic();
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
        $frameOne = new FrameLogic();
        $frameTwo = new FrameLogic();
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
        $frameOne = new FrameLogic();
        $frameTwo = new FrameLogic();
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
        $frameOne = new FrameLogic();
        $frameOne->roll(1);
        $currentFrame = new FrameLogic();
        $currentFrame->roll(2);
        $gameLogic = new GameLogic([$frameOne, $currentFrame]);

        $frame = $gameLogic->getCurrentFrame();

        $this->assertEquals($frame->getScore(), $currentFrame->getScore());
    }
}
