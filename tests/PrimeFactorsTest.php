<?php
/**
 * @author Kifah Abbad
 * Time: 14:04
 */

namespace App;


class PrimeFactorsTest extends \PHPUnit_Framework_TestCase
{


    /**
     * @test
     * @group PrimeFactorsTest
     */
    public function returnsEmptyArrayFor1()
    {
        $result = PrimeFactors::generate(1);

        $this->assertEquals([], $result);
    }

    /**
     * @test
     * @group PrimeFactorsTest
     */
    public function return2For2()
    {
        $result = PrimeFactors::generate(2);

        $this->assertEquals([2], $result);
    }


    /**
     * @test
     * @group PrimeFactorsTest
     */
    public function return3For3()
    {
        $result = PrimeFactors::generate(3);

        $this->assertEquals([3], $result);
    }

    /**
     * @test
     * @group PrimeFactorsTest
     */
    public function return2And2For4()
    {
        $result = PrimeFactors::generate(4);

        $this->assertEquals([2, 2], $result);
    }

    /**
     * @test
     * @group PrimeFactorsTest
     */
    public function return5For5()
    {
        $result = PrimeFactors::generate(5);

        $this->assertEquals([5], $result);
    }

    /**
     * @test
     * @group PrimeFactorsTest
     */
    public function return2And3For6()
    {
        $result = PrimeFactors::generate(6);

        $this->assertEquals([2, 3], $result);
    }

    /**
     * @test
     * @group PrimeFactorsTest
     */
    public function return2And2And2For8()
    {
        $result = PrimeFactors::generate(8);

        $this->assertEquals([2, 2, 2], $result);
    }


    /**
     * @test
     * @group PrimeFactorsTest
     */
    public function return3And3For9()
    {
        $result = PrimeFactors::generate(9);

        $this->assertEquals([3, 3], $result);
    }

    /**
     * @test
     * @group PrimeFactorsTest
     */
    public function return2And2And5And5For100()
    {
        $result = PrimeFactors::generate(100);

        $this->assertEquals([2, 2, 5, 5], $result);
    }
}
