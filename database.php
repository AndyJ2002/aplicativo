<?php

$server = 'localhost:3306';
$username = 'root';
$password = '';
$database = 'php_acceso_database';

try {
    $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
    die('conexion fallida ' . $e->getMessage());
}

?>