<?php

/**
 * @link https://leetcode.com/problems/two-sum/
 * Class TwoSum
 */
class TwoSum
{
    /**
     * @param $nums
     * @param $target
     * @return string
     */
    public static function calculate($nums, $target)
    {
        for ($i = 0; $i < count($nums); $i++) {
            for($j = 0; $j < count($nums); $j++) {
                if (($nums[$i] + $nums[$j]) == $target) {
                    return '[' . $i . ', ' . $j . ']';
                }
            }
        }
    }
}

$nums = [3, 7, 6, -2];
$target = 9;

$result = TwoSum::calculate($nums, $target);

echo $result;

