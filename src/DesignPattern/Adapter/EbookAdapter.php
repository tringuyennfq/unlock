<?php

namespace Tringuyen\Unlock\DesignPattern\Adapter;

class EbookAdapter implements PaperbookInterface
{
    protected Ebook $ebook;

    public function __construct(Ebook $ebook)
    {
        $this->ebook = $ebook;
    }

    /**
     * @return void
     */
    public function open(): void
    {
        $this->ebook->unlock();
    }

    /**
     * @return void
     */
    public function turnPage(): void
    {
        $this->ebook->pressNext();
    }

    /**
     * @return int
     */
    public function getPage(): int
    {
        return $this->ebook->getPage();
    }
}
