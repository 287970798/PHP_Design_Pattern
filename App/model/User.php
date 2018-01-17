<?php
/*
 * 创建观察者

    在模型配置中配置观察者信息

    模型 实例化读取模型配置获取观察者数组
    模型实例执行事件，并通知配置中的观察者
    观察者做出反应
 */

namespace App\model;


use IMooc\factory\Factory;
use IMooc\Model;

class User extends Model
{
    public function getInfo($id)
    {
        Factory::getDatabase('slave')->query('SELECT * FROM user WHERE id = $id');
    }

    public function create($user)
    {
        $userId = 1;
        $this->notify($user);
        return $userId;
    }
}