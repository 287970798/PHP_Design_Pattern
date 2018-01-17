<?php
/**
 * 实现适配器接口
 */

namespace IMooc\Database;


class PDO implements IDatabase
{
    protected $conn;
    public function connect($host, $user, $password, $dbName)
    {
        $conn = new \PDO("mysql:host=$host;dbname=$dbName", $user, $password);
        $this->conn = $conn;
    }
    public function query($sql)
    {
        return $this->conn->query($sql);
    }
    public function close()
    {
        unset($this->conn);
    }
}