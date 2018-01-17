<?php


namespace IMooc\observer;


class Observer2 implements Observer 
{
    public function update($event_info = null)
    {
        echo 'Business Logic 2';
    }
}