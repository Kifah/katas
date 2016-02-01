<?php
/**
 * @author Kifah Abbad
 * Time: 14:34
 */

namespace App;

use PHPUnit_Framework_TestCase;


class StringCalculatorTest extends PHPUnit_Framework_TestCase
{

    public function setUp()
    {

        parent::setUp();

    }


    /**
     * @test
     */
    public function itTranslatesEmptyStringToZero()
    {
        $givenvalue = '';
        $expectedResult = 0;
        $this->assertEquals($expectedResult, StringCalculator::calculate($givenvalue));


    }

    /**
     * @test
     */
    public function itFindsSumOfOneNumber()
    {
        $givenvalue = '5';
        $expectedResult = 5;
        $this->assertEquals($expectedResult, StringCalculator::calculate($givenvalue));


    }

    /**
     * @test
     */
    public function itFindsSumOfTwoNumber()
    {
        $givenvalue = '1,2';
        $expectedResult = 3;
        $this->assertEquals($expectedResult, StringCalculator::calculate($givenvalue));


    }

    /**
     * @test
     */
    public function itFindsSumOfAnyAmountOfNumbers()
    {
        $givenvalue = '1,2,3,4,5';
        $expectedResult = 15;
        $this->assertEquals($expectedResult, StringCalculator::calculate($givenvalue));


    }

    /**
     * @test
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Invalid number provided: -2
     */
    public function itdisallowsNegativeNumbers()
    {
        $givenvalue = '3,-2';
        $expectedResult = 15;
        $this->assertEquals($expectedResult, StringCalculator::calculate($givenvalue));


    }

    /**
     * @test
     */
    public function itIgnores1000OrGreater()
    {
        $givenvalue = '3,2,1001';
        $expectedResult = 5;
        $this->assertEquals($expectedResult, StringCalculator::calculate($givenvalue));


    }
    /**
     * @test
     */
    public function itAllowsForNewLineDelimeters()
    {
        $givenvalue = '2,2\n2';
        $expectedResult = 6;
        $this->assertEquals($expectedResult, StringCalculator::calculate($givenvalue));


    }


}
