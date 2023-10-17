<?php

namespace UseTrait;

require_once 'UseTrait/InterceptionTrait.php';

class Sample
{
    use InterceptionTrait;

    private function method1(?array $params): void {
        echo "Succeeded method1\n";
    }

    private function method2(?array $params): void {
        echo "Succeeded method2\n";
    }
}