<?php

namespace App;

use PHPUnit_Framework_TestCase;

class FizzBuzzTest extends PHPUnit_Framework_TestCase
{


    /**
     * @test
     */
    public function itTranslatesOneForFizzBuzz()
    {
        $number = 1;
        $expected = 1;
        $actual = FizzBuzz::execute($number);
        $this->assertEquals($expected, $actual);

    }


    /**
     * @test
     */
    public function itTranslates2ForFizzBuzz()
    {
        $number = 2;
        $expected = 2;
        $actual = FizzBuzz::execute($number);
        $this->assertEquals($expected, $actual);
    }


    /**
     * @test
     */
    public function itTranslates3ForFizzBuzz()
    {
        $number = 3;
        $expected = 'Fizz';
        $actual = FizzBuzz::execute($number);
        $this->assertEquals($expected, $actual);
    }


    /**
     * @test
     */
    public function itTranslates5ForFizzBuzz()
    {
        $number = 5;
        $expected = 'Buzz';
        $actual = FizzBuzz::execute($number);
        $this->assertEquals($expected, $actual);
    }

    /**
     * @test
     */
    public function itTranslates6ForFizzBuzz()
    {
        $number = 6;
        $expected = 'Fizz';
        $actual = FizzBuzz::execute($number);
        $this->assertEquals($expected, $actual);
    }

    /**
     * @test
     */
    public function itTranslates10ForFizzBuzz()
    {
        $number = 10;
        $expected = 'Buzz';
        $actual = FizzBuzz::execute($number);
        $this->assertEquals($expected, $actual);
    }

    /**
     * @test
     */
    public function itTranslates15ForFizzBuzz()
    {
        $number = 15;
        $expected = 'FizzBuzz';
        $actual = FizzBuzz::execute($number);
        $this->assertEquals($expected, $actual);
    }


}
