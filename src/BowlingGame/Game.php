<?php
/**
 * @author Kifah Abbad
 * Time: 16:51
 */

namespace App\BowlingGame;


class Game
{


    const MAX_POINTS = 10;
    protected $rolls = [];

    public function roll(int $pins)
    {
        $this->checkForNegativePins($pins);
        $this->rolls[] = $pins;
    }

    private function checkForNegativePins($int)
    {
        if ($int < 0) {
            throw new \InvalidArgumentException('Negative pins value not allowed');
        }
    }

    public function score(): int
    {

        $score = 0;
        $roll = 0;

        for ($frame = 1; $frame <= self::MAX_POINTS; $frame++) {
            if ($this->isStrike($roll)) {
                $score += self::MAX_POINTS + $this->getStrikeBonus($roll);
                $roll += 1;
            } elseif ($this->isSpare($roll)) {
                $score += self::MAX_POINTS + $this->getSpareBonus($roll);
                $roll += 2;


            } else {
                $score += $this->getDefaultFrameScore($roll);
                $roll += 2;
            }
        }

        return $score;
    }

    /**
     * @param $roll
     * @return bool
     */
    protected
    function isStrike(
        int $roll
    ): bool
    {
        return $this->rolls[$roll] == self::MAX_POINTS;
    }

    /**
     * @param $roll
     * @return int
     */
    protected
    function getStrikeBonus(
        int $roll
    ): int
    {
        return $this->rolls[$roll + 1] + $this->rolls[$roll + 2];
    }

    /**
     * @param $roll
     * @return bool
     */
    protected
    function isSpare(
        int $roll
    ): bool
    {
        return $this->getDefaultFrameScore($roll) == self::MAX_POINTS;
    }

    /**
     * @param $roll
     * @return int
     */
    protected
    function getDefaultFrameScore(
        int $roll
    ): int
    {
        return $this->rolls[$roll] + $this->rolls[$roll + 1];
    }

    /**
     * @param $roll
     * @return mixed
     */
    protected function getSpareBonus($roll): int
    {
        return $this->rolls[$roll + 2];
    }
}