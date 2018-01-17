<?php


namespace IMooc\decorator;


class Canvas
{
    public $data;
    protected $decorators = [];
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
    // 添加装饰器
    public function addDecorate (DrawDecorator $decorator)
    {
        $this->decorators[] = $decorator;
    }
    public function beforeDraw()
    {
        foreach ($this->decorators as $decorator) {
            $decorator->beforeDraw();   // 先进选出
        }
    }
    public function afterDraw()
    {
        $decorators = array_reverse($this->decorators);
        foreach ($decorators as $decorator) {
            $decorator->afterDraw();    // 后进选出
        }
    }

    public function draw()
    {
        $this->beforeDraw();
        foreach ($this->data as $line) {
            foreach ($line as $char) {
                echo $char;
            }
            echo "<br />\n";
        }
        $this->afterDraw();
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
 * 装饰器
 */
//$canvas = new \IMooc\decorator\Canvas();
//$canvas->init();
//$canvas->addDecorate(new \IMooc\decorator\ColorDrawDecorator('green'));
//$canvas->addDecorate(new \IMooc\decorator\SizeDrawDecorator('12px'));
//$canvas->rect(10, 20, 15, 45);
//$canvas->draw();


