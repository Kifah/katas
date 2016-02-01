<?php

namespace App;


use PHPUnit_Framework_TestCase;

class LineDrawerTest extends PHPUnit_Framework_TestCase
{

    /**
     * @test
     * @group LineDrawerTest
     */
    public function first()
    {
        LineDrawer::draw();
    }

}
