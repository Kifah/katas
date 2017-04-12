<?php
/**
 * @author Kifah Abbad
 * Time: 12:36
 */

namespace App\Tennis;


use PHPUnit_Framework_TestCase;


class TennisTest extends PHPUnit_Framework_TestCase
{


    const PLAYER1_NAME='Marc';
    const PLAYER2_NAME='Eric';

    private $tennis;
    private $player1;
    private $player2;

    public function setUp()
    {
        $this->player1 = new Player(self::PLAYER1_NAME, 0);
        $this->player2 = new Player(self::PLAYER2_NAME, 0);

        $this->tennis = new Tennis($this->player1, $this->player2);
        parent::setUp();
    }


    /**
     * @test
     * @group TennisTest
     */
    public function itScoresAScorelessGame()
    {
        $expected = 'Love-All';
        $actual = $this->tennis->score();
        $this->assertEquals($expected, $actual);
    }

    /**
     * @test
     * @group TennisTest
     */
    public function itScores15Love()
    {
        $expected = 'Fifteen-Love';
        $this->player1->earnPoints(1);
        $actual = $this->tennis->score();
        $this->assertEquals($expected, $actual);
    }

    /**
     * @test
     * @group TennisTest
     */
    public function itScores30Love()
    {
        $expected = 'Thirty-Love';
        $this->player1->earnPoints(2);
        $actual = $this->tennis->score();
        $this->assertEquals($expected, $actual);
    }

    /**
     * @test
     * @group TennisTest
     */
    public function itScores40Love()
    {
        $expected = 'Forty-Love';
        $this->player1->earnPoints(3);
        $actual = $this->tennis->score();
        $this->assertEquals($expected, $actual);
    }

    /**
     * @test
     * @group TennisTest
     */
    public function itScoresWinForPlayer1()
    {
        $expected = 'Win for '.self::PLAYER1_NAME;
        $this->player1->earnPoints(4);
        $actual = $this->tennis->score();
        $this->assertEquals($expected, $actual);
    }

    /**
     * @test
     * @group TennisTest
     */
    public function itScoresWinForPlayer2()
    {
        $expected = 'Win for '.self::PLAYER2_NAME;
        $this->player2->earnPoints(4);
        $actual = $this->tennis->score();
        $this->assertEquals($expected, $actual);
    }

    /**
     * @test
     * @group TennisTest
     */
    public function itScoresFourAndThree()
    {
        $expected = 'Advantage for '.self::PLAYER1_NAME;
        $this->player1->earnPoints(4);
        $this->player2->earnPoints(3);
        $actual = $this->tennis->score();
        $this->assertEquals($expected, $actual);
    }

    /**
     * @test
     * @group TennisTest
     */
    public function itScoresDeuce()
    {
        $expected = 'Deuce';
        $this->player1->earnPoints(4);
        $this->player2->earnPoints(4);
        $actual = $this->tennis->score();
        $this->assertEquals($expected, $actual);
    }

    /**
     * @test
     * @group TennisTest
     */
    public function itScoresDeuceWithThree()
    {
        $expected = 'Deuce';
        $this->player1->earnPoints(3);
        $this->player2->earnPoints(3);
        $actual = $this->tennis->score();
        $this->assertEquals($expected, $actual);
    }

    /**
     * @test
     * @group TennisTest
     */
    public function itScoresWinForPlayer2Over2Point()
    {
        $expected = 'Win for '.self::PLAYER2_NAME;
        $this->player1->earnPoints(4);
        $this->player2->earnPoints(6);
        $actual = $this->tennis->score();
        $this->assertEquals($expected, $actual);
    }

}
