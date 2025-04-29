<?php
include 'koneksi.php';

$sql = "SELECT id, aerator1, aerator2, aerator3, aerator4 FROM sensordata ";
$result = $conn->query($sql);

$data = array();
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

echo json_encode($data);

$conn->close();
?>
