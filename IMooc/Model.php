<?php


namespace IMooc;


class Model
{
    protected $observers = [];

    public function __construct()
    {
        $name = strtolower(str_replace('App\\model\\', '', get_class($this)));
        $observers = Application::getInstance()->config['model'][$name]['observer'];
        if (!empty($observers)) {
            foreach ($observers as $class) {
                $this->observers[] = new $class;
            }
        }
    }

    public function notify($event)
    {
        foreach ($this->observers as $observer) {
            $observer->update($event);
        }
    }
}