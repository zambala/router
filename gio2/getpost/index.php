<?php

use classes\Router;

require_once __DIR__.'/./vendor/autoload.php';

$router = new classes\Router();

$router
   ->register('/', [classes\Home::class, 'index'])
   ->register('/invoices', [classes\Invoice::class, 'index'])
   ->register('/invoices/create', [classes\Invoice::class, 'create']);

echo $router->resolve($_SERVER['REQUEST_URI']);