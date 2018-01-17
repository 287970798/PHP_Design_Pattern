<?php
/**
 * 适配器模式
 */

namespace IMooc\Database;


interface IDatabase
{
    public function connect ($host, $user, $password, $dbName);
    public function query ($sql);
    public function close ();
}