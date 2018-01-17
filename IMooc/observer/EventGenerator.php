<?php


namespace IMooc\observer;


abstract class EventGenerator
{
    private $observers = [];
    public function addObserver (Observer $observer)
    {
        $this->observers[] = $observer;
    }
    public function notify ()
    {
        foreach ($this->observers as $observer) {
            $observer->update();
        }
    }
}