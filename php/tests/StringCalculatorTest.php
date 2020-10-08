<?php

namespace CodeRetreatTests;

use CodeRetreat\StringCalculator;
use PHPUnit\Framework\TestCase;

class StringCalculatorTest extends TestCase
{
    public function dataProviderFor()
    {
        return [
            ["", 0],
            ["2", 2],
            [" ", 0],
            [" 1", 1],
            ["2 ", 2],
            [" 3 ", 3],
            ["1,2", 3],
            ["1,2,3", 6],
            ["1\n2", 3],
            ["1\n2,3", 6],
            ["//,\1,2", 6],
        ];
    }

    /**
     * @test
     * @dataProvider dataProviderFor
     * @param $input
     * @param $expected
     */
    public function shouldReturnZeroWithEmptyString($input, $expected)
    {
        $stringCalculator = new StringCalculator();

        $result = $stringCalculator->add($input);

        $this->assertEquals($expected, $result);
    }
}
