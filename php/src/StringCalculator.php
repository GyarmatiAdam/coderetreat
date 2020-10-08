<?php

namespace CodeRetreat;


class StringCalculator
{

    public function add(string $numbers)
    {
        $listOfNumbers = preg_split('/(,|\n)/', $numbers);
        if (count($listOfNumbers) > 1) {
            $sum = 0;
            foreach ($listOfNumbers as $number) {
                $sum += $number;
            }
            return $sum;
        }
        return (int)$numbers;
    }
}