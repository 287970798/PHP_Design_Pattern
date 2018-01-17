<?php
/**
 * 代理接口
 */

namespace IMooc\proxy;


interface IUserProxy
{
    public function getUserName($id);
    public function setUserName($id, $name);
}