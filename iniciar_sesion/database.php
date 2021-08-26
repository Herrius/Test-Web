<?php

$server = 'localhost';
$username = 'test';
$password = 'test';
$database = 'test';

try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}

?>
