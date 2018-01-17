<?php
/**
 * 自动加载配置类
 * ArrayAccess 可能让一个对象可以使用数组的使用方式
 */

namespace IMooc;


class Config implements \ArrayAccess
{
    protected $path;
    protected $configs = [];

    public function __construct($path)
    {
        $this->path = $path;
    }

    public function offsetGet($offset)
    {
        if (empty($this->configs[$offset])) {
            $filePath = $this->path . DS . $offset . '.php';
            $config = require $filePath;
            $this->configs[$offset] = $config;
        }
        return $this->configs[$offset];
    }

    public function offsetSet($offset, $value)
    {
        throw new \Exception("cannot write config file.");
    }
    public function offsetExists($offset)
    {
        return isset($this->configs[$offset]);
    }
    public function offsetUnset($offset)
    {
        unset($this->configs[$offset]);
    }
}

/**
 * 自动加载配置类
 */
//$config = new \IMooc\Config(BASEDIR . DS . 'configs');
//var_dump($config['controller']);