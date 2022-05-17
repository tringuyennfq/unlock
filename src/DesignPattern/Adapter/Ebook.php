<?php

namespace Tringuyen\Unlock\DesignPattern\Adapter;

class Ebook implements EbookInterface
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
    public function unlock(): void
    {
        $this->currentPage = 1;
    }

    /**
     * @return void
     */
    public function pressNext(): void
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
