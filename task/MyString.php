<?php

/**
 * Class MyString
 */
class MyString
{
    /**
     * @param string $template
     * @param string $string
     * @return bool
     */
    final public function make($template = '', $string = '')
    {
        $brokenTemplate = $this->brokeTemplate($template);

        $pattern = $this->replaceByPattern($brokenTemplate);

        if (preg_match("/^$pattern$/", $string)) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @param $template
     * @return array
     */
    final private function brokeTemplate($template)
    {
        $tempString = '';
        $brokenTemplate = array();

        for ($i = 0; $i < strlen($template); $i++) {
            $tempString .= $template[$i];

            if ($template[$i] == '*' && $template[$i+1] != '*') {
                $brokenTemplate[] = $tempString;
                $tempString = '';
            }

            if ($template[$i] != '*' && $template[$i+1] == '*' || !isset($template[$i+1])) {
                $brokenTemplate[] = $tempString;
                $tempString = '';
            }
        }

        return $brokenTemplate;
    }

    /**
     * @param $brokenTemplate
     * @return string
     */
    final private function replaceByPattern($brokenTemplate)
    {
        for ($i = 0; $i < count($brokenTemplate); $i++) {
            if (strstr($brokenTemplate[$i], '*')) {
                $countSymbols = strlen($brokenTemplate[$i]);

                if ($countSymbols == 1) {
                    $brokenTemplate[$i] = '[\w]*';
                } else {
                    $brokenTemplate[$i] = '[\w]{' . $countSymbols . '}';
                }
            }
        }

        $replaced = implode('', $brokenTemplate);

        return $replaced;
    }
}
