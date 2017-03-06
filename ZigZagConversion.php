<?php

/**
 * Class ZigZagConversion
 * @link https://leetcode.com/problems/zigzag-conversion/
 */
class ZigZagConversion
{
    final public static function convert($string)
    {
        return $string;
    }
}

$string = 'PAYPALISHIRING';

$result = ZigZagConversion::convert($string);

echo $result;