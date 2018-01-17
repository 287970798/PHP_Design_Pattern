<?php
/**
 * 策略模式
 */

namespace IMooc\strategy;


class MaleUserStrategy implements UserStrategy
{
    public function showAd()
    {
        echo "iphone";
    }
    public function showCategory()
    {
        echo "electronic products";
    }
}