<?php

namespace Tringuyen\Unlock\Core;

use Tringuyen\Unlock\Helper\Dog;

class Application
{
    public Router $router;
    public Request $request;
    public Dog $dog;

    public function __construct()
    {
        $this->dog = new Dog(3, 21);
        $this->request = new Request();
        $this->router = new Router($this->request);
    }
    public function run()
    {
        $this->router->resolve();
        $this->dog->show();
    }
}
