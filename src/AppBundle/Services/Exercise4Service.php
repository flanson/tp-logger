<?php

namespace AppBundle\Services;

/**
 * Class Exercise4Service
 */
class Exercise4Service
{
    private $english = ["a", "e", "s", "S", "A", "o", "O", "t", "l", "ph", "y", "H", "W", "M", "D", "V", "x"];
    private $leet = [
        "4", "3", "z", "Z", "4", "0", "0", "+", "1", "f",
        "j", "|-|", "\\/\\/", "|\\/|", "|)", "\\/", "><"
    ];

    /**
     * @param $string
     * @param bool $isEncode
     * @return string
     */
    private function flip($string, $isEncode = false)
    {
        $out = '';
        if ($string) {
            $dict = $isEncode ? $this->english : $this->leet;
            $dict_ = $isEncode ? $this->leet : $this->english;
            $flippedDict = array_flip($dict); // for good performance
            for ($i = 0; $i < strlen($string); $i++) {
                $char = $string[$i];
                $out .= isset($flippedDict[$char]) ? $dict_[$flippedDict[$char]] : $char;
            }
        }
        return $out;
    }

    /**
     * @param $string
     * @return string
     */
    public function encode($string)
    {
        return $this->flip($string, true);
    }

    /**
     * @param $string
     * @return string
     */
    public function decode($string)
    {
        return $this->flip($string);
    }
}
