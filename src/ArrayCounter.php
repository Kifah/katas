<?php
/**
 * @author Kifah Abbad
 * Time: 17:07
 */

namespace App;


/**
 * Class ArrayCounter
 * @package App
 */
class ArrayCounter
{


    /**
     * count the occurrence of an element, in an a given array. Also supports nested arrays
     * @param array $haystack
     * @param string $needle
     * @return int
     */
    public static function countItems(array $haystack, string $needle): int
    {
        $count = 0;
        foreach ($haystack as $arrayItem) {
            if (is_array($arrayItem)) {
                $count += self::countItems($arrayItem, $needle);
            } else {
                if ($needle == $arrayItem) {
                    $count++;
                }
            }

        }

        return $count;
    }

}