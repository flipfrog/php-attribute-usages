<?php

namespace flipfrog\AttributeUsages\UseAttribute;

class Container
{
    private \ReflectionClass $reflection;

    public function __construct(private object $obj) {
        $this->reflection = new \ReflectionObject($this->obj);
    }

    public function __call(string $name, array $arguments) {
        $valid = false;
        try {
            $method = $this->reflection->getMethod($name);
            /** @var \ReflectionAttribute[] $attrs */
            $attrs = array_filter($method->getAttributes(), function ($attr) {
                return $attr->getName() === RequestValidator::class;
            });
            if(count($attrs) > 0) {
                /** @var RequestValidator $validator */
                $validator = reset($attrs)->newInstance();
                $valid = $validator->validate($arguments);
            } else {
                $valid = true;
            }
        } catch (\ReflectionException $e) {
            echo "{$e->getMessage()}\n";
        }

        if ($valid) {
            $this->obj->{$name}(...$arguments);
        } else {
            $class_name = get_class($this->obj);
            echo "Invalid parameter for $class_name:$name()\n";
        }
    }
}
