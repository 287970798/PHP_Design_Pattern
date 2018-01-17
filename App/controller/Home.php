<?php


namespace App\controller;


use IMooc\Controller;
use IMooc\factory\Factory;

class Home extends Controller
{
    public function index()
    {
        $user = Factory::getModel('user');
        $userId = $user->create(['name' => 'tom', 'mobile' => '15966876432']);
        return [
            'title' => 'web site',
            'keywords' => 'php,mysql',
            'description' => 'the best language',
            'userId' => $userId
        ];
    }

    public function index2()
    {
        $db = Factory::getDatabase();
        $db->query("INSERT INTO user (name, mobile, regtime) VALUES ('tom', '15966326587', " . time() . ")");
        $db->query('SELECT * FROM user WHERE id = 3');
        $db->query("DELETE FROM user WHERE id = 4");
        $db->query("UPDATE user SET name = 'Levi2' WHERE id = 5");
        return ['title' => 'Proxy test'];
    }
}