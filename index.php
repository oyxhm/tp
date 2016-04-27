<?php
require 'vendor/autoload.php';

$log = new Monolog\Logger("name");
$log->pushHandler(new Monolog\Handler\StreamHandler('app.log' , Monolog\Logger::DEBUG));

// $log->addWarning('Foo');
$log->addDebug('debug');
$log->addInfo('success');
echo "mother fucker !!!";
?>
