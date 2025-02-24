<?php

namespace App\Services;

/**
 * Class Order
 * Manages order-related operations using the servex framework.
 */
class Order
{
    /** @var array $orders In-memory storage for orders */
    private $orders = [];

    /**
     * Creates a new order.
     *
     * @param string $customerName Name of the customer
     * @param array $items Items in the order
     * @return int The generated order ID
     */
    public function createOrder(string $customerName, array $items): int
    {
        $orderId = count($this->orders) + 1;
        $this->orders[$orderId] = [
            'customer' => $customerName,
            'items' => $items,
            'created_at' => date('Y-m-d H:i:s'),
        ];

        return $orderId;
    }

    /**
     * Retrieves an order by its ID.
     *
     * @param int $orderId The order ID
     * @return array|null Order details or null if not found
     */
    public function getOrder(int $orderId): ?array
    {
        return $this->orders[$orderId] ?? null;
    }

    /**
     * Retrieves all orders.
     *
     * @return array List of all orders
     */
    public function getAllOrders(): array
    {
        return $this->orders;
    }
}