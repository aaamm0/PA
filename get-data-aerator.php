
<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "pa"; // nama database kamu

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die(json_encode(['error' => 'Koneksi gagal']));
}

// Query Aerator1 dari node1
$sql1 = "SELECT Relay FROM node1 ORDER BY id DESC LIMIT 1";
$result1 = $conn->query($sql1);

$aerator1 = 'No data';
if ($result1 && $result1->num_rows > 0) {
    $row1 = $result1->fetch_assoc();
    $aerator1 = $row1['Relay'];
}

// Query Aerator2 dari node2
$sql2 = "SELECT Relay FROM node2 ORDER BY id DESC LIMIT 1";
$result2 = $conn->query($sql2);

$aerator2 = 'No data';
if ($result2 && $result2->num_rows > 0) {
    $row2 = $result2->fetch_assoc();
    $aerator2 = $row2['Relay'];
}

// Query Aerator3 dari node3
$sql3 = "SELECT Relay FROM node3 ORDER BY id DESC LIMIT 1";
$result3 = $conn->query($sql3);

$aerator3 = 'No data';
if ($result3 && $result3->num_rows > 0) {
    $row3 = $result3->fetch_assoc();
    $aerator3 = $row3['Relay'];
}

// Query Aerator4 dari node4
$sql4 = "SELECT Relay FROM node4 ORDER BY id DESC LIMIT 1";
$result4 = $conn->query($sql4);

$aerator4 = 'No data';
if ($result4 && $result4->num_rows > 0) {
    $row4 = $result4->fetch_assoc();
    $aerator4 = $row4['Relay'];
}
// Kirim hasilnya dalam format JSON
echo json_encode([
    'aerator1' => $aerator1,
    'aerator2' => $aerator2,
    'aerator3' => $aerator3,
    'aerator4' => $aerator4,
]);

$conn->close();
?>
