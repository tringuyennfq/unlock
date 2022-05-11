<?php

namespace Tringuyen\Unlock\Core;

class Request
{
    public function getPath()
    {
        $path = $_SERVER['REQUEST_URI'] ?? '/';
        $position = strpos($path, '?');
        if ($position === false) {
            return $path;
        } else {
            $path = substr($path, 0, $position);
            return $path;
        }
    }
    public function getMethod()
    {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }
}
