<?php
require 'vendor/autoload.php';
phpinfo();

$log = new Monolog\Logger("name");

$log->pushHandler(new Monolog\Handler\StreamHandler('app.log' , Monolog\Logger::WARNING));

$log->addWarning('Foo');

$log->pushHandler(new Monolog\Handler\StreamHandler('app.log' , Monolog\Logger::DEBUG));

// $log->addWarning('Foo');
$log->addDebug('debug');
$log->addInfo('success');


$a = 'a:3:{s:4:"cart";a:1:{i:0;a:8:{s:6:"itemid";s:1:"2";s:4:"name";s:43:"云充吧驿站-iphone充电转接头购买";s:4:"desc";s:0:"";s:3:"img";s:130:"https://mmbiz.qlogo.cn/mmbiz/HqwlZN00rIlHZkReD9DmNRHBocMXKfqQTNMv7vN4aqaQZ4UxoOabia3AC7M1zUFxuW99r7k3eUyaJpXB0QBHyFg/0?wx_fmt=jpeg";s:5:"price";d:5;s:6:"amount";i:1;s:6:"flavor";s:0:"";s:8:"subtotal";d:5;}}s:7:"adapter";i:0;s:12:"rent_station";s:12:"华侨城店";}';
print_r(unserialize($a));
?>
