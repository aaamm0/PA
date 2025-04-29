<?php
$host = "localhost";  // Sesuaikan dengan host database
$user = "aam";       // Sesuaikan dengan username database
$pass = "aam123";           // Sesuaikan dengan password database
$db   = "aam_autorator"; // Sesuaikan dengan nama database

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
