<?php

/**
 * @link https://leetcode.com/problems/longest-substring-without-repeating-characters/
 * Class LongestSubstring
 */
class LongestSubstring
{
    /**
     * @param $string
     * @return mixed
     */
    public static function searchSubstring($string)
    {
        $tempString = '';
        $stringArray = array();

        for ($i = 0; $i < strlen($string); $i++) {
            if (strstr($tempString, $string[$i])) {
                $stringArray[] = $tempString;
                $tempString = '';
            }

            $tempString .= $string[$i];
        }

        $lengths = array_map('strlen', $stringArray);
        $maxLength = max($lengths);
        $arrayIndex = array_search($maxLength, $lengths);

        return $stringArray[$arrayIndex];
    }
}

$string = 'pwwkew';

$longestSubstring = LongestSubstring::searchSubstring($string);

echo $longestSubstring;
