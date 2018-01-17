<?php
namespace IMooc;

class Application
{
    protected static $instance;
    public $config;

    /**
     * Application constructor.
     * 实例化配置对象
     * @param $baseDir
     */
    protected function __construct($baseDir)
    {
        $this->config = new \IMooc\Config($baseDir . DS . 'configs');
    }
    protected function __clone()
    {
        // TODO: Implement __clone() method.
    }

    /**
     * 获取应用实例
     * @param string $baseDir
     * @return Application
     */
    public static function getInstance ($baseDir = BASEDIR)
    {
        if (empty(self::$instance)) {
            self::$instance = new self($baseDir);
        }
        return self::$instance;
    }
    public function dispatch ()
    {
        $uri = $_SERVER['PATH_INFO'];
        list($c, $v) = explode('/', trim($uri, '/'));
        $low_c = strtolower($c);
        $c = ucwords($low_c);
        $class = '\\App\\controller\\' . $c;
        $obj = new $class($c, $v);
        // 获取控制器配置
        $controller_conf = $this->config['controller'];
        // 装饰器
        $decorators = [];
        if (isset($controller_conf[$low_c]['decorator'])) {
            $conf_decorator = $controller_conf[$low_c]['decorator'];
            foreach ($conf_decorator as $class) {
                $decorators[] = new $class;
            }
        }
        // 执行控制器方法之前执行beforeRequest
        foreach ($decorators as $decorator) {
            $decorator->beforeRequest($obj);
        }
        // 控制器方法
        $returnValue = $obj->$v();
        // 之后执行afterRequest
        foreach ($decorators as $decorator) {
            $decorator->afterRequest($returnValue);
        }
    }
}