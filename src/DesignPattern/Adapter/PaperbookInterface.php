<?php

namespace Tringuyen\Unlock\DesignPattern\Adapter;

interface PaperbookInterface
{
    public function open();

    public function turnPage();

    public function getPage();

}
