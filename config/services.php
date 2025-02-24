<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Container;
use App\Services\Order;

$container = new Container();

// Register the Order service to the container
$container->register('order', Order::class);

return $container;