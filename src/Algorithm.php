<?php

namespace App;

abstract class Algorithm
{
    public function __construct()
    {
    }

    /**
     * @param $string string
     * @return array|string
     */
    static function baseRealisation(string $string): array
    {
        $retArr = [];
        
        $explodedStr = preg_split("/[\s,]*\\\"([^\\\"]+)\\\"[\s,]*|" . "[\s,]*'([^']+)'[\s,]*|" . "[\s,]+/", $string, 0, PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE);

        foreach ($explodedStr as $key => $value) {
            if (isset($retArr[$value])) {
                $retArr[$value]++;
            } else $retArr[$value] = 1;
        }

        return $retArr;
    }
}