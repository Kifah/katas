<?php

namespace App;

use PHPUnit_Framework_TestCase;

class FizzBuzzTest extends PHPUnit_Framework_TestCase
{


    /**
     * @test
     * @expectedException \ErrorException
     * @expectedExceptionMessage out of range
     */
    public function outOfRanceHigherThanHundred()
    {
        $number = 101;
        $actual = FizzBuzz::execute($number);
    }

    /**
     * @test
     * @expectedException \ErrorException
     * @expectedExceptionMessage out of range
     */
    public function outOfRangeMinus()
    {
        $number = -1;
        $actual = FizzBuzz::execute($number);
    }

    /**
     * @test
     */
    public function threeReturnsFizz()
    {
        $number = 3;
        $actual = FizzBuzz::execute($number);
        $this->assertEquals('fizz', $actual);
    }

    /**
     * @test
     */
    public function sixReturnsFizz()
    {
        $number = 6;
        $actual = FizzBuzz::execute($number);
        $this->assertEquals('fizz', $actual);
    }

    /**
     * @test
     */
    public function twoReturnsTwo()
    {
        $number = 2;
        $actual = FizzBuzz::execute($number);
        $this->assertEquals($number, $actual);
    }

    /**
     * @test
     */
    public function fiveReturnsBuzz()
    {
        $number = 5;
        $actual = FizzBuzz::execute($number);
        $this->assertEquals('buzz', $actual);
    }

    /**
     * @test
     */
    public function returnFizzBuzz()
    {
        $number = 15;
        $actual = FizzBuzz::execute($number);
        $this->assertEquals('fizzbuzz', $actual);
    }
}
