<?php
/**
 * 注册器模式 用来将一些对象注册到全局树上，可以在任何地方直接访问
 */

namespace IMooc\register;


class Register
{
    protected static $objects = [];

    /**
     * 注册到全局树
     * @param $alias string 别名
     * @param $object object 对象
     */
    public static function set($alias, $object)
    {
        self::$objects[$alias] = $object;
    }

    /**
     * @param $alias string 别名
     * @return mixed 映射的对象
     */
    public static function get($alias)
    {
        if (isset(self::$objects[$alias])) {
            return self::$objects[$alias];
        } else {
            return null;
        }
    }
    /**
     * 从全局树上删除
     * @param $alias string 别名
     */
    public static function _unset($alias)
    {
        unset(self::$objects[$alias]);
    }
}