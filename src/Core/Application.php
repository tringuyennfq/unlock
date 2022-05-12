<?php

namespace Tringuyen\Unlock\Core;

use Tringuyen\Unlock\Model\Dog;

class Application
{
    /**
     * @var Router
     */
    public Router $router;
    /**
     * @var Request
     */
    public Request $request;
    /**
     * @var Dog
     */
    public Dog $dog;

    public function __construct()
    {
        $this->dog = new Dog(3, 21);
        $this->request = new Request();
        $this->router = new Router($this->request);
    }
    public function run()
    {


    }
}
