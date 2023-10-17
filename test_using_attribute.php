<?php

namespace flipfrog\AttributeUsages\UseAttribute;

require_once 'vendor/autoload.php';

// Somehow be able to trace by IDEs
/** @var Sample $container */
$container = new Container(new Sample());

$container->method1([]);

$container->method2([1, 3, 5, 7, 11]);

$container->method3([1, 3, 5, 7, 11]);
