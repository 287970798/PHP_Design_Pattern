<?php


namespace IMooc\prototype;


class Canvas
{
    public $data;
    public function init($width = 100, $height = 40)
    {
        $data = [];
        for ($i = 0; $i < $height; $i ++) {
            for ($j = 0; $j < $width; $j ++) {
                $data[$i][$j] = '一';
            }
        }
        $this->data = $data;
    }

    public function draw()
    {
        foreach ($this->data as $line) {
            foreach ($line as $char) {
                echo $char;
            }
            echo "<br />\n";
        }
    }

    public function rect($a1, $a2, $b1, $b2)
    {
        foreach ($this->data as $k1 => $line) {
            if ($k1 < $a1 || $k1 > $a2) continue;
            foreach ($line as $k2 => $char) {
                if ($k2 < $b1 || $k2 > $b2) continue;
                $this->data[$k1][$k2] = '四';
            }
        }
    }
}

/**
 * 原型模式
 */
//$prototype = new \IMooc\prototype\Canvas();
//$prototype->init();
//
//$canvas1 = clone $prototype;
//$canvas1->rect(5, 30, 10, 80);
//$canvas1->draw();
//
//$canvas2 = clone $prototype;
//$canvas2->rect(10, 12, 10, 15);
//$canvas2->draw();