<?php
/**
 * 工厂模式
 *
 * 设计相关实例的创建事件
 * 注册器中查找是否存在相关实例
 * 没有则创建实例并注册到注册树上
 * 并返回该实例
 */

namespace IMooc\factory;


use IMooc\Database;
use IMooc\orm\User;
use IMooc\register\Register;

class Factory
{
    static protected $proxy;
    public static function createDataBase()
    {
        $db = Database::getInstance();
        // 映射到全局树上
        Register::set('db1', $db);
        return $db;
    }

    public static function getUser($id)
    {
        $key = 'user_' . $id;
        // 全局树上获取索引为key的对象
        $user = Register::get($key);
        // 如果不存在，则实例化user对象，并注册到全局树
        if (!$user) {
            $user = new User($id);
            Register::set($key, $user);
        }
        // 返回user对象
        return $user;
    }

    /**
     * 获取模型实例
     * @param $name
     * @return mixed
     */
    public static function getModel($name)
    {
        $key = 'app_model_' . $name;
        $model = Register::get($key);
        if (!$model) {
            $class = 'App\\model\\' . ucwords($name);
            $model = new $class;
            Register::set($key, $model);
        }
        return $model;
    }

    public static function getDatabase ($id = 'proxy') {
        if ($id == 'proxy') {
            if (!self::$proxy) {
                self::$proxy = new Database\Proxy();
            }
            return self::$proxy;
        }
        $key = 'database_' . $id;
        if ($id == 'slave') {
            $slaves = \IMooc\Application::getInstance()->config['database']['slave'];
            $db_conf = $slaves[array_rand($slaves)];
        } else {
            $db_conf = \IMooc\Application::getInstance()->config['database'][$id];
        }
        $db = Register::get($key);
        if (!$db) {
            $db = new Database\MySQLi();
            $db->connect($db_conf['host'], $db_conf['user'], $db_conf['password'], $db_conf['dbname']);
            Register::set($key, $db);
        }
        return $db;
    }
}