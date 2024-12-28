<?php

namespace Samples;

trait StatusTrait
{
    public function setStatus(string $status): void
    {
        echo "Current status: " . $status;
    }
}
