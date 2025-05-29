<?php
// Koneksi ke database
include 'koneksi.php'; // Ganti dengan file koneksi database Anda
// Fungsi untuk ambil data dari satu tabel
function getTableData($mysqli, $tableName) {
    $data = [];
    $query = "SELECT * FROM $tableName ORDER BY timestamp DESC LIMIT 10"; // ambil 10 data terbaru
    $result = $mysqli->query($query);

    if ($result) {
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    }

    return $data;
}

// Ambil data dari semua tabel
$response = [
    'node1' => getTableData($mysqli, 'node1'),
    'node2' => getTableData($mysqli, 'node2'),
    'node3' => getTableData($mysqli, 'node3'),
    'node4' => getTableData($mysqli, 'node4')
];

// Kembalikan dalam format JSON
header('Content-Type: application/json');
echo json_encode($response);

// Tutup koneksi
$mysqli->close();
?>
