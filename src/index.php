<?php

$host = 'db'; // service name from docker-compose.yml
$user = 'test';
$password = '123456';
$db = 'test_db';

// PDO
$conn = new PDO("mysql:host=$host;dbname=$db", $user, $password);
$stmt = $conn->prepare('SELECT * FROM users');
$stmt->execute();
$data = $stmt->fetchAll();
print_r($data);

// MYSQLI
$conn = new mysqli($host, $user, $password, $db);
if($conn->connect_error) {
  echo 'Error'. $conn->connect_error;
  exit;
}
$res = $conn->query("SELECT * FROM users");
$data = $res->fetch_all();
print_r($data);