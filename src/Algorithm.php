<?php

namespace App;

use ArrayObject;

abstract class Algorithm
{
    /**
     * @param $string string
     * @return array
     */
    static function baseRealisation(string $string): array
    {
        $explodedStr = preg_split(
            "/[\s,]*\\\"([^\\\"]+)\\\"[\s,]*|" . "[\s,]*'([^']+)'[\s,]*|" . "[\s,]+/",
            $string,
            0,
            PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE
        );

        $retArr = self::calcElements($explodedStr);

        self::sortArray($retArr);

        $retArr = array_splice($retArr,0,5);

        return $retArr;
    }

    private static function calcElements($array): array
    {
        $retArr = [];

        foreach ($array as $key => $value) {
            if (isset($retArr[$value])) {
                $retArr[$value]++;
            } else $retArr[$value] = 1;
        }

        return $retArr;
    }

    private static function sortArray(array &$array): void {
        $splArr = new ArrayObject($array);
        $splArr->uasort(function ($a, $b) {
            if ($a == $b) {
                return 0;
            }
            return ($a > $b) ? -1 : 1;
        });

        $array = $splArr->getArrayCopy();
    }
}