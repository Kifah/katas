<?php


namespace App;

use PHPUnit_Framework_TestCase;


class ChessBoardTest extends PHPUnit_Framework_TestCase
{


    /**
     * @var array
     */
    private $boardArray;

    public function setUp()
    {
        $this->boardArray = ChessBoard::build();
        parent::setUp();
    }

    /**
     * @test
     * @group ChessBoardTest
     */
    public function firstBlockIsBlack()
    {
        $this->assertEquals(ChessBoard::BLACK, $this->boardArray[0][0]);
    }

    /**
     * @test
     * @group ChessBoardTest
     */
    public function secondBlockIsWhite()
    {
        $this->assertEquals(ChessBoard::WHITE, $this->boardArray[0][1]);
    }

    /**
     * @test
     * @group ChessBoardTest
     */
    public function eachBoardHasEightLine()
    {
        $this->assertEquals(8, sizeof($this->boardArray));
    }

    /**
     * @test
     * @group ChessBoardTest
     */
    public function firstBlockInSecondLineIsWhite()
    {
        $this->assertEquals(ChessBoard::WHITE, $this->boardArray[1][0]);
    }

    /**
     * @test
     * @group ChessBoardTest
     */
    public function eachLineHasEightFields()
    {
        $this->assertEquals(8, sizeof($this->boardArray[0]));
    }

}
