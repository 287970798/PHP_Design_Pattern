<?php
/**
 * 实现适配器接口
 */

namespace IMooc\Database;


class MySQLi implements IDatabase
{
    protected $conn;
    public function connect($host, $user, $password, $dbName)
    {
        $conn = mysqli_connect($host, $user, $password, $dbName);
        $this->conn = $conn;
    }
    public function query($sql)
    {
        $res = mysqli_query($this->conn, $sql);
        return $res;
    }
    public function close()
    {
        mysqli_close($this->conn);
    }
}