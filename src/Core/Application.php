<?php

namespace Tringuyen\Unlock\Core;

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

    public function __construct()
    {
        $this->request = new Request();
        $this->router = new Router($this->request);
    }
    public function run()
    {
        echo $this->router->resolve();
    }
}
