<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "pa"; // nama database kamu

$conn = new mysqli($host, $user, $pass, $db);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Query ambil data
$sql = "SELECT * FROM do_sensor ORDER BY timestamp DESC LIMIT 1"; // ambil data terbaru
$result = $conn->query($sql);

$data = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

// Keluarkan data dalam format JSON
echo json_encode($data);

// Tutup koneksi
$conn->close();
?>
