<?php
/**
 * @author Kifah Abbad
 * Time: 17:19
 */

namespace App;


class FizzBuzz
{
    public static function execute(int $number): string
    {
        if ($number % 15 == 0) {
            return 'FizzBuzz';
        }
        if ($number % 3 == 0) {
            return 'Fizz';
        }
        if ($number % 5 == 0) {
            return 'Buzz';
        }
        return $number;
    }
}