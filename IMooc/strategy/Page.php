<?php
/**
 * 策略模式应用页面
 */

namespace IMooc\strategy;


class Page
{
    protected $strategy;
    public function index ()
    {
        echo 'AD:';
        $this->strategy->showAd();
        echo '<br>';
        echo 'Category:';
        $this->strategy->showCategory();
    }
    public function setStrategy (UserStrategy $strategy)
    {
        $this->strategy = $strategy;
    }
}

/**
 * 策略模式
 */
//if (isset($_GET['female'])) {
//    $strategy = new \IMooc\strategy\FemaleUserStrategy();
//} else {
//    $strategy = new \IMooc\strategy\MaleUserStrategy();
//}
//$page = new \IMooc\strategy\Page();
//$page->setStrategy($strategy);
//$page->index();