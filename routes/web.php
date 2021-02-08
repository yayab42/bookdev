<?php
$routes = [

    '404' => 'resources/views/errors/404.php',
    'product' => 'app/controllers/productController.php',
    'home' => 'app/controllers/homeController.php',
    'cart' => 'app/controllers/cartController.php'

];
if (filter_has_var(INPUT_GET, 'action')) {
    $action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);
    if (isset($routes[$action])) {
        $route = $routes[$action];
    } else {
        http_response_code(404);
        $route = $routes['404'];
    }
} else {
    $route = $routes['home'];
}
require $route;
