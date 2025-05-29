<?php
include 'koneksi.php'; // Include koneksi database
$data = array();

$tables = ['node1', 'node2', 'node3', 'node4'];

foreach ($tables as $table) {
    // Query untuk mengambil jam dan menit (tanpa tanggal)
    $query = "SELECT id,    DATE_FORMAT(timestamp, '%H:%i') AS waktu, 
                     (PZEM1_E + PZEM2_E + PZEM3_E) AS kwh 
              FROM $table 
              ORDER BY timestamp DESC 
              LIMIT 20"; // Ambil 10 data terbaru
    $result = $conn->query($query);
    $tableData = array();

    while ($row = $result->fetch_assoc()) {
        $tableData[] = $row;
    }

    $data[$table] = $tableData;
}

echo json_encode($data);
?>