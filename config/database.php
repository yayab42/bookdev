<?php
$user = "bookdev_user";
$password = "bookdev";
try {
    $pdo = new PDO('mysql:host=localhost;dbname=bookdev', $user, $password);
} catch (PDOException $e) {
    echo 'Échec lors de la connexion : ' . $e->getMessage();
}
