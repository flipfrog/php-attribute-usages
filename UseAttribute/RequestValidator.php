<?php

namespace flipfrog\AttributeUsages\UseAttribute;

#[\Attribute(\Attribute::TARGET_METHOD)]
class RequestValidator
{
    public function __construct(private int $num_args, private int $num_props){}

    public function validate($params): bool {
        return !isset($this->num_props) ||
            (count($params) == $this->num_args && count($params[0]) === $this->num_props);
    }
}