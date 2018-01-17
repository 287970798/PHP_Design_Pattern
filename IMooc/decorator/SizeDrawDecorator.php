<?php


namespace IMooc\decorator;


class SizeDrawDecorator implements DrawDecorator
{
    protected $size;

    public function __construct($size = '16px')
    {
        $this->size = $size;
    }
    public function beforeDraw()
    {
        echo "<div style='font-size:{$this->size}'>";
    }

    public function afterDraw()
    {
        echo "</div>";
    }
}