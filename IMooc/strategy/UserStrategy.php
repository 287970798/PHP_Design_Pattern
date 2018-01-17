<?php
/**
 * 策略模式接口
 */

namespace IMooc\strategy;


interface UserStrategy
{
    public function showAd ();
    public function showCategory ();
}