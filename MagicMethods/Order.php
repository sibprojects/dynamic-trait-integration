<?php

namespace MagicMethods;

use Samples\StatusInterface;

class Order
{
    protected StatusInterface $statusProcessor;

    public function __construct(
        protected object $statusProcessor
    ) {
    }

    public function __call(string $method, array $args)
    {
        if (method_exists($this->statusProcessor, $method)) {
            return call_user_func_array([$this->statusProcessor, $method], $args);
        }
        
        throw new BadMethodCallException("Method {$method} does not exist.");
    }
}
