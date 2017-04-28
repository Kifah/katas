<?php
/**
 * @author Kifah Abbad
 * Time: 11:09
 */

namespace App;


class SimpleStackTest extends \PHPUnit_Framework_TestCase
{


    /**
     * @test
     * @group SimpleStackTest
     */
    public function canPopOffItem()
    {
        $stack = new SimpleStack();
        $item = 'foo';
        $stack->push($item);
        $this->assertEquals($item, $stack->pop());
    }


    /**
     * @test
     * @group SimpleStackTest
     */
    public function canPopMultipleItems()
    {
        $stack = new SimpleStack();
        $item = 'foo';
        $item2 = 'bar';
        $stack->push($item);
        $stack->push($item2);
        $this->assertEquals($item2, $stack->pop());
        $this->assertEquals($item, $stack->pop());
    }

    /**
     * @test
     * @group SimpleStackTest
     */
    public function canPopFromEmptyStack()
    {
        $stack = new SimpleStack();
        $this->assertEquals(null, $stack->pop());
    }

    /**
     * @test
     * @group SimpleStackTest
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage null cannot be pushed
     */
    public function shouldFailWhenPushingNull()
    {
        $stack = new SimpleStack();
        $stack->push(null);

    }

}
