<?php
/**
 * 实现适配器接口
 */

namespace IMooc\Database;


class MySQL implements IDatabase
{
    protected $conn;

    public function connect($host, $user, $password, $dbName)
    {
        try {
            $conn = @mysql_connect($host, $user, $password) or die('database connect fail');
            mysql_select_db($dbName, $conn);
            $this->conn = $conn;
        } catch (\Exception $e) {
            throw $e;
        }
    }

    public function query($sql)
    {
        $res = mysql_query($sql, $this->conn);
        return $res;
    }

    public function close()
    {
        mysql_close($this->conn);
    }
}