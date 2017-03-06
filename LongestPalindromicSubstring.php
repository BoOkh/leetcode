<?php

/**
 * @link https://leetcode.com/problems/longest-palindromic-substring/
 * Class LongestPalindromicSubstring
 */
class LongestPalindromicSubstring
{
    /**
     * @param string $string
     * @return mixed
     */
    public static function calculate($string = '')
    {
        $tempString = '';
        $givenValues = array();

        $offset = 0;
        $length = strlen($string);

        while ($offset < $length) {
            for ($i = $offset; $i < $length; $i++) {
                $tempString .= $string[$i];

                if (strrev($tempString) == $tempString) {
                    $givenValues[] = $tempString;
                }
            }

            $tempString = '';
            $offset++;
        }

        $lengths = array_map('strlen', $givenValues);
        $maxLength = max($lengths);
        $arrayIndex = array_search($maxLength, $lengths);

        return $givenValues[$arrayIndex];
    }
}

$string = 'babad';

$result = LongestPalindromicSubstring::calculate($string);

echo $result;
