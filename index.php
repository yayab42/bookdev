<?php
// Add Bootstrap
require_once 'bootstrap/app.php';

if (filter_has_var(INPUT_GET,'action')) {
    $action = filter_input(INPUT_GET,'action',FILTER_SANITIZE_STRING);
    if(isset($routes[$action])){
        $route = $routes[$action];
    }else{
        $route = $routes['404'];
    }
}else{
    $route = $routes['home'];
}
require $route;