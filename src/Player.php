<?php
/**
 * @author Kifah Abbad
 * Time: 12:43
 */

namespace App;


class Player
{
    /**
     * @var string
     */
    private $name;
    /**
     * @var int
     */
    private $score;


    /**
     * Player constructor.
     * @param string $name
     * @param int $score
     */
    public function __construct(string $name, int $score)
    {
        $this->name = $name;
        $this->score = $score;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * @param int $points
     */
    public function earnPoints(int $points)
    {
        $this->score = $points;
    }


}