<?php

namespace Delegation;

use Samples\StatusProcessor;

$statusProcessor = new StatusProcessor();
$user = new Order($statusProcessor);
$user->applyStatus('new');
