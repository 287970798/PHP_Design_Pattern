<?php
/**
 * http://example.com/home/index
 */

header('content-type:text/html;charset=utf-8');
define('BASEDIR', __DIR__);
define('DS', DIRECTORY_SEPARATOR);
// 自动加载
include BASEDIR . DS . 'IMooc/Loader.php';
spl_autoload_register('\\IMooc\\Loader::autoload');

\IMooc\Application::getInstance()->dispatch();



/**
 * 从配置中生成数据库连接
 */
//$db = \IMooc\factory\Factory::getDatabase();
//var_dump($db);

/**
 * 自动加载配置类
 */
//$config = new \IMooc\Config(BASEDIR . DS . 'configs');
//var_dump($config['database']);

/**
 * 代理模式
 */
//$proxy = new \IMooc\proxy\Proxy();
//var_dump($proxy->getUserName(1)->fetch_assoc());
//var_dump($proxy->setUserName(1, 'jack'));

/**
 * 迭代器模式
 */
//$users = new \IMooc\iterator\AllUser();
//foreach ($users as $user) {
//    var_dump($user);
//    $user->serial_no = mt_rand(100000, 999999);
//}

/**
 * 装饰器
 */
//$canvas = new \IMooc\decorator\Canvas();
//$canvas->init();
//$canvas->addDecorate(new \IMooc\decorator\ColorDrawDecorator('green'));
//$canvas->addDecorate(new \IMooc\decorator\SizeDrawDecorator('12px'));
//$canvas->rect(10, 20, 15, 45);
//$canvas->draw();

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

/**
 * 观察者模式
 */
//$event = new \IMooc\observer\Event();
//$event->addObserver(new \IMooc\observer\Observer1());
//$event->addObserver(new \IMooc\observer\Observer2());
//$event->trigger();

//
//$db = new \IMooc\Database\MySQLi();
//$db->connect('localhost', 'root', 'qing43', 'test');
//$db->close();

/**
 * 数据对象映射模式
 */
//$user = new \IMooc\orm\User(1);
//var_dump($user);
//$user->mobile = '15966326431';
//$user->name = 'test3';
//$user->regtime = time();
//echo '<pre>';
//$page = new \IMooc\orm\Page();
//$page->index();

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