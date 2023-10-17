<?php

namespace flipfrog\AttributeUsages\UseTrait;

require_once 'vendor/autoload.php';

$sample = new Sample();

$sample->method1([10, 10]); // cannot trace by IDEs

$sample->method2([1, 3, 5]);
