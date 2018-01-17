<?php


namespace App\observer;


class AddUser1
{
    public function update($event)
    {
        var_dump($event);
    }
}