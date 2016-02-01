<?php
/**
 * @author Kifah Abbad
 * Time: 11:53
 */

namespace App;


class PrimeFactors
{


    public static function generate(int $value):array
    {
        $primes = [];
        for ($divisor = 2; $value > 1; $divisor++) {
            for (; $value % $divisor === 0; $value /= $divisor) {
                $primes[] = $divisor;
            }
        }
        return $primes;
    }

}