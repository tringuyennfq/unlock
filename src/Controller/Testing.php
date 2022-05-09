<?php

namespace Tringuyen\Unlock\Controller;

class TongHieu
{
    /**
     * @param $a
     * @param $b
     * @return mixed
     */
    public function tong($a, $b): mixed
    {
        return $a + $b;
    }

    /**
     * @param $a
     * @param $b
     * @return mixed
     */
    public function hieu($a, $b): mixed
    {
        return $a - $b;
    }
}
trait TichThuong
{
    /**
     * @param $a
     * @param $b
     * @return float|int
     */
    public function tich($a, $b): float|int
    {
        return $a * $b;
    }
    public function thuong($a, $b): float|int|null
    {
        if ($b!=0) {
            return $a / $b;
        } else {
            return null;
        }
    }
}
