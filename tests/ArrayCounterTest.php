<?php
/**
 * @author Kifah Abbad
 * Time: 17:08
 */

namespace App;


class ArrayCounterTest extends \PHPUnit_Framework_TestCase
{


    /**
     * @test
     * @group ArraySearchTest
     */
    public function EmptyWithItems()
    {
        $itemsArray = [];
        $item = 'one';
        $count = ArrayCounter::countItems($itemsArray, $item);
        $expectedCount = 0;
        $this->assertEquals($expectedCount, $count);
    }

    /**
     * @test
     * @group ArraySearchTest
     */
    public function arrayWithItems()
    {
        $itemsArray = ['one', 'two'];
        $item = 'three';
        $count = ArrayCounter::countItems($itemsArray, $item);
        $expectedCount = 0;
        $this->assertEquals($expectedCount, $count);
    }

    /**
     * @test
     * @group ArraySearchTest
     */
    public function arrayWithItemsOneMatch()
    {
        $itemsArray = ['one', 'two'];
        $item = 'one';
        $count = ArrayCounter::countItems($itemsArray, $item);
        $expectedCount = 1;
        $this->assertEquals($expectedCount, $count);
    }

    /**
     * @test
     * @group ArraySearchTest
     */
    public function arrayWithTwoMatches()
    {
        $itemsArray = ['one', 'two', 'one'];
        $item = 'one';
        $count = ArrayCounter::countItems($itemsArray, $item);
        $expectedCount = 2;
        $this->assertEquals($expectedCount, $count);
    }

    /**
     * @test
     * @group ArraySearchTest
     */
    public function arrayWithSubArray()
    {
        $itemsArray = ['one', ['two', 'one']];
        $item = 'one';
        $count = ArrayCounter::countItems($itemsArray, $item);
        $expectedCount = 2;
        $this->assertEquals($expectedCount, $count);
    }

}
