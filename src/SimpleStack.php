<?php
/**
 * @author Kifah Abbad
 * Time: 17:07
 */

namespace App;


/**
 * Last in, first out stack  (LIFO)
 * Class SimpleStack
 * @package App
 */
class SimpleStack
{

    private $items;
    private $currentIndex;


    /**
     * SimpleStack constructor.
     */
    public function __construct()
    {
        $this->items = [];
        $this->currentIndex = 0;
    }

    public function push($item)
    {
        if ($item==null) {
            throw new \InvalidArgumentException('null cannot be pushed');
        }

        $this->items[$this->currentIndex] = $item;
        $this->currentIndex++;

    }

    public function pop()
    {
        if ($this->currentIndex == 0) {
            return null;
        }
        $item = $this->items[$this->currentIndex - 1];
        $this->currentIndex--;
        return $item;
    }


}