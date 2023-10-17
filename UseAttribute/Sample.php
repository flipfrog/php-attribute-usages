<?php

namespace flipfrog\AttributeUsages\UseAttribute;

class Sample
{
    #[RequestValidator(len: 2)]
    public function method1($params): void {
        echo "Succeeded method1 call\n";
    }

    #[RequestValidator(len: 5)]
    public function method2($params): void {
        echo "Succeeded method2 call\n";
    }

    public function method3($params): void {
        echo "Succeeded method3 call\n";
    }
}
