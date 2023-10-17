<?php

namespace flipfrog\AttributeUsages\UseTrait;

trait InterceptionTrait {
    public function __call($method, $arguments) {
        if(method_exists($this, $method)) {
            if($this->validate($method, $arguments)){
                return call_user_func_array(array($this, $method), $arguments);
            } else {
                $class_name = get_class($this);
                echo "Invalid parameter for $class_name:$method()\n";
                return false;
            }
        }
        throw new \Exception('No such method' . $method);
    }
    private function validate($method, $arguments): bool {
        $required_param_counts = [
            'method1' => 1,
            'method2' => 3,
        ];
        return empty($required_param_counts[$method]) ||
            (count($arguments) && is_array($arguments[0]) &&
                count($arguments[0]) === $required_param_counts[$method]);
    }
}
