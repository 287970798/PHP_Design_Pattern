<?php
/**
 * 代理模式
 */

namespace IMooc\proxy;


use IMooc\factory\Factory;

class Proxy implements IUserProxy
{
    public function getUserName($id)
    {
        $db = Factory::getDatabase('slave');
        $result = $db->query("SELECT name FROM user WHERE id = $id LIMIT 1");
        return $result;
    }
    public function setUserName($id, $name)
    {
        $db = Factory::getDatabase('master');
        $sql = "UPDATE user SET name = '$name' WHERE id = $id LIMIT 1";
        return $db->query($sql);
    }
}

/**
 * 代理模式
 */
//$proxy = new \IMooc\proxy\Proxy();
//var_dump($proxy->getUserName(1)->fetch_assoc());
//var_dump($proxy->setUserName(1, 'jack'));