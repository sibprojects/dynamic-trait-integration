<?php

namespace Delegation;

use Samples\StatusInterface;

class Order
{
    protected StatusInterface $statusProcessor;

    public function __construct(
        protected object $statusProcessor
    ) {
    }

    public function applyStatus(string $status): void
    {
        $this->statusProcessor->setStatus("Apply status: " . $status);

        // more logic here...
    }
}
