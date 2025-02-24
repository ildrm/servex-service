<?php

require_once __DIR__ . '/../vendor/autoload.php';

$container = require_once __DIR__ . '/../config/services.php';

// Resolve the Order service
$orderService = $container->resolve('order');

// Create a sample order
$orderId = $orderService->createOrder('Ali', ['item1' => 'Book', 'item2' => 'Pen']);

// Retrieve and display the order
$order = $orderService->getOrder($orderId);

echo "Order #$orderId created for " . $order['customer'] . " at " . $order['created_at'] . ".\n";
echo "Items: \n";
print_r($order['items']);

// Display all orders
echo "\nAll Orders:\n";
print_r($orderService->getAllOrders());