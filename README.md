Servex Service
==============

**Servex Service** is a lightweight test service designed specifically for the [Servex PHP Framework](https://github.com/ildrm/servex-php). This project serves as a practical example and starting point for developers looking to create and integrate custom services within the Servex ecosystem.

Purpose
-------

The primary goal of `servex-service` is to demonstrate how to build and register a service using the Servex PHP Framework's dependency injection container. It provides a simple `Order` service as a proof of concept, showcasing basic operations like creating and retrieving orders. Developers can use this as a template to design and implement their own services tailored to specific needs.

Features
--------

*   Simple `Order` service implementation for managing orders.
*   Integration with the Servex PHP Framework's `Container` class.
*   Easy-to-understand structure for rapid development and customization.
*   In-memory storage for demonstration purposes (extendable to databases).

Installation
------------

To get started with `servex-service`, follow these steps:

1.  **Clone the Repository**  
    Clone this project to your local machine:
    
        git clone https://github.com/ildrm/servex-service.git
    
2.  **Install Dependencies**  
    Ensure you have Composer installed, then run:
    
        composer install
    
    This will install the required `ildrm/servex` package.
3.  **Run the Project**  
    Use PHP's built-in server to test the service:
    
        php -S localhost:8000 -t public/
    
    Open your browser and visit [http://localhost:8000](http://localhost:8000) to see the output.

Project Structure
-----------------

    servex-service/
    ├── config/
    │   └── services.php      # Service registration
    ├── src/
    │   └── Services/
    │       └── Order.php     # Order service implementation
    ├── public/
    │   └── index.php         # Entry point
    ├── vendor/               # Composer dependencies
    └── composer.json         # Project configuration

Usage
-----

The `Order` service is registered in the `Container` and can be resolved to perform basic operations. Here's an example from `public/index.php`:

    <?php
    
    require_once __DIR__ . '/../vendor/autoload.php';
    $container = require_once __DIR__ . '/../config/services.php';
    
    $orderService = $container->resolve('order');
    $orderId = $orderService->createOrder('Ali', ['item1' => 'Book', 'item2' => 'Pen']);
    $order = $orderService->getOrder($orderId);
    
    echo "Order #$orderId created for " . $order['customer'] . ".\n";
    print_r($order['items']);
    

Extending the Service
---------------------

This project is intentionally minimal to serve as a foundation. To create your own services:

1.  Create a new class in the `src/Services/` directory.
2.  Define your service logic (e.g., database interactions, API calls).
3.  Register it in `config/services.php` using `$container->bind()`.
4.  Use it in your application via `$container->resolve()`.

For example, you could extend `Order` to connect to a database or add more complex business logic.

Requirements
------------

*   PHP 7.4 or higher
*   Composer
*   [ildrm/servex](https://github.com/ildrm/servex-php) (installed via Composer)

License
-------

This project is open-source and distributed under the MIT License. See the `LICENSE` file (if provided) for details.

Contributing
------------

Contributions are welcome! Feel free to fork the repository, submit pull requests, or open issues on [GitHub](https://github.com/ildrm/servex-service).

Developed by [ildrm](https://github.com/ildrm) | Last updated: February 24, 2025