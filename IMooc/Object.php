<?php


namespace IMooc;


class Object
{
    protected $array = [];
    public function __set($key, $value)
    {
        echo __METHOD__;
        $this->array[$key] = $value;
    }
    public function __get($key)
    {
        echo __METHOD__;
        return $this->array[$key];
    }

    public function __call($func, $param)
    {
        var_dump($func, $param);
    }

    public static function __callStatic($func, $param)
    {
        var_dump($func, $param);
        return __METHOD__;
    }

    public function __toString()
    {
        return __CLASS__;
    }

    public function __invoke($param)
    {
        var_dump($param);
    }

}