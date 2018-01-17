<?php
/**
 * 策略模式
 */

namespace IMooc\strategy;


class FemaleUserStrategy implements UserStrategy
{
    public function showAd()
    {
        echo "2014 latest female clothes";
    }
    public function showCategory()
    {
        echo "female clothes";
    }
}