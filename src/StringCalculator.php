<?php
/**
 * @author Kifah Abbad
 * Time: 14:33
 */

namespace App;


use InvalidArgumentException;

class StringCalculator
{

    /**
     * @param string $string
     * @return int
     */
    public static function calculate(string $string): int
    {
        $result = 0;
        $numbers = self::splitNumbers($string);
        foreach ($numbers as $number) {
            self::guardAgainstInvalidNumber($number);
            if ($number < 1000) {

                $result += $number;
            }
        }
        return $result;
    }

    protected static function splitNumbers(string $string): array
    {
        return preg_split('/(,|\\\n)/', $string);
    }

    /**
     * @param $number
     */
    protected static function guardAgainstInvalidNumber($number)
    {
        if ($number < 0) {
            throw new InvalidArgumentException('Invalid number provided: ' . $number);
        }
    }


}