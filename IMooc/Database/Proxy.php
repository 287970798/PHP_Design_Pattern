<?php


namespace IMooc\Database;


use IMooc\factory\Factory;

class Proxy
{
    public function query($sql)
    {
        if (strtolower(substr($sql, 0, 6)) == 'select') {
            echo "读操作：$sql <br>";
            return Factory::getDatabase('slave')->query($sql);
        } else {
            echo "写操作：$sql <br>";
            Factory::getDatabase('master')->query($sql);
        }
    }
}