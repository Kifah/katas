<?php
/**
 * @author Kifah Abbad
 * Time: 13:59
 */

namespace App;


/**
 * the prime factors kata by uncle bob
 * @link http://butunclebob.com/ArticleS.UncleBob.ThePrimeFactorsKata
 * Class PrimeFactors
 * @package App
 */
class PrimeFactors
{


    /**
     * @param int $number
     * @return array
     */
    public static function generate(int $number): array
    {
        $primeFactorsArray = [];


        for ($divisor = 2; $number > 1; $divisor++) {
            for (true; $number % $divisor == 0; $number /= $divisor) {
                $primeFactorsArray[] = $divisor;

            }
        }
        return $primeFactorsArray;

    }

}