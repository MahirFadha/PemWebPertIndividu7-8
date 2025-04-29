<?php
$host = "localhost";
$username = "postgres";
$port = 5432;
$dbName = "postgres";
$password = "mahirfatha"; // Pastikan ini password yang benar

try {
    $pdo = new PDO(
        "pgsql:host=$host;port=$port;dbname=$dbName",
        $username,
        $password
    );
    
    // Set atribut PDO
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Koneksi gagal: " . $e->getMessage());
}
?>