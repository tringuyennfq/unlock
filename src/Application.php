<?php
namespace TriNguyen\Unlock;

use TriNguyen\Unlock\Calculate\Calculate;
use TriNguyen\Unlock\Controller\HomeController;
use TriNguyen\Unlock\Controller\NotFoundController;

class Application
{
    protected HomeController $homeController;
    protected NotFoundController $notFoundController;
    protected string $requestMethod;
    protected string $requestUri;
    public function __construct(HomeController $homeController, NotFoundController $notFoundController)
    {
        $this->homeController = $homeController;
        $this->notFoundController = $notFoundController;
        $this->requestMethod = $_SERVER['REQUEST_METHOD'];
        $this->requestUri = $_SERVER['REQUEST_URI'];
    }

    public function start(): void
    {
        $request = $this->requestMethod . ':' . $this->requestUri;
        switch ($request) {
            case 'GET:/':
                $response = $this -> homeController ->indexAction();
                break;
            default:
                $response = $this ->notFoundController ->notFoundAction();
        }
        echo $response."<br>" ;
    }
    public function cal($a, $b)
    {
        $test = new Calculate();
        return $test->plus($a, $b);
    }
}
