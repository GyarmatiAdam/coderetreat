<?php
/**
 * Created by PhpStorm.
 * User: r.quidet
 * Date: 26.06.2019
 * Time: 16:06
 */

namespace CodeRetreat;


class EuroCoinChange
{
    public function change(int $cents, array $denominations)
    {
        $result = [];
        foreach ($denominations as $denomination) {
            while ($denomination <= $cents) {
                $cents = $cents - $denomination;
                $result[] = $denomination;
            }
        }

        return $result;
    }
}