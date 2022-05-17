<?php

namespace Tringuyen\Unlock\DesignPattern\Facade;

class Plate
{
    /**
     * @return void
     */
    public function  PutIn(){
        echo "Putting food in plate... <br>";
    }

    /**
     * @return void
     */
    public function serve()
    {
        echo "Serving... <br>";
    }
}
