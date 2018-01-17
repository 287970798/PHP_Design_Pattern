<?php
/**
 * 观察者模式
 * 观察者接口
 */

namespace IMooc\observer;


interface Observer
{
    public function update($event_info = null);
}