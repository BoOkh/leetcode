<?php

/**
 * Trapping Rain Water
 * Class Water
 */
class Water
{
    /**
     * @return int|mixed
     */
    public function calculate()
    {
        $arr = [0, 1, 0, 2, 1, 0, 1, 3, 2, 1, 2, 1];
        $secArr = 0;
        $left = 0;
        $right = count($arr) - 1;
        $area = 0;
        while ($left < $right) {
            if ($arr[$left] < $arr[$right]) {
                $secArr = max($arr[$left], $secArr);
                $area += $secArr - $arr[$left];
                $left++;
            } else {
                $secArr = max($arr[$right], $secArr);
                $area += $secArr - $arr[$right];
                $right--;
            }
        }
        return $area;
    }
}

$water = new Water();

echo $water->calculate();
