<?php
/**
 * @author Kifah Abbad
 * Time: 17:24
 */

namespace App;


use PHPUnit_Framework_TestCase;

class RomanNumeralsConverterTest extends PHPUnit_Framework_TestCase
{

    /**
     * @test
     * @group RomanNumeralsConverterTest
     */
    public function itCalculatesTheRomanNumeralsForOne()
    {
        $value = 1;
        $expected = 'I';
        $real = RomanNumeralsConverter::calculate($value);
        $this->assertEquals($expected, $real);
    }

    /**
     * @test
     * @group RomanNumeralsConverterTest
     */
    public function itCalculatesTheRomanNumeralsForTwo()
    {
        $value = 2;
        $expected = 'II';
        $real = RomanNumeralsConverter::calculate($value);
        $this->assertEquals($expected, $real);
    }

    /**
     * @test
     * @group RomanNumeralsConverterTest
     */
    public function itCalculatesTheRomanNumeralsForFive()
    {
        $value = 5;
        $expected = 'V';
        $real = RomanNumeralsConverter::calculate($value);
        $this->assertEquals($expected, $real);
    }

    /**
     * @test
     * @group RomanNumeralsConverterTest
     */
    public function itCalculatesTheRomanNumeralsForSix()
    {
        $value = 6;
        $expected = 'VI';
        $real = RomanNumeralsConverter::calculate($value);
        $this->assertEquals($expected, $real);
    }

    /**
     * @test
     * @group RomanNumeralsConverterTest
     */
    public function itCalculatesTheRomanNumeralsForTen()
    {
        $value = 10;
        $expected = 'X';
        $real = RomanNumeralsConverter::calculate($value);
        $this->assertEquals($expected, $real);
    }

    /**
     * @test
     * @group RomanNumeralsConverterTest
     */
    public function itCalculatesTheRomanNumeralsForEleven()
    {
        $value = 11;
        $expected = 'XI';
        $real = RomanNumeralsConverter::calculate($value);
        $this->assertEquals($expected, $real);
    }


    /**
     * @test
     * @group RomanNumeralsConverterTest
     */
    public function itCalculatesTheRomanNumeralsForTwenty()
    {
        $value = 20;
        $expected = 'XX';
        $real = RomanNumeralsConverter::calculate($value);
        $this->assertEquals($expected, $real);
    }

    /**
     * @test
     * @group RomanNumeralsConverterTest
     */
    public function itCalculatesTheRomanNumeralsForFour()
    {
        $value = 4;
        $expected = 'IV';
        $real = RomanNumeralsConverter::calculate($value);
        $this->assertEquals($expected, $real);
    }

    /**
     * @test
     * @group RomanNumeralsConverterTest
     */
    public function itCalculatesTheRomanNumeralsForNine()
    {
        $value = 9;
        $expected = 'IX';
        $real = RomanNumeralsConverter::calculate($value);
        $this->assertEquals($expected, $real);
    }

    /**
     * @test
     * @group RomanNumeralsConverterTest
     */
    public function itCalculatesTheRomanNumeralsForFifty()
    {
        $value = 50;
        $expected = 'L';
        $real = RomanNumeralsConverter::calculate($value);
        $this->assertEquals($expected, $real);
    }

    /**
     * @test
     * @group RomanNumeralsConverterTest
     */
    public function itCalculatesTheRomanNumeralsForHundred()
    {
        $value = 100;
        $expected = 'C';
        $real = RomanNumeralsConverter::calculate($value);
        $this->assertEquals($expected, $real);
    }

    /**
     * @test
     * @group RomanNumeralsConverterTest
     */
    public function itCalculatesTheRomanNumeralsForFiveHundred()
    {
        $value = 500;
        $expected = 'D';
        $real = RomanNumeralsConverter::calculate($value);
        $this->assertEquals($expected, $real);
    }

    /**
     * @test
     * @group RomanNumeralsConverterTest
     */
    public function itCalculatesTheRomanNumeralsForThousand()
    {
        $value = 1000;
        $expected = 'M';
        $real = RomanNumeralsConverter::calculate($value);
        $this->assertEquals($expected, $real);
    }

}
