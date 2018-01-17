<?php


namespace IMooc;


class Loader
{
    public static function autoload($class)
    {
        include BASEDIR . DS . str_replace('\\', DS, $class) . '.php';
    }
}