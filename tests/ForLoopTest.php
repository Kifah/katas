<?php
/**
 * @author Kifah Abbad
 * Time: 16:17
 */

namespace App;


use PHPUnit_Framework_TestCase;


class ForLoopTest extends PHPUnit_Framework_TestCase
{


    public function setUp()
    {
        parent::setUp();
    }

    public function tearDown()
    {
        parent::tearDown();
    }


    /**
     * @test
     * @group ForLoopTest
     */
    public function first()
    {
        $forLoops = ForLoop::run();
    }

}
