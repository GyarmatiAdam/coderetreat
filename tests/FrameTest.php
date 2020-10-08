<?php

namespace Bowling\Tests;

use PHPUnit\Framework\TestCase;
use Bowling\Frame;

class FrameTest extends TestCase
{
    public $frame;

    protected function setUp(): void
    {
        $this->frame = new Frame();
    }

    /**
     * @test
     */
    public function should_roll_1_and_add_to_score_()
    {
        $this->frame->roll(1);

        $score = $this->frame->getScore();

        $this->assertEquals($score, 1);
    }

    /**
     * @test
     */
    public function should_1_roll_twice_and_return_score_2()
    {
        $this->frame->roll(1);
        $this->frame->roll(1);

        $score = $this->frame->getScore();

        $this->assertEquals($score, 2);
    }
}
