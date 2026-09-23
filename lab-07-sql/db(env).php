<?php

$host = getenv("DB_HOST");
$port = getenv("DB_PORT") ?: "3306";
$dbname = getenv("DB_NAME");
$username = getenv("DB_USERNAME");
$password = getenv("DB_PASSWORD");

try {
    $pdo = new PDO(
        "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8mb4",
        $username,
        $password,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]
    );
} catch (PDOException $error) {
    die("Database connection failed: " . $error->getMessage());
}
?>