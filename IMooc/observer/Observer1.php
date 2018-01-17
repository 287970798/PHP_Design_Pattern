<?php
/**
 * 观察者模式
 * 观察者
 */

namespace IMooc\observer;


class Observer1 implements Observer 
{
    public function update($event_info = null)
    {
        echo 'Business Logic 1';
    }
}