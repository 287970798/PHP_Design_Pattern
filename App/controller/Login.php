<?php


namespace App\controller;


use IMooc\Controller;

class Login extends Controller
{
    public function index()
    {
        $this->assign('title', 'login page');
        $this->assign('content', 'login page content');
        $this->display();
    }
}