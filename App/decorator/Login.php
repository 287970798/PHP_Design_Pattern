<?php


namespace App\decorator;


class Login
{
    public function beforeRequest($controller)
    {
        session_start();
        if (empty($_SESSION['isLogin'])) {
            header('location:/login/index/');
            exit;
        }
    }

    public function afterRequest($returnValue)
    {

    }
}