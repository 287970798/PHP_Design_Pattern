<?php


namespace IMooc;


class Controller
{
    protected $data;
    protected $controllerName;
    protected $viewName;
    protected $templateDir;

    public function __construct($controllerName, $viewName)
    {
        $this->controllerName = $controllerName;
        $this->viewName = $viewName;
        $this->templateDir = BASEDIR . DS . 'templates';
    }

    public function assign($key, $value)
    {
        $this->data[$key] = $value;
    }

    public function display($file = '')
    {
        if (empty($file)) {
            $file = strtolower($this->controllerName) . DS . $this->viewName . '.php';
        }
        $path = $this->templateDir . DS . $file;
        extract($this->data);
        include $path;
    }
}