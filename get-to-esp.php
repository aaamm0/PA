<?php
header('Content-Type: application/json');
include 'koneksi.php'; // Include koneksi database


function getLatestRow($conn, $table) {
    $sql = "SELECT * FROM $table ORDER BY id DESC LIMIT 1";
    $result = $conn->query($sql);
    return $result->fetch_assoc();
}

$response = [
    "node1" => getLatestRow($conn, "node1"),
    "node2" => getLatestRow($conn, "node2"),
    "node3" => getLatestRow($conn, "node3"),
    "node4" => getLatestRow($conn, "node4"),
    "do_sensor" => getLatestRow($conn, "do_sensor")
];

echo json_encode($response);
$conn->close();
?>
