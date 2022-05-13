<?php

namespace Tringuyen\Unlock\Model;

class Board
{
    /**
     * @param Shape[] $a
     * @return float|int
     */
    public function calculateArea(array $a)
    {
        $area = 0;
        foreach ($a as $shape) {
            $area += $shape->area();
        }
        return $area;
    }
}
