<?php
/**
 * @author Kifah Abbad
 * Time: 17:23
 */

namespace App;


class RomanNumeralsConverter
{

    protected static $lookup = [
        1000 => 'M',
        500 => 'D',
        100 => 'C',
        50 => 'L',
        10 => 'X',
        9 => 'IX',
        5 => 'V',
        4 => 'IV',
        1 => 'I',
    ];

    public static function calculate(int $number): string
    {
        $calculateString = '';
        foreach (static::$lookup as $index => $item) {
            while ($number >= $index) {
                $calculateString .= $item;
                $number = $number - $index;
            }

        }
        return $calculateString;


    }


}