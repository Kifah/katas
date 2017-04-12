<?php
/**
 * @author Kifah Abbad
 * Time: 17:19
 */

namespace App;

/**
 * the famous FizzBuzz Code-Kata
 * @link http://www.codekatas.org/casts/code-kata-fizzbuzz-by-lets-develop
 * Class FizzBuzz
 * @package App
 */
class FizzBuzz
{
    public static function execute(int $number): string
    {


        if ($number <= 100 && $number >= 0) {
            if ($number % 3 == 0 && $number % 5 == 0) {
                return 'fizzbuzz';
            } else {
                if ($number % 3 == 0) {
                    return 'fizz';
                } else {
                    if ($number % 5 == 0) {
                        return 'buzz';
                    }
                }
            }
        } else {
            throw new \Errorexception('out of range');
        }

        return $number;

    }
}