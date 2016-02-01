<?php
/**
 * @author Kifah Abbad
 * Time: 17:16
 */

namespace App;


class LineDrawer
{

    public static function draw()
    {
        for ($line = 1; $line <= 10; $line++) {
            if ($line <= 5) {
                for ($star = 1; $star <= $line; $star++) {
                    echo "*";
                }
            } else {
                for ($star = 4; $star >= $line - 5; $star--) {
                    echo "*";
                }
            }
            echo "\r\n";
        }

    }

}