<?php
$host = "127.0.0.1";
$db = "projektekweb";
$user = "root";
$pass = "";
$charset = "utf8mb4"; //"utf8mb4"

$dsn = "mysql:host=$host:3308;dbname=$db;charset=$charset;";

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // Data dikembalikan dalam bentuk object bukan array
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $conn = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    echo "Error Connect to Database Msg: ".$e->getMessage();
}

// session_start();
?>