<?php
session_start();

$host = 'localhost';
$dbname = 'ziraah';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if($pdo) {
        echo "<!-- Database connected successfully -->";
    } else {
        echo "<!-- Database connection failed -->";
    }
} catch(PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
