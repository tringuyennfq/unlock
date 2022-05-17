<?php

namespace Tringuyen\Unlock\DesignPattern\Adapter;

interface EbookInterface
{
    public function unlock();

    public function pressNext();

    public function getPage();
}
