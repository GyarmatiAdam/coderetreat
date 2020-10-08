<?php

namespace Bowling\Tests;

use Bowling\FrameLogic;
use Bowling\GameException;
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
        $gameLogic = new GameLogic([$frameOne]);
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
        $gameLogic = new GameLogic([$frameOne]);
        $gameLogic->roll(1);
        $gameLogic->roll(2);

        $totalScore = $gameLogic->getScore();

        $this->assertEquals($totalScore, 3);
    }

    /**
     * @test
     * @throws GameException
     */
    public function should_fail_if_all_frames_completed()
    {
        $this->expectException(GameException::class);
        $frameOne = new FrameLogic();
        $gameLogic = new GameLogic([$frameOne]);
        $gameLogic->roll(1);
        $gameLogic->roll(1);
        $gameLogic->roll(1);
    }
}
