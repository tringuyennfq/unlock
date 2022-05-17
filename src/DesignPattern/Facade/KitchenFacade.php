<?php

namespace Tringuyen\Unlock\DesignPattern\Facade;

class KitchenFacade
{
    public Stove $stove;
    public CuttingBoard $cuttingboard;
    public Plate   $plate;

    public function __construct()
    {
        $this->stove = new Stove();
        $this->cuttingboard = new CuttingBoard();
        $this->plate = new Plate();
    }

    /**
     * @return void
     */
    public function MakeOmlette(): void
    {
        $this->cuttingboard->Cut("onions");
        $this->cuttingboard->Cut("scallions");
        $this->stove->Add("eggs");
        $this->stove->Cook();
        $this->stove->Add("onions");
        $this->stove->Add("scallions");
        $this->stove->TurnOff();
        $this->plate->PutIn();
        $this->plate->serve();
    }
}
