<?php
/**
 * 数据对象映射模式 + 工厂模式 + 注册器模式
 */

namespace IMooc\orm;


use IMooc\factory\Factory;

class Page
{
    public function index()
    {
        // 工厂模式
        $user = Factory::getUser(1);
        $user->name = 'Levi';
        $this->test();
    }

    public function test()
    {
        // 工厂模式
        $user = Factory::getUser(1);
        $user->mobile = '18963093261';
    }
}


/**
 * 数据对象映射模式
 */
//$user = new \IMooc\orm\User(1);
//var_dump($user);
//$user->mobile = '15966326431';
//$user->name = 'test3';
//$user->regtime = time();
//echo '<pre>';
//$page = new \IMooc\orm\Page();
//$page->index();