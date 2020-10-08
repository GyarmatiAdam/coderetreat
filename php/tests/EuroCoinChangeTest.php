<?php

namespace CodeRetreatTests;

use CodeRetreat\EuroCoinChange;
use PHPUnit\Framework\TestCase;

define("COIN_DENOMINATION", [200,100,50,20,10,5,2,1]);
class EuroCoinChangeTest extends TestCase
{
    /** @var EuroCoinChange $coinChanger */
    private $coinChanger;

    public function setUp()
    {
        $this->coinChanger = new EuroCoinChange();
    }

    /** @test */
    public function shouldReturnEmptyWhenZero()
    {
        $this->assertEquals([], $this->coinChanger->change(0, COIN_DENOMINATION));
    }

    /**
     * @test
     * @dataProvider denominationProvider
     * @param $denomination
     */
    public function shouldReturnDenominationIfCentsAreDenomination($denomination)
    {
        $this->assertEquals([$denomination], $this->coinChanger->change($denomination, COIN_DENOMINATION));
    }

    /** @test */
    public function shouldReturnTwoAndOneForThreeCents(){
        $this->assertEquals([2, 1], $this->coinChanger->change(3, COIN_DENOMINATION));
    }

    /** @test */
    public function shouldReturn521For8(){
        $this->assertEquals([5, 2, 1], $this->coinChanger->change(8, COIN_DENOMINATION));
    }

    /** @test */
    public function shouldReturn50_20_2_1For73(){
        $this->assertEquals([50, 20, 2, 1], $this->coinChanger->change(73, COIN_DENOMINATION));
    }

    /** @test */
    public function shouldReturn388(){
        $this->assertEquals([200, 100, 50, 20,10, 5, 2, 1], $this->coinChanger->change(388, COIN_DENOMINATION));
    }

    /** @test */
    public function shouldReturn4(){
        $this->assertEquals([2, 2], $this->coinChanger->change(4, COIN_DENOMINATION));
    }

    public function denominationProvider()
    {
        return [
            "200" => [200],
            "100" => [100],
            "50" => [50],
            "20" => [20],
            "10" => [10],
            "5" => [5],
            "2" => [2],
            "1" => [1],
        ];
    }
}
