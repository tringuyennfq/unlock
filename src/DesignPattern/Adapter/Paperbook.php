<?php

namespace Tringuyen\Unlock\DesignPattern\Adapter;

class Paperbook implements PaperbookInterface
{
    protected int $currentPage;
    protected int $totalPage;

    public function __construct()
    {
        $this->currentPage = 0;
        $this->totalPage = 100;
    }

    /**
     * @return void
     */
    public function open(): void
    {
        $this->currentPage = 1;
    }

    /**
     * @return void
     */
    public function turnPage(): void
    {
        $this->currentPage++;
    }

    /**
     * @return int
     */
    public function getPage(): int
    {
        return $this->currentPage;
    }
}
