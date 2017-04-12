<?php
/**
 * @author Kifah Abbad
 * Time: 12:35
 */

namespace App\Tennis;


class Tennis
{
    /**
     * @var Player
     */
    private $player1;
    /**
     * @var Player
     */
    private $player2;


    /**
     * @var array
     */
    private $lookup = [
        0 => 'Love',
        1 => 'Fifteen',
        2 => 'Thirty',
        3 => 'Forty',
    ];


    /**
     * Tennis constructor.
     * @param Player $player1
     * @param Player $player2
     */
    public function __construct(Player $player1, Player $player2)
    {
        $this->player1 = $player1;
        $this->player2 = $player2;
    }

    public function score()
    {
        if ($this->hasAWinner()) {
            return 'Win for ' . $this->leadingPlayer()->getName();
        }
        if ($this->hasTheAdvantage()) {
            return 'Advantage for ' . $this->leadingPlayer()->getName();
        }
        if ($this->inDeuce()) {
            return 'Deuce';
        }

        $score = $this->lookup[$this->player1->getScore()] . '-';
        $score .= $this->playersAreTied() ? 'All' :
            $this->lookup[$this->player2->getScore()];

        return $score;
    }

    private function hasAWinner()
    {


        return ($this->hasEnoughPointsToWin()) &&
        ($this->isLeadingByTwo());


    }

    /**
     * @return bool
     */
    private function hasEnoughPointsToWin()
    {
        return max([$this->player1->getScore(), $this->player2->getScore()]) >= 4;
    }

    /**
     * @return number
     */
    private function isLeadingByTwo()
    {
        return abs($this->player1->getScore() - $this->player2->getScore()) >= 2;
    }

    /**
     * @return Player
     */
    private function leadingPlayer()
    {
        if ($this->player1->getScore() > $this->player2->getScore()) {
            return $this->player1;
        }
        return $this->player2;
    }

    /**
     * @return number
     */
    private function hasTheAdvantage()
    {
        return abs($this->player1->getScore() - $this->player2->getScore()) == 1 && $this->hasEnoughPointsToWin();
    }

    protected function inDeuce()
    {
        return ($this->player1->getScore() + $this->player2->getScore()) >= 6 && $this->playersAreTied();
    }

    /**
     * @return bool
     */
    protected function playersAreTied()
    {
        return $this->player1->getScore() == $this->player2->getScore();
    }


}