<?php


namespace App\decorator;


use IMooc\Controller;

class Template
{
    protected $controller;

    public function beforeRequest(Controller $controller)
    {
        $this->controller = $controller;
    }

    public function afterRequest($returnValue)
    {
        foreach ($returnValue as $k => $v) {
            $this->controller->assign($k, $v);
        }
        $this->controller->display();
    }
}