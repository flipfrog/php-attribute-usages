<?php

namespace flipfrog\AttributeUsages\UseAttribute;

#[\Attribute(\Attribute::TARGET_METHOD)]
class RequestValidator
{
    public function __construct(public ?int $len = null){}

    public function validate($params): bool {
        return !isset($this->len) || (count($params) > 0 && count($params[0]) === $this->len);
    }
}