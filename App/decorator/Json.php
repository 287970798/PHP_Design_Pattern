<?php


namespace App\decorator;


use IMooc\Controller;

class Json
{
    protected $controller;

    public function beforeRequest(Controller $controller)
    {
        $this->controller = $controller;
    }

    public function afterRequest($returnValue)
    {
        echo json_encode($returnValue);
    }
}