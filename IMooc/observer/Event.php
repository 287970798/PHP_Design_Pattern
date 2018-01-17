<?php


namespace IMooc\observer;


class Event extends EventGenerator
{
    public function trigger()
    {
        echo 'Event';
        $this->notify();
    }

}