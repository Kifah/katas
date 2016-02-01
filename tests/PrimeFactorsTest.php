<?php
/**
 * @author Kifah Abbad
 * Time: 11:52
 */

namespace App;

use PHPUnit_Framework_TestCase;


class PrimeFactorsTest extends PHPUnit_Framework_TestCase
{


    /**
     * @test
     */
    public function returnsEmptyArrayForZero()
    {
        $value = 0;
        $expectedArray = [];
        $generatedArray = PrimeFactors::generate($value);
        $this->assertEquals($expectedArray, $generatedArray);
    }

    /**
     * @test
     */
    public function returnsTwoForTwo()
    {
        $value = 2;
        $expectedArray = [2];
        $generatedArray = PrimeFactors::generate($value);
        $this->assertEquals($expectedArray, $generatedArray);
    }


    /**
     * @test
     */
    public function returnsThreeForThree()
    {
        $value = 3;
        $expectedArray = [3];
        $generatedArray = PrimeFactors::generate($value);
        $this->assertEquals($expectedArray, $generatedArray);
    }


    /**
     * @test
     */
    public function returnsTwoTwoForFour()
    {
        $value = 4;
        $expectedArray = [2, 2];
        $generatedArray = PrimeFactors::generate($value);
        $this->assertEquals($expectedArray, $generatedArray);
    }

    /**
     * @test
     */
    public function returnsFiveForFive()
    {
        $value = 5;
        $expectedArray = [5];
        $generatedArray = PrimeFactors::generate($value);
        $this->assertEquals($expectedArray, $generatedArray);
    }

    /**
     * @test
     */
    public function returnsTwoAndThreeForSix()
    {
        $value = 6;
        $expectedArray = [2, 3];
        $generatedArray = PrimeFactors::generate($value);
        $this->assertEquals($expectedArray, $generatedArray);
    }

    /**
     * @test
     */
    public function returnsTwoTwoTwoForEight()
    {
        $value = 8;
        $expectedArray = [2, 2, 2];
        $generatedArray = PrimeFactors::generate($value);
        $this->assertEquals($expectedArray, $generatedArray);
    }

    /**
     * @test
     */
    public function returnsThreeAndThreeForNine()
    {
        $value = 9;
        $expectedArray = [3, 3];
        $generatedArray = PrimeFactors::generate($value);
        $this->assertEquals($expectedArray, $generatedArray);
    }

    /**
     * @test
     */
    public function returnsTwoTwoFiveFiveForHundred()
    {
        $value = 100;
        $expectedArray = [2, 2, 5, 5];
        $generatedArray = PrimeFactors::generate($value);
        $this->assertEquals($expectedArray, $generatedArray);
    }

}
