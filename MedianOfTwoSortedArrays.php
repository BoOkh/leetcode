<?php

/**
 * @link https://leetcode.com/problems/median-of-two-sorted-arrays/
 * Class MedianOfTwoSortedArrays
 */
class MedianOfTwoSortedArrays
{
    /**
     * @param array $nums1
     * @param array $nums2
     * @return float|int
     */
    public static function calculate($nums1 = array(), $nums2 = array())
    {
        $merged = array_merge($nums1, $nums2);

        return array_sum($merged)/count($merged);
    }
}

$nums1 = [1, 3];
$nums2 = [2];

$result = MedianOfTwoSortedArrays::calculate($nums1, $nums2);

echo $result;
