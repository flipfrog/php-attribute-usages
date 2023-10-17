<?php

require_once 'UseAttribute/Container.php';
require_once 'UseAttribute/Sample.php';

// Somehow be able to trace by IDEs
/** @var UseAttribute\Sample $container */
$container = new UseAttribute\Container(new UseAttribute\Sample());

$container->method1([]);

$container->method2([1, 3, 5, 7, 11]);

$container->method3([1, 3, 5, 7, 11]);
