<?php
/**
 * @author Kifah Abbad
 * Time: 16:29
 */

namespace App;


/**
 * a class that simply represents a chess board
 * Class ChessBoard
 * @package App
 */
class ChessBoard
{


    const WHITE = 'white---';
    const BLACK = 'black---';


    public static function build(): array
    {

        $returnArray = [];

        for ($line = 0; $line <= 7; $line++) {
            for ($block = 0; $block <= 7; $block++) {
                if (($line + $block) % 2 == 0) {
                    $returnArray[$line][] = self::BLACK;
                } else {
                    $returnArray[$line][] = self::WHITE;
                }
            }

        }

        return $returnArray;

    }

}