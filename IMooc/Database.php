<?php
/**
 * 单例模式 public static function getInstance
 * 链式操作 return $this
 */

namespace IMooc;


use IMooc\Database\MySQL;

class Database
{
    protected static $db;

    /**
     * 私有化construct方法
     * Database constructor.
     */
    private function __construct()
    {

    }

    /**
     * 获取实例
     * @return Database
     */
    public static function getInstance()
    {
        if (self::$db) {
            return self::$db;
        }
        self::$db = new self();
        return self::$db;
    }

    public function where($where)
    {
        return $this;
    }
    public function order($order)
    {
        return $this;
    }
    public function limit($limit)
    {
        return $this;
    }

    public function query($sql)
    {
        echo "SQL: $sql";
    }
}