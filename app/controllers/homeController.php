<?php
require 'app/persistences/product.php';
$products = getAllProducts($pdo);
require 'resources/views/home.php';